<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Online Foreign Registration <?php if(isset($pageName) && $pageName!="") echo " :: ".ucwords($pageName); else " :: Home"; ?></title>
<meta name="keywords" content="Online Foreign Registration" >
<meta name="description" content="Online Foreign Registration">
<meta name="author" content="JanTech Edward Jude Jeferey">

<!-- FONTS -->
<link href="assets/css/font_css1.css" rel="stylesheet" type="text/css">

<!--MAIN STYLE-->
<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="assets/css/main.css" rel="stylesheet" type="text/css">
<link href="assets/css/style.css" rel="stylesheet" type="text/css">
<link href="assets/css/animate.css" rel="stylesheet" type="text/css">
<link href="assets/css/responsive.css" rel="stylesheet" type="text/css">
<link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="assets/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
<![endif]-->

</head>
<body>
<!-- Page Wrap ===========================================-->
<div id="wrap"> 
  
  <!--======= TOP BAR =========-->
  <div class="top-bar">
    <div class="container">
      <ul class="left-bar-side">
        <li> <a href="admin/login.php"><i class="fa fa-lock"></i> Login</a> </li>
        <li> <a href="admin/login.php"><i class="fa fa-user"></i> My Account</a> </li>
        <!-- <li> <a href="#."><i class="fa fa-heart"></i> My Favourites </a></li> -->
      </ul>
      <ul class="right-bar-side social_icons">
        <li class="facebook"> <a href="#"><i class="fa fa-facebook"></i> </a></li>
        <li class="twitter"> <a href="#"><i class="fa fa-twitter"></i> </a></li>
        <li class="linkedin"> <a href="#"><i class="fa fa-linkedin"></i> </a></li>
        <li class="tumblr"> <a href="#"><i class="fa fa-tumblr"></i> </a></li>
      </ul>
    </div>
  </div>
  
  <!--======= HEADER =========-->
  <header>
    <div class="container"> 
      <!--======= LOGO =========-->
      <div class="logo"> <a href="#."><img src="assets/images/logo.png" alt="" ></a> </div>
      <!--======= SEARCH =========-->
      <!-- <div class="search">
        <input class="form-control" placeholder="Enter your keyword...">
        <button type="submit"><i class="fa fa-search"></i></button>
      </div> -->
    </div>
    
    <!--======= NAV =========-->
    <nav>
      <div class="container"> 
        
        <!-- ======= MENU START =========-->
        <ul class="ownmenu">
          <li <?php if(isset($pageNo) && $pageNo=="1") echo 'class="active"'; ?>><a href="index.php">Home</a></li>
          <li <?php if(isset($pageNo) && $pageNo=="2") echo 'class="active"'; ?>><a href="#">Immigration</a>
            <ul class="dropdown">
              <li><a href="immigration.php?view=about-immigration">About Immigration</a></li>
              <li><a href="register_online.php">Register Online</a></li>
              <li><a href="immigration.php?view=supporting-document">Supporting document</a></li>
              <li><a href="immigration.php?view=foreigners">Foreigners</a></li>
            </ul>
          </li>
          <li <?php if(isset($pageNo) && $pageNo=="3") echo 'class="active"'; ?>><a href="#">More Services</a>
            <ul class="dropdown">
              <li><a href="more_services.php?view=environment-and-natural-resources">Environment and natural resources</a></li>
              <li><a href="more_services.php?view=national-security-and-defence">National security and defence</a></li>
              <li><a href="more_services.php?view=culture-history-and-sport">Culture, history and sport</a></li>
              <li><a href="more_services.php?view=transport-and-infrastructure">Transport and infrastructure</a></li>
              <li><a href="more_services.php?view=money-and-finance">Money and finance</a></li>
            </ul>
          </li>          
          <li <?php if(isset($pageNo) && $pageNo=="4") echo 'class="active"'; ?>><a href="#">Study</a>
            <ul class="dropdown">
              <li><a href="study.php?view=study-in-congo">Study in Congo</a></li>
              <li><a href="study.php?view=learning-french">Learning french</a></li>
            </ul>
          </li>
          <li <?php if(isset($pageNo) && $pageNo=="5") echo 'class="active"'; ?>><a href="contact.php">Contact us</a></li>
          <li <?php if(isset($pageNo) && $pageNo=="6") echo 'class="active"'; ?>><a href="developer.php">Developer</a></li>
        </ul>
        
        <!--======= SUBMIT COUPON =========-->
        <div class="sub-nav-co"> <a href="register_online.php">Register Online</a> </div>
      </div>
    </nav>
  </header>

  <?php 
    if(isset($pageNo) && $pageNo!="1")
    { 
  ?>
  <!--======= BANNER =========-->
  <section class="sub-banner" style="margin-bottom: -5px; ">
    <div class="overlay">
      <div class="container">
        <h2><?php echo $pageName; ?></h2>
        <ul class="sub-nav">
          <li><a href="index.php"><i class="fa fa-home"></i></a> / </li>
          <li><a href="#"><?php echo $pageName; ?></a></li>
        </ul>
      </div>
    </div>
  </section>
  <?php
    }
  ?>