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
								<li class="breadcrumb-item active" aria-current="page"><a href="<?php echo base_url(); ?>admin"> Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Top Slider</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
			  
				<div class="card">
					<div class="card-body">
						<div class="d-lg-flex align-items-center mb-4 gap-3">
							<div class="position-relative">
								<input type="text" class="form-control ps-5 radius-30" placeholder="Search Order"> <span class="position-absolute top-50 product-show translate-middle-y"><i class="bx bx-search"></i></span>
							</div>
						  <div class="ms-auto"><a href="<?php echo base_url();?>admin/add_home_top_slider" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add New Slider</a></div>
						</div>
						<div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
						<thead>
									<tr>
										<th>ID#</th>
										<th>Title</th>
										<th>Image</th>
										<th>Status</th>
										<th>Date</th>
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
										<td><div class="badge rounded-pill text-success bg-light-success p-2 text-uppercase px-3"><i class='bx bxs-circle me-1'></i>FulFilled</div></td>
										<td><?php  echo (!empty($getdata['slider'])?'<img src='.base_url().'uploads/home/top_slider/'.$getdata['slider'].' style="width:50px;height:50px">':'none'); ?></td>
										<td><?php echo (!empty($getdata['date']) ? $getdata['date'] : 'none'); ?></td>
										
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
		</div>
		<!--end page wrapper 