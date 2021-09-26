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
								<li class="breadcrumb-item active" aria-current="page"><a href="<?php echo base_url(); ?>admin/attribute">Attribute List</a></li>
								<li class="breadcrumb-item active" aria-current="page">Add Attributes</li>
							</ol>
						</nav>
					</div>
					
				</div>
				<!--end breadcrumb-->
				<div class="row">
					<div class="col-xl-9 mx-auto">
						<h6 class="mb-0 text-uppercase">Add Attribute</h6>
						<hr/>
						<div class="card">
							<div class="card-body">
								<div class="p-4 border rounded">
									<form class="row g-3" method="POST" id="attr_form" enctype="multipart/form-data">
										<div class="col-md-12">
											<label for="attribute_name" class="form-label">Attribute name</label>
											<input type="text" class="form-control" name="attribute_name" id="attribute_name" value="<?php echo (isset($attribute_data['attribute_name']) && !empty($attribute_data['attribute_name']) ? $attribute_data['attribute_name'] : '') ?>" required>
											<!-- <div class="valid-feedback">Looks good!</div> -->
										</div>
										<div class="col-md-12">
											<label class="form-label">Add Attribute</label>
											<input type="text" class="form-control" name="attributes" id="attributes" value="<?php echo (isset($attribute_data['attributes']) && !empty($attribute_data['attributes']) ? $attribute_data['attributes'] : '') ?>" data-role="tagsinput" />
										</div>
										
										<div class="col-12">
										<input type="hidden" id="id" name="id" value="<?php echo (!empty($attribute_data) && !empty($attribute_data['id']) ? $attribute_data['id'] : "" )?>">
											<button class="btn btn-primary attr_btn" name="submit" type="button">Add</button>
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