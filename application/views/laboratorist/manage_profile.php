					
					<div class="row">
                    <div class="col-sm-6">
				  	<div class="panel panel-info">
                            <div class="panel-heading"> <?php echo get_phrase('my_profile');?></div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
							<?php foreach($edit_profile as $row):?>	
								
<?php echo form_open(base_url() . 'laboratorist/manage_profile/update_profile_info/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
          
					<div class="form-group"> 
					 <div class="col-sm-12">
  		  			 <input type='file' class="form-control" value="" name="userfile" onChange="readURL(this);" />
       				 <img id="blah" src="<?php echo $this->crud_model->get_image_url('laboratorist', $row['laboratorist_id']); ?>" alt="" height="200" width="200"/>
					</div>
					</div>	
										
										<div class="form-group">
                                    <label class="col-md-12" for="example-text"><?php echo get_phrase('full_name');?>*</span>
                                            <div class="col-md-12">
                                                <input type="text" name="name" value="<?php echo $row ['name'];?>" class="form-control form-control-line">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                    <label class="col-md-12" for="example-text"><?php echo get_phrase('email');?>*</span>
                                            <div class="col-md-12">
                                                <input type="email" name="email" value="<?php echo $row ['email'];?>"  class="form-control form-control-line" id="example-email">
                                            </div>
                                        </div>
                                       
                                        <div class="form-group">
                                    <label class="col-md-12" for="example-text"><?php echo get_phrase('phone_number');?>*</span>
                                            <div class="col-md-12">
                                          <input type="text" name="phone" value="<?php echo $row ['phone'];?>" class="form-control form-control-line">
                                            </div>
                                        </div>
										
                                        <div class="form-group">
                                    <label class="col-md-12" for="example-text"><?php echo get_phrase('address');?>*</span>
                                    <div class="col-md-12">
									 <textarea class="form-control"  name="address"><?php echo $row ['address'];?></textarea>
                                    </div>
                                	</div>
                                       
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <button class="btn btn-success"><?php echo get_phrase('update_details');?></button>
                                            </div>
                                        </div>
                                    <?php echo form_close();?>

						<?php endforeach;?>

								
								
								
								
								
</div>
</div>
</div>
</div>

                    <div class="col-sm-6">
				  	<div class="panel panel-info">
                            <div class="panel-heading"> <?php echo get_phrase('change_login_details');?></div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
								
<?php echo form_open(base_url() . 'laboratorist/manage_profile/change_password/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>	
								
									    <div class="form-group">
                                    <label class="col-md-12" for="example-text"><?php echo get_phrase('new_password');?>*</span>
                                            <div class="col-md-12">
                                                <input type="text" name="new_password" class="form-control form-control-line" id="example-email" required>
                                            </div>
                                        </div>
										
										<div class="form-group">
                                    <label class="col-md-12" for="example-text"><?php echo get_phrase('confirm_new_password');?>*</span>
                                            <div class="col-md-12">
                                                <input type="text" name="confirm_new_password" class="form-control form-control-line" id="example-email" required>
                                            </div>
                                        </div>

                                
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <button class="btn btn-success"><?php echo get_phrase('change_password');?></button>
                                            </div>
                                        </div>
                                    <?php echo form_close();?>


								
								
								
								
								
</div>
</div>
</div>
</div>
</div>

