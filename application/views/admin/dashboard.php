 <div class="row">
                 <div class="col-md-3 col-sm-6">
                        <div class="white-box bg-danger">
                            <div class="r-icon-stats">
                                <i class="ti-shopping-cart bg-danger"></i>
                                <div class="bodystate">
                                    <h4><strong style="color:white"><?php echo $this->db->count_all_results('doctor');?></strong></h4>
                                    <span class="text-muted"><a href="<?php echo base_url();?>admin/manage_doctor" style="color:white">
<?php echo get_phrase('doctors');?></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="white-box bg-info">
                            <div class="r-icon-stats">
                                <i class="ti-user bg-info"></i>
                                <div class="bodystate">
                                    <h4><strong style="color:white"><?php echo $this->db->count_all_results('nurse');?></strong></h4>
                                    <span class="text-muted"><a href="<?php echo base_url();?>admin/manage_nurse" style="color:white">
<?php echo get_phrase('nurses');?></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="white-box bg-purple">
                            <div class="r-icon-stats">
                                <i class="ti-user bg-purple"></i>
                                <div class="bodystate">
                                     <h4><strong style="color:white"><?php echo $this->db->count_all_results('patient');?></strong></h4>
                                    <span class="text-muted"><a href="<?php echo base_url();?>admin/manage_patient" style="color:white">
<?php echo get_phrase('patients');?></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="white-box bg-success">
                            <div class="r-icon-stats">
                                <i class="ti-wallet bg-success"></i>
                                <div class="bodystate">
                                     <h4><strong style="color:white"><?php echo $this->db->count_all_results('invoice');?></strong></h4>
                                    <span class="text-muted"><a href="<?php echo base_url();?>admin/invoice_add" style="color:white">
<?php echo get_phrase('invoice');?></a></span>
                                </div>
                            </div>
                        </div>
                    </div>	
					
					
					<!--- ANOTHER INFORMAATION ABOUT DASHBOARD    -->
					
					<div class="col-md-3 col-sm-6">
                        <div class="white-box bg-info">
                            <div class="r-icon-stats">
                                <i class="ti-user bg-info"></i>
                                <div class="bodystate">
                                    <h4><strong style="color:white"><?php echo $this->db->count_all_results('payment');?></strong></h4>
                                    <span class="text-muted"><a href="<?php echo base_url();?>admin/list_invoice" style="color:white">
<?php echo get_phrase('payment');?></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="white-box bg-danger">
                            <div class="r-icon-stats">
                                <i class="ti-shopping-cart bg-danger"></i>
                                <div class="bodystate">
                                    <h4><strong style="color:white"><?php echo $this->db->count_all_results('message');?></strong></h4>
                                    <span class="text-muted"><a href="<?php echo base_url();?>admin/message" style="color:white">
<?php echo get_phrase('messages');?></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
					
                    <div class="col-md-3 col-sm-6">
                        <div class="white-box bg-success">
                            <div class="r-icon-stats">
                                <i class="ti-wallet bg-success"></i>
                                <div class="bodystate">
                                     <h4><strong style="color:white"><?php echo $this->db->count_all_results('noticeboard');?></strong></h4>
                                    <span class="text-muted"><a href="<?php echo base_url();?>admin/list_noticeboard" style="color:white">
<?php echo get_phrase('events');?></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="white-box bg-purple">
                            <div class="r-icon-stats">
                                <i class="ti-wallet bg-purple"></i>
                                <div class="bodystate">
                                     <h4><strong style="color:white"><?php echo $this->db->count_all_results('blood_donor');?></strong></h4>
                                    <span class="text-muted"><a href="<?php echo base_url();?>admin/view_blood_bank" style="color:white">
