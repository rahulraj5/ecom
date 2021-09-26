<!--start page wrapper -->
<div class="page-wrapper">
	<div class="page-content">
		<!--breadcrumb-->
		<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
			<div class="breadcrumb-title pe-3">Frontend Setting</div>
			<div class="ps-3">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb mb-0 p-0">
						<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">Home</li>
					</ol>
				</nav>
			</div>

		</div>
		<!--end breadcrumb-->
		<!-- <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2">
					<div class="col-md-12">
						
						<div class="card">
							<div class="card-body">
								<ul class="nav nav-tabs nav-primary" role="tablist">
									<li class="nav-item" role="presentation">
										<a class="nav-link" data-bs-toggle="tab" href="#primaryhome" role="tab" aria-selected="true">
											<div class="d-flex align-items-center">
												<div class="tab-icon"><i class='bx bx-image-alt font-18 me-1'></i>
												</div>
												<div class="tab-title">Top Slider</div>
											</div>
										</a>
									</li>
									<li class="nav-item" role="presentation">
										<a class="nav-link" data-bs-toggle="tab" href="#primaryprofile" role="tab" aria-selected="false">
											<div class="d-flex align-items-center">
												<div class="tab-icon"><i class='bx bx-image font-18 me-1'></i>
												</div>
												<div class="tab-title">Banners</div>
											</div>
										</a>
									</li>
									<li class="nav-item" role="presentation">
										<a class="nav-link" data-bs-toggle="tab" href="#primarycontact" role="tab" aria-selected="false">
											<div class="d-flex align-items-center">
												<div class="tab-icon"><i class='bx bx-cart font-18 me-1'></i>
												</div>
												<div class="tab-title">Categorywise Products</div>
											</div>
										</a>
									</li>
									<li class="nav-item" role="presentation">
										<a class="nav-link" data-bs-toggle="tab" href="#primarybest" role="tab" aria-selected="false">
											<div class="d-flex align-items-center">
												<div class="tab-icon"><i class='bx bx-star font-18 me-1'></i>
												</div>
												<div class="tab-title">Best Selling</div>
											</div>
										</a>
									</li>
								</ul>
								<div class="tab-content py-3">
									<div class="tab-pane fade show active" id="primaryhome" role="tabpanel">
										
									</div>
									<div class="tab-pane fade" id="primaryprofile" role="tabpanel">
										
									</div>
									<div class="tab-pane fade" id="primarycontact" role="tabpanel">
										
									</div>
									<div class="tab-pane fade" id="primarybest" role="tabpanel">
										
									</div>
								</div>
							</div>
						</div>
					</div>
					
		</div> -->
		<!--end row-->

		<div class="row row-cols-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2">
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<div class="row row-cols-auto g-3">
							<div class="col">
								<a href="<?php echo base_url(); ?>admin/home_top_slider"><button type="button" class="btn btn-outline-info px-3">Top Slider</button></a>
							</div>
							<div class="col">
								<a href="<?php echo base_url(); ?>admin/home_banner"><button type="button" class="btn btn-outline-info px-3">Banner</button></a>
							</div>
							<div class="col">
								<a href="<?php echo base_url(); ?>admin/home_catwise_prod"><button type="button" class="btn btn-outline-info px-2">Category Wise Product</button></a>
							</div>
							<div class="col">
								<a href="<?php echo base_url(); ?>admin/home_best_sell"><button type="button" class="btn btn-outline-info px-2">Best Selling</button></a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-12">
				<h6 class="mb-0 text-uppercase">Home Top Slider</h6>
				<hr />
				<div class="card">
					<div class="card-body">

						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>ID#</th>
										<th>Title</th>
										<th>Image</th>
										<th>Status</th>
										<!-- <th>Date</th> -->
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
									<?php $count = 1;
									if (!empty($ts_data)) {
										foreach ($ts_data as $getdata) {
									?>
											<tr>
												<td><?php echo $count; ?></td>
												<td><?php echo (!empty($getdata['title']) ? $getdata['title'] : 'none'); ?></td>
												<!-- <td>
													<div class="badge rounded-pill text-success bg-light-success p-2 text-uppercase px-3"><i class='bx bxs-circle me-1'></i>FulFilled</div>
												</td> -->
												<td><?php echo (!empty($getdata['slider']) ? '<img src=' . base_url() . 'uploads/home/top_slider/' . $getdata['slider'] . ' style="width:50px;height:50px">' : 'none'); ?></td>
												<!-- <td><?php echo (!empty($getdata['date']) ? $getdata['date'] : 'none'); ?></td> -->
												<td><?php if ($getdata['status'] == 0) { ?>
														<a href="javascript:void(0)" href-data="<?php echo  $getdata['id']; ?>" class="home_slider_active" title="Change status"><i class="fa fa-toggle-off" style="font-size:24px;" aria-hidden="true"></i></a>
													<?php }
													if ($getdata['status'] == 1) { ?>
														<a href="javascript:void(0)" href-data="<?php echo  $getdata['id']; ?>" class="home_slider_deactive" title="Change status"><i class="fa fa-toggle-on" style="font-size:24px;color:green;" aria-hidden="true"></i></a>
													<?php } ?>
												</td>
												<td>
													<div class="d-flex order-actions">
														<a href="<?php echo base_url() ?>admin/add_home_top_slider/<?php echo  $getdata['id']; ?>" class=""><i class='bx bxs-edit'></i></a>
														<a href="javascript:void(0)" href-data="<?php echo  $getdata['id']; ?>" class="ms-3 tSlider_delete"><i class='bx bxs-trash'></i></a>
													</div>
												</td>
											</tr>
									<?php $count++;
										}
									}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<!--end list-->
		</div>
	</div>
	<!--end page wrapper -->