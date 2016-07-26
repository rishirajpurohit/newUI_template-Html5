<!DOCTYPE html>
<html lang="en">
	<head>
		<title>PROMET - project management by Rishiraj Purohit</title>

		<!-- BEGIN META -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="your,keywords">
		<meta name="description" content="Short explanation about this website">
		<!-- END META -->

		<!-- BEGIN STYLESHEETS -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
		<link type="text/css" rel="stylesheet" href="assets/css/theme-default/bootstrap.css?1422792965" />
		<link type="text/css" rel="stylesheet" href="assets/css/theme-default/materialadmin.css?1425466319" />
		<link type="text/css" rel="stylesheet" href="assets/css/theme-default/font-awesome.min.css?1422529194" />
		<link type="text/css" rel="stylesheet" href="assets/css/theme-default/material-design-iconic-font.min.css?1421434286" />
		<link type="text/css" rel="stylesheet" href="assets/css/theme-default/libs/rickshaw/rickshaw.css?1422792967" />
		<link type="text/css" rel="stylesheet" href="assets/css/theme-default/libs/morris/morris.core.css?1420463396" />
		<!-- END STYLESHEETS -->

		<link href="css/promet.css" rel="stylesheet">
    	<link href="css/custom.css" rel="stylesheet">

    	<style type="text/css">
    		::-moz-selection {
  
  background: grey;
  
}
::selection {
  
  background: grey;
  
}
img::selection {
  background: transparent;
}
img::-moz-selection {
  background: transparent;
}

a{
	color:white;
}
    	</style>
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script type="text/javascript" src="assets/js/libs/utils/html5shiv.js?1403934957"></script>
		<script type="text/javascript" src="assets/js/libs/utils/respond.min.js?1403934956"></script>
		<![endif]-->
	</head>
	<body class="menubar-hoverable header-fixed ">

		<!-- BEGIN HEADER-->
		<header id="header" >
			<div class="headerbar">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="headerbar-left">
					<ul class="header-nav header-nav-options">
						<li class="header-nav-brand" >
							<div class="brand-holder">
								<a href="dashboards/dashboard.html">
									<span class="text-lg text-bold text-primary">PROMET</span>
								</a>
							</div>
						</li>
						<li>
							<a class="btn btn-icon-toggle menubar-toggle text-primary" data-toggle="menubar" href="javascript:void(0);">
								<i class="fa fa-bars"></i>
							</a>
						</li>
					</ul>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="headerbar-right">
					<ul class="header-nav header-nav-profile">
						<li class="dropdown">
							<a href="javascript:void(0);" class="dropdown-toggle ink-reaction teal" data-toggle="dropdown">
								<img src="assets/img/avatar1.jpg?1403934956" alt="" />
								<span class="profile-info">
									Rishiraj Purohit
									<small>Awesome Dude</small>
								</span>
							</a>
							<ul class="dropdown-menu animation-dock">
								<li class="dropdown-header">Config</li>
								<li><a href="pages/profile.html">My profile</a></li>
								<li><a href="pages/blog/post.html">My blog <span class="badge style-danger pull-right">16</span></a></li>
								<li><a href="pages/calendar.html">My appointments</a></li>
								<li class="divider"></li>
								<li><a href="pages/locked.html"><i class="fa fa-fw fa-lock"></i> Lock</a></li>
								<li><a href="pages/login.html"><i class="fa fa-fw fa-power-off text-danger"></i> Logout</a></li>
							</ul><!--end .dropdown-menu -->
						</li><!--end .dropdown -->
					</ul><!--end .header-nav-profile -->
					<ul class="header-nav header-nav-toggle">
						<li>
							<a class="btn btn-icon-toggle btn-default" href="#offcanvas-search" data-toggle="offcanvas" data-backdrop="false">
								<i class="fa fa-ellipsis-v"></i>
							</a>
						</li>
					</ul><!--end .header-nav-toggle -->
				</div><!--end #header-navbar-collapse -->
			</div>
		</header>
		<!-- END HEADER-->

		<!-- BEGIN BASE-->
		<div id="base">

			<!-- BEGIN OFFCANVAS LEFT -->
			<div class="offcanvas">
			</div><!--end .offcanvas-->
			<!-- END OFFCANVAS LEFT -->

			<!-- BEGIN CONTENT-->
			<div id="content">
				<section>
					<div class="section-body">
						<div class="row">
							<div class="col-md-3">
							<div class="flip-container" id="myCard" ">
	<div class="flipper">
		<div class="front">
			<!-- front content -->
			<div class="card">
									<div class="card-head card-head-sm style-primary">
										<header><i class="fa fa-chevron-right"></i> Step 1</header>
										<div class="tools">
											<a class="btn btn-icon-toggle"><i class="fa fa-info"></i></a>
										</div>
									</div><!--end .card-head -->
									<div class="card-body">
										<div class="text-center new-project-icon">
											<button type="button" onclick="myflipper()" class="btn btn-raised ink-reaction btn-primary">
											<i class="fa fa-plus fa-4x"></i></button>
										</div>
										<div class="text-center" style="color:black;padding:5px;margin:10px;">
											<span style="    font-size: 15px;
    text-shadow: 2px 2px 1px #a0a0a0;
    font-family: inherit;
    font-variant: small-caps;">
												Create New Project
											</span>
										</div>
									</div><!--end .card-body -->
								</div><!--end .card -->
		</div>
		<div class="back">
			<!-- back content -->

			<!-- front content -->
			<div class="card">
									<div class="card-head card-head-sm style-primary">
										<header><i class="fa fa-chevron-right"></i> Step 1</header>
										<div class="tools">
											<a class="btn btn-icon-toggle"><i class="fa fa-info"></i></a>
										</div>
									</div><!--end .card-head -->
									<div class="card-body">
										<form class="form" role="form">
											<div class="form-group floating-label">
												<input type="text" class="form-control" id="regular2">
												<label for="regular2">Give it a Name</label>
											</div>
										</form>
									</div><!--end .card-body -->
									<div class="card-actionbar">
			                            <div class="card-actionbar-row">
			                                <button type="submit" class="btn btn-flat btn-primary ink-reaction"><i class="fa fa-chevron-right"></i> Let's Go !!</button>
			                            </div>
			                        </div>
								</div><!--end .card -->
		
		</div>
	</div>
