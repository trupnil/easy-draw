<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
  <!-- Page Title -->
 <title>Easy Draw</title>
  <link rel="icon" href="<?=base_url()?>static/img/ed.png" type="image/ico">
  
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


  <!-- / -->

<?php $this->load->view('User/Common/link'); ?>
<style type="text/css">

.modal-lg {
    max-width: 100% !important;
}
</style>

  <!-- / -->
</head>

<!-- Body Start -->
<body>

  <!-- Loading -->


  <!-- Header -->
<?php $this->load->view('User/Common/header');  ?>
  <!-- Header End -->
  
  <!-- Main Start -->
  <main>

    <!-- Page Header -->
    <section class="page-header theme-g-bg">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 col-lg-10 text-center">
            <img src="<?php echo base_url() ?>upload/<?php echo $this->session->userdata('reg_image'); ?>" style="border-radius: 50%;
    height: 100px;
    width: 100px;">
            <ol class="breadcrumb justify-content-center">
                <li><a href="#">Home</a></li>
                <li class="active">Profile</li>
            </ol>
          </div>
        </div>
      </div> <!-- container -->
    </section>
    <!-- / -->

    <!-- Contact Us -->
    <section class="contact-section p-60px-tb md-p-60px-tb sm-p-40px-tb">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center m-40px-b sm-m-20px-b">
            <div class="section-title">
              <span class="theme-g-bg"></span>
              <h2>Welcome : <?php echo $this->session->userdata('reg_name'); ?></h2>
              </div>
          </div> <!-- col -->
        </div> <!-- row -->

        <div class="row">
          <div class="col-lg-4">
            <div class="contact-form sm-m-30px-b">
              <h4>Profile Manage</h4>
             <ul>
              <li><a href="<?php echo base_url() ?>User/feedback">History</li>
             <!--  <li><a href="<?php #secho base_url() ?>User/profile">Home</li> -->
              <li><a href="<?php echo base_url() ?>User/p_manage">Profile Manage</li>
              <li><a href="<?php echo base_url() ?>User/message">Message</li>
              <li ><a href="<?php echo base_url() ?>User/feedback">Feedback</a></li>
                
             </ul>
            </div> <!-- contact fomr -->
          </div> <!-- col -->
          
          <div class="col-lg-8">
            <div class="contact-map md-m-30px-t">
              <div class="contact-info">
                <div class="row">
                  <!--<div class="col-md-4">-->
                    <!--<h6>profile Manage</h6>-->
                    
                    
                    <?php   foreach($edit_data as $key => $val)
                    
                    {  ?>
                      <h2 class="section-heading h1 pt-4">Profile Manage</h2>  
                
                     <div class="row">
                      <div class="col-md-8 col-xl-9">
                    <form id="contact-form" name="contact-form" method="POST" action="<?php echo base_url() ?>User/edit_profile" enctype="multipart/form-data" >
                         <div class="row">
                              <div class="col-md-12">
                        <div class="md-form">
                        <lable> Your registration Id </lable>
                        <input class="form-control" type="text" readonly name="reg_id" value="<?php echo $val->reg_id; ?>" > 
                         <!--<div class="col-md-20">-->
                        <lable> first name  </lable>
                        <input  class="form-control" type="text" name="reg_name" value="<?php echo $val->reg_name; ?>" >  <bR>
                            <lable> Mobile  </lable>
                        <input  class="form-control type="text" name="reg_mobile" value ="<?php echo $val->reg_mobile; ?>" ><bR>
                            <lable> Email  </lable>
                        <input  class="form-control" type="text" name="reg_email" readonly  value ="<?php echo $val->reg_email; ?>"><bR>
                            
                            <lable> Profile Current </lable>
                            
                          <input  class="form-control" type="text" readonly name="old_image" value="<?php echo $val->image; ?>" > 
                            
                            <img src="<?php echo base_url() ?>upload/<?php echo $val->image ?>"  >
                      <bR>
                          <lable> Choose New Image </lable>
                          <input  class="form-control" type="file" name="image"><br>
                          
                          <lable> state  </lable>
                          
                          <select name="state">  
                          <?php foreach($state as $key => $value) { ?>
                          <option  class="form-control <?php if($value->state_id == $val->state_fk) {  echo "selected"; } ?>  value="<?php echo  $value->state_id ?>" >   <?php echo $value->state_name; ?>    </option>
                          
                          <?php }
                          ?>
                            
                            
                          </select>
                          
                          <lable> city  </lable>
                          
                          <select name="city">  
                          
                          <?php foreach($city as $key => $value) { ?>
                          <option <?php if($value->city_id == $val->city_fk) {  echo "selected"; } ?>  value="<?php echo $value->city_id ?>" >      <?php echo $value->city_name; ?></option>
                          
                          <?php }
                          ?>
                            
                          </select>
                             <br><br> 
                    
                             <div class="center-on-small-only">
                        <input style="align:center" class="btn btn-primary" type="submit" name="submit" value="Update">
                        
                        </div>
                    </form>

<?php   } ?>                   
                  </div> <!-- col -->

                 
                </div> <!-- row -->
              </div> <!-- contact info -->
            
            </div> <!-- contact us -->

          </div> <!-- col -->

        </div> <!-- row -->
      </div> <!-- container -->
    </section>
    <!--  -->

  </main>
  <!-- Main End -->

  <!-- Footer -->
 
  <!-- / -->

  <!-- jQuery -->
   <?php $this->load->view('User/Common/footer'); ?>
</body>
<!-- Body End -->


<!-- Mirrored from inventheme.com/themeforest/moxo/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jul 2018 11:30:00 GMT -->
</html>


 <!-- The Modal -->
  <div class="modal fade" id="diagram">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Draw Diagram</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         <div class="col-md-12">
          <div class="col-md-4">
            
          </div>
          <div class="col-md-8">
            
          </div>

         </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
