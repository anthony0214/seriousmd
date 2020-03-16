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
			<h1 class="page-header">User Profile</h1>
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
                        <!-- smd content begin -->
                       
                        <div class="row">
                            <div class="col-md-12">
                                <div class="well well-sm">
                                    <div class="media">
                                        <a class="thumbnail pull-left" href="#">
                                            <img class="media-object" src="assets/img/user/user-6.jpg">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading">First Last Name</h4>
                                            <p><span class="label label-info">Birthday</span> <strong>02-14-1991</strong></p>
                                            <p><span class="label label-info">Age</span> <strong>29</strong></p>
                                            <p><span class="label label-info">Gender</span> <strong>Male</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- tab menu begin -->
                        <style>
                            .md-blue{
                                background-color:#0989C8 !important;
                                color:white !important;
                                padding: 20% 0 !important;
                                font-size:2vh !important;
                                
                                /* 
                                width:100% !important;  
                                white-space: normal; */
                            }
                            .md-red{
                                background-color:#E9305C !important;
                                color:white !important;
                                padding: 20% 0 !important;
                                font-size:2vh !important;
                                
                                /* 
                                width:100% !important; 
                                white-space: normal; */
                            }
                            .md-purple{
                                background-color:#4144AD !important;
                                color:white !important;
                                padding: 20% 0 !important;
                                font-size:2vh;
                                /* padding: 20% 0 !important;
                                width:100% !important; 
                                white-space: normal; */
                            }
                            .md-green{
                                background-color:#0FAC87 !important;
                                color:white !important;
                                padding: 20% 0 !important;
                                font-size:2vh;
                                /* padding: 20% 0 !important;
                                width:100% !important; 
                                white-space: normal; */
                            }
                            .md-orange{
                                background-color:#FF7B1F !important;
                                color:white !important;
                                padding: 20% 0 !important;
                                font-size:2vh;
                                /* padding: 20% 0 !important;
                                width:100% !important; 
                                white-space: normal; */
                            }

                            a {
                                text-decoration:none !important;
                            }

                            .text-4{
                                font-size:6.5vh;
                                font-weight:bold;
                            }

                            .text-3{
                                font-size:5vh;
                                font-weight:bold;
                            }

                            .text-2{
                                font-size:2vh;
                                font-weight:bold;
                            }
                            .text-1{
                                font-size:1vh;
                                font-weight:bold;
                            }
                            blockquote {
                                border-left: 5px solid #00ACAC;
                            }

                            .table > tbody > tr > td {
                                vertical-align: middle;
                            }
                            .table > thead > tr > th {
                                vertical-align: middle;
                            }


                            .noSelect {
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

                            
                            
                        </style>

<div class="col-md-12">
<ul class="row nav nav-tabs">
    <li class="col mx-0 px-0 h-100 w-100">
        <a href="#default-tab-1" data-toggle="tab">
            <button class=" md-blue btn-block">
            <span class="d-sm-none"><i class="fas fa-lg fa-fw fa-user-md"></i></span>
            <span class="d-sm-block d-none text-nowrap">
                <i class="fas fa-lg fa-fw fa-user-md"></i>Patient Profile
            </span>
            </button>
        </a>
    </li>
    <li class="col mx-0 px-0 h-100 w-100">
        <a href="#default-tab-2" data-toggle="tab">
            <button class=" md-red btn-block">
            <span class="d-sm-none"><i class="fas fa-lg fa-fw fa-heartbeat"></i></span>
            <span class="d-sm-block d-none text-nowrap">
                <i class="fas fa-lg fa-fw fa-heartbeat"></i>Vitals
            </span>
            </button>
        </a>
    </li>
    <li class="col mx-0 px-0 h-100 w-100">
        <a href="#default-tab-3" data-toggle="tab">
            <button class=" md-purple btn-block">
            <span class="d-sm-none"><i class="fas fa-lg fa-fw fa-pencil-alt"></i></span>
            <span class="d-sm-block d-none text-nowrap">
                <i class="fas fa-lg fa-fw fa-pencil-alt"></i>Doctors Notes
            </span>
            </button>
        </a>
    </li>
    <li class="col mx-0 px-0 h-100 w-100">
        <a href="#default-tab-4" data-toggle="tab">
            <button class=" md-green btn-block">
            <span class="d-sm-none"><i class="fas fa-lg fa-fw fa-sticky-note"></i></span>
            <span class="d-sm-block d-none text-nowrap">
                <i class="fas fa-lg fa-fw fa-sticky-note"></i>Health Record
            </span>
            </button>
        </a>
    </li>
    <li class="col mx-0 px-0 h-100 w-100">
        <a href="#default-tab-5" data-toggle="tab">
            <button class=" md-orange btn-block">
            <span class="d-sm-none"><i class="fas fa-lg fa-fw fa-cog"></i></span>
            <span class="d-sm-block d-none text-nowrap">
                <i class="fas fa-lg fa-fw fa-cog"></i>Options
            </span>
            </button>
        </a>
    </li>
</ul>
</div>


                        
                        
                        
                        <!-- <ul class="nav nav-tabs">
                            <li class="col mx-0 px-0 h-100 w-100">
                                <a href="#default-tab-1" data-toggle="tab" class="active btn-lg md-blue btn-block" >
                                    <span class="d-sm-none">Tab 1</span>
                                    <span class="d-sm-block d-none mx-5"><i class="fas fa-lg fa-fw m-r-10 fa-user-md"></i> Patient Profile</span>
                                </a>
                            </li>

                            <li class="col mx-0 px-0 h-100 w-100">
                                <a href="#default-tab-2" data-toggle="tab" class="nav-link btn-lg md-red btn-block">
                                    <span class="d-sm-none">Tab 2</span>
                                    <span class="d-sm-block d-none mx-5"><i class="fas fa-lg fa-fw m-r-10 fa-heartbeat"></i>Vitals</span>
                                </a>
                            </li>

                            <li class="col mx-0 px-0 h-100 w-100">
                                <a href="#default-tab-3" data-toggle="tab" class="nav-link btn-lg md-purple btn-block">
                                    <span class="d-sm-none">Tab 3</span>
                                    <span class="d-sm-block d-none mx-5"><i class="fas fa-lg fa-fw m-r-10 fa-pencil-alt"></i>Doctors Notes</span>
                                </a>
                            </li>

                            <li class="col mx-0 px-0 h-100 w-100">
                                <a href="#default-tab-4" data-toggle="tab" class="nav-link btn-lg md-green btn-block">
                                    <span class="d-sm-none">Tab 4</span>
                                    <span class="d-sm-block d-none mx-5"><i class="fas fa-lg fa-fw m-r-10 fa-sticky-note"></i>Health</span>
                                </a>
                            </li>
                            
                            <li class="col mx-0 px-0 h-100 w-100">
                                <a href="#default-tab-5" data-toggle="tab" class="btn-lg md-orange btn-block">
                                    <span class="d-sm-none">Tab 4</span>
                                    <span class="d-sm-block d-none mx-5"><i class="fas fa-lg fa-fw m-r-10 fa-cog"></i>Options</span>
                                </a>
                            </li>
                            
                        </ul> -->
                        <!-- tab menu end -->
                        <!-- tab menu content begin -->
                        <!-- begin tab-content -->
                        
                        <div class="tab-content">


                            
                            <!-- begin tab-pane -->
                            <div class="tab-pane fade active show mb-4" id="default-tab-1">
                                
                                <!-- begin #accordion -->
                               
                                    <div id="accordion" class="card-accordion noSelect">
                                        <!-- begin card -->
                                        <div class="card">
                                            <div class="card-header pointer-cursor" data-toggle="collapse" data-target="#collapseOne">
                                                <span class="d-sm-none text-2">
                                                    <i class="fas fa-lg fa-fw fa-venus"></i>Menstrual History
                                                    <i class="fas fa-lg fa-fw m-r-10 fa-caret-down"></i>
                                                </span>
                                                <span class="d-sm-block d-none text-nowrap text-2">
                                                    <i class="fas fa-lg fa-fw fa-venus"></i>Menstrual History
                                                    <i class="fas fa-lg fa-fw m-r-10 fa-caret-down"></i>
                                                </span>
                                            </div>
                                            <div id="collapseOne" class="collapse" data-parent="#accordion">
                                            <div class="card-body">
                                                    <div class="row">
                                                    <div class="col-md-11 col-sm-11 col-xs-11">
                                                        <textarea class="form-control" name="medication" id="medication" cols="30" rows="10" placeholder="No Record Found" disabled></textarea>
                                                    </div>
                                                    <div class="col-md-1 col-sm-1 col-xs-1">
                                                        <i class="fas fa-lg fa-fw m-r-10 fa-edit float-right"></i>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card -->
                                        <!-- begin card -->
                                        <div class="card">
                                            <div class="card-header pointer-cursor" data-toggle="collapse" data-target="#collapseTwo">
                                                <span class="d-sm-none text-2">
                                                    <i class="fas fa-lg fa-fw fa-medkit"></i>Obstetric History
                                                    <i class="fas fa-lg fa-fw m-r-10 fa-caret-down"></i>
                                                </span>
                                                <span class="d-sm-block d-none text-nowrap text-2">
                                                    <i class="fas fa-lg fa-fw fa-medkit"></i>Obstetric History
                                                    <i class="fas fa-lg fa-fw m-r-10 fa-caret-down"></i>
                                                </span>
                                            </div>
                                            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                                <div class="card-body">
                                                    
                                                    <div class="row">
                                                        <div class="col-md-4 col-lg-2 col-sm-4">
                                                            <blockquote>
                                                                <div class="col">
                                                                    <div class="row text-center">
                                                                        <div class="col">
                                                                            <span class="text-4">G</span> 
                                                                            <span class="text-4">4</span> 
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <small class="text-center text-2 text-norwap"># of pregnancy</small>
                                                                </div>
                                                            </blockquote>
                                                        </div>
                                                        <div class="col-md-4 col-lg-2 col-sm-4">
                                                            <blockquote>
                                                                <div class="col">
                                                                    <div class="row text-center">
                                                                        <div class="col">
                                                                            <span class="text-4">P</span> 
                                                                            <span class="text-4">3</span> 
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <small class="text-center text-2 text-norwap"># of delivery</small>
                                                                </div>
                                                            </blockquote>
                                                        </div>
                                                        <div class="col-md-4 col-lg-2 col-sm-4">
                                                            <blockquote>
                                                                <div class="col">
                                                                    <div class="row text-center">
                                                                        <div class="col">
                                                                            <span class="text-4">FT</span> 
                                                                            <span class="text-4">3</span> 
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <small class="text-center text-2 text-norwap"># of full term</small>
                                                                </div>
                                                            </blockquote>
                                                        </div>
                                                        <div class="col-md-4 col-lg-2 col-sm-4">
                                                            <blockquote>
                                                                <div class="col">
                                                                    <div class="row text-center">
                                                                        <div class="col">
                                                                            <span class="text-4">Pr</span> 
                                                                            <span class="text-4">0</span> 
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <small class="text-center text-2 text-norwap"># of pre-term</small>
                                                                </div>
                                                            </blockquote>
                                                        </div>
                                                        <div class="col-md-4 col-lg-2 col-sm-4">
                                                            <blockquote>
                                                                <div class="col">
                                                                    <div class="row text-center">
                                                                        <div class="col">
                                                                            <span class="text-4">Ab</span> 
                                                                            <span class="text-4">0</span> 
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <small class="text-center text-2 text-norwap"># of abortion</small>
                                                                </div>
                                                            </blockquote>
                                                        </div>
                                                        <div class="col-md-4 col-lg-2 col-sm-4">
                                                            <blockquote>
                                                                <div class="col">
                                                                    <div class="row text-center">
                                                                        <div class="col">
                                                                            <span class="text-4">Ab</span> 
                                                                            <span class="text-4">3</span> 
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <small class="text-center text-2 text-norwap"># of currently living</small>
                                                                </div>
                                                            </blockquote>
                                                        </div>
                                                        
                                                        
                                                    </div>
                                                    
                                                        
                                                        <table class="table table-borderless table-hover table-sm">
                                                            <thead>
                                                                <tr>
                                                                    <th>&nbsp;</th>
                                                                    <th class="text-center text-2">Base on LMP</th>
                                                                    <th>&nbsp;</th>
                                                                    <th>&nbsp;</th>
                                                                </tr>
                                                                <tr>
                                                                    <th class="text-center text-2">G4</th>
                                                                    <th class="text-center text-2">Last Normal Menstration Period</th>
                                                                    <th class="text-center text-2">Expected Delivery Date</th>
                                                                    <th class="text-center text-2">Age of Gestation</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-center text-2">&nbsp;</td>
                                                                    <td class="text-center text-2">Started on June 2019</td>
                                                                    <td class="text-center text-2">24 March 2020</td>
                                                                    <td class="text-center text-2">35 Weeks and 6 Days</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        
                                                    
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card -->
                                        <!-- begin card -->
                                        <div class="card">
                                            <div class="card-header pointer-cursor" data-toggle="collapse" data-target="#collapseThree">
                                                <span class="d-sm-none text-2">
                                                    <i class="fas fa-lg fa-fw fa-stethoscope"></i>Vaccination
                                                    <i class="fas fa-lg fa-fw m-r-10 fa-caret-down"></i>
                                                </span>
                                                <span class="d-sm-block d-none text-nowrap text-2">
                                                    <i class="fas fa-lg fa-fw fa-stethoscope"></i>Immunization/ Vaccination
                                                    <i class="fas fa-lg fa-fw m-r-10 fa-caret-down"></i>
                                                </span>
                                              
                                               
                                            </div>
                                            <div id="collapseThree" class="collapse" data-parent="#accordion">
                                                <div class="card-body">
                                                    <div class="row">
                                                    <div class="col-md-11 col-sm-11 col-xs-11">
                                                        <textarea class="form-control" name="medication" id="medication" cols="30" rows="10" placeholder="No Record Found" disabled></textarea>
                                                    </div>
                                                    <div class="col-md-1 col-sm-1 col-xs-1">
                                                        <i class="fas fa-lg fa-fw m-r-10 fa-edit float-right"></i>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card -->
                                        
                                        <!-- begin card -->
                                        <div class="card">
                                            <div class="card-header pointer-cursor collapsed" data-toggle="collapse" data-target="#collapseFour">
                                                Collapsible Group Item #4
                                            </div>
                                            <div id="collapseFour" class="collapse" data-parent="#accordion">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card -->
                                        <!-- begin card -->
                                        <div class="card">
                                            <div class="card-header pointer-cursor collapsed" data-toggle="collapse" data-target="#collapseFive">
                                                Collapsible Group Item #5
                                            </div>
                                            <div id="collapseFive" class="collapse" data-parent="#accordion">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card -->
                                        <!-- begin card -->
                                        <div class="card">
                                            <div class="card-header pointer-cursor collapsed" data-toggle="collapse" data-target="#collapseSix">
                                                Collapsible Group Item #6
                                            </div>
                                            <div id="collapseSix" class="collapse" data-parent="#accordion">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card -->
                                        <!-- begin card -->
                                        <div class="card">
                                            <div class="card-header pointer-cursor collapsed" data-toggle="collapse" data-target="#collapseSeven">
                                                Collapsible Group Item #7
                                            </div>
                                            <div id="collapseSeven" class="collapse" data-parent="#accordion">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card -->
                                    </div>
                                
                                <!-- end #accordion -->
                            </div>
                            <!-- end tab-pane -->
                            <!-- begin tab-pane -->
                            <div class="tab-pane fade" id="default-tab-2">
                                <blockquote>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                                </blockquote>
                                <h4>Lorem ipsum dolor sit amet</h4>
                                <p>
                                    Nullam ac sapien justo. Nam augue mauris, malesuada non magna sed, feugiat blandit ligula. 
                                    In tristique tincidunt purus id iaculis. Pellentesque volutpat tortor a mauris convallis, 
                                    sit amet scelerisque lectus adipiscing.
                                </p>
                            </div>
                            <!-- end tab-pane -->
                            <!-- begin tab-pane -->
                            <div class="tab-pane fade" id="default-tab-3">
                                <p>
                                    
                                    Praesent tincidunt nulla ut elit vestibulum viverra. Sed placerat magna eget eros accumsan elementum. 
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis lobortis neque. 
                                    Maecenas justo odio, bibendum fringilla quam nec, commodo rutrum quam. 
                                    Donec cursus erat in lacus congue sodales. Nunc bibendum id augue sit amet placerat. 
                                    Quisque et quam id felis tempus volutpat at at diam. Vivamus ac diam turpis.Sed at lacinia augue. 
                                    Nulla facilisi. Fusce at erat suscipit, dapibus elit quis, luctus nulla. 
                                    Quisque adipiscing dui nec orci fermentum blandit.
                                    Sed at lacinia augue. Nulla facilisi. Fusce at erat suscipit, dapibus elit quis, luctus nulla. 
                                    Quisque adipiscing dui nec orci fermentum blandit.
                                </p>
                            </div>
                            <!-- end tab-pane -->
                            <!-- begin tab-pane -->
                            <div class="tab-pane fade" id="default-tab-4">
                                <p>
                                    <span class="fa-stack fa-4x pull-left m-r-10">
                                        <i class="fa fa-square-o fa-stack-2x"></i>
                                        <i class="fab fa-twitter fa-stack-1x"></i>
                                    </span>
                                    asdasdsa
                                </p>
                            </div>
                            <!-- end tab-pane -->
                            <!-- begin tab-pane -->
                            <div class="tab-pane fade" id="default-tab-5">
                                <p>
                                    <span class="fa-stack fa-4x pull-left m-r-10">
                                        <i class="fa fa-square-o fa-stack-2x"></i>
                                        <i class="fab fa-twitter fa-stack-1x"></i>
                                    </span>
                                   zzzzz
                                </p>
                            </div>
                            <!-- end tab-pane -->
                        </div>
                        
                        <!-- end tab-content -->
                        <!-- tab menu content end -->
                        
                        <!-- smd content end -->
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
