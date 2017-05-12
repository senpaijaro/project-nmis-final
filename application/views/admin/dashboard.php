        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="">
                    <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
                    <hr>
                  </div>
                  <div class="x_content">
                    <div class="col-md-12">
                           <h3>Status Request</h3>
                            <div class="animated flipInY col-lg-4 col-md-3 col-sm-6 col-xs-12 ">
                                <div class="tile-stats alert alert-info flat">
                                  <div class="icon "><i class="fa fa-refresh"></i></div>
                                  <div class="count"><?php echo $process ?></div>
                                  <a href="<?php echo base_url();?>Requested"><h3 style="color:white;">Request</h3></div>
                                </a>
                              </div>
                              <div class="animated flipInY col-lg-4 col-md-3 col-sm-6 col-xs-12">
                                <div class="tile-stats alert alert-success flat">
                                  <div class="icon"><i class="fa fa-check"></i></div>
                                  <div class="count"><?php echo $completed ?></div>
                                  <a href="<?php echo base_url();?>Showcompleted"><h3 style="color:white;">Completed</h3></a>
                                </div>
                              </div>
                              <div class="animated flipInY col-lg-4 col-md-3 col-sm-6 col-xs-12">
                                <div class="tile-stats alert alert-danger flat">
                                  <div class="icon"><i class="fa fa-trash"></i></div>
                                  <div class="count"><?php echo $cancelled ?></div>
                                  <a href="<?php echo base_url();?>Showcancelled"><h3 style="color:white;">Cancelled</h3></a>
                                </div>
                              </div>
                            </div>

                             <div class="col-md-12">
                           <h3>Accounts</h3>
                            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
                                <div class="tile-stats alert alert-success flat">
                                  <div class="icon "><i class="fa fa-user"></i></div>
                                  <div class="count"><?php echo $count_user; ?></div>
                                  <a href="<?php echo base_url();?>Showuser"><h3 style="color:white;font-size:23px;">Active user</h3></a>
                                  </div>
                              </div>
                              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="tile-stats alert alert-success flat">
                                  <div class="icon"><i class="fa fa-user"></i></div>
                                  <div class="count"><?php echo $count_admin ?></div>
                                  <a href="<?php echo base_url();?>ShowAdministrator"><h3 style="color:white;font-size:23px;">Active Admin</h3></a>
                                </div>
                              </div>
                              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="tile-stats alert alert-danger flat">
                                  <div class="icon"><i class="fa fa-user"></i></div>
                                  <div class="count"><?php echo $deact_user;?></div>
                                  <h3 style="color:white;font-size:23px;">Deactivated user</h3>
                                </div>
                              </div>
                              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="tile-stats alert alert-danger flat">
                                  <div class="icon"><i class="fa fa-user"></i></div>
                                  <div class="count"><?php echo $deact_admin;?></div>
                                  <h3 style="color:white;font-size:23px;">Deactivated admin</h3>
                                </div>
                              </div>
                            </div>

                            </div>
                          </div>

              <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Upcoming request </h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <ul class="list-unstyled timeline">
                  <?php if($allrequest){ ?>
                   <?php foreach ($allrequest as $row): ?>
                    <?php
                    date_default_timezone_set('Asia/Manila');
                    $nows =  $row->date_hour;
                    $date1 = strtotime($row->date_hour);
                    $date2 = time();
                    $subTime = $date2 - $date1;
                    $y = ($subTime/(60*60*24*365));
                    $d = ($subTime/(60*60*24))%365;
                    $h = ($subTime/(60*60))%24;
                    $m = ($subTime/60)%60;
                    ?>
                    <li>
                      <div class="block">
                        <div class="tags">
                          <a href="<?php echo base_url();?>ShowRequested/<?php echo $row->id; ?>" class="tag">
                           <span><?php echo $nows; ?></span>
                          </a>
                        </div>
                        <div class="block_content">
                          <h2 class="title">
                           <span class="time pull-right"><small>
                           <?php echo $d." day\n"; echo $h." hours\n"; echo $m." minutes\n";?></small>
                           </span>
                              <a> <i class="glyphicon glyphicon-user"></i> <?php echo $row->client_name; ?></a>
                            </h2>
                          <p class="excerpt"><?php echo $row->type_request; ?></p>
                        </div>
                      </div>
                    </li>
                  <?php endforeach ?>
                  <?php } else { ?>
                  <div class="alert alert-danger flat"><strong> No Request found </strong></div>
                  <?php }?>
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
