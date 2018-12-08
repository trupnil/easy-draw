<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
		function __construct()
	{
		parent::__construct();
		$this->load->Model('Model');
		
	}
	
	public function get_serach()
	{
	    //echo "oke";
	    
	    $key = $this->input->post('search');
	    
	    $where = array("receiver_id"=>$key);
	    
	     $search_data =   $this->Model->search("message",$where);
	     
	     
	     
	     print_r($search_data);
	    
	    
	}


    public function all_adds()
    {
         $data['add'] = $this->Model->select_all("advertisement");
        
         
        
    }
    
    public function multidelete()
    {
        $chk = $this->input->post('chk');
    //print_r($chk); die();
        $count = count($chk);
        
        for($i=0;$i < $count; $i++)
        {
            $where = array("msg_id" => $chk[$i]);
            $delete =  $this->Model->delete("message",$where);
            
        }
        if($delete)
        {
            echo "deleted";
        }
        else
        {
            echo "Error";
        }
       
        
    }
    
    public function delete_muli()
    {
        $chk = $this->input->post('chk');
    //print_r($chk); die();
        $count = count($chk);
        
        for($i=0;$i < $count; $i++)
        {
            $where = array("msg_id" => $chk[$i]);
            $delete =  $this->Model->delete("message",$where);
            
        }
        if($delete)
        {
            //echo "deleted";
                
                redirect("User/Sentbox");
            
        }
        else
        {
            echo "Error";
        }
       
        
    }
	

	
	
	public function forgot_password($email)
	{
	  
	  $data['email'] = $email;
	  
	  $this->load->view('User/forgot_password',$data);
	
	    
	}
	
	public function reset_password()
	{
	    $email = $this->input->post('email');
	    
	    $reset_password = md5($this->input->post('reset'));
	   
	   // echo $reset_password;
	    
	    $where = array("reg_email" => $email);
	    $data = ["reg_password" => $reset_password];
	    $data =  $this->Model->update("registration",$data,$where);
	    if($data)
	    {
	        echo "done";
	        redirect('User');
	    }
	    else
	    {
	        echo "not done";
	    }
	}
	
		public function email_check()
	{
		//echo "oke";

		$email = $this->input->post('email');
		//echo $email;

		$where = ["reg_email"=>$email];
		$data =  $this->Model->Select_where("registration",$where);

		//print_r($data);

		if(count($data) == 1)
		{
		          $this->load->library('email');
		          
		             $this->email->from('himadripandya273@gmail.com', 'Easy-Draw');
           $this->email->to($email);
           $this->email->cc('kpriti.1999@gmail.com');
          // $this->email->bcc('trupnil92@gmail.com');
           $this->email->subject('Forgot password Link');
           $this->email->message('https://easy-draw.000webhostapp.com/User/forgot_password/'.$email);
           $this->email->send();
		   redirect('User');
		          
		}
		else
		{
			echo "no record";
		}

	}



	public function Send_message()
	{


		

		  $data['receiver_id'] =  $this->input->post('Receiver_id');
		  $data['sender_id'] =  $this->input->post('Sender_id');
		  $data['Subject'] =  $this->input->post('Subject');
		  $data['message'] =  $this->input->post('Message');
		 date_default_timezone_set('Asia/Kolkata');
			$data['date_time'] = date("Y-M-D H:i:s");
			
		 if($_FILES['image']['name'])
	    {
	        $dir='./sent_msg/' ;
         $img=$dir.basename($_FILES['image']['name']);
         move_uploaded_file($_FILES['image']['tmp_name'], $img);
         $data['image']= $_FILES['image']['name'];
	        
	    }

			//print_r($data);

			  	$Send_message =   $this->Model->insert("message",$data);

			  	if($Send_message)
			  	{
			  		$data['msg'] = "Message Successfully Sent";

			  		 redirect('User/sentbox');

			  	}
			  	else
			  	{
			  		$msg =  "Error in send message";
			  					  	
			  	}


	}


	public function p_manage()
	{
	    $reg_id =  $this->session->userdata('reg_id');
	    
	    $data['state'] = $this->Model->select_all('state');
	    $data['city'] = $this->Model->select_all('city');
	   
	    
	    $where = array("reg_id"=>$reg_id);
	    
	   $data['edit_data'] =  $this->Model->select_where("registration",$where);
	   // print_r($data['edit_data']);
	    
		$this->load->view('User/p_manage',$data);
	}
	
	public function edit_profile()
	{
	    $reg_id = $this->input->post('reg_id');
	    $where = array("reg_id"=>$reg_id);
	    $data['reg_name'] = $this->input->post('reg_name');
	    $data['reg_mobile'] = $this->input->post('reg_mobile');
	    $data['reg_email'] = $this->input->post('reg_email');
	    $data['state_fk'] = $this->input->post('state');
	    $data['city_fk'] = $this->input->post('city');
	        
	      //$data['image'] = $this->input->post('old_image');
	  
	    
	    if($_FILES['image']['name'])
	    {
	        $dir='./upload/' ;
         $img=$dir.basename($_FILES['image']['name']);
         move_uploaded_file($_FILES['image']['tmp_name'], $img);
         $data['image']= $_FILES['image']['name'];
	        
	    }
	    else
	    {
	       $data['image'] = $this->input->post('old_image');
	    }
	    
	    
	    
	    
	   $update =   $this->Model->update("registration",$data,$where);
	   
	   if($update)
	   {
	       redirect('User/logout');
	   }
	   else
	   {
	       echo "Error";
	       
	   }
	    
	    
	  
	}

	public function template()
	{
		$this->load->view('User/template');
	}


	public function Sentbox()
	{
		$receiver_id = $this->session->userdata('reg_email');

		$where = ['Sender_id' => $receiver_id];

		$data['sent'] =  $this->Model->Get_message('message',$where);


		
      $this->load->view('User/Sentbox',$data);
     	
	}
	public function message()
	{

		if( empty($this->session->userdata('reg_id')))
		{
			redirect('User');

		}
		$receiver_id = $this->session->userdata('reg_email');

		$where = ['receiver_id' => $receiver_id];

		$data['inbox'] =  $this->Model->Get_message('message',$where);


		
      $this->load->view('User/message',$data);
     }

     public function allmessage()
     {
     	$id =   $this->session->userdata('reg_email');

     	//$where = ["Sender_id" => $id , "Receiver_id" => $id];
     	$receiver_id = ["Receiver_id" => $id];
     	$sender_id = ["Sender_id" => $id]; 

     		$data['all_message'] = $this->db->query("SELECT * FROM `message` WHERE (`receiver_id` AND `sender_id`) = '$id' ORDER BY  `msg_id` DESC")->result();
     	
     	   $this->load->view('User/allmail',$data);

     }


	public function feedback()
	{
			$this->load->view('User/feedback');
		//$data['user_id'] = $this->session->usesrdata('reg_id');
		//$data['msg'] = $this->input->post('msg');
		//$this->Model->insert("feedback",$data);

	}

	public function feedback_insert()
	{
			
		$data['user_id'] = $this->session->userdata('reg_id');
		//echo $data['user_id'];
		$data['feedback_message'] = $this->input->post('msg');
			date_default_timezone_set('Asia/Kolkata');
			$data['created_at'] = date("Y-M-D H:i:s");

		
	 	$ins =  $this->Model->insert("feedback",$data);

		if($ins)
		{
			redirect('User');
		}
		else
		{
			echo "Error";
		}
	}
	public function index()
	{

		$data['state'] = $this->Model->Select_all('state');
		$data['city'] = $this->Model->Select_all('city');
		$data['add'] = $this->Model->select_all("advertisement");
         
		$this->load->view('User/index',$data);
	}
	
	
	public function varified($email)
	{
	    $where = ["reg_email"=>$email];
	    $data = ["varified_at" => '1'];
	    $v =  $this->Model->update("registration",$data,$where);
	    if($v)
	    {
	        redirect('User');
	    }
	    else
	    {
	        echo "Error";
	    }
	    
	    
	}

	public function registration()
	{
		$data['reg_name'] = $this->input->post('name');
		$data['reg_email'] = $this->input->post('email');
		$gg = $this->input->post('email');
		$data['reg_mobile'] = $this->input->post('mobile');
		$data['reg_password'] = md5($this->input->post('password'));
	
		$data['state_fk'] = $this->input->post('state');
		$data['city_fk'] = $this->input->post('city');
		 $dir='./upload/' ;
         $img=$dir.basename($_FILES['img']['name']);
         move_uploaded_file($_FILES['img']['tmp_name'], $img);
         $data['image']= $_FILES['img']['name'];






		$sql = $this->Model->insert("registration",$data);

		if($sql)
		{
		    $this->load->library('email');

           $this->email->from('himadripandya273@gmail.com', 'Easy-Draw');
           $this->email->to($gg);
           $this->email->cc('kpriti.1999@gmail.com');
          // $this->email->bcc('trupnil92@gmail.com');
           $this->email->subject('Varification Link');
           $this->email->message('https://easy-draw.000webhostapp.com/User/varified/'.$gg);
           $this->email->send();
		   redirect('User');
		}
		else
		{
			echo "Error";
		}
	}

	public  function login()
	{
       
			$data['reg_email'] = $this->input->post('email');
			$data['reg_password'] = md5($this->input->post('password'));
			$v = ["varified_at" => '1'];
	//print_r($data);

			$login = $this->Model->login("registration",$data,$v);
		
			if(count($login) == 1)
			{
				$sess_array = array();
				foreach ($login as $row) {
					$sess_array = array(

						"reg_id" => $row->reg_id,
						"reg_name" => $row->reg_name,
						"reg_email" => $row->reg_email,
						"reg_password" => $row->reg_password,
						"reg_image" =>$row->image
						);

					$this->session->set_userdata($sess_array);
						//echo $this->session->userdata('reg_name');
					redirect('User/profile');


				}



			}
			else
			{
				echo "Error:please check email password";
			}

			
		

	}

	public function logout()
	{
		session_destroy();
		redirect('User');
	}

	public function profile()
	{
		if(empty($this->session->userdata('reg_name')))
		{
			redirect('User');
		}
		$this->load->view('User/profile');
	}

}
