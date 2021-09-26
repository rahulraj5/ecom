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
						<li class="breadcrumb-item active" aria-current="page"><a href="<?php echo base_url(); ?>admin/products_list">Products</a></li>
						<li class="breadcrumb-item active" aria-current="page">Add Product</li>
					</ol>
				</nav>
			</div>
			
		</div>
		<!--end breadcrumb-->

		<div class="card">
			<div class="card-body p-4">
				<h5 class="card-title">Add New Product</h5>
				<hr />
				<div class="form-body mt-4">
					<div class="row">
						<div class="col-lg-12">
							<div class="border border-3 p-4 rounded">
								<h4 class="card-title">General</h4>
								<hr />
								<form class="row g-3" method="post" enctype="multipart/form-data">
									
						
									<?php
									if (isset($categorylist) && !empty($categorylist)) 
									{
										$whr = "WHERE parent_category_id = 0";
										$category = $this->Common_model->getwhrcategoiesbycatid($whr);
										// print_r($category);
									}
									?>
									<div class="col-4">
										<label for="inputProductType" class="form-label">Select Category</label>
										<select class="form-select" name="category" id="category" required>
											<option value="">Select Category</option>
											<?php
											foreach ($categorylist as $allcategories) {
											?>
												<option value="<?php echo $allcategories['category_id'] ?>"><?php echo $allcategories['category_name']; ?></option>
											<?php
											}
											?>
										</select>
									</div>
									<div class="col-4">
										<label for="inputProductType" class="form-label">Select Sub Category</label>
											<select class="form-select" id="sub_category" name="sub_category" >
												<option value="">Select Sub Category</option>
												
											</select>
									</div>		

									<div class="col-4">
										<label for="inputProductType" class="form-label">Select Sub subCategory</label>
										
											<select class="form-select" id="sub_subcategory" name="sub_subcategory" >
												<option value="">Select Sub SubCategory</option>
												
											</select>
									</div>	
									
									<!-- <div class="col-4">
										<label for="">Subcategory</label>
											<input type="text" name="sub_category" id="sub_category">
									</div> -->

									<div class="col-md-12">
										<button type="submit" name="submit" class="btn btn-primary px-5">Submit</button>
									</div>
								</form>
							</div>
						</div>

					</div>
					<!--end row-->
				</div>
			</div>
		</div>


	</div>
</div>
<!--end page wrapper >
