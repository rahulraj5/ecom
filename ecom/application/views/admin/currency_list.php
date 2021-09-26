<!--start page wrapper -->
<div class="page-wrapper">
	<div class="page-content">
		<!--breadcrumb-->
		<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
			<div class="breadcrumb-title pe-3">Settings</div>
			<div class="ps-3">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb mb-0 p-0">
						<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">Currency List</li>
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
					<div class="ms-auto"><a href="<?php echo base_url(); ?>admin/add_currency" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add New Currency</a></div>
				</div>
				<div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
						<thead>
							<tr>
								<th>ID#</th>
								<th>Currency Name</th>
								<th>Currency Symbol</th>
								<th>Currency Code</th>
								<th>Exchange Rate</th>
								<th>Publish</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							<?php $count = 1;
							if (!empty($currency_data)) {
								foreach ($currency_data as $getdata) {
							?>
									<tr>
										<td><?php echo $count; ?></td>
										<td><?php echo (!empty($getdata['currency_name']) ? $getdata['currency_name'] : 'none'); ?></td>
										<td><?php echo (!empty($getdata['currency_code']) ? $getdata['currency_code'] : 'none'); ?></td>
										<td><?php echo (!empty($getdata['currency_sym']) ? $getdata['currency_sym'] : 'none'); ?></td>
										<td><?php echo (!empty($getdata['exchange_rate']) ? $getdata['exchange_rate'] : 'none'); ?></td>
										<td><?php if ($getdata['publish'] == 0) { ?>
												<a href="javascript:void(0)" href-data="<?php echo  $getdata['id']; ?>" class="c_activecat" title="Change status"><i class="fa fa-toggle-off" style="font-size:24px;" aria-hidden="true"></i></a>
											<?php }
												if ($getdata['publish'] == 1) { ?>
												<a href="javascript:void(0)" href-data="<?php echo  $getdata['id']; ?>" class="c_deactive" title="Change status"><i class="fa fa-toggle-on" style="font-size:24px;color:green;" aria-hidden="true"></i></a>
											<?php } ?>
										</td>
										<td>
											<div class="d-flex order-actions">
												<a href="<?php echo base_url() ?>admin/add_currency/<?php echo  $getdata['id']; ?>" class=""><i class='bx bxs-edit'></i></a>
												<a href="javascript:void(0)" href-data="<?php echo  $getdata['id']; ?>" class="ms-3 currency_delete"><i class='bx bxs-trash'></i></a>
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