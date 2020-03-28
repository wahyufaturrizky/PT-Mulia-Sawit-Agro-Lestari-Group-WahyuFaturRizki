<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>Dashboard - PT Mulia Sawit Agro Lestari Group </title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
	<meta content="Coderthemes" name="author" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<!-- App favicon -->
	<link rel="icon" type="image/png" href="<?=base_url(); ?>assets/backend/images/favicon.png" />

	<!-- App css -->
	<link href="<?= base_url() ?>assets/backend/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url() ?>assets/backend/css/icons.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url() ?>assets/backend/css/metismenu.min.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url() ?>assets/backend/css/style.css" rel="stylesheet" type="text/css" />
	<!-- Latest selectpicker compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
	<!-- Latest Datatable compiled and minified CSS -->
	<link href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />

	<script src="<?= base_url() ?>assets/backend/js/modernizr.min.js"></script>
	<script src="<?= base_url() ?>assets/backend/js/jquery.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
	<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

</head>


<body clas>

	<!-- Begin page -->
	<div id="wrapper">

		<!-- ========== Left Sidebar Start ========== -->
		<div class="left side-menu">

			<div class="slimscroll-menu" id="remove-scroll">

				<!-- LOGO -->
				<div class="topbar-left">
					<a href="<?= base_url() ?>" class="logo">
						<span>
							<img src="<?= base_url() ?>assets/avian/logo.png" alt="" height="40">
						</span>
						<i>
							<img src="<?= base_url() ?>assets/avian/logo.png" alt="" height="18">
						</i>
					</a>
				</div>



				<!-- Sidemenu -->

				<?php $this->load->view('back/layout/menus'); ?>

				<!-- Sidemenu -->

				<div class="clearfix"></div>

			</div>
			<!-- Sidebar -left -->

		</div>
		<!-- Left Sidebar End -->



		<!-- ============================================================== -->
		<!-- Start right Content here -->
		<!-- ============================================================== -->

		<div class="content-page">

			<!-- Top Bar Start -->
			<div class="topbar">

				<nav class="navbar-custom">

					<ul class="list-unstyled topbar-right-menu float-right mb-0">

						<li class="dropdown notification-list">
							<a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button"
								aria-haspopup="false" aria-expanded="false">
								<img src="<?= base_url() ?>assets/backend/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
								<span class="ml-1">Wahyu Fatur Rizki <i class="mdi mdi-chevron-down"></i> </span>
							</a>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
								<!-- item-->
								<div class="dropdown-item noti-title">
									<h6 class="text-overflow m-0">Welcome !</h6>
								</div>

								<!-- item-->
								<a href="javascript:void(0);" class="dropdown-item notify-item">
									<i class="fi-head"></i> <span>My Account</span>
								</a>

								<!-- item-->
								<a href="javascript:void(0);" class="dropdown-item notify-item">
									<i class="fi-power"></i> <span>Logout</span>
								</a>

							</div>
						</li>
						<li class="float-left">
							<button class="button-menu-mobile open-left">
								<i class="dripicons-menu"></i>
							</button>
						</li>

					</ul>

					<ul class="list-inline menu-left mb-0">

						<li>
							<div class="page-title-box">
								<h4 class="page-title"><?php echo $title ?></h4>
								<ol class="breadcrumb">

									<?php for ($i=0; $i < count($breadcrumb) ; $i++) { ?>
									<li class="breadcrumb-item <?= ($i == count($breadcrumb)) ? 'active': ''; ?>"><a
											href="<?= $b_url[$i] ?>"><?= $breadcrumb[$i] ?></a></li>
									<?php } ?>
								</ol>
							</div>
						</li>

					</ul>

				</nav>

			</div>
			<!-- Top Bar End -->



			<!-- Start Page content -->
			<div class="content">
				<div class="container-fluid">

					<?php echo $content ?>

				</div> <!-- container -->

			</div> <!-- content -->

			<footer class="footer">
				2020 © all rights reserved by - <a href="https://www.linkedin.com/in/wahyu-fatur-rizky/">Wahyu Fatur Rizki</a>
			</footer>

		</div>


		<!-- ============================================================== -->
		<!-- End Right content here -->
		<!-- ============================================================== -->


	</div>
	<!-- END wrapper -->



	<!-- jQuery  -->
	<script src="<?= base_url() ?>assets/backend/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url() ?>assets/backend/js/metisMenu.min.js"></script>
	<script src="<?= base_url() ?>assets/backend/js/waves.js"></script>
	<script src="<?= base_url() ?>assets/backend/js/jquery.slimscroll.js"></script>



	<!-- App js -->
	<script src="<?= base_url() ?>assets/backend/js/jquery.core.js"></script>
	<script src="<?= base_url() ?>assets/backend/js/jquery.app.js"></script>

</body>

</html>