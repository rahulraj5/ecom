<!--start page wrapper -->
<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Frontend Settings</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Policy</li>
								<li class="breadcrumb-item active" aria-current="page">Terms & Conditions</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto"><a href="<?php echo base_url();?>admin/edit_terms_conditions" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Edit Seller Policy</a></div>
				</div>
				<!--end breadcrumb-->
				<div class="">
					<div class="">
						<div class="container py-2">
							<h2 class="font-weight-light text-center text-muted py-3">Terms & Conditions</h2>
							<!-- timeline item 1 -->
							
							<div class="row">
								
								<div class="col py-2">
									<div class="card radius-15">
										<div class="card-body">
											<!-- <div class="float-end text-muted">Last Update on - Jan 11th 2019 8:30 AM</div> -->
											<h4 class="card-title"></h4>
											<p><?php echo (isset($terms_conditions['description']) ?  $terms_conditions['description'] : '');?></p>
										</div>
									</div>
								</div>
							</div>
							<!--/row-->
							
						</div>
						<!--container-->
						
						
					</div>
				</div>
			</div>
		</div>
		<!--end page wrapper 