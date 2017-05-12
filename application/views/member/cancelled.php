        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
          <h5 class="pull-right"><i class="fa fa-dashboard"></i><a href="<?php echo base_url()?>home"> home</a><a class="active"> <i class="fa fa-arrow-right"></i> <i class="fa fa-user"></i> Cancelled</h5></a>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="">
                    <h1>Cancelled</h1>
                    <hr>
                  </div>
                  <div class="x_content">
                       <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Requested Date</th>
                          <th>Request Number</th>
                          <th>Region</th>
                          <th>Division</th>
                          <th>Client Name</th>
                          <th>Required Date</th>
                          <th>Type Request</th>
                          <th width="4%">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $c = 1;?> 
                      <?php foreach ($showcancelled as $row): ?>
                        <tr>
                          <td><?php echo $c++;?></td>
                          <td><?php echo $row->req_date;?></td>
                          <td><?php echo $row->req_number;?></td>
                          <td><?php echo $row->region;?></td>
                          <td><?php echo $row->division;?></td>
                          <td><?php echo $row->client_name;?></td>
                          <td><?php echo $row->required_date;?></td>
                          <td>
                            <a href="<?php echo base_url();?>ViewCancelled/<?php echo $row->id; ?>" class="animated fadeInLeft btn btn-primary flat" style="padding:4px;"><i class="fa fa-eye"></i> View</a>
                          </td>
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
