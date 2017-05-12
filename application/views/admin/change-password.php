                        <div class="tab-pane" id="messages">
                        <?php $attribute = array('class'=>'form-horizontal form-label-left', 'novalidate'=>'');?>
                        <?php echo form_open('Showadministrator/changepassword',$attribute);?>
                          <input type="hidden" name="id" value="<?php echo $user_id?>">
                          <input type="hidden" name="username" value="<?php echo $username?>">
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
                               <input id="password2" type="password" name="cpassword" data-validate-linked="password" class="form-control col-md-7 col-xs-12" required="required"><hr>
                               <button type="submit" class="btn btn-primary flat" ng-disabled="!process.$valid">Save changes</button>
                              </div>
                            </div>
                            <?php echo form_close(); ?>
                        </div>