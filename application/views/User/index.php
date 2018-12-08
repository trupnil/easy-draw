<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<title>Easy Draw</title>
  <link rel="icon" href="<?=base_url()?>static/img/ed.png" type="image/ico">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  
  
  <!-- / -->
<?php $this->load->view('User/Common/link'); ?>

</head>

<!-- Body Start -->
<body>

  <!-- Loading -->
  <div id="loading">
    <div class="load-circle"><span class="one"></span></div>
  </div>
  <!-- / -->

  <!-- Header -->
<?php $this->load->view('User/Common/header');  ?>
  <!-- Header End -->
  
  <!-- Main Start -->
  <main>

    <!-- Home Banner -->
    <section id="home" class="home-banner particles-box theme-g-bg">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 col-lg-10 text-center">
            <span>Best tool for create</span>
            <h1>UML DIAGRAMS</h1>
            <p>UML Diagram Maker is a powerful yet easy-to-use UML diagram drawing program which makes it easy to create professional-looking UML diagrams with built-in symbols and templates. Easy to make UML sequence diagram, use case diagram, UML class diagram, UML activity diagram, UML deployment diagram and more.</p>
            
          </div>
          <div class="col-md-8">
            <div class="hb-img">
              <img src="static\img\diagrams.JPG" height="400px" width="1000px" title="" alt="">
            </div>
          </div>
        </div>
        
      </div> <!-- container -->
    </section>
    <!-- / -->

    <!-- Features -->
    <section class="feature-section p-50px-t p-90px-b md-p-50px-tb">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center m-40px-b sm-m-30px-b">
            <div class="section-title">
             <!--  <span class="theme-g-bg"></span> -->
             <!--  <h2>What is Software?</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.</p> -->
            </div>
          </div> <!-- col -->
        </div> <!-- row -->

        <div class="row">
          <div class="col-md-4">
            <div class="feature-box sm-m-30px-b">
               <div> 
             <img src="static\img\easy.png" height:"200px" width:"200px"> 
           </div>
              <h4 class="m-25px-t">Easy to work on</h4>
              <p> The built-in symbol stencils will open automatically every time you start a new drawing. The Home menu provides quick buttons to add a text box, draw dynamic connectors, align and distribute your drawing. Many quick styles and theme options help you design a personalized UML diagram with the best look you like.</p>
              <!-- <a class="more" href="#">Read More <i class="ti-arrow-right"></i></a> -->
            </div>
          </div>

          <div class="col-md-4">
            <div class="feature-box sm-m-30px-b">
              <div> 
             <img src="static\img\user2.png" height:"200px" width:"200px"> 
           </div>
              <h4>Manage Diagrams</h4>
              <p>Registered users can manage diagrams within their own custom namespace.
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>

                <br>

              </p>
             <!--  <a class="more" href="#">Read More <i class="ti-arrow-right"></i></a>
 -->            </div>
          </div>

          <div class="col-md-4">
            <div class="feature-box sm-m-30px-b">
              <div> 
             <img src="static\img\share1.png" height:"100px" width:"100px"> 
           </div>
              <h4>Easy to share</h4>
              <p>You can share your mail folders with other users. You can also specify the level of sharing you want to provide on the shared folders. For example, you can grant a user with only read privileges and grant the other users permissions to write or create subfolders in your shared folder.</p>
              <br>
              <br>
             <!--  <a class="more" href="#">Read More <i class="ti-arrow-right"></i></a> -->
            </div>
          </div>
        </div>
      </div> <!-- container -->
    </section>
    <!-- / -->

    <!-- sub section -->
    <section class="sub-section">
      <div class="container">
        <div class="row align-items-center m-60px-b">
          <div class="col-md-6">
            <img src="static/img/tem.jpg" title="" alt="">
          </div> <!-- col -->
          <div class="col-md-6 sm-m-30px-t">
            <h2 class="sub-title theme-color"><u>Templates </u></h2>
            
            <h4 class="sub-section-title m-0px m-15px-b"> <br/></h4>
            <p>EasyDraw helps you plan software projects with the help of UML diagrams. Start with the exact UML template you need.EasyDraw has templates for class diagrams, use case diagrams, sequence diagrams, state diagrams, activity diagrams, and more. Add boxes and components with a few clicks, add your information, and our UML diagram software does the rest, aligning everything and applying professional design themes for great results every time.</p>
           <!--  <ul class="ul-list-style m-20px-b">
              <li>Constant Speed</li>
              <li>File Management</li>
              <li>Best Support</li>
            </ul> -->
            <a class="m-btn btn-theme" data-toggle="modal" data-target="#exampleModal" href="<?php echo base_url() ?>User/template">Templates</a>
             <!--<a class="m-btn btn-theme" data-toggle="modal" data-target="#exampleModal1" href="#">Download</a>-->
            <!--<a class="m-btn btn-theme" data-toggle="modal" data-target="#exampleModal2" href="#">Share</a>-->
            <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Templates</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <a href="">uscecse</a>
       <ul>
           <li>
        <a href="<?php echo base_url() ?>assets/templates/usecase/uc1.jpg"> example 1</a> 
     </li>
      <li>
        <a href="<?php echo base_url() ?>assets/templates/usecase/uc2.jpg"> example 2</a> 
     </li>
      <li>
        <a href="<?php echo base_url() ?>assets/templates/usecase/uc3.jpg"> example 3</a> 
     </li>
      <li>
        <a href="<?php echo base_url() ?>assets/templates/usecase/uc4.jpg"> example 4</a> 
     </li>
      <li>
        <a href="<?php echo base_url() ?>assets/templates/usecase/uc5.jpg"> example 5</a> 
     </li>
      <li>
        <a href="<?php echo base_url() ?>assets/templates/usecase/uc6.jpg"> example 6</a> 
     </li>
      <li>
        <a href="<?php echo base_url() ?>assets/templates/usecase/uc7.jpg"> example 7</a> 
     </li>
      <li>
        <a href="<?php echo base_url() ?>assets/templates/usecase/uc8.jpg"> example 8</a> 
     </li>
      <li>
        <a href="<?php echo base_url() ?>assets/templates/usecase/uc9.jpg"> example 9</a> 
     </li>
      <li>
        <a href="<?php echo base_url() ?>assets/templates/usecase/uc10.jpg"> example 10</a> 
     </li>
       </ul>
        <a href="">activity</a>
        <ul>
             <li>
        <a href="<?php echo base_url() ?>assets/templates/activity/ac1.jpg"> example 1</a> 
     </li>
      <li>
        <a href="<?php echo base_url() ?>assets/templates/activity/ac2.jpg"> example 2</a> 
     </li>
     <li>
        <a href="<?php echo base_url() ?>assets/templates/activity/ac3.jpg"> example 3</a> 
     </li>
     <li>
        <a href="<?php echo base_url() ?>assets/templates/activity/ac4.jpg"> example 4</a> 
     </li>
     <li>
        <a href="<?php echo base_url() ?>assets/templates/activity/ac5.jpg"> example 5</a> 
     </li>
     <li>
        <a href="<?php echo base_url() ?>assets/templates/activity/ac6.jpg"> example 6</a> 
     </li>
     <li>
        <a href="<?php echo base_url() ?>assets/templates/activity/ac7.jpg"> example 7</a> 
     </li>
     <li>
        <a href="<?php echo base_url() ?>assets/templates/activity/ac8.jpg"> example 8</a> 
     </li>
     <li>
        <a href="<?php echo base_url() ?>assets/templates/activity/ac9.jpg"> example 9</a> 
     </li>
     <li>
        <a href="<?php echo base_url() ?>assets/templates/activity/ac10.jpg"> example 10</a> 
     </li>
        </ul>
        <a href="">sequence</a>
        <ul>
            <li>
        <a href="<?php echo base_url() ?>assets/templates/sequence/se1.jpg"> example 1</a> 
     </li>
     <li>
        <a href="<?php echo base_url() ?>assets/templates/sequence/se2.jpg"> example 2</a> 
     </li>
     <li>
        <a href="<?php echo base_url() ?>assets/templates/sequence/se3.jpg"> example 3</a> 
     </li>
     <li>
        <a href="<?php echo base_url() ?>assets/templates/sequence/se4.jpg"> example 4</a> 
     </li>
     <li>
        <a href="<?php echo base_url() ?>assets/templates/sequence/se5.jpg"> example 5</a> 
     </li>
            
        </ul>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<!--<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">-->
