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
								<li class="breadcrumb-item active" aria-current="page">Best Seller</li>
							</ol>
						</nav>
					</div>
				</div>
				<!--end breadcrumb-->
			  
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
		                    <table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>Products ID#</th>
										<th>Products Name</th>
										<th>Best Seller</th>
									</tr>
								</thead>
								<tbody>
									<?php $count = 1;
										if(!empty($products_list)){
											foreach ($products_list as $product) {
									?>
									<tr>
										<td><?php echo $product['prod_reg_id']; ?></td>
										<td><?php echo $product['product_name'] ?></td>
										<td>
											<?php if ($product['best_seller_status'] == 0) { ?>
											<a href="javascript:void(0)" href-data="<?php echo  $product['product_id']; ?>" class="bestseller_active" title="Change status"><i class="fa fa-toggle-off" style="font-size:24px;" aria-hidden="true"></i></a>
											<?php }
											if ($product['best_seller_status'] == 1) { ?>
											<a href="javascript:void(0)" href-data="<?php echo  $product['product_id']; ?>" class="bestseller_deactive" title="Change status"><i class="fa fa-toggle-on" style="font-size:24px;color:green;" aria-hidden="true"></i></a>
											<?php } ?>
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