<?php echo get_phrase('donors');?></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
					
					
			
               
	
	
                    <div class="col-md-12 col-lg-12">
				  	<div class="panel panel-info">
                    <div class="panel-heading">PAYMENT CHART POWER STATISTICS FOR <?php echo $this->db->get_where('settings', array('type' => 'session'))->row()->description; ?></div>
					<div class="panel-body">
					
					
					<div  id="flotDashSales1" style="height: 215px;"></div>

						 <!-- Flot: Earning Graph -->
						<script>
							var flotDashSales1Data = [{
								data: [
									<?php
									$year = explode( '-', $running_year );
									for ( $month = 1; $month <= 12; $month++ ):
									$totalincome = 0;
									$days = cal_days_in_month( CAL_GREGORIAN, $month, $year[ 0 ] );
									
									for ( $i = 1; $i <= $days; $i++ ) {
										$timestamp = strtotime( $i . '-' . $month . '-' . $year[ 0 ] );
										$this->db->group_by( 'timestamp' );
										$income = $this->db->get_where('payment', array('year' => $running_year, 'timestamp' => $timestamp ) )->result_array();

										foreach ( $income as $row ):
										$totalincome = $totalincome + $row[ 'amount' ] ;
										endforeach;
									 } 

									if ( $month == 1 )
										$m = 'Jan';
									else if ( $month == 2 )
										$m = 'Feb';
									else if ( $month == 3 )
										$m = 'Mar';
									else if ( $month == 4 )
										$m = 'Apr';
									else if ( $month == 5 )
										$m = 'May';
									else if ( $month == 6 )
										$m = 'Jun';
									else if ( $month == 7 )
										$m = 'Jul';
									else if ( $month == 8 )
										$m = 'Aug';
									else if ( $month == 9 )
										$m = 'Sep';
									else if ( $month == 10 )
										$m = 'Oct';
									else if ( $month == 11 )
										$m = 'Nov';
									else if ( $month == 12 )
										$m = 'Dec';
									?>

									 ["<?php echo $m ?>", <?php echo $totalincome ?>],

									<?php endfor; ?>
							],
							 color: "#bc4e9c"
							}];
						 // See: assets/javascripts/dashboard/custom_dashboard.js for more settings.
						</script>      
								
					
 					
					
</div>
</div>


</div>

		<div class="col-md-4 col-lg-4">
				  	<div class="panel panel-info">
                    <div class="panel-heading"><?php echo get_phrase('recently_added_doctors');?></div>
					<div class="panel-body">
 					
					<?php 
					$this->db->order_by('doctor_id' , 'desc');
					$this->db->limit('3');
                    $doctors	=	$this->db->get('doctor')->result_array();
                    foreach($doctors as $row):
                    ?>
					
					<div class="message-center">
<a href="<?php echo base_url();?>admin/list_doctor">
<div class="user-img"><img src="<?php echo $this->crud_model->get_image_url('doctor',$row['doctor_id']);?>" alt="user" class="img-circle"><span class="profile-status online pull-right"></span> </div>
<div class="mail-contnet">
<h5> <?php echo $row['name'];?></h5> <span class="mail-desc"><?php echo $row['gender'];?>&nbsp;<?php echo $row['phone'];?></span></div>
</a>
</div>
<?php endforeach;?>

</div>	
</div>
</div>	
					<div class="col-md-8 col-lg-8">
				  	<div class="panel panel-info">
                    <div class="panel-heading"><?php echo get_phrase('hospital_event');?></div>
					<div class="panel-body">
 					<?php 

					$this->db->order_by('notice_id' , 'desc');
					$this->db->limit('3');
                    $notices	=	$this->db->get('noticeboard')->result_array();
                    foreach($notices as $row):
                    ?>
					
					<div class="message-center">
<a href="<?php echo base_url();?>admin/list_noticeboard">
<div class="user-img"><img src="<?php echo base_url() ?>uploads/logo.png" alt="user" class="img-circle"><span class="profile-status online pull-right"></span> </div>
<div class="mail-contnet">
<h5> <?php echo $row['notice_title'];?></h5> <span class="mail-desc"><?php echo $row['notice'];?>&nbsp;<?php echo date('d',$row['create_timestamp']);?>&nbsp;<?php echo date('M',$row['create_timestamp']);?></span></div>
</a>
</div>
<?php endforeach;?>

</div>	
</div>

</div>

 
					
					 <div class="col-md-12 col-lg-12">
                        <div class="white-box">
                            <h3 class="box-title"><?php echo get_phrase('send_quick_mail') ;?></h3>
                            <div class="message-center">
							
