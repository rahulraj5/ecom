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
								<li class="breadcrumb-item active" aria-current="page">Business Settings</li>
								<li class="breadcrumb-item active" aria-current="page"><a href="<?php echo base_url(); ?>admin/language_list">Language List</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Add Language</li>
							</ol>
						</nav>
					</div>
					
				</div>
				<!--end breadcrumb-->
				<div class="row">
					<div class="col-xl-9 mx-auto">
						<h6 class="mb-0 text-uppercase">Add New Language</h6>
						<hr/>
						<div class="card">
							<div class="card-body">
								<div class="p-4 border rounded">
									<form class="row g-3" method="post" id="langform" enctype="multipart/form-data">
										<div class="col-md-12">
											<label for="language_add" class="form-label">Language name</label>
											<input type="text" class="form-control" name="lang_name" id="lang_name"  value="<?php echo (!empty($lang_data) && !empty($lang_data['lang_name']) ? $lang_data['lang_name'] : "") ?>" required>
										</div>
										<div class="col-md-12">
											<label for="language_add" class="form-label">Language Code</label>
											<input type="text" class="form-control" name="lang_code" id="lang_code"  value="<?php echo (!empty($lang_data) && !empty($lang_data['lang_code']) ? $lang_data['lang_code'] : "") ?>" required>
										</div>
										
										<div class="col-12">
										<input type="hidden" id="id" name="id" value="<?php echo (!empty($lang_data) && !empty($lang_data['id']) ? $lang_data['id'] : "") ?>">
											<button class="btn btn-primary btn_lang" type="button" >Add</button>
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