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
    <link href="<?php echo base_url();?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url();?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url();?>assets/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url();?>assets/build/css/custom.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/build/css/stylecustom.css" rel="stylesheet">

  </head>

  <body class="login">
   <div class="login_wrapper">
        <div class="animate  login_form col-md-12">
          <section class="login_content ">
          <?php if(isset($_SESSION['errors'])){ echo "<div class='alert alert-danger flat'>".$_SESSION['errors']."</div>";}?>
          <?php if(isset($_SESSION['error'])){ echo "<div class='alert alert-danger flat'>".$_SESSION['error']."</div>";}?>
            <?php echo form_open('auth/login','novalidate');?>
               <h1>LOGIN <span class="fa fa-user"></span></h1>
              <div class="item"><input type="text" class="form-control" style="border-radius:0px;" placeholder="Username" data-validate-length="1,2,3,4,5" name="username"  required="" /></div>
              <div class="item"><input type="password" class="form-control" style="border-radius:0px;" placeholder="Password" data-validate-length="1,2,3,4,5" name="password"  required="" /></div>
              <div><button type="submit" class="btn btn-success submit col-md-12" style="border-radius:0px;">Log in</button></div><br>
            </form>
              <div><p><?php echo $res['footer'];?></p></div>
          </section>
        </div>
    <?php include 'admin/message.php';?>
    <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url();?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url();?>assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url();?>assets/vendors/nprogress/nprogress.js"></script>
    <!-- validator -->
    <script src="<?php echo base_url();?>assets/vendors/validator/validator.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url();?>assets/build/js/custom.min.js"></script>