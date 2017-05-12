        <!-- page content -->

        <div class="right_col" role="main">
        <h5 class="pull-right"><i class="fa fa-dashboard"></i><a href="<?php echo base_url()?>admin"> Dashboard</a><a href="<?php echo base_url()?>ShowDivision"> <i class="fa fa-arrow-right"></i> Region</a></h5>  
          <div class="">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="">
                    
                     <!-- Modal Add-->
                     <h2><button type="button" class="btn btn-primary btn-xl flat" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Region
                     </button></h2>
                  <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" id="myModal" aria-hidden="true">
                    <div class="modal-dialog" style="width:50%;">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel"><i class="fa fa-plus"></i> Region</h4>
                        </div>
                        <div class="modal-body">
                          <?php 
                                  $attribute = array('class'=>'form-horizontal form-label-left', 'novalidate'=>'');
                                  echo form_open('region/addRegion',$attribute);
                              ?>
                                <div class="item form-group">
                                  <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Region <span class="required">*</span>
                                  </label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input  class="form-control col-md-7 col-xs-12" data-validate-words="0" name="region"  required="required" type="text">
                                  </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                              <button type="submit" class="btn btn-default flat" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary flat">Save changes</button>
                              <?php echo form_close();?>
                        </div>
                      </div>
                    </div>
                  </div>
                      <!-- close modal add-->

                  
                    <hr>
                  </div>
                  <div class="x_content">
                      <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th width="10%">#</th>
                          <th>Divsion</th>
                          <th width="10%">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $c = 1; ?>
                      <?php foreach ($showregion as $row): ?>
                        <tr>
                          <td><?php echo $c++;?></td>
                          <td><?php echo $row->region;?></td>
                          <td>
                            <button class="animated fadeInLeft btn btn-info flat" data-toggle="modal" data-target="#myModalEdit<?php echo $row->id;?>"><i class="fa fa-pencil"></i> Edit</button>
                            <a href="#" onClick="show_confirm('DeleteRegion',<?php echo $row->id;?>)" class="animated fadeInLeft btn btn-danger flat"><i class="fa fa-trash"></i> Delete</a>
                          </td>
                        </tr>

                   <!-- modal edit -->
                  <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" id="myModalEdit<?php echo $row->id;?>" aria-hidden="true">
                    <div class="modal-dialog" style="width:50%;">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel"><i class="fa fa-plus"></i> Region</h4>
                        </div>
                        <div class="modal-body">
                          <?php 
                                  $attribute = array('class'=>'form-horizontal form-label-left', 'novalidate'=>'');
                                  echo form_open('region/updateRegion',$attribute);
                              ?>
                              <input type="hidden" name="id" value="<?php echo $row->id?>">
                                <div class="item form-group">
                                  <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Region <span class="required">*</span>
                                  </label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-7 col-xs-12" value="<?php echo $row->region?>" name="region"  required="required" type="text">
                                  </div>
                                </div>
                            </div><br>
                            <div class="modal-footer">
                              <button type="submit" class="btn btn-default flat" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary flat">Save changes</button>
                              <?php echo form_close();?>
                        </div>
                      </div>
                    </div>
                  </div>
                      <!-- close modal -->
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
      <?php include 'message.php';?>
