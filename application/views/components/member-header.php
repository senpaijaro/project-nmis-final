<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $res['title']?></title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url()?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url()?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url()?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Sweeralert -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/sweetalert/dist/sweetalert.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/sweetalert/themes/twitter/twitter.css">
    <script src="<?php echo base_url();?>assets/sweetalert/dist/sweetalert.min.js"></script>
    <!-- SELECT 2 -->
    <link href="<?php echo base_url();?>assets/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/src/jquery-ui/jquery-ui.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url();?>assets/vendors/animate.css/animate.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url()?>assets/build/css/custom.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/build/css/stylecustom.css" rel="stylesheet">
      <!-- Datatables -->
    <link href="<?php echo base_url();?>assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo base_url()?>home" class="site_title"><i class="fa fa-user"></i> <?php echo $res['home_page_title']?><span></span></a>
            </div>

            <div class="clearfix"></div>

            <br />
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                 <li><a href="<?php echo base_url();?>home"><i class="fa fa-home"></i> Home</a></li>
                  <li><a><i class="fa fa-history"></i> Request History <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url();?>processing">Processing</a></li>
                      <li><a href="<?php echo base_url();?>Cancelled">Cancelled</a></li>
                      <li><a href="<?php echo base_url();?>Completed">Completed</a></li>
                    </ul>
                  </li>
                 <li><a href="<?php echo base_url();?>contact"><i class="fa fa-user"></i> Contact IT</a></li>
                 <li><a href="<?php echo base_url();?>logout"><i class="fa fa-sign-out"></i> Logout</a></li>
                  
              </div>
            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <ul class="nav navbar-nav navbar-right">
                <li class=""><a href=""><h6><?php echo '<label style="padding:10px;font-weight:bolder;" class="label label-danger flat">Welcome, '.$_SESSION['division'].'</label>';?></h6></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->