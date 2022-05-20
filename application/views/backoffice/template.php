<!DOCTYPE html>
<html>

<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Admin Transport</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url() ?>/assets/vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url() ?>/assets/vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>/assets/vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/plugins/datatables/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/vendors/styles/style.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>

<body>
	<?php
	$user = $_SESSION['user'];
	?>
	<div class="header">
		<div class="header-left">
			<div class="menu-icon dw dw-menu"></div>
			<div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
			<div class="header-search">
				<form action="<?php echo site_url() ?>/listeInformation-rechauffement-climatique" method="post">
					<div class="form-group mb-0">
						<i class="dw dw-search2 search-icon"></i>
						<input type="text" class="form-control search-input" placeholder="Search Here">
						<div class="dropdown">
							<a class="dropdown-toggle no-arrow" href="<?php echo site_url() ?>/listeInformation-rechauffement-climatique" role="button" data-toggle="dropdown">
								<i class="ion-arrow-down-c"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">From</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">To</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">Subject</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>
								<div class="text-right">
									<button class="btn btn-primary">Search</button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="header-right">
			<div class="dashboard-setting user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="#" data-toggle="right-sidebar">
						<i class="dw dw-settings2"></i>
					</a>
				</div>
			</div>
			<div class="user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
						<i class="icon-copy dw dw-notification"></i>
						<span class="badge notification-active"></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<div class="notification-list mx-h-350 customscroll">

						</div>
					</div>
				</div>
			</div>
			<div class="user-info-dropdown">
				<div class="dropdown">
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<a class="dropdown-item" href="<?php echo base_url() ?>/assets/profile.html"><i class="dw dw-user1"></i> Profile</a>
						<a class="dropdown-item" href="<?php echo base_url() ?>/assets/profile.html"><i class="dw dw-settings2"></i> Setting</a>
						<a class="dropdown-item" href="<?php echo base_url() ?>/assets/faq.html"><i class="dw dw-help"></i> Help</a>
						<a class="dropdown-item" href="<?php echo base_url() ?>/assets/login.html"><i class="dw dw-logout"></i> Log Out</a>
					</div>
				</div>
			</div>
			<div class="github-link">
				<a href="https://github.com/dropways/deskapp" target="_blank"><img src="<?php echo base_url() ?>/assets/vendors/images/github.svg" alt=""></a>
			</div>
		</div>
	</div>
	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="#"> 	
				<h1 style="color: white">
					<?php
					echo ($user[0]['statut']);
					?>
				</h1>
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle">
							<span class="micon dw dw-house-1"></span><span class="mtext">Users</span>
						</a>
						<ul class="submenu">
							<li><a href="<?php echo base_url() ?>deconnexion-gestion-de-voiture">Deconnexion</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle">
							<span class="micon dw dw-edit2"></span><span class="mtext">Vehicule</span>
						</a>
						<ul class="submenu">
							<?php if ($user[0]['statut'] == "admin") { ?>
								<li><a href="<?php echo site_url() ?>/page-ajout-voiture-gestion-de-voiture">ajout</a></li>
							<?php		} ?>
							<li><a href="<?php echo site_url() ?>/liste-voiture-gestion-de-voiture">Papiers</a></li>
							<li><a href="<?php echo site_url() ?>vehicule-disponible-voiture-gestion-de-voiture">Disponible</a></li>
							<li><a href="<?php echo site_url() ?>maintenance-vehicule-voiture-gestion-de-voiture">Maintenance</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle">
							<span class="micon dw dw-edit2"></span><span class="mtext">Trajets</span>
						</a>
						<ul class="submenu">
							<li><a href="<?php echo site_url() ?>/page-ajout-trajet-gestion-de-voiture">ajout</a></li>
							<li><a href="<?php echo site_url() ?>/liste-trajet-gestion-de-voiture">liste</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20">
			<div class="card-box mb-30">
				<?= include($page); ?>
				<div class="footer-wrap pd-20 mb-20 card-box">
					<h2>Transport Madagascar</h2>
				</div>
			</div>
		</div>
		<!-- js -->
		<script src="<?php echo base_url() ?>/assets/vendors/scripts/core.js"></script>
		<script src="<?php echo base_url() ?>/assets/vendors/scripts/script.min.js"></script>
		<script src="<?php echo base_url() ?>/assets/vendors/scripts/process.js"></script>
		<script src="<?php echo base_url() ?>/assets/vendors/scripts/layout-settings.js"></script>
		<script src="<?php echo base_url() ?>/assets/plugins/apexcharts/apexcharts.min.js"></script>
		<script src="<?php echo base_url() ?>/assets/plugins/datatables/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url() ?>/assets/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
		<script src="<?php echo base_url() ?>/assets/plugins/datatables/js/dataTables.responsive.min.js"></script>
		<script src="<?php echo base_url() ?>/assets/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
		<script src="<?php echo base_url() ?>/assets/vendors/scripts/dashboard.js"></script>
</body>

</html>