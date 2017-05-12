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
                        <?php echo form_open('Showadministrator/addAdministrator',$attribute);?>
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
                                <input  class="form-control col-md-7 col-xs-12" name="firstname" data-validate-length="1" required="required" type="text">
                              </div>
                            </div>
                             <div class="clearfix"></div>
                            <div class="item form-group">
                              <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Lastname <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input  class="form-control col-md-7 col-xs-12" name="lastname" data-validate-length="1" required="required" type="text">
                              </div>
                            </div>
                           <div class="item form-group">
                              <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Gender <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <select tabindex="-1" style="width:100%;" name="gender" class="select3_single form-control col-md-7 col-xs-12"  id="other"  required="">
                                <option value="">Select gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                </select>
                              </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="item form-group">
                              <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Username <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input  class="form-control col-md-7 col-xs-12" data-validate-words="0" name="username" data-validate-length="1,2,3,4,5" required="required" type="text">
                              </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="item form-group">
                              <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Email <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="email" class="form-control col-md-7 col-xs-12" data-validate-words="1" name="email"  required="required" type="email">
                              </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="item form-group">
                              <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Mobile # <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input  class="form-control col-md-7 col-xs-12" data-validate-words="0" name="number" data-validate-length="1,2,3,4,5,6,7,8,9,10,12,13,14,15,16,17,1,19,20" required="required" type="tel">
                              </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="item form-group">
                              <label class="control-label col-md-2 col-sm-3 col-xs-12" for="password">Password<span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="password" type="password" name="password" data-validate-length="1,2,3,4,5" class="form-control col-md-7 col-xs-12" required="required">
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