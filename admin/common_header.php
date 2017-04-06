<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>OFR Panel :: <?php if(isset($pageTitle)) echo $pageTitle; else echo "Dashboard"; ?></title>

        <link href="css/bootstrap-datepicker.min.css" rel="stylesheet">
        <link href="css/style.default.css" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/responsive.bootstrap.min.css">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->

        <script src="js/jquery-2.2.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

    </head>

    <body>
    
    <?php
        $user_type = get_session("user_type");
    ?>
        <header>
            <div class="headerwrapper">
                <div class="header-left">
                    <a href="#" class="logo">
                       <strong style="color:white;">OFR Panel</strong>
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
                              <li><a href="logout.php"><i class="glyphicon glyphicon-log-out"></i>Sign Out</a></li>
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
                        <li><a href="index.php"><i class="fa fa-home"></i> <br> <span>Dashboard</span></a></li>
                        <li><a href="../register.php?job=edit&view=registration&id=<?php echo get_session('reg_profile_id'); ?>"><i class="fa fa-credit-card"></i> <br><span>Register</span></a></li>
                        <li class="parent"><a href="visa_extension.php?job=add&id=<?php echo get_session('reg_profile_id'); ?>"><i class="fa fa-suitcase"></i> <br><span>Visa Extension</span></a>
                            <ul class="children">
                                <?php
                                    if($user_type=="0")
                                    {
                                ?>
                                <li><a href="visa_extension.php?job=add&id=<?php echo get_session('reg_profile_id'); ?>"><span>Add Visa Extension</span></a></li>
                                <?php
                                    }
                                ?>
                                <li><a href="visa_extension_list.php?job=add&id=<?php echo get_session('reg_profile_id'); ?>"><span>Visa Extension List</span></a></li>
                            </ul>
                        </li>
                        <li class="parent"><a href="exit_permit.php?job=add&id=<?php echo get_session('reg_profile_id'); ?>"><i class="fa fa-picture-o"></i> <br><span>Exit Permit</span></a>
                            <ul class="children">
                                <?php
                                    if($user_type=="0")
                                    {
                                ?>
                                <li><a href="exit_permit.php?job=add&id=<?php echo get_session('reg_profile_id'); ?>"><span>Add Exit Permit</span></a></li>
                                
                                <?php
                                    }
                                ?>
                                <li><a href="exit_permit_list.php?job=add&id=<?php echo get_session('reg_profile_id'); ?>"><span>Exit Permit List</span></a></li>
                            </ul>
                        </li>
                        <li class="parent"><a href="change_of_address.php?job=add&id=<?php echo get_session('reg_profile_id'); ?>"><i class="fa fa-align-center"></i> <br><span>Change of Address</span></a>
                            <ul class="children">
                                <?php
                                    if($user_type=="0")
                                    {
                                ?>
                                <li><a href="change_of_address.php?job=add&id=<?php echo get_session('reg_profile_id'); ?>"><span>Add Change of Address</span></a></li>
                                
                                <?php
                                    }
                                ?>
                                <li><a href="change_of_address_list.php?job=add&id=<?php echo get_session('reg_profile_id'); ?>"><span>Change of Address List</span></a></li>
                            </ul>
                        </li>
                        <li class="parent"><a href="change_of_passport.php?job=add&id=<?php echo get_session('reg_profile_id'); ?>"><i class="fa fa-align-center"></i> <br><span>Change of Passport</span></a>
                            <ul class="children">
                                <?php
                                    if($user_type=="0")
                                    {
                                ?>
                                <li><a href="change_of_passport.php?job=add&id=<?php echo get_session('reg_profile_id'); ?>"><span>Add Change of Passport</span></a></li>
                                
                                <?php
                                    }
                                ?>
                                <li><a href="change_of_passport_list.php?job=add&id=<?php echo get_session('reg_profile_id'); ?>"><span>Change of Passport List</span></a></li>
                            </ul>
                        </li>
                        <li class="parent"><a href="loss_of_passport.php?job=add&id=<?php echo get_session('reg_profile_id'); ?>"><i class="fa fa-database"></i> <br><span>Loss of Passport</span></a>
                            <ul class="children">
                                <?php
                                    if($user_type=="0")
                                    {
                                ?>
                                <li><a href="loss_of_passport.php?job=add&id=<?php echo get_session('reg_profile_id'); ?>"><span>Add Loss of Passport</span></a></li>
                                
                                <?php
                                    }
                                ?>
                                <li><a href="loss_of_passport_list.php?job=add&id=<?php echo get_session('reg_profile_id'); ?>"><span>Loss of Passport List</span></a></li>
                            </ul>
                        </li>
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
                        