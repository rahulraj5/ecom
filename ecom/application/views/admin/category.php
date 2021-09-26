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
						<li class="breadcrumb-item active" aria-current="page">eCommerce</li>
						<li class="breadcrumb-item active" aria-current="page">Categories</li>
					</ol>
				</nav>
			</div>
			<div class="ms-auto">
				<div class="btn-group">

				</div>
			</div>
		</div>
		<!--end breadcrumb-->

		<div class="card">
			<div class="card-body">
				<div class="d-lg-flex align-items-center mb-4 gap-3">
					<div class="position-relative">
						<input type="text" class="form-control ps-5 radius-30" placeholder="Search Order"> <span class="position-absolute top-50 product-show translate-middle-y"><i class="bx bx-search"></i></span>
					</div>
					<div class="ms-auto"><a href="<?php echo base_url(); ?>admin/add_category" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add Category</a></div>
				</div>
				<div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
						<thead>
							<tr>
								<th>ID#</th>
								<th>Category Name</th>
								<th>Status</th>
								<!-- <th>Total</th> -->
								<th>Date</th>
								<!-- <th>View Details</th> -->
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							<?php $count = 1;
							// print_r($categories_data);
							if (!empty($categories_data)) {
								foreach ($categories_data as $getdata) {
							?>
									<tr>
										<td><?php echo $count; ?></td>

										<td><?php echo (!empty($getdata['category_name']) ? $getdata['category_name'] : 'none'); ?></td>
										<td>
											<div class="badge rounded-pill text-success bg-light-success p-2 text-uppercase px-3"><i class='bx bxs-circle me-1'></i><?php if ($getdata['status'] == 0) {echo "Deactive";}if ($getdata['status'] == 1) {echo "Active";}?></div>
										</td>
										<!-- <td>$485.20</td> -->
										<td><?php echo (!empty($getdata['create_date']) ? $getdata['create_date'] : 'none'); ?></td>
										<!-- <td><button type="button" class="btn btn-primary btn-sm radius-30 px-4">View Details</button></td> -->
										<td>
											<div class="d-flex order-actions">
												<a href="<?php echo base_url() ?>admin/add_category/<?php echo  $getdata['categories_id']; ?>" class=""><i class='bx bxs-edit'></i></a>
												<a href="javascript:void(0)" href-data="<?php echo  $getdata['categories_id']; ?>" class="ms-3 btn_delete"><i class='bx bxs-trash'></i></a>
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

<script>
// 	  $(".delete").click(function(e){
//     var val = confirm("Sure you want to Delete category ?");
//     var id = $(this).attr("href-data");
//     if(val){
//       $.ajax({
//         type: "POST",
//         url: "<?php echo base_url();?>admin/change_status",
//         data:{tablename:'categories',id:id,status:3,whrcol:'categories_id',whrstatuscol:'status',action:"Delete"},
//         dataType:'json',
//         success: function(response) {
//           if (response.status == 1){
//             $.notify(response.msg, "success");
//             setTimeout(function(){location.reload()},1000);
//           }else{
//             $.notify(response.msg, "error");
//           }
//         }
//       });
//     }
//   });

//   $('.btn_delete').click(function(){
//         var val = confirm("Sure you want to Delete ?");
//         var id = $(this).attr("href-id");
//         //alert(id);
//         $.ajax({
//             type: 'POST',
//             url:"<?php echo base_url()?>admin/deleterecord",
//             data:{id:id,table:'testimonial',colwhr:'id'},
//             dataType: 'json',
//             success: function(response) {
//               if (response.status == 1){
//                 $.notify(response.msg, "success");
//                 setTimeout(function(){location.reload()},1000);
//               }else{
//                 $.notify(response.msg, "error");
//               }
//             }

//         });
//     });
  
</script>