<!--start page wrapper -->
<div class="page-wrapper">
	<div class="page-content">
		<!--breadcrumb-->
		<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
			<div class="breadcrumb-title pe-3">Staff</div>
			<div class="ps-3">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb mb-0 p-0">
						<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">Staff List</li>
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
					<div class="ms-auto"><a href="<?php echo base_url(); ?>admin/staff_permi" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add Staff</a></div>
				</div>
				<div class="table-responsive">
					<table id="example" class="table table-striped table-bordered" style="width:100%">
						<thead>
							<tr>
								<th>ID#</th>
								<th>Name</th>
								<th>Email</th>
								<th>Role</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							<?php $count = 1;
								if(!empty($staff_list)){ 
									foreach($staff_list as $getdata){
							?>
							<tr>
								<td><?php echo $count; ?></td>
								<td><?php echo (!empty($getdata['name']) ? $getdata['name'] : 'none'); ?></td>
								<td><?php echo (!empty($getdata['email']) ? $getdata['email'] : 'none'); ?></td>
								<td><?php echo (!empty($getdata['role']) ? $getdata['role'] : 'none'); ?></td>
								<!-- <td><?php echo (!empty($getdata['permission']) ? $getdata['permission'] : 'none'); ?></td> -->
								<td>
									<div class="d-flex order-actions">
										<a href="<?php echo base_url() ?>admin/staff_permi/<?php echo  $getdata['id']; ?>" class="" title="Edit"><i class='bx bxs-edit'></i></a>
										<a href="javascript:void(0)" href-data="<?php echo  $getdata['id']; ?>" class="ms-3 staff_delete" title="Delete"><i class='bx bxs-trash'></i></a>
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