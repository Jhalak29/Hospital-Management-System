 <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                <div class="top-left-part"><a class="logo" href="#"><b><img src="<?php echo base_url();?>uploads/logo.png" width="50" height="50" alt="home" /></b><span class="hidden-xs"><strong>HOSP</strong>ITAL</span></a></div>
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
                    <li>
                        <form role="search" class="app-search hidden-xs">
                            <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
                    </li>
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                   
                    <!-- /.dropdown -->
                   
                    <!-- /.dropdown -->
                    <li class="dropdown">

                    <?php 
                    $key = $this->session->userdata('login_type') . '_id';
                    $image_path = 'uploads/' . $this->session->userdata('login_type') . '_image/' . $this->session->userdata($key). '.jpg';

                    if(!file_exists($image_path)){
                        $image_path = 'uploads/default.jpg';
                    }
                    
                    ?>
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> 
                        <img src="<?php echo base_url(). $image_path;?>" alt="user-img" width="40" class="img-circle">
                        
                        <b class="hidden-xs">

                    <?php 
                    $account_type   = $this->session->userdata('login_type');
                    $account_id     = $account_type.'_id';
                    $name = $this->crud_model->get_type_name_by_id($account_type, $this->session->userdata($account_id), 'name');
                    echo $name;
                    ?>

                        </b> </a>
                       <ul class="dropdown-menu dropdown-user animated flipInY">
                            <li><a href="<?php echo base_url();?><?php echo $this->session->userdata('login_type');?>/manage_profile"><i class="ti-user"></i>  My Profile</a></li>
                            <li><a href="<?php echo base_url();?>admin/message"><i class="ti-email"></i>  Inbox</a></li>
      <li><a href="<?php echo base_url();?><?php echo $this->session->userdata('login_type');?>/manage_profile"><i class="ti-settings"></i> <?php echo get_phrase('account_settings');?></a></li>
                            <li><a href="<?php echo base_url();?>login/logout"><i class="fa fa-power-off"></i>&nbsp;<?php echo get_phrase('logout');?></a></li>
                            </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <li class="right-side-toggle"> <a class="waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>
                    <!-- /.dropdown -->
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>