<?php $system_name = $this->db->get_where('settings', array('type' => 'system_name'))->row()->description;
$system_title = $this->db->get_where('settings', array('type' => 'system_title'))->row()->description;
$abb = $this->db->get_where('settings', array('type' => 'abb'))->row()->description;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon"  sizes="16x16" href="<?php echo base_url() ?>uploads/logo.png">
        <title>Welcome ~ <?php echo $system_title;?></title>
    <!-- Bootstrap Core CSS -->
    <link href="optimum/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="optimum/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="optimum/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="optimum/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="optimum/css/colors/default.css" id="theme" rel="stylesheet">
	<link href="optimum/plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
		
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
	
    <section id="wrapper" class="login-register">
        <div class="login-box">
            <div class="white-box">

                    <h4 class="box-title m-b-20" align="center">
					<img src="<?php echo base_url() ?>uploads/logo.png" class="img-circle" width="60" height="60"/></h4>
					<h5 align="center"><a href="<?php echo base_url();?>"><?php echo $system_name;?></a></h5>
					
					<?php echo form_open('login/check_detail' , array('class' => 'form-horizontal form-material', 'id' => 'loginform'));?>

					
								
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="email" name="email" required="" placeholder="<?php echo get_phrase('email');?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" name="password" required="" placeholder="<?php echo get_phrase('passord');?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="checkbox checkbox-primary pull-left p-t-0">
                                <input id="checkbox-signup" type="checkbox">
                                <label for="checkbox-signup"> <?php echo get_phrase('remember_me');?> </label>
                            </div>
                            <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> <?php echo get_phrase('forgot_password?');?></a> </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-success btn-sm btn-rounded btn-block text-uppercase" type="submit"><?php echo get_phrase('log_in');?></button>
                        </div>
                    </div>
                            <?php echo form_close();?>
					<button class="btn btn-xs btn-info btn-rounded" id="receptionist"> Receptionist</button>
    	            <button class="btn btn-xs btn-success btn-rounded" id="accountant"> Accountant</button>
					<button class="btn btn-xs btn-warning btn-rounded" id="laboratorist"> Laboratorist</button>
					<button class="btn btn-xs btn-success btn-rounded" id="pharmacist"> Pharmacy</button>
    	            <button class="btn btn-xs btn-warning btn-rounded" id="nurse"> Nurse</button>
    	            <button class="btn btn-xs btn-info btn-rounded" id="patient"> Patient</button>
    		    	<button class="btn btn-xs btn-info btn-rounded" id="admin"> Admin</button>
    		    	<button class="btn btn-xs btn-info btn-rounded" id="doctor"> Doctor</button>

                   	<?php echo form_open('login/reset_password' , array('class' => 'form-horizontal form-material', 'id' => 'recoverform'));?>
            	
<br>
                <input type="email" name="email" class="form-control" placeholder="<?php echo get_phrase('email');?>" required>

<div class="form-group text-center m-t-20">
                        <div class="col-xs-6">
		<a href="<?php echo base_url();?>"><button class="btn btn-success btn-sm text-uppercase" type="button"><i class="fa fa-back"></i><?php echo get_phrase('back_to_login');?></button></a>
		<button class="btn btn-info btn-sm  text-uppercase" type="submit"><i class="fa fa-link"></i>&nbsp;<?php echo get_phrase('reset');?></button>
                        </div>
                    </div>
					
            <?php echo form_close();?>
            </div>
        </div>

    </section>

    <!-- jQuery -->
    <script src="optimum/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="optimum/bootstrap/dist/js/tether.min.js"></script>
    <script src="optimum/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="optimum/plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="optimum/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="optimum/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="optimum/js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="optimum/js/custom.min.js"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="optimum/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="optimum/plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js"></script>
    <!--Style Switcher -->
    <script src="optimum/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
	<?php echo $tawkto = $this->db->get_where('settings', array('type' => 'tawkto'))->row()->description; ?>
	
	
	
	 <script type="text/javascript">
            $('#admin').click(function () {
                $("input[name=email]").val('admin@admin.com');
                $("input[name=password]").val('123456');
            });
            $('#patient').click(function () {
                $("input[name=email]").val('patient@patient.com');
                $("input[name=password]").val('123456');
            });
            $('#doctor').click(function () {
                $("input[name=email]").val('doctor@doctor.com');
                $("input[name=password]").val('123456');
            });
            $('#nurse').click(function () {
                $("input[name=email]").val('nurse@nurse.com');
                $("input[name=password]").val('123456');
            });
            $('#accountant').click(function () {
                $("input[name=email]").val('accountant@accountant.com');
                $("input[name=password]").val('123456');
            });
            $('#laboratorist').click(function () {
                $("input[name=email]").val('laboratorist@laboratorist.com');
                $("input[name=password]").val('123456');
            });
            $('#pharmacist').click(function () {
                $("input[name=email]").val('pharmacist@pharmacist.com');
                $("input[name=password]").val('123456');
            });
			 $('#receptionist').click(function () {
                $("input[name=email]").val('receptionist@receptionist.com');
                $("input[name=password]").val('123456');
            });
        </script>
			    
	<script src="optimum/plugins/bower_components/toast-master/js/jquery.toast.js"></script>
		<?php if (($this->session->flashdata('error_message')) != ""): ?>
	<script type="text/javascript">
    $(document).ready(function() {
        $.toast({
			heading: 'Error !!!',
            text: '<?php echo $this->session->flashdata('error_message'); ?>',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'warning',
            hideAfter: 3500,
            stack: 6
        })
    });
    </script>
	<?php endif; ?>
	

</body>

</html>
