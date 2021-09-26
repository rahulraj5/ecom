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
								<li class="breadcrumb-item active" aria-current="page">Attribute</li>
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
								<form class="row g-3 enctype="multipart/form-data" id="pickPoint_form" method="post" action="">
										<div class="col-md-12">
											<label for="language_add" class="form-label">Name</label>
											<input type="text" class="form-control" name="name" id="language_add" value="<?php echo (!empty($pick_data) && !empty($pick_data['name']) ? $pick_data['name'] : "" )?>" required>
										</div>
                                        <div class="col-md-12">
											<label for="language_add" class="form-label">Location</label>
											<input type="text" class="form-control" name="location" id="language_add" value="<?php echo (!empty($pick_data) && !empty($pick_data['location']) ? $pick_data['location'] : "" )?>" required>
										</div>
                                        <div class="col-md-12">
											<label for="language_add" class="form-label">Phone</label>
											<input type="number" class="form-control" name="number" id="language_add" value="<?php echo (!empty($pick_data) && !empty($pick_data['number']) ? $pick_data['number'] : "" )?>" required>
										</div>
                                        <div class="col-md-12">
											<label for="language_add" class="form-label">Manager</label>
											<input type="text" class="form-control" name="manager" id="language_add" value="<?php echo (!empty($pick_data) && !empty($pick_data['manager']) ? $pick_data['manager'] : "" )?>" required>
											
										</div>

										<div class="col-12">
										<input type="hidden" id="pick_id" name="pick_id" value="<?php echo (!empty($pick_data) && !empty($pick_data['id']) ? $pick_data['id'] : "" )?>">
											<button class="btn btn-primary pick_btn" name="submit" type="button">Save</button>
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