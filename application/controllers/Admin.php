<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
	
	public function showadd()
	{
	   $data['adds'] =  $this->Model->select_all("advertisement");
	    $this->load->view('Admin/showadd',$data);
	}
	
	
	public function addverd()
	{
	    $this->load->view('Admin/addverd');
	}
	
	public function insertadd()
	{
	    $data['add_title'] = $this->input->post('add_title');
	    
	     $dir='./upload/';
         $img=$dir.basename($_FILES['image']['name']);
         move_uploaded_file($_FILES['image']['tmp_name'], $img);
         $data['add_image']= $_FILES['image']['name'];
         
        $add =  $this->Model->insert("advertisement",$data);
        
        if($add)
        {
            redirect('Admin/showadd');
        }
        else
        {
            echo "Error";
        }
         
         
	}


		public function feedback()
		{
			 $data['feedback'] = $this->Model->join('feedback','registration','`feedback.user_id = `registration`.`reg_id`');

			 //print_r($data);

			 	$this->load->view('Admin/feedback',$data);
			 		
		}


	public function user_list()
	{
		$data['user_list'] = $this->Model->select_all('registration');
		$this->load->view('Admin/userlist',$data);
	}
	public function index()
	{
		if(empty($this->session->userdata('admin_email')))
		{
			redirect('Admin/login');
		}
		$this->load->view('Admin/index');
	}

	public function login()
	{
		$this->load->view('Admin/login');

	}



	public function registration()
	{
		$data['reg_name'] = $this->input->post('name');
		$data['reg_email'] = $this->input->post('email');
		$data['reg_password'] = $this->input->post('password');

		$sql = $this->Model->insert("registration",$data);

		if($sql)
		{
			redirect('User');
		}
		else
		{
			echo "Error
			";
		}
	}

	public  function login_data()
	{
       
			$data['admin_email'] = $this->input->post('email');
			$data['admin_password'] = $this->input->post('password');
	
			$login = $this->Model->Select_where("admin",$data);
		
			if(count($login) == 1)
			{
				$sess_array = array();
				foreach ($login as $row) {
					$sess_array = array(

						"admin_id" => $row->admin_id,
					"admin_name" => $row->admin_name,
						"admin_email" => $row->admin_email,
						"admin_password" => $row->admin_password
						);

					$this->session->set_userdata($sess_array);
					
					redirect('Admin');


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
		redirect('Admin/login');
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
