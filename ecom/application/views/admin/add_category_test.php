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
								<li class="breadcrumb-item active" aria-current="page">Categories</li>
                                <li class="breadcrumb-item active" aria-current="page">Add Category</li>
							</ol>
						</nav>
					</div>
					
				</div>
				<!--end breadcrumb-->
				<div class="row">
					<div class="col-xl-9 mx-auto">
						<h6 class="mb-0 text-uppercase">Add New Category</h6>
						<hr/>
						<div class="card">
							<div class="card-body">
								<div class="p-4 border rounded">
									<form class="row g-3 enctype="multipart/form-data" id="category_form" method="post" action="">

										<div class="col-md-12">
											<label for="language_add" class="form-label">Category name</label>
											<input type="text" class="form-control" name="category_name" id="category_name" value="<?php echo (!empty($cat_data) && !empty($cat_data['category_name']) ? $cat_data['category_name'] : "" )?>" required>
											<!-- <div class="valid-feedback">Looks good!</div> -->
										</div>
										
										<div class="col-12">
											<input type="hidden" id="category_id" name="category_id" value="<?php echo (!empty($cat_data) && !empty($cat_data['category_id']) ? $cat_data['category_id'] : "" )?>">
											<button type="button" class="btn btn-primary category_btn">Add</button>
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