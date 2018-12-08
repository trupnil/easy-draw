  <header class="header">
    <div class="container">
      <nav class="navbar navbar-expand-lg">
        <img src="<?php echo base_url(); ?>static\img\ed.png" height="75px" width="100px" />
        <!-- Brand -->
        <a class="navbar-brand" href="#">Easy Draw <span class="theme-bg"></span></a>
        <!-- / -->
       <!--<script src='https://www.google.com/recaptcha/api.js'></script>-->

        <!-- Mobile Toggle -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarshark" aria-controls="navbarshark" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <!-- / -->

        <!-- Top Menu -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarshark">
          <ul class="navbar-nav ml-auto">
            <li><a class="nav-link active" href="<?php echo base_url() ?>User">Home</a></li>
            <li><a class="nav-link" href="">Features</a></li>
            
            <li><a class="nav-link" href="">Contact</a></li>
            <?php if(!empty($this->session->userdata('reg_name'))){
              ?>
               <li><a class="nav-link-btn" href="<?php echo base_url() ?>User/profile"  >Account</a></li>


            <?php  } ?>

            <?php  if(empty($this->session->userdata('reg_image')))
          { ?>
           
            <li><a class="nav-link-btn" data-toggle="modal" data-target="#myModal"  >Registration</a></li>

           <?php } ?>
           
            <?php if(!empty($this->session->userdata('reg_name'))){ ?>
            <li><a class="nav-link-btn" href="<?php echo base_url() ?>User/logout"  >logout</a></li>

              <?php  } 

              else { ?>
                   <li><a class="nav-link-btn" data-toggle="modal" data-target="#myModal2"  >Login</a></li>
          
                  
                <?php  }  ?>
                <?php  if(!empty($this->session->userdata('reg_image')))
          { ?>
              <span>  <img src="<?php echo base_url() ?>upload/<?php echo $this->session->userdata('reg_image'); ?>" style="height: 47px;width: 53px;border-radius: 50%;">  </span>

            <?php   }    ?>
               
        
      
          </ul>
        </div>
        <!-- / -->
      </nav> <!-- Navbar -->     
    </div>
  </header>

    <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">   <h4>Registration Here</h4></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
            <div class="contact-form sm-m-30px-b">
           
              <form action="<?php echo base_url() ?>User/registration" method="POST" enctype="multipart/form-data"
              onsubmit="return validation_reg()" >
                <div class="m-15px-b">
                  <input type="text" class="form-control" placeholder="Name" id="name" name="name" >
                  
                  <span id="Efname"></span>
                </div>
                <div class="m-15px-b">
                  <input type="email" class="form-control" placeholder="Email"  id="email" name="email" >
                  
                   <span id="Eemail"></span>
                </div>
                <div class="m-15px-b">
                  <input type="text" class="form-control" placeholder="Mobile" id="mobile" name="mobile" >
                   <span id="Emobile"></span>
                </div>
                <div class="m-15px-b"> 
                    <input type="password" class="form-control" placeholder="Password" id="pwd" name="password" >
                     <span id="Epwd"></span>
                </div>
                <div class="m-15px-b">
                    <input type="file" class="form-control"  name="img" placeholder="choose profile picture">
                </div>
                <span class="m-15px-b">
                
                  <label>City:</label>
                <select name="city" id="city" >
                  <option value="-1"><-- select city --></option>
                  <?php  foreach ($city as $city) {
                    ?>

                  <option value="<?php echo $city->city_id; ?>"><?php echo $city->city_name; ?></option>
                 
                  <?php }  ?>
                 
                </select>
                <span id="Ecity"></span>
                

               
                
                  <label>State:</label>
                <select name="state" id="state">
                  <option value="-1"><-- select state --></option>
                  <?php  foreach ($state as $state) {
                    ?>

                  <option value="<?php echo $state->state_id; ?>"><?php echo $state->state_name; ?></option>
                 
                  <?php }  ?>
                 
                </select>
                
                <span id="Estate"></span>
                
                </span>
                <div class="g-recaptcha" data-sitekey="6LedqHUUAAAAAM4VW41EDM3xXVHgul3Jsz_ERGaj"></div>
                <input type="submit" class="m-btn btn-theme" name="submit" value="register">
               <!--  <button class="m-btn btn-theme">Register</button> -->
              </form>
            </div> <!-- contact fomr -->
         
        </div>
        
        <!-- Modal footer -->
       
        
      </div>
    </div>
  </div>
    <script type="text/javascript"> 
    
    function validation_reg()
    {
        var name = document.getElementById('name').value;
	 	var pwd =  document.getElementById('pwd').value;
	 	var mobile =  document.getElementById('mobile').value;
	 	var email =  document.getElementById('email').value;
	 	var state =  document.getElementById('state').value;
	 	var city =  document.getElementById('city').value;
	 	
	 	if(name == '')
	 	{
	 	        // alert('please fill first name');
	 		     var Efname = document.getElementById('Efname');
		         Efname.innerHTML="Please fill data First";
		         Efname.style.color="red";
                 return false;
        }
        
        if(email == '')
	 	{
	 	         // alert('please fill first name');
	 		     var Eemail = document.getElementById('Eemail');
		         Eemail.innerHTML="Please Email first";
		         Eemail.style.color="red";
                 return false;
        }
         if(mobile == '')
	 	{
	 	         // alert('please fill first name');
	 		     var Emobile = document.getElementById('Emobile');
		         Emobile.innerHTML="Please Mobile Number";
		         Emobile.style.color="red";
                 return false;
        }
        
         if(pwd == '')
	 	{
	 	         // alert('please fill first name');
	 		     var Epwd = document.getElementById('Epwd');
		         Epwd.innerHTML="Please Enter password";
		         Epwd.style.color="red";
                 return false;
        }
        
          if(city == '-1')
	 	{
	 	         // alert('please fill first name');
	 		     var Ecity = document.getElementById('Ecity');
		         Ecity.innerHTML="Please Select City";
		         Ecity.style.color="red";
                 return false;
        }
        
        
        if(state == '-1')
	 	{
	 	         // alert('please fill first name');
	 		     var Estate = document.getElementById('Estate');
		         Estate.innerHTML="Please Select State";
		         Estate.style.color="red";
                 return false;
        }
	 		
    }
    
    
    </script>

    <div class="modal" id="myModal2">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">   <h4>Login Here</h4></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
            <div class="contact-form sm-m-30px-b">
           
              <form action="<?php echo base_url() ?>User/login" method="POST" onsubmit="return Validation_login()"  >
               
                <div class="m-15px-b">
                  <input type="email" id="emailxxx" class="form-control" placeholder="Email" name="email" >
                  <span id="Eemail1"></span>
                </div>
                
                <div class="m-15px-b">
                    <input type="password" id="valuepass" class="form-control" placeholder="Password" name="password" >
                    <span id="ee12"></span>
                </div>
                <input type="submit" class="m-btn btn-theme" name="submit" value="Login">
                <a href="<?php echo base_url() ?>User/forgotpass" data-toggle="modal" data-target="#exampleModal10">Forgot Password?</a>

                <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" height="500px">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Forgot Password?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5>