<!--  <div class="modal-dialog" role="document">-->
<!--    <div class="modal-content">-->
<!--      <div class="modal-header">-->
<!--        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>-->
<!--        <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
<!--          <span aria-hidden="true">&times;</span>-->
<!--        </button>-->
<!--      </div>-->
<!--      <div class="modal-body">-->
<!--        Usecase-->
        
<!--      </div>-->
<!--      <div class="modal-footer">-->
<!--        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
<!--        <button type="button" class="btn btn-primary">Save changes</button>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--</div>-->
            
     <!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        .....a
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>
            
            
            
            
          </div> <!-- col -->
        </div> <!-- row -->

        <div class="row align-items-center m-60px-b">
          <div class="col-md-6 order-2 sm-m-30px-t order-md-first">
            <h2 class="sub-title theme-color"><u>Projects</u></h2>
            <h4 class="sub-section-title m-0px m-15px-b"> <br/></h4>
            <p>UML can be used in almost any situation. They can offer a glance at a process or a helpful guide to making a series of related decisions.

These simple UML Projects examples and templates helps users to get an idea about the Projects. Just sign up for a free account to start creating your own UML Diagrams.
              <br>



            </p>
           
            <a class="m-btn btn-theme" data-toggle="modal" data-target="#exampleModal3" href="#">Projects</a>
            <!--<a class="m-btn btn-theme" data-toggle="modal" data-target="#exampleModal4" href="#">Download</a>-->
            <!--<a class="m-btn btn-theme" data-toggle="modal" data-target="#exampleModal5" href="#">Share</a>-->
            <!-- Modal -->
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Projects</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
       <a href="<?php echo base_url() ?>assets/TPT/Medicalstore.pdf">Medical Store Management</a>
      </div>
      
       <div class="modal-body">
        
       <a href="<?php echo base_url() ?>assets/TPT/National Park Management.pdf">National Park Management</a>
      </div>
      
       <div class="modal-body">
        
       <a href="<?php echo base_url() ?>assets/TPT/Travel Agency.pdf">Travel Agency</a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>
            
            
             <!-- Modal -->
