<?php 

  if(isset($_SESSION['role'])):
        if($_SESSION['role'] == 0) { redirect('Dashboard'); }
        if($_SESSION['role'] == 1) { redirect('home');}
  endif; 
?>
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
    <link rel="icon" href="<?php echo base_url();?>images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="<?php echo base_url();?>images/favicon.ico" type="image/x-icon" />
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

  <style>
h1{
  margin-left: 23px;
}
input[type=text], input[type=password] {
    width: 100%;
    padding: 10px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 22%;
    height: 160px;
    border-radius: 50%;
}
@media only screen and (min-device-width: 400px) {
  img.avatar{

  }
}
.container {
    padding: 16px;
}

</style>
</head>
<body class="login"><br><br>
<div class="col-md-4"></div>
<div class="col-md-8 col-sm-12 col-xs-12">
    <img src="<?php echo $res['login_logo'];?>" alt="Avatar" class="avatar col-md-12">
<h1 class="col-md-12 col-sm-12 col-xs-12">Login <i class="fa fa-user"></i></h1>

<?php echo form_open('auth/login','novalidate');?>

  <div class="container">
  <?php if(isset($_SESSION['errors'])){ echo "<strong><div class='alert alert-danger flat col-md-5 col-sm-12 col-xs-12'>".$_SESSION['errors']."</div>";}?>
  <?php if(isset($_SESSION['error'])){ echo "<div class='alert alert-danger flat col-md-5 col-sm-12 col-xs-12'>".$_SESSION['error']."</div></strong>";}?>
  <div class="col-md-8"></div>  
          
    <div class="item col-md-5 col-sm-12 col-xs-12">
    <label><b>Username</b></label>
    <input type="text"  placeholder="Enter Username" name="username" data-validate-length="1,2,3,4,5" required>
    </div>
    <div class="col-md-8"></div>
    <div class="item col-md-5 col-sm-12 col-xs-12">
    <label><b>Password</b></label>
    <input type="password"  placeholder="Enter Password" name="password" data-validate-length="1,2,3,4,5" required>
     </div>   
    <div class="col-md-8"></div>
     <div class="col-md-5">
     <button type="submit" class="btn btn-success col-md-12 flat">Login</button>
      <br><br><br>
    <div><p><?php echo $res['footer'];?></p></div>
    </div>
  </div>

</form>

</body>
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
</html>
