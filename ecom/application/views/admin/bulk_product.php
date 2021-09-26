		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Bulk Upload</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Product Upload</li>
							</ol>
						</nav>
					</div>
					<!-- <div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-primary">Action</button>
							<button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">
								<a class="dropdown-item" href="<?php echo base_url(); ?>excel/dl_format">Download Format</a>
								<a class="dropdown-item" href="javascript:;">Choose File</a>
								<a class="dropdown-item" href="javascript:;">Preview Data</a>
								<div class="dropdown-divider"></div> <a class="dropdown-item" href="javascript:;">Separated link</a>

							</div>
						</div>
					</div> -->
				</div>
				<!--end breadcrumb-->
				<!-- <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2"> -->
					<div class="col-md-12">
						<!-- <div class="card"> -->
							<div class="card-body">
								<div class="row row-cols-auto g-3">
									<div class="col">
										<a href="<?php echo base_url(); ?>admin/spreadhseet_format_download"><button type="button" class="btn btn-outline-info px-3">Download Format</button></a>
									</div>
									<!-- <div class="col"><span>Select File to Upload Data</span></div> -->
									<form method="POST" id="" action="<?php echo base_url(); ?>admin/spreadsheet_import" enctype="multipart/form-data">
										<div class="row">
											<div class="col">
													<input type="file" class="form-control" name="upload_file" id="upload_file" placeholder="Select" required>
													<!-- <input type="file" name="file_import"> -->
													<!-- <input type="submit" name="preview" value="Preview data"> -->
												
											</div>
											<div class="col">
												<button type="submit" name="submit" id="" class="btn btn-success px-3">Import Data</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					<!-- </div> -->
					<!-- </div> -->
					<!-- <hr /> -->

					<!-- <h6 class="mb-0 text-uppercase">DataTable Import</h6>
					<hr />
					<div class="card">
						<div class="card-body">
							<div class="table-responsive">
								<table id="bulk_upload" class="table table-striped table-bordered">
									<thead>
										<tr>
											<th>Name</th>
											<th>Position</th>
											<th>Office</th>
											<th>Age</th>
											<th>Start date</th>
											<th>Salary</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Tiger Nixon</td>
											<td>System Architect</td>
											<td>Edinburgh</td>
											<td>61</td>
											<td>2011/04/25</td>
											<td>$320,800</td>
										</tr>
										<tr>
											<td>Garrett Winters</td>
											<td>Accountant</td>
											<td>Tokyo</td>
											<td>63</td>
											<td>2011/07/25</td>
											<td>$170,750</td>
										</tr>

										<tr>
											<td>Donna Snider</td>
											<td>Customer Support</td>
											<td>New York</td>
											<td>27</td>
											<td>2011/01/25</td>
											<td>$112,000</td>
										</tr>
									</tbody>
									<tfoot>
										<tr>
											<th>Name</th>
											<th>Position</th>
											<th>Office</th>
											<th>Age</th>
											<th>Start date</th>
											<th>Salary</th>
										</tr>
									</tfoot>
								</table>
							</div>
						</div>
					</div> -->
				</div>
			</div>
			<!--end page wrapper -->