</div>
								
							</div>
							

						</div><!--end .row -->
					</div><!--end .section-body -->
				</section>
			</div><!--end #content-->
			<!-- END CONTENT -->

			<!-- BEGIN MENUBAR-->
			<div id="menubar" class="menubar-inverse ">
				<div class="menubar-fixed-panel">
					<div>
						<a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
							<i class="fa fa-bars"></i>
						</a>
					</div>
					<div class="expanded">
						<a href="dashboard.php">
							<span class="text-lg text-bold text-primary ">PROMET</span>
						</a>
					</div>
				</div>
				<div class="menubar-scroll-panel">

					<!-- BEGIN MAIN MENU -->
					<ul id="main-menu" class="gui-controls">		<!-- BEGIN DASHBOARD -->
						<li>
							<a href="dashboards/dashboard.html" class="active">
								<div class="gui-icon"><i class="md md-home"></i></div>
								<span class="title">Dashboard</span>
							</a>
						</li><!--end /menu-li -->
						<!-- END DASHBOARD -->

<!-- BEGIN LEVELS -->
						<li class="gui-folder"><a>
								<div class="gui-icon"><i class="fa fa-folder-open fa-fw"></i></div>
								<span class="title">Menu levels demo</span>
							</a>
							<!--start submenu -->
							<ul>
								<li><a href="#"><span class="title">Item 1</span></a></li>
								<li><a href="#"><span class="title">Item 1</span></a></li>
								<li class="gui-folder">
									<a href="javascript:void(0);">
										<span class="title">Open level 2</span>
									</a>
									<!--start submenu -->
									<ul>
										<li><a href="#"><span class="title">Item 2</span></a></li>
										<li class="gui-folder">
											<a href="javascript:void(0);">
												<span class="title">Open level 3</span>
											</a>
											<!--start submenu -->
											<ul>
												<li><a href="#"><span class="title">Item 3</span></a></li>
												<li><a href="#"><span class="title">Item 3</span></a></li>
												<li class="gui-folder">
													<a href="javascript:void(0);">
														<span class="title">Open level 4</span>
													</a>
													<!--start submenu -->
													<ul>
														<li><a href="#"><span class="title">Item 4</span></a></li>
														<li class="gui-folder">
															<a href="javascript:void(0);">
																<span class="title">Open level 5</span>
															</a>
															<!--start submenu -->
															<ul>
																<li><a href="#"><span class="title">Item 5</span></a></li>
																<li><a href="#"><span class="title">Item 5</span></a></li>
															</ul><!--end /submenu -->
														</li><!--end /submenu-li -->
													</ul><!--end /submenu -->
												</li><!--end /submenu-li -->
											</ul><!--end /submenu -->
										</li><!--end /submenu-li -->
									</ul><!--end /submenu -->
								</li><!--end /submenu-li -->
							</ul><!--end /submenu -->
						</li><!--end /menu-li -->
						<!-- END LEVELS -->
							</ul><!--end .main-menu -->
					<!-- END MAIN MENU -->

					<div class="menubar-foot-panel">
						<small class="no-linebreak hidden-folded">
							<span class="opacity-75">Copyright &copy; 2016</span> <strong>Rishiraj Purohit</strong>
						</small>
					</div>
				</div><!--end .menubar-scroll-panel-->
			</div><!--end #menubar-->
			<!-- END MENUBAR -->

			<!-- BEGIN OFFCANVAS RIGHT -->
			<div class="offcanvas"></div><!--end .offcanvas-->
			<!-- END OFFCANVAS RIGHT -->

		</div><!--end #base-->
		<!-- END BASE -->
