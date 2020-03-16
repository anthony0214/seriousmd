<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Color Admin | Page without Sidebar</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
	<link href="assets/plugins/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/plugins/font-awesome/5.0/css/fontawesome-all.min.css" rel="stylesheet" />
	<link href="assets/plugins/animate/animate.min.css" rel="stylesheet" />
	<link href="assets/css/default/style.min.css" rel="stylesheet" />
	<link href="assets/css/default/style-responsive.min.css" rel="stylesheet" />
	<link href="assets/css/default/theme/default.css" rel="stylesheet" id="theme" />
    <!-- ================== END BASE CSS STYLE ================== -->
    
    <!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="assets/plugins/jquery-smart-wizard/src/css/smart_wizard.css" rel="stylesheet" />
	<link href="assets/plugins/parsley/src/parsley.css" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-without-sidebar page-header-fixed">
		<!-- begin #header -->
        <?php include 'top_nav_main.php'; ?>
		<!-- end #header -->
		
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
				<li class="breadcrumb-item"><a href="javascript:;">Page Options</a></li>
				<li class="breadcrumb-item active">Page without Sidebar</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">New Patient</h1>
			<!-- end page-header -->
			
			<!-- begin panel -->
			<div class="panel panel-inverse">
			    <div class="panel-heading">
			        <div class="panel-heading-btn">
			            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
			            <!-- <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a> -->
			            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
			            <!-- <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a> -->
			        </div>
			        <h4 class="panel-title">Personal Information</h4>
			    </div>
			    <div class="panel-body">
			        <div id="content" class="content">
                        <!-- begin wizard-form -->
                        <form action="/" method="POST" name="form-wizard" class="form-control-with-bg">
                            <!-- begin wizard -->
                            <div id="wizard">
                                <!-- begin wizard-step -->
                                <ul>
                                    <li class="col-md-4 col-sm-4 col-6">
                                        <a href="#step-1">
                                            <span class="number">1</span> 
                                            <span class="info text-ellipsis">
                                                Personal Info
                                                <small class="text-ellipsis">Name, Address, HMO No and DOB</small>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="col-md-4 col-sm-4 col-6">
                                        <a href="#step-2">
                                            <span class="number">2</span> 
                                            <span class="info text-ellipsis">
                                                Enter your contact
                                                <small class="text-ellipsis">Email and phone no. is required</small>
                                            </span>
                                        </a>
                                    </li>
                                    <!-- <li class="col-md-3 col-sm-4 col-6">
                                        <a href="#step-3">
                                            <span class="number">3</span>
                                            <span class="info text-ellipsis">
                                                Login Account
                                                <small class="text-ellipsis">Enter your username and password</small>
                                            </span>
                                        </a>
                                    </li> -->
                                    <li class="col-md-4 col-sm-4 col-6">
                                        <a href="#step-3">
                                            <span class="number">3</span> 
                                            <span class="info text-ellipsis">
                                                Completed
                                                <small class="text-ellipsis">Complete Profile Registration</small>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- end wizard-step -->
                                <!-- begin wizard-content -->
                                <div>
                                    <!-- begin step-1 -->
                                    <div id="step-1">
                                        <!-- begin fieldset -->
                                        <fieldset>
                                            <!-- begin row -->
                                            <div class="row">
                                                <!-- begin col-8 -->
                                                <div class="col-md-8">
                                                    <legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Personal info about patient</legend>
                                                    <!-- begin form-group -->
                                                    <div class="form-group row m-b-10">
                                                        <label class="col-md-3 col-form-label text-md-right">First Name <span class="text-danger">*</span></label>
                                                        <div class="col-md-6">
                                                            <input type="text" name="firstname" placeholder="John" data-parsley-group="step-1" data-parsley-required="true" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <!-- end form-group -->
                                                    <!-- begin form-group -->
                                                    <div class="form-group row m-b-10">
                                                        <label class="col-md-3 col-form-label text-md-right">Last Name <span class="text-danger">*</span></label>
                                                        <div class="col-md-6">
                                                            <input type="text" name="lastname" placeholder="Smith" data-parsley-group="step-1" data-parsley-required="true" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <!-- end form-group -->
                                                    <!-- begin form-group -->
                                                    <div class="form-group row m-b-10">
                                                        <label class="col-md-3 col-form-label text-md-right">Date of Birth <span class="text-danger">&nbsp;</span></label>
                                                        <div class="col-md-6">
                                                            <div class="row row-space-6">
                                                                <div class="col-4">
                                                                    <select class="form-control" name="year">
                                                                        <option>-- Year --</option>
                                                                        <?php  
                                                                            for ($x = 1880; $x <= 2020; $x++) 
                                                                            {
                                                                            echo "<option>".$x."</option>";
                                                                            }
                                                                        ?> 
                                                                    </select>
                                                                </div>
                                                                <div class="col-4">
                                                                    <select class="form-control" name="month">
                                                                        <option>-- Month --</option>
                                                                        <option value="1">January</option>
                                                                        <option value="2">February</option>
                                                                        <option value="3">March</option>
                                                                        <option value="4">April</option>
                                                                        <option value="5">May</option>
                                                                        <option value="6">June</option>
                                                                        <option value="7">July</option>
                                                                        <option value="8">August</option>
                                                                        <option value="9">September</option>
                                                                        <option value="10">October</option>
                                                                        <option value="11">November</option>
                                                                        <option value="12">December</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-4">
                                                                    <select class="form-control" name="day">
                                                                        <option>-- Day --</option>
                                                                        <?php  
                                                                            for ($x = 1; $x <= 31; $x++) 
                                                                            {
                                                                            echo "<option>".$x."</option>";
                                                                            }
                                                                        ?> 
                                                                    </select>
                                                                </div>
                               
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end form-group -->
                                                    <!-- begin form-group -->
                                                    <div class="form-group row m-b-10">
                                                        <label class="col-md-3 col-form-label text-md-right">HMO No <span class="text-danger">*</span></label>
                                                        <div class="col-md-6">
                                                            <input type="text" name="ic" placeholder="" class="form-control" data-parsley-group="step-1" data-parsley-required="true" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group row m-b-10">
                                                        <label class="col-md-3 col-form-label text-md-right">Gender <span class="text-danger">*</span></label>
                                                        <div class="col-md-6">
                                                            <div class="radio radio-css radio-inline">
                                                                <input type="radio" name="gender" id="gender_male" value="male"  />
                                                                <label for="gender_male">Male</label>
                                                            </div>
                                                            <div class="radio radio-css radio-inline">
                                                                <input type="radio" name="gender" id="gender_female" value="female" />
                                                                <label for="gender_female">Female</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row m-b-10">
                                                        <label class="col-md-3 col-form-label text-md-right">Blood Type <span class="text-danger">*</span></label>
                                                        <div class="col-md-8">
                                                            <?php 
                                                            $blood_array = array('A+','A','B+','B','AB+','AB','O+','O');
                                                            ?>
                                                            <?php foreach ($blood_array as $key => $value) { ?>
                                                                <div class="radio radio-css radio-inline">
                                                                    <input type="radio" name="blood_type" id="blood_type_id<?php echo $key; ?>" value="option1" />
                                                                    <label for="blood_type_id<?php echo $key; ?>"><?php echo $value; ?></label>
                                                                </div>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row m-b-10">
                                                        <label class="col-md-3 col-form-label text-md-right">Civil Status <span class="text-danger">*</span></label>
                                                        <div class="col-md-8">
                                                            <?php 
                                                            $civilStatus_array = array('Single','Maried','Separated','Widowed');
                                                            ?>
                                                            <?php foreach ($civilStatus_array as $key => $value) { ?>
                                                                <div class="radio radio-css radio-inline">
                                                                    <input type="radio" name="civil_status" id="civil_status_id<?php echo $key; ?>" value="option1"  />
                                                                    <label for="civil_status_id<?php echo $key; ?>"><?php echo $value; ?></label>
                                                                </div>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                    <!-- end form-group -->
                                                    <!-- begin form-group -->
                                                    <div class="form-group row m-b-10">
                                                        <label class="col-md-3 col-form-label text-md-right">Address</label>
                                                        <div class="col-md-9">
                                                            <input type="text" name="address1" placeholder="Address 1" class="form-control m-b-10" />
                                                            <input type="text" name="address2" placeholder="Address 2" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <!-- end form-group -->
                                                </div>
                                                <!-- end col-8 -->
                                                <!-- begin col-2 -->
                                                <div class="col-md-2">
                                                    <div class="form-group row m-b-10">
                                                    <div class="row">
                                                        <label class="col-md-6 col-form-label text-md-right">Upload Image</label>
                                                        <div class="col-md-6">
                                                            <input type="file" name="myfile" id="fileToUpload">
                                                        </div>
                                                    </div>            
                                                    </div>
                                                
                                                </div>
                                                <!-- end col-2 -->
                                            </div>
                                            <!-- end row -->
                                        </fieldset>
                                        <!-- end fieldset -->
                                    </div>
                                    <!-- end step-1 -->
                                    <!-- begin step-2 -->
                                    <div id="step-2">
                                        <!-- begin fieldset -->
                                        <fieldset>
                                            <!-- begin row -->
                                            <div class="row">
                                                <!-- begin col-8 -->
                                                <div class="col-md-8 md-offset-2">
                                                    <legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">You contact info, so that we can easily reach you</legend>
                                                    <!-- begin form-group -->
                                                    <div class="form-group row m-b-10">
                                                        <label class="col-md-3 col-form-label text-md-right">Phone Number <span class="text-danger">*</span></label>
                                                        <div class="col-md-6">
                                                            <input type="number" name="phone" placeholder="123-456-7890" data-parsley-group="step-2" data-parsley-required="true" data-parsley-type="number" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <!-- end form-group -->
                                                    <!-- begin form-group -->
                                                    <div class="form-group row m-b-10">
                                                        <label class="col-md-3 col-form-label text-md-right">Email Address <span class="text-danger">*</span></label>
                                                        <div class="col-md-6">
                                                            <input type="email" name="email" placeholder="someone@example.com" class="form-control" data-parsley-group="step-2" data-parsley-required="true" data-parsley-type="email" />
                                                        </div>
                                                    </div>
                                                    <!-- end form-group -->
                                                </div>
                                                <!-- end col-8 -->
                                            </div>
                                            <!-- end row -->
                                        </fieldset>
                                        <!-- end fieldset -->
                                    </div>
                                    <!-- end step-2 -->
                                    
                                    <!-- begin step-3 -->
                                    <div id="step-3">
                                        <div class="jumbotron m-b-0 text-center">
                                            <h2 class="text-inverse">Register Successfully</h2>
                                            <p class="m-b-30 f-s-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris consequat commodo porttitor. <br />Vivamus eleifend, arcu in tincidunt semper, lorem odio molestie lacus, sed malesuada est lacus ac ligula. Aliquam bibendum felis id purus ullamcorper, quis luctus leo sollicitudin. </p>
                                            <p><a href="user_profile.php" class="btn btn-primary btn-lg">Proceed to User Profile</a></p>
                                        </div>
                                    </div>
                                    <!-- end step-3 -->
                                </div>
                                <!-- end wizard-content -->
                            </div>
                            <!-- end wizard -->
                        </form>
                        <!-- end wizard-form -->
		            </div>
			    </div>
			</div>
			<!-- end panel -->
            <p>
                <a href="javascript:history.back(-1);" class="btn btn-success">
                    <i class="fa fa-arrow-circle-left"></i> Back to previous page
                </a>
            </p>
		</div>
		<!-- end #content -->
		
        <!-- begin theme-panel -->
        <div class="theme-panel">
            <a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
            <div class="theme-panel-content">
                <h5 class="m-t-0">Color Theme</h5>
                <ul class="theme-list clearfix">
                    <li class="active"><a href="javascript:;" class="bg-green" data-theme="default" data-theme-file="assets/css/default/theme/default.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Default">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-red" data-theme="red" data-theme-file="assets/css/default/theme/red.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Red">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-blue" data-theme="blue" data-theme-file="assets/css/default/theme/blue.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Blue">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-purple" data-theme="purple" data-theme-file="assets/css/default/theme/purple.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Purple">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-orange" data-theme="orange" data-theme-file="assets/css/default/theme/orange.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Orange">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-black" data-theme="black" data-theme-file="assets/css/default/theme/black.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Black">&nbsp;</a></li>
                </ul>
                <div class="divider"></div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Header Styling</div>
                    <div class="col-md-7">
                        <select name="header-styling" class="form-control form-control-sm">
                            <option value="1">default</option>
                            <option value="2">inverse</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label">Header</div>
                    <div class="col-md-7">
                        <select name="header-fixed" class="form-control form-control-sm">
                            <option value="1">fixed</option>
                            <option value="2">default</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Sidebar Styling</div>
                    <div class="col-md-7">
                        <select name="sidebar-styling" class="form-control form-control-sm">
                            <option value="1">default</option>
                            <option value="2">grid</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label">Sidebar</div>
                    <div class="col-md-7">
                        <select name="sidebar-fixed" class="form-control form-control-sm">
                            <option value="1">fixed</option>
                            <option value="2">default</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Sidebar Gradient</div>
                    <div class="col-md-7">
                        <select name="content-gradient" class="form-control form-control-sm">
                            <option value="1">disabled</option>
                            <option value="2">enabled</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Content Styling</div>
                    <div class="col-md-7">
                        <select name="content-styling" class="form-control form-control-sm">
                            <option value="1">default</option>
                            <option value="2">black</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-12">
                        <a href="javascript:;" class="btn btn-inverse btn-block btn-sm" data-click="reset-local-storage">Reset Local Storage</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end theme-panel -->
        
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="assets/plugins/jquery/jquery-3.2.1.min.js"></script>
	<script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
	<script src="assets/plugins/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
	<!--[if lt IE 9]>
		<script src="assets/crossbrowserjs/html5shiv.js"></script>
		<script src="assets/crossbrowserjs/respond.min.js"></script>
		<script src="assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/plugins/js-cookie/js.cookie.js"></script>
	<script src="assets/js/theme/default.min.js"></script>
    <script src="assets/js/apps.min.js"></script>
  <!-- ================== END BASE JS ================== -->

  	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="assets/plugins/parsley/dist/parsley.js"></script>
	<script src="assets/plugins/jquery-smart-wizard/src/js/jquery.smartWizard.js"></script>
	<script src="assets/js/demo/form-wizards-validation.demo.min.js"></script>
    <!-- ================== END PAGE LEVEL JS ================== -->
    
    <!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="assets/plugins/highlight/highlight.common.js"></script>
	<script src="assets/js/demo/render.highlight.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<script>
		$(document).ready(function() {
            App.init();
            FormWizardValidation.init();
            Highlight.init();
		});
	</script>
</body>
</html>
