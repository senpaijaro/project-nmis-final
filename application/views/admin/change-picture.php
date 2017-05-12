                       <!-- Modal -->
                      <div class="modal fade" id="modal-upload<?php echo $user_id?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="file">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title" id="myModalLabel">Change profile picture</h4>
                            </div>
                            <div class="modal-body">
                             <?php echo form_open_multipart('Showadministrator/updatePicture');?>
                            <input type="hidden" name="id" value="<?php echo $user_id?>">
                            <input type="text" name="username"  value="<?php echo $username;?>">
                            <label for="picture">Profile picture</label> <span class="required">*</span>
                            <input type="file" name="userfile" class="form-control" required="">
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-default animated fadeInLeft flat" data-dismiss="modal">Close</button>
                            <button type="submit" class="animated fadeInLeft btn btn-info pull-right flat"><i class="fa fa-save"></i> Save Changes</button>
                        <?php echo form_close();?>
                            </div>
                          </div>
                        </div>
                      </div>