        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
          <h5 class="pull-right"><i class="fa fa-dashboard"></i><a href="<?php echo base_url()?>home"> home</a><a class="active"> <i class="fa fa-arrow-right"></i> <i class="fa fa-user"></i> Contact</h5></a>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="">
                    <h1><i class="fa fa-user"></i> Contact</h1>
                    <hr>
                  </div>
                  <div class="x_content">

                      <div class="col-md-12 col-sm-12 col-xs-12 text-center"></div>
                      <div class="clearfix"></div>
                      <div class="col-md-12 col-sm-12 col-xs-12 text-center"></div>
                      <div class="clearfix"></div>
                     <div class="col-md-12 col-sm-12 col-xs-12 text-center"></div>
                      <div class="clearfix"></div>
                      <div class="col-md-12 col-sm-12 col-xs-12 text-center"></div>
                      <div class="clearfix"></div>
                      <!-- contacts containter -->
                  <?php if($showadmin){ ?>
                  <?php foreach ($showadmin as $row): ?>
                      <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                        <div class="well profile_view">
                          <div class="col-sm-12">
                            <div class="left col-xs-7">
                              <h2><?php echo $row->firstname; echo ' '; echo $row->lastname;?></h2><br>
                              <strong>Mobile #: </strong><p><?php echo $row->number ?></p>
                               <strong>Email : </strong><p><?php echo $row->email ?> </p>
                            </div>
                            <div class="right col-xs-5 text-center">
                              <img src="<?php echo $row->image;?>" style="height:100px;width:100%;" alt="" class="img-circle img-responsive">
                            </div>
                          </div>
                          <div class="col-xs-12 bottom text-center">
                            <div class="col-xs-12 col-sm-6 emphasis">
                              PIMD / IT PLANNING
                            </div>
                            <div class="col-xs-12 col-sm-6 emphasis">
                              
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- end contacts containter -->
                    <?php endforeach ?>
                    <?php }else{?>
                          <div class='alert alert-danger alert-dismissible fade in flat animated fadeInDown' role='alert'>
                               <strong>No Display contact</strong>
                          </div>
                    <?php }?>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
                      <?php include 'message.php'; ?>
