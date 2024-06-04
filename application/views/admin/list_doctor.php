				<div class="row">
                                            
						<?php 
						foreach($doctors as $row):
						?>		
						 <div class="col-md-4 col-sm-4">
                        <div class="white-box">
						
                            <div class="row">
                                <div class="col-md-4 col-sm-4 text-center">
                                    <a href="contact-detail.html"><img src="<?php echo $this->crud_model->get_image_url('doctor',$row['doctor_id']);?>" alt="user" class="img-circle img-responsive"></a>
                                </div>
                                <div class="col-md-8 col-sm-8">
                                    <h3 class="box-title m-b-0"><?php echo $row ['name'];?></h3> <small>
									<?php echo $this->crud_model->get_type_name_by_id('department',$row['department_id']);?>
									</small>
                                    <p>
                                        <address>
                                            <?php echo $row ['address'];?>
                                            <br/>
                                            <br/>
                                            <abbr title="Phone">P:</abbr> <?php echo $row ['phone'];?>
                                        </address>
										<a href="#" onclick="confirm_modal('<?php echo base_url();?>admin/manage_doctor/delete/<?php echo $row['doctor_id'];?>');"><button type="button" class="btn btn-danger btn-circle btn-xs"><i class="fa fa-times"></i> </button></a>
										
                            <a href="#" onclick="showAjaxModal('<?php echo base_url();?>modal/popup/modal_doctor_view/<?php echo $row['doctor_id'];?>');"><button type="button" class="btn btn-info btn-circle btn-xs"><i class="fa fa-edit"></i> </button></a>
							
                             <a href="<?php echo base_url();?>admin/view_doctor_profile/<?php echo $row['doctor_id'];?>"><button type="button" class="btn btn-primary btn-circle btn-xs"><i class="fa fa-link"></i> </button></a>
							
							<a href="<?php echo base_url().'uploads/doctor_image/'.$row['file_name']; ?>"><button type="button" class="btn btn-success btn-circle btn-xs"><i class="fa fa-download"></i></button></a>
							
							
			<a href="#" onclick="showAjaxModal('<?php echo base_url();?>modal/popup/doctor_identity_card/<?php echo $row['doctor_id'];?>');"><button type="button" class="btn btn-primary btn-circle btn-xs"><i class="fa fa-hospital-o"></i> </button></a>


                                    </p>
                                </div>
                            </div>
							
							
                        </div>
                    </div>
								
						<?php endforeach; ?>		
								
						<?php if($row['name'] == ''):?>
						<div class="col-md-12 col-sm-12">
                        <div class="white-box">
							<div class="alert alert-danger" align="center"><?php echo get_phrase ('you_have_not_added_any_doctor'); ?>
							
							</div>
							<div align="center">
							<a href="<?php echo base_url();?>admin/manage_doctor" 
                     class="btn btn-info btn-xs"><i class="fa fa-plus"></i>&nbsp;<?php echo get_phrase('click_here_to_add');?>
                    </a>
					</div>
							</div>
							<?php endif;?>		
								
						</div>
						</div>
						
      