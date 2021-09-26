<!--start page wrapper -->
<div class="page-wrapper">
	<div class="page-content">
		<!--breadcrumb-->
		<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
			<div class="breadcrumb-title pe-3">Frontend Setting</div>
			<div class="ps-3">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb mb-0 p-0">
						<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
						</li>
						<li class="breadcrumb-item active" aria-current="page"><a href="<?php echo base_url(); ?>admin"> Home</a></li>
						<li class="breadcrumb-item active" aria-current="page"><a href="<?php echo base_url(); ?>admin/frontend_setting">Frontend Setting </a></li>
						<li class="breadcrumb-item active" aria-current="page">Add Slider</li>
					</ol>
				</nav>
			</div>

		</div>
		<!--end breadcrumb-->

		<div class="card">
			<div class="card-body p-4">
				<h5 class="card-title">Add / Edit Slider </h5>
				<hr />
				<div class="form-body mt-4">
					<div class="card">
						<div class="card-body">
							<form action="" method="post" enctype="multipart/form-data">
								<!-- <div class="mb-3">
									<label for="title" class="form-label">Title</label>
									<input class="form-control"  id="" name="title" type="text" placeholder="Enter Title">
								</div> -->
								<div class="mb-3">
									<label for="Image" class="form-label">Image</label>
									<input type="file" class="form-control" name="image" id="image" placeholder="Enter Image">
								</div>
								<?php
								if (!empty($ts_data)) {
								?>
									
									<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
                                    <div class="card">
                                        <div class="card-body">
                                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img src="<?php echo base_url() ?>uploads/home/top_slider/<?php echo (!empty($ts_data['slider']) ? $ts_data['slider'] : "default.png") ?>" class="d-block w-100" alt="...">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
								<?php
								}
								?>
								<div class="mb-3">
									<input type="hidden" name="id" value="<?php echo (!empty($ts_data) && !empty($ts_data['id']) ? $ts_data['id'] : "") ?>">
									<button type="submit" name="submit" class="btn btn-primary px-5">Submit</button>
								</div>
							</form>
						</div>
					</div>
					<!--end row-->
				</div>
			</div>
		</div>



	</div>
</div>
<!--end page wrapper 