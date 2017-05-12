     <?php extract($showprofile);?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
          <h5 class="pull-right"><i class="fa fa-dashboard"></i><a href="<?php echo base_url()?>admin"> Dashboard </a><i class="fa fa-arrow-right"></i><i class="fa fa-user"></i><a href="<?php echo base_url()?>Showuser"> User </a><a href="<?php echo base_url()?>Showprofileuser/<?php echo $user_id?>"> <i class="fa fa-arrow-right"></i> <i class="fa fa-user"></i> User profile</a></h5>  
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="">
                  </div>
                  <div class="x_content">
                      
               <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bars"></i> User profile<small></small></h2>
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
                                    <?php $attribute = array('class'=>'form-horizontal form-label-left', 'novalidate'=>'');?>
                                    <?php echo form_open('Showuser/UpdateProfile',$attribute);?>
                                    <input type="hidden" name="id" value="<?php echo $user_id?>">
                                       <div class="item form-group">
                                          <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Firstname <span class="required"> *</span>
                                          </label>
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="name" class="form-control col-md-6 col-xs-12" value="<?php echo $firstname;?>" type="text" name="firstname" required="required">
                                          </div>
                                        </div>
                                        <div class="item form-group">
                                          <label class="control-label col-md-2 col-sm-2 col-xs-12" for="name">Lastname <span class="required"> *</span>
                                          </label>
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="name" class="form-control col-md-6 col-xs-12" value="<?php echo $lastname;?>" type="text" name="lastname" required="required">
                                          </div>
                                        </div>
                                        <div class="item form-group">
                                          <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Region <span class="required">*</span>
                                          </label>
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select tabindex="-1" style="width:100%;" name="region" class="select3_single form-control col-md-7 col-xs-12"  id="other"  required="">
                                            <option value="<?php echo $region?>"><?php echo $region?></option>
                                           <?php foreach ($regions as $row): ?>
                                            <option value="<?php echo $row->region;?>"><?php echo $row->region;?></option>
                                           <?php endforeach ?>
                                            </select>
                                          </div>
                                        </div>
                                        <div class="item form-group">
                                          <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Division <span class="required">*</span>
                                          </label>
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select tabindex="-1" style="width:100%;" name="division" class="select3_single form-control col-md-7 col-xs-12"  id="other"  required="">
                                            <option value="<?php echo $division?>"><?php echo $division?></option>
                                           <?php foreach ($divisions as $row): ?>
                                            <option value="<?php echo $row->division;?>"><?php echo $row->division;?></option>
                                           <?php endforeach ?>
                                            </select>
                                          </div>
                                        </div>
                                        <div class="item form-group">
                                          <label class="control-label col-md-2 col-sm-2 col-xs-12" for="name">Unit/Section <span class="required"> *</span>
                                          </label>
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="name" class="form-control col-md-6 col-xs-12" value="<?php echo $unit_section?>" type="text" name="unit"  placeholder="No available">
                                          </div>
                                        </div>
                                        <div class="item form-group">
                                          <label class="control-label col-md-2 col-sm-2 col-xs-12" for="name">Username <span class="required"> *</span>
                                          </label>
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="name" class="form-control col-md-6 col-xs-12" value="<?php echo $username?>" type="text" name="username" required="required">
                                          <hr>
                                          <button class="animated fadeInLeft btn btn-success pull-right flat"><i class="fa fa-save"></i>Save changes</button>
                                          <a href="#" onClick="show_confirm('deactivate_admin',<?php echo $user_id;?>)" class="animated fadeInLeft btn btn-danger pull-right flat"><i class="fa fa-trash"></i>Deactivate</a>
                                          <a href="<?php echo base_url()?>Showuser" class="animated fadeInLeft btn btn-primary pull-right flat"><i class="fa fa-backward"></i>Back</a>
                                          </div>
                                        </div>
                        </div>
                        <?php include 'change-picture.php'; ?>
                        <?php include 'change-password-user.php';?>

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

              