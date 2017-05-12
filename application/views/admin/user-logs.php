        <!-- page content -->
        <div class="right_col" role="main">
          <h5 class="pull-right"><i class="fa fa-dashboard"></i><a href="<?php echo base_url()?>admin"> Dashboard</a><a href="<?php echo base_url()?>ShowLogs"> <i class="fa fa-arrow-right"></i> Admin Logs</a></h5>  
          <div class="">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="">
                    <h2>System logs</h2>
                    <hr>
                  </div>
                  <div class="x_content">
                       <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th width="4%">#</th>
                          <th>Date</th>
                          <th>Time</th>
                          <th>Details</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $c = 1;?> 
                      <?php foreach ($userlogs as $row): ?>
                        <tr>
                          <td><?php echo $c++;?></td>
                          <td><?php echo $row->date?></td>
                          <td><?php echo $row->time?></td>
                          <td><?php echo $row->details?></td>
                        </tr>
                      <?php endforeach ?>
                      </tbody>
                      </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
