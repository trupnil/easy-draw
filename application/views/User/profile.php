<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
  <!-- Page Title -->
 <title>Easy Draw</title>
  <link rel="icon" href="<?=base_url()?>static/img/ed.png" type="image/ico">
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
                  <div class="col-md-4">
                    <h6>Our Services</h6>
                   
                  </div> <!-- col -->

                   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#diagram">
    Open modal
  </button>
                 
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
