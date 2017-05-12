       <?php extract($showrequest);?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
          <h5 class="pull-right"><i class="fa fa-dashboard"></i><a href="<?php echo base_url()?>Dashboard"> Dashboard</a> <i class="fa fa-arrow-right"></i><a class="active"><i class="fa fa-user"></i><a href="<?php echo base_url()?>Requested"> Requested</a><a class="active"> <i class="fa fa-arrow-right"></i> <i class="fa fa-user"></i>View Requested</h5></a>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="">
                    <h1>Update Request</h1>
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
                    <?php $attribute = array('class'=>'form-horizontal form-label-left', 'novalidate'=>'');?>
                    <?php echo form_open('requested/UpdatedRequest',$attribute);?>
                      <input type="hidden" name="id" value="<?php echo $id?>">
                      <input type="hidden" name="fullname" value="<?php echo $client_name;?>">
                      <div class="form-group col-md-12">
                        <label>Request description <span class="required"> *</span></label>
                        <textarea type="text" class="form-control" style="resize:none;height:68px;" name="req_description"></textarea>
                        </div>
                      <div class="col-md-12">
                        <label>Recommendation <span class="required"> *</span></label>
                        <textarea type="text" class="form-control" style="resize:none;height:68px;" name="recommendation"></textarea>
                      </div>
                      <div class="form-group col-md-12">
                        <label>Recommended by<span class="required"> *</span></label>
                        <input type="text" class="form-control"  name="recommended_by" value="<?php echo $recommended_by?>" >
                      </div>
                      <div class="item form-group col-md-12">
                        <label>Request Status <span class="required"> *</span></label>
                        <select tabindex="-1" style="width:100%;" name="status" class="select3_single form-control" required="required" id="completed">
                          <option value=""></option>
                          <option value="Completed">Completed</option>
                          <option value="Cancelled">Cancelled</option>
                         </select>
                      </div>
                      <div class="form-group  col-md-12" id="status" hidden>
                        <label>Action taken<span class="required"> *</span></label>
                        <textarea class="form-control"  style="resize:none;"  name="action_taken"><?php echo $action_reason?></textarea>
                      </div>
                      <div class="form-group col-md-12" id="status1" hidden>
                        <label>Reason Cancelled<span class="required"> *</span></label>
                        <textarea class="form-control"  style="resize:none;"   name="reason_cancelled"><?php echo $action_reason?></textarea>
                      </div>
                        <div class="item form-group col-md-12">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="Input your name before update this status" name="updated_by" data-validate-length="1" required="required" value="<?php echo $updated_by?>">
                      </div>
                       <button type="submit" class="btn btn-success flat pull-right"><i class="fa fa-save"></i> Save Changes</button>
                        <a href="<?php echo base_url();?>Requested" class="btn btn-primary flat pull-right"><i class="fa fa-backward"></i> Back </a>
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