start page wrapper -->
<div class="page-wrapper">
	<div class="page-content">
		<!--breadcrumb-->
		<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
			<div class="breadcrumb-title pe-3">eCommerce</div>
			<div class="ps-3">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb mb-0 p-0">
						<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">Flash Deal</li>
					</ol>
				</nav>
			</div>

		</div>
		<!--end breadcrumb-->

		<div class="card">
			<div class="card-body">
				<div class="d-lg-flex align-items-center mb-4 gap-3">
					<div class="position-relative">
						<input type="text" class="form-control ps-5 radius-30" placeholder="Search Order"> <span class="position-absolute top-50 product-show translate-middle-y"><i class="bx bx-search"></i></span>
					</div>
					<div class="ms-auto"><a href="<?php echo base_url(); ?>admin/add_flashdeal_product" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add Flashdeal Product</a></div>
				</div>
				<div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
						<thead>
							<tr>
								<th>ID#</th>
								<th>Products</th>
								<th>Start Date</th>
								<th>End Date</th>
								<th>Discount Type</th>
								<th>Discount Amount</th>
								<th>Featured</th>
								<th>Publish</th>
								<!-- <th>View Details</th> -->
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							<?php $count=1; 
								if(!empty($flashdeal_product)){
									foreach ($flashdeal_product as $product) {
							?>
							<tr>
								<td><?php echo $count; ?></td>
								<td><?php echo $product['title']; ?></td>
								<td><?php echo $product['start_date']; ?></td>
								<td><?php echo $product['end_date']; ?></td>
								<td><?php if($product['flash_discount_type'] == 1){ echo "Percentage";}else{echo "Flat";}
									?></td>
									<!-- <?php echo $product['flash_discount_type']; ?></td> -->
								<td><?php echo $product['flash_discount_amt']; ?></td>
								<!-- <td>
									<div class="badge rounded-pill text-success bg-light-success p-2 text-uppercase px-3"><i class='bx bxs-circle me-1'></i>FulFilled</div>
								</td> -->
								
								<td><?php if ($product['flash_featured_status'] == 0) { ?>
										<a href="javascript:void(0)" href-data="<?php echo  $product['id']; ?>" class="flash_featured_active" title="Change status"><i class="fa fa-toggle-off" style="font-size:24px;" aria-hidden="true"></i></a>
									<?php }
										if ($product['flash_featured_status'] == 1) { ?>
										<a href="javascript:void(0)" href-data="<?php echo  $product['id']; ?>" class="flash_featured_deactive" title="Change status"><i class="fa fa-toggle-on" style="font-size:24px;color:green;" aria-hidden="true"></i></a>
									<?php } ?>
								</td>
								<td><?php if ($product['flash_publish_status'] == 0) { ?>
										<a href="javascript:void(0)" href-data="<?php echo  $product['id']; ?>" class="flash_publish_active" title="Change status"><i class="fa fa-toggle-off" style="font-size:24px;" aria-hidden="true"></i></a>
									<?php }
										if ($product['flash_publish_status'] == 1) { ?>
										<a href="javascript:void(0)" href-data="<?php echo  $product['id']; ?>" class="flash_publish_deactive" title="Change status"><i class="fa fa-toggle-on" style="font-size:24px;color:green;" aria-hidden="true"></i></a>
									<?php } ?>
								</td>
								<!-- <td><a href="javascript:void(0)" href-data="" class="form-check-input" title="Change status"><i class="fa fa-toggle-off" aria-hidden="true"></i></a></td> -->
								<!-- <td><button type="button" class="btn btn-primary btn-sm radius-30 px-4">View Details</button></td> -->
								

								<td>
									<div class="d-flex order-actions">
										<a href="<?php echo base_url() ?>admin/add_flashdeal_product/<?php echo  $product['id']; ?>" class=""><i class='bx bxs-edit'></i></a>
										<a href="javascript:void(0)" href-data="<?php echo  $product['id']; ?>" class="ms-3 flashdeal_delete"><i class='bx bxs-trash'></i></a>
									</div>
								</td>
							</tr>
							<?php $count++;
							}}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>


	</div>
</div>
<!--end page wrapper 