Email address you use to log in to your account 
We'll send you an email with instructions to choose a new password.</h5>
        <form>
        Email ID: <input type="text" id="check" name="forgotpass" placeholder="Enter your email id">

        </form>
      </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
        <button type="button" class="btn btn-primary">Send Conformation</button>
        <span id="msg"></span>
      </div>
    </div>
  </div>



</div>
               <!--  <button class="m-btn btn-theme">Register</button> -->
              </form>
            </div> <!-- contact fomr -->
         
        </div>
        
        <!-- Modal footer -->
       
        
      </div>
    </div>
  </div>
  
  
  <script type="text/javascript"> 
    
    function Validation_login()
    {
        var emailxxx = document.getElementById('emailxxx').value;
	 	var xcxc =  document.getElementById('valuepass').value;
	 	
	 	//alert(xcxc);
	    if(emailxxx == '')
	 	{
	 	        //alert('please fill first name');
	 		     var Eemail1 = document.getElementById('Eemail1');
		         Eemail1.innerHTML="Please Email id First";
		         Eemail1.style.color="red";
                 return false;
        }
        
     if(xcxc == '')
	 	{
	 	          //alert('please fill first name');
	 		     var ee12 = document.getElementById('ee12');
		         ee12.innerHTML="Please Password First";
		         ee12.style.color="red";
                 return false;
        }
        
       
        
        
      
	 		
    }
    
    
    </script>

  <script type="text/javascript">
    
    $(document).ready(function(){

      $('#check').keyup(function(){

        //alert();

        var email = $('#check').val();

       // alert(email);
       $.ajax({

          type:"POST",
          url:"<?php echo base_url(); ?>User/email_check",
          data:{email:email},
          success:function(data)
          {
            //alert(data);\
            $('#msg').html(data);
          }


       });

      });


    });


  </script>
