        <!-- page content -->
        <div class="right_col" role="main">
          <h5 class="pull-right"><i class="fa fa-dashboard"></i><a href="<?php echo base_url()?>admin"> Dashboard</a><a href="<?php echo base_url()?>Showuser"> <i class="fa fa-arrow-right"></i> <i class="fa fa-user"></i> Accounts user</a></h5>  
          <div class=""> 
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="">
                    <button type="button" class="btn btn-primary btn-xl flat" data-toggle="modal" data-target="#myModal">
                     <i class="fa fa-plus"></i> user
                    </button>
                    <?php include 'add-user.php'; ?>
                    <hr>
                  </div>
                  <div class="x_content">
                       <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th width="5%">#</th>
                          <th>Region</th>
                          <th>Division</th>
                          <th>Fullname</th>
                          <th>Username</th>
                          <th width="5%">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $c = 1;?> 
                      <?php foreach($showuser as $row):?>
                        <tr>
                          <td><?php echo $c++ ?></td>
                          <td><?php echo $row->region ?></td>
                          <td><?php echo $row->division ?></td>
                          <td><?php echo $row->firstname; echo ' '; echo $row->lastname; ?></td>
                          <td><?php echo $row->username ?></td>
                          <td>
                            <a href="<?php echo base_url()?>Showprofileuser/<?php echo $row->user_id?>" class="animated fadeInLeft btn btn-primary flat"><i class="fa fa-eye"></i> View</a>
                          </td>
                        </tr>
                      <?php endforeach?>
                      </tbody>
                      </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
        <?php include 'message.php'; ?>