<script type="text/javascript">
	
	function myflipper(){
		console.log('clicked');
		document.querySelector("#myCard").classList.toggle("flipper");
	}
</script>
		<!-- BEGIN JAVASCRIPT -->
		<script src="assets/js/libs/jquery/jquery-1.11.2.min.js"></script>
		<script src="assets/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
		<script src="assets/js/libs/bootstrap/bootstrap.min.js"></script>
		<script src="assets/js/libs/spin.js/spin.min.js"></script>
		<script src="assets/js/libs/autosize/jquery.autosize.min.js"></script>
		<script src="assets/js/libs/moment/moment.min.js"></script>
		<script src="assets/js/libs/flot/jquery.flot.min.js"></script>
		<script src="assets/js/libs/flot/jquery.flot.time.min.js"></script>
		<script src="assets/js/libs/flot/jquery.flot.resize.min.js"></script>
		<script src="assets/js/libs/flot/jquery.flot.orderBars.js"></script>
		<script src="assets/js/libs/flot/jquery.flot.pie.js"></script>
		<script src="assets/js/libs/flot/curvedLines.js"></script>
		<script src="assets/js/libs/jquery-knob/jquery.knob.min.js"></script>
		<script src="assets/js/libs/sparkline/jquery.sparkline.min.js"></script>
		<script src="assets/js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
		<script src="assets/js/libs/d3/d3.min.js"></script>
		<script src="assets/js/libs/d3/d3.v3.js"></script>
		<script src="assets/js/libs/rickshaw/rickshaw.min.js"></script>
		<script src="assets/js/core/source/App.js"></script>
		<script src="assets/js/core/source/AppNavigation.js"></script>
		<script src="assets/js/core/source/AppOffcanvas.js"></script>
		<script src="assets/js/core/source/AppCard.js"></script>
		<script src="assets/js/core/source/AppForm.js"></script>
		<script src="assets/js/core/source/AppNavSearch.js"></script>
		<script src="assets/js/core/source/AppVendor.js"></script>
		<script src="assets/js/core/demo/Demo.js"></script>
		<script src="assets/js/core/demo/DemoDashboard.js"></script>
		<!-- END JAVASCRIPT -->

	</body>
</html>