<div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        .....
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
            
            
             <!-- Modal -->
<div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        .....
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
            
            
            
            
            
          </div> <!-- col -->
          <div class="col-md-6">
              <div class="row">
              <div class="col-md-6">  <img src="static/img/proj.jpg" title="" alt="">
             </div>
             
               <div class="col-md-6"> 
                <div class="add"> <strong> <?php echo $add[0]->add_title ?> </strong>    </div>
                <a href="https://visionaryspark.wordpress.com/"><div> <img src="<?php echo base_url() ?>/upload/<?php echo $add[3]->add_image ?>"</div></a>
             </div>
             </div>
              
           
            
            
            
          </div> <!-- col -->
          
        </div> <!-- row -->

        <div class="row align-items-center m-90px-b">
          <div class="col-md-6">
            <img src="static/img/tut.jpg" title="" alt="">
          </div> <!-- col -->
          <div class="col-md-6 sm-m-30px-t">
            <h2 class="sub-title theme-color"><u>Tutorials </u></h2>
            <h4 class="sub-section-title m-0px m-15px-b"> <br/></h4>
            <p>Whether you're new to Easy Draw or brushing up on basics, you're in the right place. 
This guide will show how to use our most popular features.
                Here, we provide necessary information about how to create diagrams  and information about  in which type of situation you can use it.
              <br>



            </p>
            
            <a class="m-btn btn-theme" data-toggle="modal" data-target="#exampleModal7" href="#">Tutorials</a>
             <!--<a class="m-btn btn-theme" data-toggle="modal" data-target="#exampleModal8" href="#">Download</a>-->
            <!--<a class="m-btn btn-theme" data-toggle="modal" data-target="#exampleModal9" href="#">Share</a>-->
            
            
             <!-- Modal -->
<div class="modal fade" id="exampleModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tutorials Download</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <a href="<?php echo base_url() ?>assets/TPT/usecase.pdf">Use Case</a>
          </div>
      
       <div class="modal-body">
       <a href="<?php echo base_url() ?>assets/TPT/activity.pdf">Activity Diagram</a>
          </div>
          
           <div class="modal-body">
       <a href="<?php echo base_url() ?>assets/TPT/class.pdf">Class Diagram</a>
          </div>
          
           <div class="modal-body">
       <a href="<?php echo base_url() ?>assets/TPT/sequence.pdf">Sequence Diagram</a>
          </div>
      
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
            
            
             <!-- Modal -->
<div class="modal fade" id="exampleModal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        .....
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
            
            
            
             <!-- Modal -->
<div class="modal fade" id="exampleModal9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        .....
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
            
          </div> <!-- col -->
        </div> <!-- row -->

      </div> <!-- container -->
    </section>
    <!-- / -->

    <!-- Testimonial -->
    
     

       
    <!--  Testimonial End  -->

    
    <!-- / -->

  </main>
  <!-- Main End -->

  <!-- Footer -->
  
  <!-- / -->

  <!-- jQuery -->
 <?php $this->load->view('User/Common/footer'); ?>
</body>
<!-- Body End -->


</html>