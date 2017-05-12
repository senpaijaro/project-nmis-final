        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
          <h5 class="pull-right"><i class="fa fa-dashboard"></i><a href="<?php echo base_url()?>admin"> Dashboard</a><a href="<?php echo base_url()?>Settings"> <i class="fa fa-arrow-right"></i> Settings</a></h5>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="">
                    <h2>Settings</h2>
                    <hr>
                  </div>
                  <div class="x_content">
                  <?php extract($showsettings); ?>
                  <div class="col-md-1 col-xs-12 col-sm-12"></div>
                  <div class="col-md-10 col-xs-12 col-sm-12">
                  <div class="col-md-12 col-xs-12 col-sm-12">
                    <div class="profile_pic">
                    <center>
                         <img style="height:150px;width:150px;margin-bottom:10px;margin-left:100%;" src="<?php echo $login_logo?>" alt="..." class="img-circle profile_img">
                        </div>
                    </center>
                  </div>
                    <?php $attribute = array('class'=>'form-horizontal form-label-left', 'novalidate'=>'');?>
                    <?php echo form_open_multipart('Settings/updateLogo',$attribute);?>
                       <div class="form-group">
                          <input type="hidden" name="id" value="<?php echo $id?>">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Login Logo<span class="required">*</span>
                            </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" class="form-control col-md-7 col-xs-12" name="userfile" required=""><br><br>
                          <button type="submit" class="animated fadeInLeft btn btn-success pull-right flat "><i class="fa fa-save"></i> Changes save</button>
                          </div>
                        </div>
                        <div class="clearfix"></div>
                    <?php echo form_close()?>
                    <?php $attribute = array('class'=>'form-horizontal form-label-left', 'novalidate'=>'');?>
                    <?php echo form_open('Settings/updateSettings',$attribute);?>
                        <input type="hidden" name="id" value="<?php echo $id?>">
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Title Page<span class="required"> *</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input  class="form-control col-md-7 col-xs-12" data-validate-words="0" name="title_page" type="text" value="<?php echo $title_page?>" required="required">
                            </div>
                          </div>
                          <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Home Navbar Title<span class="required"> *</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input  class="form-control col-md-7 col-xs-12" data-validate-words="0" name="home_page_title" type="text" value="<?php echo $home_page_title?>" required="required">
                            </div>
                          </div>
                          <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Admin Navbar Title<span class="required"> *</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input  class="form-control col-md-7 col-xs-12" data-validate-words="0" name="admin_page_title" type="text" value="<?php echo $admin_page_title?>" required="required">
                            </div>
                          </div>
                          <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Footer<span class="required"> *</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <textarea  class="form-control col-md-7 col-xs-12" required="required" name="footer" type="text" style="resize:none;height:78px;" required="required"><?php echo $footer?></textarea>
                              <hr><hr><hr>
                              <button type="submit" class="animated fadeInLeft btn btn-success pull-right flat "><i class="fa fa-save"></i> Changes save</button>
                            </div>
                          </div>
                      <?php echo form_close();?>
                   </div>
                        
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
        <?php include 'message.php'; ?>
