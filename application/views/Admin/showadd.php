<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Easy Draw</title>
   <?php  $this->load->view('Admin/Common/link'); ?>
    <!-- Page-Level CSS -->
    <link href="assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

</head>

<body>
    <!--  wrapper -->
    <div id="wrapper">
       
        <?php $this->load->view('Admin/Common/navbar');  ?>
               <!--  page-wrapper -->
        <div id="page-wrapper">

            
            <div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">User list</h1>
                </div>
                 <!-- end  page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                      
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Add title</th>
                                            <th>add image</th>
                                        
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php  foreach ($adds as $res) { ?>
                                         <tr class="odd gradeX">
                                            <td><?php echo $res->add_title; ?></td>
                                            <td><img src="<?php echo base_url(); ?>upload/<?php echo $res->add_image; ?>" height="200px" width="50%"></td>
                                             
                                        </tr>
                                       
                                           
                                        <?php  } ?>
                                       
                                       
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
           
        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <?php $this->load->view('Admin/Common/script'); ?>
    <!-- Page-Level Plugin Scripts-->
    <script src="<?php  echo base_url(); ?>assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="<?php  echo base_url(); ?>assets/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>

</body>

</html>
