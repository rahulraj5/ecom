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
								<li class="breadcrumb-item active" aria-current="page">Sub Categories</li>
								<li class="breadcrumb-item active" aria-current="page">Add subCategory</li>
							</ol>
						</nav>
					</div>

				</div>
				<!--end breadcrumb-->
				<div class="row">
					<div class="col-xl-9 mx-auto">
						<h6 class="mb-0 text-uppercase">Add New subCategory</h6>
                        <!-- <?php print_r($category[0]['category_id']); ?> -->
						<!-- <?php pp($cat_data);?> -->
						<!-- <?php pp($category);?> -->
						<hr />
						<div class="card">
							<div class="card-body">
								<div class="p-4 border rounded">
								<form class="row g-3 enctype="multipart/form-data" id="subCat_form" method="post" action="">
										<div class="col-md-12">
											<label for="inputProductType" class="form-label">Select Category name</label>
											<select class="form-select" id="parent_category_id" name="parent_category_id">
											<option value="">Select Category</option>
												<?php
												if (!empty($category)) {
													foreach ($category as $pgetdata) {
												?>
														<option value="<?php echo $pgetdata['category_id']; ?>" <?php echo (isset($cat_data['subcategory_category_id']) && $cat_data['subcategory_category_id'] == $pgetdata['category_id'] ? 'selected' : ''); ?>><?php echo (isset($pgetdata['category_name']) ? $pgetdata['category_name'] : ''); ?></option>
												<?php }
												} ?>
											</select>
										</div>
										<div class="col-md-12">
											<label for="language_add" class="form-label">subCategory name</label>
											<input type="text" class="form-control" name="category_name" id="category_name" value="<?php echo (!empty($cat_data) && !empty($cat_data['subcategory_name']) ? $cat_data['subcategory_name'] : "" )?>" required>
											<!-- <div class="valid-feedback">Looks good!</div> -->
										</div>

										<div class="col-12">
										<input type="hidden" name="category_id" value="<?php echo (!empty($cat_data) && !empty($cat_data['subcategory_id']) ? $cat_data['subcategory_id'] : "" )?>">
											<button class="btn btn-primary subCategory_btn" name="submit" type="button">Add</button>
										</div>
									</form>
								</div>
							</div>
						</div>

					</div>
				</div>
				<!--end row-->
			</div>
		</div>
		<!--end page wrapper -->