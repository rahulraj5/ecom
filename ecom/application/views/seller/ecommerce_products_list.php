<!--start page wrapper -->
<div class="page-wrapper">
	<div class="page-content">
		<!--breadcrumb-->
		<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
			<div class="breadcrumb-title pe-3">Seller</div>
			<div class="ps-3">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb mb-0 p-0">
						<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">Products</li>
					</ol>
				</nav>
			</div>

		</div>
		<!--end breadcrumb-->
<?php 
	// echo $seller_id; 
	// pp(shopprofilebysession());
?>
		<div class="card">
			<div class="card-body">
				<div class="d-lg-flex align-items-center mb-4 gap-3">
					<div class="position-relative">
						<input type="text" class="form-control ps-5 radius-30" placeholder="Search Order"> <span class="position-absolute top-50 product-show translate-middle-y"><i class="bx bx-search"></i></span>
					</div>
					<div class="ms-auto"><a href="<?php echo base_url(); ?>seller/add_new_products" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add New Product</a></div>
				</div>
				<div class="table-responsive">
					<table id="example" class="table table-striped table-bordered" style="width:100%">
						<thead>
							<tr>
								<th>Products ID#</th>
								<th>Products Name</th>
								<th>Image</th>
								<!-- <th>Flash Deal</th>
								<th>Featured</th>
								<th>Publish</th>
								<th>Digital Payment</th> -->
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							<?php $count = 1;
							if (!empty($product_data)) {
								foreach ($product_data as $getdata) {
							?>
									<tr>
										<td><?php echo $getdata['prod_reg_id']; ?></td>
										<td><?php echo $getdata['product_name']; ?></td>
										<td><img src='<?php echo base_url(); ?>uploads/product/main_image/<?php echo $getdata['main_image']; ?>' style="width:50px;height:50px"></td>
										<!-- <td><?php if ($getdata['flashdeal'] == 0) { ?>
												<a href="javascript:void(0)" href-data="<?php echo  $getdata['product_id']; ?>" class="pflash_active" title="Change status"><i class="fa fa-toggle-off" style="font-size:24px;" aria-hidden="true"></i></a>
											<?php }
											if ($getdata['flashdeal'] == 1) { ?>
												<a href="javascript:void(0)" href-data="<?php echo  $getdata['product_id']; ?>" class="pflash_deactive" title="Change status"><i class="fa fa-toggle-on" style="font-size:24px;" aria-hidden="true"></i></a>
											<?php } ?>
										</td>
										<td><?php if ($getdata['featured'] == 0) { ?>
												<a href="javascript:void(0)" href-data="<?php echo  $getdata['product_id']; ?>" class="pfeatur_active" title="Change status"><i class="fa fa-toggle-off" style="font-size:24px;" aria-hidden="true"></i></a>
											<?php }
											if ($getdata['featured'] == 1) { ?>
												<a href="javascript:void(0)" href-data="<?php echo  $getdata['product_id']; ?>" class="pfeatur_deactive" title="Change status"><i class="fa fa-toggle-on" style="font-size:24px;" aria-hidden="true"></i></a>
											<?php } ?>
										</td>
										<td><?php if ($getdata['publish'] == 0) { ?>
												<a href="javascript:void(0)" href-data="<?php echo  $getdata['product_id']; ?>" class="ppub_active" title="Change status"><i class="fa fa-toggle-off" style="font-size:24px;" aria-hidden="true"></i></a>
											<?php }
											if ($getdata['publish'] == 1) { ?>
												<a href="javascript:void(0)" href-data="<?php echo  $getdata['product_id']; ?>" class="ppub_deactive" title="Change status"><i class="fa fa-toggle-on" style="font-size:24px;" aria-hidden="true"></i></a>
											<?php } ?>
										</td> -->
										<!-- <td><a href="<?php echo base_url() ?>admin/product_details/<?php echo  $getdata['product_id']; ?>"><button type="button" class="btn btn-primary btn-sm radius-30 px-4">View Details</a></button></td> -->
										<!-- <td><a href="<?php echo base_url() ?>admin/product_details/<?php echo  $getdata['product_id']; ?>"><button type="button" class="btn btn-outline-info radius-30 px-3">View Details</button></a></td> -->
										<!-- <td>
											<div class="d-flex order-actions">
												<a href="javascript:;" class=""><i class='bx bxs-edit'></i></a>
												<a href="javascript:;" class="ms-3"><i class='bx bxs-trash'></i></a>
											</div>
										</td> -->
										<!-- <td><?php if ($getdata['digital_product_status'] == 0) { ?>
												<a href="javascript:void(0)" href-data="<?php echo  $getdata['product_id']; ?>" class="digi_prod_active" title="Change status"><i class="fa fa-toggle-off" style="font-size:24px;" aria-hidden="true"></i></a>
											<?php }
											if ($getdata['digital_product_status'] == 1) { ?>
												<a href="javascript:void(0)" href-data="<?php echo  $getdata['product_id']; ?>" class="digi_prod_deactive" title="Change status"><i class="fa fa-toggle-on" style="font-size:24px;" aria-hidden="true"></i></a>
											<?php } ?>
										</td> -->
										<td>
											<div class="d-flex order-actions">
											<a href="<?php echo base_url() ?>seller/product_details/<?php echo  $getdata['product_id']; ?>" class="ms-3" title="View Details"><i class='bx bxs-show'></i></a>
												<a href="<?php echo base_url() ?>seller/add_new_products/<?php echo  $getdata['product_id']; ?>" class="ms-3" title="Edit"><i class='bx bxs-edit'></i></a>
												<a href="javascript:void(0)" href-data="<?php echo  $getdata['product_id']; ?>" class="ms-3 product_delete" title="Delete"><i class='bx bxs-trash'></i></a>
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
<!--end page wrapper -->