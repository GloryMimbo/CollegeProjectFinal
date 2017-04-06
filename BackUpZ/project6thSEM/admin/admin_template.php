<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Admin Panel :: <?php if(isset($pageTitle)) echo $pageTitle; else echo "Dashboard"; ?></title>

        <link href="<?php echo HTTP_ASSETS_PATH_ADMIN; ?>css/style.default.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="<?php echo HTTP_ASSETS_PATH_ADMIN; ?>js/html5shiv.js"></script>
        <script src="<?php echo HTTP_ASSETS_PATH_ADMIN; ?>js/respond.min.js"></script>
        <![endif]-->

        <?php 
          if(isset($css_files) && count($css_files)>0)
          {
            foreach($css_files as $file): 
        ?>
            <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
        <?php 
            endforeach; 
          } 
        ?>

        <script src="<?php echo HTTP_ASSETS_PATH_ADMIN; ?>js/jquery-2.2.0.min.js"></script>
        <script src="<?php echo HTTP_ASSETS_PATH_ADMIN; ?>js/bootstrap.min.js"></script>

        <?php 
          if(isset($js_files) && count($js_files)>0)
          {
            foreach($js_files as $file): 
        ?>
          <script src="<?php echo $file; ?>"></script>
        <?php 
            endforeach; 
          }
        ?>

    </head>

    <body>

        <header>
            <div class="headerwrapper">
                <div class="header-left">
                    <a href="#" class="logo">
                       <strong style="color:white;">Admin Panel</strong>
                    </a>
                    <div class="pull-right">
                        <a href="#" class="menu-collapse">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                </div><!-- header-left -->
                
                <div class="header-right">
                    
                    <div class="pull-right">
                                                
                        <div class="btn-group btn-group-option">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                              <i class="fa fa-caret-down"></i>
                            </button>
                            <ul class="dropdown-menu pull-right" role="menu">
                              <!-- <li><a href="#"><i class="glyphicon glyphicon-user"></i> My Profile</a></li>
                              <li><a href="#"><i class="glyphicon glyphicon-star"></i> Activity Log</a></li>
                              <li><a href="#"><i class="glyphicon glyphicon-cog"></i> Account Settings</a></li> -->
                              <li><a href="#"><i class="glyphicon glyphicon-question-sign"></i> Help</a></li>
                              <li class="divider"></li>
                              <li><a href="<?php echo base_url(); ?>admin/home/logout/"><i class="glyphicon glyphicon-log-out"></i>Sign Out</a></li>
                            </ul>
                        </div><!-- btn-group -->
                        
                    </div><!-- pull-right -->
                    
                </div><!-- header-right -->
                
            </div><!-- headerwrapper -->
        </header>
        
        <section>
            <div class="mainwrapper">
                <div class="leftpanel">
                    <div class="media profile-left">
                        
                        <div class="media-body">
                        </div>
                    </div><!-- media -->
                    
                    <h5 class="leftpanel-title">Navigation</h5>
                    <ul class="nav nav-pills nav-stacked">
                        <li><a href="<?php echo base_url(); ?>admin/dashboard/"><i class="fa fa-home"></i> <br> <span>Dashboard</span></a></li>
                        <li><a href="<?php echo base_url(); ?>admin/dashboard/students/"><i class="fa fa-credit-card"></i> <br><span>Students</span></a></li>
                        <li class="parent"><a href="#"><i class="fa fa-suitcase"></i> <br><span>Masters</span></a>
                            <ul class="children">
                                <li><a href="<?php echo base_url(); ?>admin/dashboard/batch/"><span>Batchs</span></a></li>
                                <li><a href="<?php echo base_url(); ?>admin/dashboard/courses/"><span>Courses</span></a></li>
                                <li><a href="<?php echo base_url(); ?>admin/dashboard/subjects/"><span>Subjects</span></a></li>
                                <li><a href="<?php echo base_url(); ?>admin/dashboard/exam_type/"><span>Exam Type</span></a></li>
                            </ul>
                        </li>
                        <li class="parent"><a href="#"><i class="fa fa-suitcase"></i> <br><span>Marks</span></a>
                            <ul class="children">
                                <li><a href="<?php echo base_url(); ?>admin/dashboard/marks/"><span>Add Marks</span></a></li>
                                <li><a href="<?php echo base_url(); ?>admin/dashboard/mark_list/"><span>Mark List</span></a></li>
                            </ul>
                        </li>
                        <li class="parent"><a href="#"><i class="fa fa-suitcase"></i> <br><span>Website</span></a>
                            <ul class="children">
                                <li><a href="<?php echo base_url(); ?>admin/dashboard/affiliated_college/"><span>Affiliated Colleges</span></a></li>
                                <li><a href="<?php echo base_url(); ?>admin/dashboard/mark_list/"><span>Mark List</span></a></li>
                            </ul>
                        </li>
                        <!-- <li><a href="<?php //echo base_url(); ?>admin/dashboard/marks/"><i class="fa fa-list"></i> <br><span>Marks</span></a></li> -->
                        <li><a href="<?php echo base_url(); ?>admin/dashboard/event_gallery/"><i class="fa fa-picture-o"></i> <br><span>Event Gallery</span></a></li>
                    </ul>
                    
                </div><!-- leftpanel -->
                
                <div class="mainpanel">
                    <div class="pageheader">
                        <div class="media">
                            <div class="pageicon pull-left">
                                <i class="fa fa-home"></i>
                            </div>
                            <div class="media-body">
                                <ul class="breadcrumb">
                                    <li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
                                    <li><?php if(isset($pageTitle)) echo $pageTitle; else echo "Dashboard"; ?></li>
                                </ul>
                                <h4><?php if(isset($pageTitle)) echo $pageTitle; else echo "Dashboard"; ?></h4>
                            </div>
                        </div><!-- media -->
                    </div><!-- pageheader -->
                    
                    <div class="contentpanel">
                        
                        <!-- CONTENT GOES HERE -->    
                        <?php
                            echo $output;
                        ?>

                    </div><!-- contentpanel -->
                    
                </div>
            </div><!-- mainwrapper -->
        </section>

        <script src="<?php echo HTTP_ASSETS_PATH_ADMIN; ?>js/modernizr.min.js"></script>
        <script src="<?php echo HTTP_ASSETS_PATH_ADMIN; ?>js/pace.min.js"></script>
        <script src="<?php echo HTTP_ASSETS_PATH_ADMIN; ?>js/retina.min.js"></script>
        <script src="<?php echo HTTP_ASSETS_PATH_ADMIN; ?>js/jquery.cookies.js"></script>

        <script src="<?php echo HTTP_ASSETS_PATH_ADMIN; ?>js/custom.js"></script>

    </body>
</html>
