<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
  <!-- Page Title -->
  <title>Easy Draw</title>
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
            <h2>Profile</h2>
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

          <!-- contact fomr -->
          </div> <!-- col -->
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
          </div> 
          
          <div class="col-lg-8">
            <div class="contact-map md-m-30px-t">
              <div class="contact-info">
                <div class="row">
                  <div class="col-md-12">
                    <h2  class="section-heading h1 pt-4">Feedback</h2>

                    <form method="post" action="<?php  echo base_url()?>User/feedback_insert">
                      <textarea class="form-control md-textarea" rows="15" cols="80" name="msg"></textarea>
                      <br>
                      <div class="center-on-small-only">
                        <input class="btn btn-primary" type="submit" name="submit" value="submit">
                        </div>
                    </form>
                   
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