<?php echo form_open(base_url() . 'admin/send_email/send/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>

                                <div class='form-group'>
     	 	<select class="form-control select2" name="receiverEmail" required>
            <option value=""><?php echo get_phrase('select_a_user'); ?></option>
            <optgroup label="<?php echo get_phrase('admin'); ?>">
                <?php
                $admins = $this->db->get('admin')->result_array();
                foreach ($admins as $row):
                    ?>

                    <option value="<?php echo $row['email']; ?>">
                        - <?php echo $row['name']; ?></option>

                <?php endforeach; ?>
            </optgroup>
			
			
			<optgroup label="<?php echo get_phrase('doctor'); ?>">
                <?php
                $doctors = $this->db->get('doctor')->result_array();
                foreach ($doctors as $row):
                    ?>

                    <option value="<?php echo $row['email']; ?>">
                        - <?php echo $row['name']; ?></option>

                <?php endforeach; ?>
            </optgroup>
			
            <optgroup label="<?php echo get_phrase('patient'); ?>">
                <?php
                $patients = $this->db->get('patient')->result_array();
                foreach ($patients as $row):
                    ?>

                    <option value="<?php echo $row['email']; ?>">
                        - <?php echo $row['name']; ?></option>

                <?php endforeach; ?>
            </optgroup>
            <optgroup label="<?php echo get_phrase('nurse'); ?>">
                <?php
                $nurse = $this->db->get('nurse')->result_array();
                foreach ($nurse as $row):
                    ?>

                    <option value="<?php echo $row['email']; ?>">
                        - <?php echo $row['name']; ?></option>
						
						
                <?php endforeach; ?>
            </optgroup>
            <optgroup label="<?php echo get_phrase('pharmacist'); ?>">
                <?php
                $pharmacist = $this->db->get('pharmacist')->result_array();
                foreach ($pharmacist as $row):
                    ?>

                    <option value="<?php echo $row['email']; ?>">
                        - <?php echo $row['name']; ?></option>

                <?php endforeach; ?>
            </optgroup>
			
			 <optgroup label="<?php echo get_phrase('accountant'); ?>">
                <?php
                $accountants = $this->db->get('accountant')->result_array();
                foreach ($accountants as $row):
                    ?>

                    <option value="<?php echo $row['email']; ?>">
                        - <?php echo $row['name']; ?></option>

                <?php endforeach; ?>
            </optgroup>
			 <optgroup label="<?php echo get_phrase('laboratorist'); ?>">
                <?php
                $laboratorist = $this->db->get('laboratorist')->result_array();
                foreach ($laboratorist as $row):
                    ?>

                    <option value="<?php echo $row['email']; ?>">
                        - <?php echo $row['name']; ?></option>

                <?php endforeach; ?>
            </optgroup>
        </select>
                          </div>
						   <div class='form-group'>
                            <input value="" placeholder="Type subject Here" class="form-control" name="subject" type="text" required>
                          </div>
                          <div class='form-group'>
                            <textarea class="form-control" id="mymce" name="message"></textarea>
                          </div>
				<button type="submit" class="btn btn-info btn-sm btn-rounded"><i class="fa fa-envelope"></i>&nbsp;<?php echo get_phrase('send_mail');?></button>
                    <?php echo form_close();?>            
                                
                            </div>
                        </div>
                    </div>
					
					
</div> 
 
<script>
  $(document).ready(function() {
	  
	  var calendar = $('#calendar);
				
				$('#calendar').fullCalendar({
					header: {
						left: 'title',
						right: 'today prev,next'
					},
					
					//defaultView: 'basicWeek',
					
					editable: false,
					firstDay: 1,
					height: 530,
					droppable: false,
					
					events: [
						<?php 
						$notices	=	$this->db->get('noticeboard')->result_array();
						foreach($notices as $row):
						?>
						{
							title: "<?php echo $row['notice_title'];?>",
							start: new Date(<?php echo date('Y',$row['create_timestamp']);?>, <?php echo date('m',$row['create_timestamp'])-1;?>, <?php echo date('d',$row['create_timestamp']);?>),
							end:	new Date(<?php echo date('Y',$row['create_timestamp']);?>, <?php echo date('m',$row['create_timestamp'])-1;?>, <?php echo date('d',$row['create_timestamp']);?>) 
						},
						<?php 
						endforeach
						?>
						
					]
				});
	});
</script>

	
	