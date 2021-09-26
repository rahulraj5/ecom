<!--start page wrapper -->
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
						<li class="breadcrumb-item active" aria-current="page">Coupon List</li>
					</ol>
				</nav>
			</div>
			<div class="ms-auto">
				<div class="btn-group">
					<button type="button" class="btn btn-primary radius-30 mt-2 mt-lg-0">Add New Coupon</button>
					<button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
					</button>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">
						<a class="dropdown-item" href="<?php echo base_url(); ?>admin/coupon_prodBase">Product Base</a>
						<a class="dropdown-item" href="<?php echo base_url(); ?>admin/coupon_cartBase">Cart Base</a>
					</div>
				</div>
			</div>
		</div>

		<!--end breadcrumb-->
		<h6 class="mb-0 text-uppercase">Product Base Coupon</h6>
		<hr />
		<div class="card">
			<div class="card-body">
				<div class="table-responsive">
					<table id="example" class="table table-striped table-bordered" style="width:100%">
						<thead>
							<tr>
								<th>Sr no</th>
								<th>Coupon Code</th>
								<th>Coupon Type</th>
								<th>Discount</th>
								<th>Discount Type</th>
								<th>Start Date</th>
								<th>End Date</th>
								<th>Status</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							<?php $count = 1;
							if (isset($prod_coupon_list)) {
								foreach ($prod_coupon_list as $coupon) {
							?>
									<tr>
										<td><?php echo $count; ?></td>
										<td><?php echo (!empty($coupon['coupon_code']) ? $coupon['coupon_code'] : 'none'); ?></td>
										<td><?php echo (!empty($coupon['coupon_type']) ? $coupon['coupon_type'] : 'none'); ?></td>
										<td><?php echo (!empty($coupon['offer_amount']) ? $coupon['offer_amount'] : 'none'); ?></td>
										<td><?php if ($coupon['offer_amount_type'] == 2) {
												echo "Percentage";
											} else {
												echo "Flat";
											} ?></td>
										<td><?php echo (!empty($coupon['start_date']) ? $coupon['start_date'] : 'none'); ?></td>
										<td><?php echo (!empty($coupon['end_date']) ? $coupon['end_date'] : 'none'); ?></td>
										<td><?php if ($coupon['status'] == 0) { ?>
												<a href="javascript:void(0)" href-data="<?php echo  $coupon['id']; ?>" class="coupon_active" title="Change status"><i class="fa fa-toggle-off" style="font-size:24px;" aria-hidden="true"></i></a>
											<?php }
											if ($coupon['status'] == 1) { ?>
												<a href="javascript:void(0)" href-data="<?php echo  $coupon['id']; ?>" class="coupon_deactive" title="Change status"><i class="fa fa-toggle-on" style="font-size:24px;color:green;" aria-hidden="true"></i></a>
											<?php } ?>
										</td>
										<td>
											<div class="d-flex order-actions">
												<a href="<?php echo base_url() ?>admin/coupon_prodBase/<?php echo  $coupon['id']; ?>" class=""><i class='bx bxs-edit'></i></a>
												<a href="javascript:void(0)" href-data="<?php echo  $coupon['id']; ?>" class="ms-3 coupon_delete"><i class='bx bxs-trash'></i></a>
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
		<h6 class="mb-0 text-uppercase">Cart Base Coupon</h6>
		<hr />
		<div class="card">
			<div class="card-body">
				<div class="table-responsive">
					<table id="example1" class="table table-striped table-bordered" style="width:100%">
						<thead>
							<tr>
								<th>Sr no</th>
								<th>Coupon Code</th>
								<th>Coupon Type</th>
								<th>Discount</th>
								<th>Discount Type</th>
								<th>Min Shopping</th>
								<th>Max Discount</th>
								<th>Status</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							<?php $count = 1;
							if (isset($cart_coupon_list)) {
								foreach ($cart_coupon_list as $coupon) {
							?>
									<tr>
										<td><?php echo $count; ?></td>
										<td><?php echo (!empty($coupon['coupon_code']) ? $coupon['coupon_code'] : 'none'); ?></td>
										<td><?php echo (!empty($coupon['coupon_type']) ? $coupon['coupon_type'] : 'none'); ?></td>
										<td><?php echo (!empty($coupon['offer_amount']) ? $coupon['offer_amount'] : 'none'); ?></td>
										<td><?php if ($coupon['offer_amount_type'] == 2) {
												echo "Percentage";
											} else {
												echo "Flat";
											} ?></td>
										<td><?php echo (!empty($coupon['min_total_amount']) ? $coupon['min_total_amount'] : 'none'); ?></td>
										<td><?php echo (!empty($coupon['max_discount_amt']) ? $coupon['max_discount_amt'] : 'none'); ?></td>
										<td><?php if ($coupon['status'] == 0) { ?>
												<a href="javascript:void(0)" href-data="<?php echo  $coupon['id']; ?>" class="coupon_active" title="Change status"><i class="fa fa-toggle-off" style="font-size:24px;" aria-hidden="true"></i></a>
											<?php }
											if ($coupon['status'] == 1) { ?>
												<a href="javascript:void(0)" href-data="<?php echo  $coupon['id']; ?>" class="coupon_deactive" title="Change status"><i class="fa fa-toggle-on" style="font-size:24px;color:green;" aria-hidden="true"></i></a>
											<?php } ?>
										</td>
										<td>
											<div class="d-flex order-actions">
												<a href="<?php echo base_url() ?>admin/coupon_cartBase/<?php echo  $coupon['id']; ?>" class=""><i class='bx bxs-edit'></i></a>
												<a href="javascript:void(0)" href-data="<?php echo  $coupon['id']; ?>" class="ms-3 coupon_delete"><i class='bx bxs-trash'></i></a>
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