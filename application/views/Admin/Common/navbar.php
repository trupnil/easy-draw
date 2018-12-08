  <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html" style="color: white">
                    <img src="<?php echo base_url() ?>static/img/ed.png" alt="" style="height:300% "  />Easy Draw <h3 style="color: black"></h3>
                   
                    
                </a>
            </div>  
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->
              

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <!--<li><a href="#"><i class="fa fa-user fa-fw"></i>User Profile</a>-->
                        <!--</li>-->
                        <!--<li><a href="#"><i class="fa fa-gear fa-fw"></i>Settings</a>-->
                        <!--</li>-->
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url(); ?>Admin/logout"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->

        </nav>
        <!-- end navbar top -->

        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section" style="height:40%" >
                            <div class="user-section-inner"  >
                                <img src="<?php echo base_url() ?>assets/img/easy.png" alt="" style="height:100%; width: 100%">
                            </div>
                            <div class="user-info" style="padding-top:20px ">
                                <!-- <div><?php #echo $this->session->#userdata('admin_name'); ?> </div>
 -->                                <div class="user-text-online">
    <span style="color:black; margin-top: 20%"><h3>Admin</h3></span>
                                    <!-- <span class="user-circle-online btn btn-success btn-circle "></span> -->&nbsp;<!-- <h5 style="color:black">Admin</h5> -->
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    <li class="sidebar-search">
                        <!-- search section-->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!--end search section-->
                    </li>
                    <li class="hover-item1">
                        <a href="<?php echo base_url() ?>Admin"><i class="fa fa-dashboard fa-fw" ></i>Dashboard</a>
                    </li>
                 <!--    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="flot.html">Flot Charts</a>
                            </li>
                            <li>
                                <a href="morris.html">Morris Charts</a>
                            </li>
                        </ul>
                       
                    </li> -->
                   <!--   <li>
                        <a href="timeline.html"><i class="fa fa-flask fa-fw"></i>Timeline</a>
                    </li>
                    <li>
                        <a href="tables.html"><i class="fa fa-table fa-fw"></i>Tables</a>
                    </li>
                    <li>
                        <a href="forms.html"><i class="fa fa-edit fa-fw"></i>Forms</a>
                    </li> -->
                    <!-- <li>
                        <a href="#"><i class="fa fa-wrench fa-fw"></i>UI Elements<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="panels-wells.html">Panels and Wells</a>
                            </li>
                            <li>
                                <a href="buttons.html">Buttons</a>
                            </li>
                            <li>
                                <a href="notifications.html">Notifications</a>
                            </li>
                            <li>
                                <a href="typography.html">Typography</a>
                            </li>
                            <li>
                                <a href="grid.html">Grid</a>
                            </li>
                        </ul>
                       
                    </li> -->
                    <!-- <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i>Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Item</a>
                            </li>
                            <li>
                                <a href="#">Second Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                </ul>
                              
                            </li>
                        </ul>
                        
                    </li> -->
                    <style type="text/css">
                        .hover-item{
                           

                        }
                        .hover-item:hover{
                            background-color: #1a53ff;
                        }
                        .hover-item1:hover{
                            background-color: #446600;
                        }
                    </style>
                    <li class="hover-item1">
                        <a href="#" ><i class="fa fa-files-o fa-fw" class="hover-item"  > </i>User activity<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level" >
                            <li class="hover-item">
                                <a href="<?php echo base_url() ?>Admin/user_list">User list</a>
                            </li>
                              <li class="hover-item">
                                <a href="<?php echo base_url() ?>Admin/feedback">Feedback</a>
                            </li>
                           
                        </ul>
                     
                    </li>
                     <li class="hover-item1">
                        <a href="#"><i class="fa fa-files-o fa-fw"></i>Advertisement<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class="hover-item">
                                <a href="<?php echo base_url() ?>Admin/addverd">Post Add</a>
                            </li>
                              <li class="hover-item">
                                <a href="<?php echo base_url() ?>Admin/showadd">Show Add</a>
                            </li>
                           
                        </ul>
                     
                    </li>
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>