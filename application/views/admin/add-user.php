               <!-- Modal -->
                  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document" style="width:50%;">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="myModalLabel"><i class="fa fa-plus"></i> administrator</h4>
                        </div>
                        <div class="modal-body">
                        <?php $attribute = array('class'=>'form-horizontal form-label-left', 'novalidate'=>'');?>
                        <?php echo form_open('Showuser/addUser',$attribute);?>
                           <div class="item form-group">
                              <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Region <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <select tabindex="-1" style="width:100%;" name="region" class="select3_single form-control col-md-7 col-xs-12"  id="other"  required="">
                                <option value="">Select region</option>
                               <?php foreach ($region as $row): ?>
                                <option value="<?php echo $row->region;?>"><?php echo $row->region;?></option>
                               <?php endforeach ?>
                                </select>
                              </div>
                            </div>
                            <div class="clearfix"></div>
                           <div class="item form-group">
                              <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Division <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <select tabindex="-1" style="width:100%;" name="division" class="select3_single form-control col-md-7 col-xs-12"  id="other"  required="">
                                <option value="">Select division</option>
                               <?php foreach ($division as $row): ?>
                                <option value="<?php echo $row->division;?>"><?php echo $row->division;?></option>
                               <?php endforeach ?>
                                </select>
                              </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="item form-group">
                              <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Unit/Section <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input  class="form-control col-md-7 col-xs-12" data-validate-words="0" name="unit" type="text" placeholder="Optional">
                              </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="item form-group">
                              <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Firstname <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input  class="form-control col-md-7 col-xs-12" data-validate-words="0" name="firstname"  required="required" type="text">
                              </div>
                            </div>
                             <div class="clearfix"></div>
                            <div class="item form-group">
                              <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Lastname <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input  class="form-control col-md-7 col-xs-12" data-validate-words="0" name="lastname"  required="required" type="text">
                              </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="item form-group">
                              <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Username <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input  class="form-control col-md-7 col-xs-12" data-validate-words="0" name="username"  required="required" type="text">
                              </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="item form-group">
                              <label class="control-label col-md-2 col-sm-3 col-xs-12" for="password">Password<span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="password" type="password" name="password" data-validate-length="min4" class="form-control col-md-7 col-xs-12" required="required">
                              </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="item form-group">
                              <label class="control-label col-md-2 col-sm-3 col-xs-12" for="password">Confirm password<span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                               <input id="password2" type="password" name="cpassword" data-validate-linked="password" class="form-control col-md-7 col-xs-12" required="required">
                              </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default flat" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary flat" ng-disabled="!process.$valid">Save changes</button>
                          <?php echo form_close();?>
                        </div>
                      </div>
                    </div>
                  </div>