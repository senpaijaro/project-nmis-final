                      <div class="tab-pane" id="profile"> 
                      <?php $attribute = array('class'=>'form-horizontal form-label-left', 'novalidate'=>'');?>
                        <?php echo form_open('Showadministrator/UpdateProfile',$attribute);?>
                          <input type="hidden" name="id" value="<?php echo $user_id?>">
                           <div class="item form-group">
                              <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Division <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <select tabindex="-1" style="width:100%;" name="division" class="select3_single form-control col-md-7 col-xs-12"  id="other"  required="">
                                <option value="<?php echo $division?>"><?php echo $division?></option>
                               <?php foreach ($divisions as $row): ?>
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
                                <input  class="form-control col-md-7 col-xs-12" data-validate-words="0" name="unit" type="text" value="<?php echo $unit_section?>">
                              </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="item form-group">
                              <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Firstname <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input  class="form-control col-md-7 col-xs-12" data-validate-words="0" name="firstname" data-validate-length="1" required="required" type="text" value="<?php echo $firstname?>">
                              </div>
                            </div>
                             <div class="clearfix"></div>
                            <div class="item form-group">
                              <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Lastname <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input  class="form-control col-md-7 col-xs-12" data-validate-words="0" name="lastname"  data-validate-length="1" required="required" type="text" value="<?php echo $lastname?>">
                              </div>
                            </div>
                           <div class="item form-group">
                              <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Gender <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <select tabindex="-1" style="width:100%;" name="gender" class="select3_single form-control col-md-7 col-xs-12"  id="other"  required="">
                                <option value="<?php echo $gender?>"><?php echo $gender?></option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                </select>
                              </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="item form-group">
                              <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Email <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="email" class="form-control col-md-7 col-xs-12" data-validate-words="0" name="email" data-validate-length-range="5,30" required="required" type="email" value="<?php echo $email?>"> 
                              </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="item form-group">
                              <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Username <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input class="form-control col-md-7 col-xs-12"  data-validate-words="0" name="username" data-validate-length="1,2,3,4,5" data-validate-minmax="6" required="required" type="text" value="<?php echo $username?>"> 
                              </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="item form-group">
                              <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Mobile # <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input  class="form-control col-md-7 col-xs-12" data-validate-words="0" name="number" data-validate-length-range="11,11" required="required" type="tel" value="<?php echo $number?>">
                                <hr>  
                                <button type="submit" class="btn btn-primary flat">Save changes</button>
                              </div>
                            </div>
                             <?php echo form_close();?>
                        </div>