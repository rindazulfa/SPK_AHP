<!doctype html>
<html lang="en">

<head>
	<title>Notifications | Klorofil - Free Bootstrap Dashboard Template</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?php echo url('/'); ?>vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo url('/'); ?>vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo url('/'); ?>vendor/linearicons/style.css">
	<link rel="stylesheet" href="<?php echo url('/'); ?>vendor/toastr/toastr.min.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?php echo url('/'); ?>css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="<?php echo url('/'); ?>css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo url('/'); ?>img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo url('/'); ?>img/favicon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="index.html"><img src="<?php echo url('/'); ?>/img/logo-dark.png" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<form class="navbar-form navbar-left">
					<div class="input-group">
						<input type="text" value="" class="form-control" placeholder="Search dashboard...">
						<span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
					</div>
				</form>
				<div class="navbar-btn navbar-btn-right">
					<a class="btn btn-success update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
				</div>
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
								<i class="lnr lnr-alarm"></i>
								<span class="badge bg-danger">5</span>
							</a>
							<ul class="dropdown-menu notifications">
								<li><a href="#" class="notification-item"><span class="dot bg-warning"></span>System space is almost full</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-danger"></span>You have 9 unfinished tasks</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-success"></span>Monthly report is available</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-warning"></span>Weekly meeting in 1 hour</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-success"></span>Your request has been approved</a></li>
								<li><a href="#" class="more">See all notifications</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-question-circle"></i> <span>Help</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#">Basic Use</a></li>
								<li><a href="#">Working With Data</a></li>
								<li><a href="#">Security</a></li>
								<li><a href="#">Troubleshooting</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo url('/'); ?>/img/user.png" class="img-circle" alt="Avatar"> <span>Samuel</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
								<li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
								<li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
								<li><a href="#"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
						<!-- <li>
							<a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
						</li> -->
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="index.html" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="elements.html" class=""><i class="lnr lnr-code"></i> <span>Elements</span></a></li>
						<li><a href="charts.html" class=""><i class="lnr lnr-chart-bars"></i> <span>Charts</span></a></li>
						<li><a href="panels.html" class=""><i class="lnr lnr-cog"></i> <span>Panels</span></a></li>
						<li><a href="notifications.html" class="active"><i class="lnr lnr-alarm"></i> <span>Notifications</span></a></li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Pages</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="page-profile.html" class="">Profile</a></li>
									<li><a href="page-login.html" class="">Login</a></li>
									<li><a href="page-lockscreen.html" class="">Lockscreen</a></li>
								</ul>
							</div>
						</li>
						<li><a href="tables.html" class=""><i class="lnr lnr-dice"></i> <span>Tables</span></a></li>
						<li><a href="typography.html" class=""><i class="lnr lnr-text-format"></i> <span>Typography</span></a></li>
						<li><a href="icons.html" class=""><i class="lnr lnr-linearicons"></i> <span>Icons</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">Notifications</h3>
					<div id="toastr-demo" class="panel">
						<div class="panel-body">
							<!-- CONTEXTUAL -->
							<h4>Context</h4>
							<p class="demo-button">
								<button type="button" class="btn btn-primary btn-toastr" data-context="info" data-message="This is general theme info" data-position="top-right">General Info</button>
								<button type="button" class="btn btn-success btn-toastr" data-context="success" data-message="This is success info" data-position="top-right">Success Info</button>
								<button type="button" class="btn btn-warning btn-toastr" data-context="warning" data-message="This is warning info" data-position="top-right">Warning Info</button>
								<button type="button" class="btn btn-danger btn-toastr" data-context="error" data-message="This is error info" data-position="top-right">Error Info</button>
							</p>
							<!-- END CONTEXTUAL -->
							<br>
							<!-- POSITION -->
							<h4>Position</h4>
							<p class="demo-button">
								<button type="button" class="btn btn-default btn-toastr" data-context="info" data-message="Hi, I'm here" data-position="bottom-right">Bottom Right</button>
								<button type="button" class="btn btn-default btn-toastr" data-context="info" data-message="Hi, I'm here" data-position="bottom-left">Bottom Left</button>
								<button type="button" class="btn btn-default btn-toastr" data-context="info" data-message="Hi, I'm here" data-position="top-left">Top Left</button>
								<button type="button" class="btn btn-default btn-toastr" data-context="info" data-message="Hi, I'm here" data-position="top-right">Top Right</button>
								<button type="button" class="btn btn-default btn-toastr" data-context="info" data-message="Hi, I'm here" data-position="top-full-width">Top Full Width</button>
								<button type="button" class="btn btn-default btn-toastr" data-context="info" data-message="Hi, I'm here" data-position="bottom-full-width">Bottom Full Width</button>
								<button type="button" class="btn btn-default btn-toastr" data-context="info" data-message="Hi, I'm here" data-position="top-center">Top Center</button>
								<button type="button" class="btn btn-default btn-toastr" data-context="info" data-message="Hi, I'm here" data-position="bottom-center">Bottom Center</button>
							</p>
							<!-- END POSITION -->
							<br>
							<!-- CALLBACK -->
							<h4>Callback</h4>
							<p class="demo-button">
								<button type="button" class="btn btn-default btn-toastr-callback" id="toastr-callback1" data-context="info" data-message="onShown and onHidden callback demo">onShown and onHidden</button>
								<button type="button" class="btn btn-default btn-toastr-callback" id="toastr-callback2" data-context="info" data-message="Please click me">onclick</button>
								<button type="button" class="btn btn-default btn-toastr-callback" id="toastr-callback3" data-context="info" data-message="Please click close button">onCloseClick</button>
							</p>
							<!-- END CALLBACK -->
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="<?php echo url('/'); ?>/vendor/jquery/jquery.min.js"></script>
	<script src="<?php echo url('/'); ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo url('/'); ?>/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?php echo url('/'); ?>/vendor/toastr/toastr.min.js"></script>
	<script src="<?php echo url('/'); ?>/scripts/klorofil-common.js"></script>
</body>

</html>
