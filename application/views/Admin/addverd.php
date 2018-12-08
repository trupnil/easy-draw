*-<!DOCTYPE html>6
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Easy Draw</title>
        <link rel="icon" href="<?php base_url() ?> assets/img/ed.png" type="image/ico">
    <!-- Core CSS - Include with every page -->
    <?php $this->load->view('Admin/Common/link');  ?>
    </head>
<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
      <?php $this->load->view('Admin/Common/navbar'); ?>
      
        <!-- end navbar side -->
        <!--  page-wrapper -->-*+
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!--End Page Header -->
            </div>

           <div class="row">
                <div class="col-lg-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Basic Form Elements
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url() ?>Admin/insertadd" >
                                        <div class="form-group">
                                            <label>Add Title</label>
                                            <input type="text" name="add_title" class="form-control">
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Text Input with Placeholder</label>
                                            <input type="file" name="image" class="form-control">
                                        </div>
                                       
                                        <button type="submit" class="btn btn-primary">Submit Add</button>
                                        <button type="reset" class="btn btn-success">Reset Button</button>
                                    </form>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>
            </div>
          
            

         


        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

   <?php $this->load->view('Admin/Common/script'); ?>

</body>

</html>
