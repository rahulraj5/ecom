<!--start page wrapper -->
<div class="page-wrapper">
	<div class="page-content">
		<!--breadcrumb-->
		<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
			<div class="breadcrumb-title pe-3">Conversation</div>
			<div class="ps-3">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb mb-0 p-0">
						<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">Seller Chat</li>
					</ol>
				</nav>
			</div>

		</div>
		<!--end breadcrumb-->

		<div class="card">
			<div class="card-body">
				<div class="d-lg-flex align-items-center mb-4 gap-3">
					<div class="position-relative">
						<input type="text" class="form-control ps-5 radius-30" placeholder="Search Order"> <span class="position-absolute top-50 product-show translate-middle-y"><i class="bx bx-search"></i></span>
					</div>

				</div>
				<div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
						<thead>
							<tr>
								<th>TIcket ID#</th>
								<th>Message</th>
								<th>Status</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<div class="d-flex align-items-center">
										<div>
											<input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
										</div>
										<div class="ms-2">
											<h6 class="mb-0 font-14">#OS-000354</h6>
										</div>
									</div>
								</td>
								<td>My Order not Delivered</td>
								<td>
									<div class="badge rounded-pill text-success bg-light-success p-2 text-uppercase px-3"><i class='bx bxs-circle me-1'></i>FulFilled</div>
								</td>
								<td>
									<div class="d-flex order-actions">
										<a href="<?php echo base_url() ?>seller/admin_chat" class=""><i class='bx bxs-chat'></i></a>
										<a href="javascript:;" class="ms-3"><i class='bx bxs-trash'></i></a>
									</div>
								</td>
							</tr>

						</tbody>
					</table>
				</div>
			</div>
		</div>


	</div>
</div>
<!--end page wrapper -->