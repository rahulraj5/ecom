<!doctype html>
<html lang="en">


<!-- Mirrored from codervent.com/rocker/demo/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Sep 2021 11:56:07 GMT -->

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="<?php echo base_url(); ?>backend_assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="<?php echo base_url(); ?>backend_assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>backend_assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<!-- <link href="<?php echo base_url(); ?>backend_assets/plugins/fullcalendar/css/main.min.css" rel="stylesheet" /> -->
	<link href="<?php echo base_url(); ?>backend_assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>backend_assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>backend_assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>backend_assets/plugins/select2/css/select2-bootstrap4.css" rel="stylesheet" />

	<link href="<?php echo base_url(); ?>backend_assets/plugins/fancy-file-uploader/fancy_fileupload.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>backend_assets/plugins/Drag-And-Drop/dist/imageuploadify.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>backend_assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>backend_assets/plugins/input-tags/css/tagsinput.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- loader-->
	<link href="<?php echo base_url(); ?>backend_assets/css/pace.min.css" rel="stylesheet" />

	<script src="<?php echo base_url(); ?>backend_assets/js/pace.min.js"></script>

	<!-- Bootstrap CSS -->
	<link href="<?php echo base_url(); ?>backend_assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>backend_assets/css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="<?php echo base_url(); ?>backend_assets/css/app.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>backend_assets/css/icons.css" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>backend_assets/css/dark-theme.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>backend_assets/css/semi-dark.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>backend_assets/css/header-colors.css" />

	<link rel="stylesheet" href="<?php echo base_url(); ?>backend_assets/css/custom.css" />

	<link href="<?php echo base_url(); ?>backend_assets/plugins/datetimepicker/css/classic.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>backend_assets/plugins/datetimepicker/css/classic.date.css" rel="stylesheet" />

	<link rel="stylesheet" href="<?php echo base_url(); ?>backend_assets/plugins/notifications/css/lobibox.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/fontawesome.css">

	<script type="text/javascript">
		var base_url = "<?php echo base_url(); ?>";
	</script>
	<title>Admin</title>
</head>

