       <?php extract($showrequest);?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
          <h5 class="pull-right"><i class="fa fa-dashboard"></i><a href="<?php echo base_url()?>home"> Home </a><i class="fa fa-arrow-right"></i><a href="<?php echo base_url()?>Cancelled"> Cancelled</a> <a class="active"> <i class="fa fa-arrow-right"></i> <i class="fa fa-user"></i> View cancelled</h5></a>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="">
                    <h1>Cancelled Request</h1>
                    <hr>
                  </div>
                  <div class="x_content">
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                    <form >
                      <div class="form-group">
                        <label>Region</label>
                        <input type="text" class="form-control" readonly value="<?php echo $region?>">
                      </div>
                      <div class="form-group">
                        <label>Division</label>
                        <input type="text" class="form-control" readonly value="<?php echo $division?>">
                      </div>
                      <div class="form-group">
                        <label>Unit/Section</label>
                        <input type="text" class="form-control" readonly value="<?php echo $unit?>" placeholder="None">
                      </div>
                      <div class="form-group">
                        <label>Request Number</label>
                        <input type="text" class="form-control" readonly value="<?php echo $req_number ?>">
                      </div>
                      <div class="form-group">
                        <label>Client Name</label>
                        <input type="text" class="form-control" readonly value="<?php echo $client_name?>">
                      </div>
                      <div class="form-group">
                        <label>Type service</label>
                        <input type="text" class="form-control" readonly value="<?php echo $type_request?>">
                      </div>
                      <div class="form-group">
                        <label>Detailed Description</label>
                        <textarea class="form-control" readonly value="<?php ?>" style="resize:none;"><?php echo $detailed_desc;?></textarea>
                      </div>
                    </form>
                    </div>


                   <div class="col-md-5">
                      <input type="hidden" name="id" value="<?php echo $id?>">
                      <div class="form-group">
                        <label>Request description</label>
                        <textarea class="form-control" readonly style="resize:none;height:68px;"  placeholder="None" value="<?php echo $request_description?>"></textarea>
                      </div>
                      <div class="form-group">
                        <label>Recommendation</label>
                        <textarea class="form-control" readonly style="resize:none;height:68px;"  placeholder="None" value="<?php echo $recommendation?>"></textarea>
                      </div>
                      <div class="form-group">
                        <label>Recommended by</label>
                        <input class="form-control" required="required" data-validate-length="1"  readonly value="<?php echo $recommended_by?>" required="required">
                      </div>
                      <div class="form-group">
                        <label>Request Status</label>
                        <input class="form-control" readonly value="<?php echo $status?>">
                      </div>
                      <div class="form-group">
                        <label>Reason Cancalled</label>
                       <textarea class="form-control" readonly style="resize:none;"  placeholder="None" value="<?php echo $action_reason?>"></textarea>
                     </div>
                      <div class="form-group">
                        <label>Name</label>
                        <input class="form-control" required="required" readonly value="<?php echo $updated_by?>">
                        <br>
                        <a href="#" class="btn btn-primary flat pull-right"><i class="fa fa-print"></i> Click to Print </a>
                      </div>
                    </form>
                    </div>


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
        <?php include 'message.php';?>