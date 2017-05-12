       <?php extract($showrequest);?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="">
                    <h1>Update Request</h1>
                    <hr>
                  </div>
                  <div class="x_content">
                    <?php $attribute = array('class'=>'form-horizontal form-label-left', 'novalidate'=>'');?>
                    <?php echo form_open('user/Updaterequest',$attribute);?>
                    <input type="hidden" name="id" value="<?php echo $id;?>">
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Region <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" readonly  value="<?php echo $_SESSION['region']?>" >
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Divison <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" readonly  value="<?php echo $_SESSION['division']?>">
                        </div>
                      </div>
                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Unit/Section <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12"   value="<?php echo $_SESSION['unit']?>"  placeholder="None" readonly="">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Client Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-words="2" value="<?php echo $client_name;?>" name="client_name" placeholder="Juan Dela Cruz" required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"><h2>Request Category</h2></label>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Required Date <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  id="txtdate" type="text" tabindex="-1" style="resize:none;" name="required_date" value="<?php echo $required_date;?>" class="form-control col-md-7 col-xs-12" required>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Type of service request <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select tabindex="-1" style="width:100%;" name="type_request" class="select3_single form-control col-md-7 col-xs-12" required="required" id="other">
                          <?php foreach ($showservice as $row): ?>
                          <option  value="<?php echo $type_request;?>"><?php echo $type_request;?></option>
                          <option value="<?php echo $row->service; ?>"><?php echo $row->service; ?></option>
                          <?php endforeach ?>
                          </select>
                        </div>
                      </div>
                      <!-- sepcify -->
                      <div class="item form-group" id="otherType"  hidden>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Specify <span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input class="form-control col-md-7 col-xs-12" id="specify" name="specify"  />
                      </div>
                      </div>
                      <!-- end -->
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Detailed Description <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="textarea" required="required"  style="resize:none;" name="detailed_desc" class="form-control col-md-7 col-xs-12"><?php echo $detailed_desc;?></textarea>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button  type="submit" class="btn btn-success flat pull-right"><i class="fa fa-save"></i> Submit</button>
                          <a  href="<?php echo base_url();?>processing" class="btn btn-primary flat pull-right"><i class="fa fa-backward"></i> Back</a>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
        <?php include 'message.php';?>