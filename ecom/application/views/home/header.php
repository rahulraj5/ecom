<!doctype html>
<html lang="en">


<!-- Mirrored from codervent.com/rocker/demo/vertical/component-navbar.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Sep 2021 11:59:01 GMT -->

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="<?php echo base_url(); ?>backend_assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<!-- <link href="<?php echo base_url(); ?>backend_assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" /> -->
	<!-- <link href="<?php echo base_url(); ?>backend_<?php echo base_url(); ?>backend_assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" /> -->
	<link href="<?php echo base_url(); ?>backend_assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<!-- <link href="<?php echo base_url(); ?>backend_assets/css/pace.min.css" rel="stylesheet" /> -->
	<!-- <script src="<?php echo base_url(); ?>backend_assets/js/pace.min.js"></script> -->
	<!-- Bootstrap CSS -->
	<link href="<?php echo base_url(); ?>backend_assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>backend_assets/css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="<?php echo base_url(); ?>backend_assets/css/app.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>backend_assets/css/icons.css" rel="stylesheet">
	<title>Home</title>
	<script type="text/javascript">
		var base_url = "<?php echo base_url(); ?>";
	</script>
	<?php $session_userdata = $this->session->userdata(USER_SESSION); ?>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--start nav -->
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
			<div class="container-fluid"> <a class="navbar-brand" href="#">ECOM</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent3" aria-controls="navbarSupportedContent3" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent3">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item"> <a class="nav-link active" aria-current="page" href="#"><i class='bx bx-home-alt me-1'></i>Home</a>
						</li>
					</ul>
					<form class="d-flex">
						<button class="btn btn-light px-4" data-bs-toggle="modal" data-bs-target="#exampleExtraLargeModal" type="submit"><i class='bx bx-cart'></i> Buy Now</button>
					</form>
					<?php if (isset($session_userdata) && !empty($session_userdata)) { ?>
						<form class="d-flex">
							<button class="btn btn-light radius-30 px-4" type="submit"><i class='bx bx-user'></i><a href="<?php echo base_url(); ?>home/logout">Logout</a></button>
						</form>
					<?php } else { ?>
						<form class="d-flex">
							<button class="btn btn-dark me-3 radius-30 px-4" type="submit"><i class='bx bx-lock'></i><a href="<?php echo base_url(); ?>home/login">Login</a></button>
							<button class="btn btn-light radius-30 px-4" type="submit"><i class='bx bx-user'></i><a href="<?php echo base_url(); ?>home/signup"> Register</a></button>
						</form>
					<?php } ?>

				</div>
			</div>
		</nav>
		<!--end nav -->
		<!--start header -->
		<header>
		</header>
		<!--end header -->

		<div class="modal fade" id="exampleExtraLargeModal" tabindex="-1" aria-hidden="true">
			<div class="modal-dialog modal-xl">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Buy Now</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">cart</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Buy Now</button>
					</div>
				</div>
			</div>
		</div>