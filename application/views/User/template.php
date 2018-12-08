<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 
  <!-- Page Title -->
  <title>Templates</title>
  <!-- / -->

<?php $this->load->view('User/Common/link'); ?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style type="text/css">

.modal-lg {
    max-width: 100% !important;
}



/*<!--  buttons -->*/

/*Remove that CSS*/
.col-md-3 {
    margin-left:5%;
    }
/*Remove that CSS*/



button {
  margin: 20px 0;
  line-height: 34px;
  position: relative;
  cursor: pointer;
  user-select: none;
  outline:none !important;
  width:100%;
}

button:active {

  outline:none;
}

button.ribbon {
  
  outline:none;
  outline-color: transparent;
}
button.ribbon:before, button.ribbon:after {
  top: 5px;
  z-index: -10;
}
button.ribbon:before {
  border-color: #53dab6 #53dab6 #53dab6 transparent;
  left: -25px;
  border-width: 17px;
}
button.ribbon:after {
  border-color: #53dab6 transparent #53dab6 #53dab6;
  right: -25px;
  border-width: 17px;
}

button:before, button:after {
  content: '';
  position: absolute;
  height: 0;
  width: 0;
  border-style: solid;
  border-width: 0;
  outline:none;
}

button.btn-default:before {
  border-color: #757575 #757575 #757575 transparent;
    }
    button.btn-default:after {
  border-color: #757575 transparent #757575 #757575;
    }
    
    
    
    button.btn-primary:before {
  border-color: #2e6da4 #2e6da4 #2e6da4 transparent;
    }
    button.btn-primary:after {
  border-color: #2e6da4 transparent #2e6da4 #2e6da4;
    }
    
    
    button.btn-success:before {
  border-color: #398439 #398439 #398439 transparent;
    }
    button.btn-success:after {
  border-color: #398439 transparent #398439 #398439;
    }
    
    
    button.btn-info:before {
  border-color: #269abc #269abc #269abc transparent;
    }
    button.btn-info:after {
  border-color: #269abc transparent #269abc #269abc;
    }
    
    
    button.btn-warning:before {
  border-color: #d58512 #d58512 #d58512 transparent;
    }
    button.btn-warning:after {
  border-color: #d58512 transparent #d58512 #d58512;
    }
    
    
    button.btn-danger:before {
  border-color: #ac2925 #ac2925 #ac2925 transparent;
    }
    button.btn-danger:after {
  border-color: #ac2925 transparent #ac2925 #ac2925;
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
            <h2>Ready Made Templates</h2>
            <ol class="breadcrumb justify-content-center">
                <li><a href="#">Home</a></li>
                <li class="active">Template</li>

            </ol>
          
<!------ Include the above in your HEAD tag ---------->

<div class="container">
  <div class="row">
    <h2>Bootstrap Ribbon Buttons</h2>
  </div>
    
    <div class="row">
    
    <div class="col-md-6">       <!-- Standard button -->


<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
<button type="button" class="btn btn-primary ribbon">Primary</button>

<!-- Indicates a successful or positive action -->
<button type="button" class="btn btn-success ribbon">Success</button>

<!-- Contextual button for informational alert messages -->
<button type="button" class="btn btn-info ribbon">Info</button>

<!-- Indicates caution should be taken with this action -->
<button type="button" class="btn btn-warning ribbon">Warning</button>

<!-- Indicates a dangerous or potentially negative action -->
<button type="button" class="btn btn-danger ribbon">Danger</button>

<!-- Deemphasize a button by making it look like a link while maintaining button behavior -->
</div>
  
<!-- Deemphasize a button by making it look like a link while maintaining button behavior -->
</div>
    
 
    </div>
    
    
</div>

          </div>
        </div>
      </div> 
    
       
              

        </section>
   

  
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


