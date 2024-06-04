<?php
$edit_data = $this->db->get_where('nurse', array('nurse_id' => $param2))->result_array();
foreach ($edit_data as $row):
    ?>
			 

    <?php echo form_open(base_url() . 'doctor/message/send_new/', array('class' => 'form', 'enctype' => 'multipart/form-data')); ?>
                                                   <div class="panel-body table-responsive">

				   <div align="center">
		<img src="<?php echo $this->crud_model->get_image_url('nurse' , $row['nurse_id']);?>" class="img-circle" width="100" height="100" />
		</div>
		<br>

                    <div class="form-group">
                         <label class="col-md-12" for="example-text"><?php echo get_phrase('nurse_name'); ?></label>

                        <div class="col-sm-12">
      					<input type="hidden" class="form-control" name="reciever"  value="nurse-<?php echo $row['nurse_id']; ?>" readonly="true">
						<input type="text" class="form-control"  value="<?php echo $row['name']; ?>" readonly="true">
                        </div>
                    </div>
	
					<div class="form-group">
                    <label class="col-md-12" for="example-text"><?php echo get_phrase('message'); ?></label>
					<div class="col-sm-12">
					<textarea name="message" rows="5" class="form-control" id="optimum-editor" placeholder= "Please type your new message here for the selected doctor to read."></textarea>
						</div>
						</div>

                    <div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-info btn-sm btn-icon icon-left"><i class="fa fa-plus"></i>&nbsp;<?php echo get_phrase('send_message');?></button>
						</div>
					</div>
					
                    <?php echo form_close(); ?>
					
                </div>
            </div>
        </div>
    </div>

    <?php
endforeach;
?>
     