<body>

	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="<?php echo base_url(); ?>backend_assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">Rocker</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
				</div>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">

				<li>
					<a href="<?php echo base_url(); ?>admin">
						<div class="parent-icon"> <i class="bx bx-home-circle"></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
				</li>

				
				<!-- </ul> -->
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-cart'></i>
						</div>
						<div class="menu-title">eCommerce</div>
					</a>
					<ul>
						<li> <a class="has-arrow" href="javascript:;"><i class="bx bx-right-arrow-alt"></i>Categories</a>
							<ul>
								<li> <a href="<?php echo base_url(); ?>admin/category"><i class="bx bx-right-arrow-alt"></i>Category</a>
								</li>
								<li> <a href="<?php echo base_url(); ?>admin/sub_category"><i class="bx bx-right-arrow-alt"></i>Sub Category</a>
								</li>
								<li> <a href="<?php echo base_url(); ?>admin/sub_subcategory"><i class="bx bx-right-arrow-alt"></i>Sub sub Category</a>
								</li>
							</ul>
						</li>
						<li> <a href="<?php echo base_url(); ?>admin/products_list"><i class="bx bx-right-arrow-alt"></i>Products List</a>
						</li>
						<li> <a class="has-arrow" href="javascript:;"><i class="bx bx-right-arrow-alt"></i>Bulk upload</a>
							<ul>
								<li> <a href="<?php echo base_url(); ?>admin/bulk_product"><i class="bx bx-right-arrow-alt"></i>Product Upload</a>
								</li>
							</ul>
						</li>
						<li> <a href="<?php echo base_url(); ?>admin/flash_deal"><i class="bx bx-right-arrow-alt"></i>Flash Deal</a>
						</li>
						<li> <a href="<?php echo base_url(); ?>admin/orders"><i class="bx bx-right-arrow-alt"></i>Orders</a>
						</li>
						<li> <a href="<?php echo base_url(); ?>admin/coupon"><i class="bx bx-right-arrow-alt"></i>Coupon</a>
						</li>
						<li> <a href="<?php echo base_url(); ?>admin/attribute"><i class="bx bx-right-arrow-alt"></i>Attribute</a>
						</li>

						<li> <a href="<?php echo base_url(); ?>admin/pickup_point"><i class="bx bx-right-arrow-alt"></i>Pickup Point</a>
						</li>
						<li> <a class="has-arrow" href="javascript:;"><i class="bx bx-right-arrow-alt"></i>Categories</a>
							<ul>
								<li> <a href="<?php echo base_url(); ?>admin/category_test"><i class="bx bx-right-arrow-alt"></i>Category</a>
								</li>
								<li> <a href="<?php echo base_url(); ?>admin/sub_category_test"><i class="bx bx-right-arrow-alt"></i>Sub Category</a>
								</li>
								<li> <a href="<?php echo base_url(); ?>admin/sub_subcategory_test"><i class="bx bx-right-arrow-alt"></i>Sub sub Category</a>
								</li>
							</ul>
						</li>


					</ul>
				</li>



				<li>
					<a href="<?php echo base_url(); ?>admin/sellers">
						<div class="parent-icon"> <i class="bx bx-home-smile"></i>
						</div>
						<div class="menu-title">Seller</div>
					</a>
				</li>
				<li>
					<a href="<?php echo base_url(); ?>admin/customers">
						<div class="parent-icon"> <i class="lni lni-customer"></i>
						</div>
						<div class="menu-title">Customer</div>
					</a>
				</li>

				<li>
					<a href="<?php echo base_url(); ?>admin/newsletter">
						<div class="parent-icon"> <i class="bx bx-envelope-open"></i>
						</div>
						<div class="menu-title">Newsletter</div>
					</a>
				</li>


				<li>
					<a href="<?php echo base_url(); ?>admin/staff_list">
						<div class="parent-icon"><i class='lni lni-users'></i>
						</div>
						<div class="menu-title">Staffs</div>
					</a>
					<!-- <ul>
					<li> <a href="<?php echo base_url(); ?>admin/staff_list"><i class="bx bx-right-arrow-alt"></i>All Staffs</a>
					</li>
					<li> <a href="<?php echo base_url(); ?>admin/staff_permi"><i class="bx bx-right-arrow-alt"></i>Staff Permission</a>
					</li>
				</ul> -->
				</li>


				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"> <i class="lni lni-facebook-messenger"></i>
						</div>
						<div class="menu-title">Conversation</div>
					</a>
					<ul>
						<li> <a href="<?php echo base_url(); ?>admin/customer_chat_list"><i class="bx bx-right-arrow-alt"></i>Customer Chat</a>
						</li>
						<li> <a href="<?php echo base_url(); ?>admin/seller_chat_list"><i class="bx bx-right-arrow-alt"></i>Seller Chat</a>
						</li>
					</ul>

				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="lni lni-cogs"></i>
						</div>
						<div class="menu-title">Settings</div>
					</a>
					<ul>
						<li> <a class="has-arrow" href="javascript:;"><i class="bx bx-right-arrow-alt"></i>Business Settings</a>
							<ul>
								<li> <a class="has-arrow" href="javascript:;"><i class="bx bx-right-arrow-alt"></i>Language</a>
									<ul>
										<li> <a href="<?php echo base_url(); ?>admin/language_list"><i class="bx bx-right-arrow-alt"></i>Language List</a>
										</li>
										<li> <a href="<?php echo base_url(); ?>admin/language_translation"><i class="bx bx-right-arrow-alt"></i>Translation</a>
										</li>
									</ul>
								</li>
								<li> <a href="<?php echo base_url(); ?>admin/activation"><i class="bx bx-right-arrow-alt"></i>Activation</a>
								</li>
								<!-- <li> <a href="<?php echo base_url(); ?>admin/payment_method"><i class="bx bx-right-arrow-alt"></i>Payment Method</a>
								</li> -->
								<li> <a href="<?php echo base_url(); ?>admin/smtp_settings"><i class="bx bx-right-arrow-alt"></i>SMTP Settings</a>
								</li>
								<li> <a href="<?php echo base_url(); ?>admin/google_analytics"><i class="bx bx-right-arrow-alt"></i>Google Analytics</a>
								</li>
								<li> <a href="<?php echo base_url(); ?>admin/social_media_details"><i class="bx bx-right-arrow-alt"></i>Social Media Login</a>
								</li>
								<li> <a href="<?php echo base_url(); ?>admin/currency_list"><i class="bx bx-right-arrow-alt"></i>Currency</a>
								</li>

								<li> <a href="<?php echo base_url(); ?>admin/seller_verifi"><i class="bx bx-right-arrow-alt"></i>Seller Verification Form</a>
								</li>
								<li> <a href="<?php echo base_url(); ?>admin/seller_commission"><i class="bx bx-right-arrow-alt"></i>Seller commission</a>
								</li>
								<li> <a href="<?php echo base_url(); ?>admin/seo_setting"><i class="bx bx-right-arrow-alt"></i>Seo Settings</a>
								</li>

								<li> <a class="has-arrow" href="javascript:;"><i class="bx bx-right-arrow-alt"></i>Facebook Chat & Pixel</a>
									<ul>
										<li> <a href="<?php echo base_url(); ?>admin/facebook_chat"><i class="bx bx-right-arrow-alt"></i>Facebook Chat</a>
										</li>
										<li> <a href="<?php echo base_url(); ?>admin/facebook_pixel"><i class="bx bx-right-arrow-alt"></i>Facebook Pixel</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li> <a class="has-arrow" href="javascript:;"><i class="bx bx-right-arrow-alt"></i>Frontend Settings</a>
							<ul>
								<li> <a href="<?php echo base_url(); ?>admin/frontend_setting"><i class="bx bx-right-arrow-alt"></i>Home</a>
								</li>
								<li> <a class="has-arrow" href="javascript:;"><i class="bx bx-right-arrow-alt"></i>Policy Pages</a>
									<ul>
										<li> <a href="<?php echo base_url(); ?>admin/seller_policy"><i class="bx bx-right-arrow-alt"></i>Seller Policy</a>
										</li>
										<li> <a href="<?php echo base_url(); ?>admin/return_policy"><i class="bx bx-right-arrow-alt"></i>Return Policy</a>
										</li>
										<li> <a href="<?php echo base_url(); ?>admin/support_policy"><i class="bx bx-right-arrow-alt"></i>Support Policy</a>
										</li>
										<li> <a href="<?php echo base_url(); ?>admin/terms_conditions"><i class="bx bx-right-arrow-alt"></i>Terms & Conditions</a>
										</li>
										<li> <a href="<?php echo base_url(); ?>admin/privacy_policy"><i class="bx bx-right-arrow-alt"></i>Privacy Policy</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li> <a href="<?php echo base_url(); ?>admin/general_settings"><i class="bx bx-right-arrow-alt"></i>General Settings</a>
						</li>
					</ul>
				</li>

			</ul>
			<!--end navigation-->
		</div>
		<!--end sidebar wrapper -->


		<!--start header -->
		<header>
			<div class="topbar d-flex align-items-center">
				<nav class="navbar navbar-expand">
					<div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
					</div>
					<div class="search-bar flex-grow-1">
						<div class="position-relative search-bar-box">
							<input type="text" class="form-control search-control" placeholder="Type to search..."> <span class="position-absolute top-50 search-show translate-middle-y"><i class='bx bx-search'></i></span>
							<span class="position-absolute top-50 search-close translate-middle-y"><i class='bx bx-x'></i></span>
						</div>
					</div>
					<div class="top-menu ms-auto">
						<ul class="navbar-nav align-items-center">
							<li class="nav-item mobile-search-icon">
								<a class="nav-link" href="#"> <i class='bx bx-search'></i>
								</a>
							</li>
							<li class="nav-item dropdown dropdown-large">
								<!-- <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <i class='bx bx-category'></i>
								</a> -->
								<div class="dropdown-menu dropdown-menu-end">
									<div class="row row-cols-3 g-3 p-3">
										<div class="col text-center">
											<div class="app-box mx-auto bg-gradient-cosmic text-white"><i class='bx bx-group'></i>
											</div>
											<div class="app-title">Teams</div>
										</div>

									</div>
								</div>
							</li>
							<li class="nav-item dropdown dropdown-large">
								<!-- <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">7</span>
									<i class='bx bx-bell'></i>
								</a> -->
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;">
										<div class="msg-header">
											<p class="msg-header-title">Notifications</p>
											<p class="msg-header-clear ms-auto">Marks all as read</p>
										</div>
									</a>
									<div class="header-notifications-list">


									</div>

								</div>
							</li>
							<li class="nav-item dropdown dropdown-large">
								<!-- <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">8</span>
									<i class='bx bx-comment'></i>
								</a> -->
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;">
										<div class="msg-header">
											<p class="msg-header-title">Messages</p>
											<p class="msg-header-clear ms-auto">Marks all as read</p>
										</div>
									</a>
									<div class="header-message-list">
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="<?php echo base_url(); ?>backend_assets/images/avatars/avatar-1.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Daisy Anderson <span class="msg-time float-end">5 sec
															ago</span></h6>
													<p class="msg-info">The standard chunk of lorem</p>
												</div>
											</div>
										</a>

									</div>
									<a href="javascript:;">
										<div class="text-center msg-footer">View All Messages</div>
									</a>
								</div>
							</li>
						</ul>
					</div>
					<div class="user-box dropdown">
						<a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<img src="<?php echo base_url(); ?>backend_assets/images/avatars/avatar-2.png" class="user-img" alt="user avatar">
							<div class="user-info ps-3">
								<p class="user-name mb-0">Pauline Seitz</p>
								<p class="designattion mb-0">Web Designer</p>
							</div>
						</a>
						<ul class="dropdown-menu dropdown-menu-end">
							<li><a class="dropdown-item" href="javascript:;"><i class="bx bx-user"></i><span>Profile</span></a>
							</li>
							<li><a class="dropdown-item" href="javascript:;"><i class="bx bx-cog"></i><span>Settings</span></a>
							</li>
							<li><a class="dropdown-item" href="javascript:;"><i class='bx bx-home-circle'></i><span>Dashboard</span></a>
							</li>
							<!-- <li><a class="dropdown-item" href="javascript:;"><i class='bx bx-dollar-circle'></i><span>Earnings</span></a>
							</li>
							<li><a class="dropdown-item" href="javascript:;"><i class='bx bx-download'></i><span>Downloads</span></a>
							</li> -->
							<li>
								<div class="dropdown-divider mb-0"></div>
							</li>
							<li><a class="dropdown-item" href="<?php echo base_url();?>admin/logout"><i class='bx bx-log-out-circle'></i><span>Logout</span></a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<!--end header -->