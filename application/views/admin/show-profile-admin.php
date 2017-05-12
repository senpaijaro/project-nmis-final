     <?php extract($showprofile);?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
          <h5 class="pull-right"><i class="fa fa-dashboard"></i><a href="<?php echo base_url()?>admin"> Dashboard</a> <i class="fa fa-arrow-right"></i><a class="active"><i class="fa fa-user"></i><a href="<?php echo base_url()?>ShowAdministrator"> Administrator</a><a class="active"> <i class="fa fa-arrow-right"></i> <i class="fa fa-user"></i>Profile Administrator</h5></a>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="">
                  </div>
                  <div class="x_content">
                      
               <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bars"></i>Profile Administrator<small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div class="col-xs-3">
                      <!-- required for floating -->
                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs tabs-left">
                        <li class="active"><a href="#home" data-toggle="tab"><i class="fa fa-user"></i> Profile Information </a>
                        </li>
                        <li><a href="#profile" data-toggle="tab"><i class="fa fa-user"></i> Change Information</a>
                        </li>
                        <li><a href="#messages" data-toggle="tab"><i class="fa fa-lock"></i> Change password</a>
                        </li>
                      </ul>
                    </div>
                   
                    <div class="col-xs-9">
                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div class="tab-pane active" id="home">
                          <p class="lead"></p>
                          <div class="profile clearfix"></div>
                                      <div class="profile_pic">
                                      <center>
                                        <img style="width:80%;" src="<?php echo $image;?>" alt="..." class="img-circle profile_img" "><h4><a href="#" data-toggle="modal" data-target="#modal-upload<?php echo $user_id?>">Click to change picture</a></h4>
                                      </div>
                                   
                                      <div class="col-md-7 form-horizontal form-label-left">
                                       <div class="item form-group">
                                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Fullname
                                          </label>
                                          <div class="col-md-9 col-sm-6 col-xs-12">
                                            <input id="name" class="form-control col-md-7 col-xs-12" value="<?php echo $firstname; echo ' '; echo $lastname;?>" readonly>
                                          </div>
                                        </div>
                                        <div class="item form-group">
                                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Gender
                                          </label>
                                          <div class="col-md-9 col-sm-6 col-xs-12">
                                            <input id="name" class="form-control col-md-7 col-xs-12" value="<?php echo $gender?>" readonly>
                                          </div>
                                        </div>
                                        <div class="item form-group">
                                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Division
                                          </label>
                                          <div class="col-md-9 col-sm-6 col-xs-12">
                                            <input id="name" class="form-control col-md-7 col-xs-12" value="<?php echo $division?>" readonly>
                                          </div>
                                        </div>
                                        <div class="item form-group">
                                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Unit/Section
                                          </label>
                                          <div class="col-md-9 col-sm-6 col-xs-12">
                                            <input id="name" class="form-control col-md-7 col-xs-12" value="<?php echo $unit_section?>" readonly>
                                          </div>
                                        </div>
                                        <div class="item form-group">
                                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Username
                                          </label>
                                          <div class="col-md-9 col-sm-6 col-xs-12">
                                            <input id="name" class="form-control col-md-7 col-xs-12" value="<?php echo $username?>" readonly>
                                          </div>
                                        </div>
                                        <div class="item form-group">
                                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Email
                                          </label>
                                          <div class="col-md-9 col-sm-6 col-xs-12">
                                            <input id="name" class="form-control col-md-7 col-xs-12" value="<?php echo $email?>" readonly>
                                          </div>
                                        </div>
                                        <div class="item form-group">
                                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Mobile number
                                          </label>
                                          <div class="col-md-9 col-sm-6 col-xs-12">
                                            <input id="name" class="form-control col-md-7 col-xs-12" value="<?php echo $number?>" readonly>
                                          </div>
                                        </div>
                                        
                                        <br>
                                          <a href="#" onClick="show_confirm('deactivate_admin',<?php echo $user_id;?>)" class="animated fadeInLeft btn btn-danger pull-right flat"><i class="fa fa-trash"></i> Deactivate</a>
                                          <a href="<?php echo base_url()?>ShowAdministrator" class="animated fadeInLeft btn btn-primary pull-right flat"><i class="fa fa-backward"></i> Back</a>

                                      </div>
                        </div>
                        <?php include 'change-information-admin.php'; ?>
                        <?php include 'change-password.php';?>
                        <?php include 'change-picture.php'; ?>
                      </div>
                    </div>

                    <div class="clearfix"></div>

                  </div>
                </div>
              </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
<?php include 'message.php';?>


              