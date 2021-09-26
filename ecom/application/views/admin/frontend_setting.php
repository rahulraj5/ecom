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
                        <li class="breadcrumb-item active" aria-current="page">Home</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->
        <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-tabs nav-success" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" data-bs-toggle="tab" href="#primaryhome" role="tab" aria-selected="true">
                                    <div class="d-flex align-items-center">
                                        <div class="tab-icon"><i class='bx bx-image-alt font-18 me-1'></i>
                                        </div>
                                        <div class="tab-title">Top Slider</div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#primaryprofile" role="tab" aria-selected="false">
                                    <div class="d-flex align-items-center">
                                        <div class="tab-icon"><i class='bx bx-image font-18 me-1'></i>
                                        </div>
                                        <div class="tab-title">Banners</div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#primarycontact" role="tab" aria-selected="false">
                                    <div class="d-flex align-items-center">
                                        <div class="tab-icon"><i class='bx bx-cart font-18 me-1'></i>
                                        </div>
                                        <div class="tab-title">Categorywise Products</div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#primarybest" role="tab" aria-selected="false">
                                    <div class="d-flex align-items-center">
                                        <div class="tab-icon"><i class='bx bx-star font-18 me-1'></i>
                                        </div>
                                        <div class="tab-title">Best Selling</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content py-2">
                            <div class="tab-pane fade show active" id="primaryhome" role="tabpanel">
                                <!-- <div class="card">
                                    <div class="card-body"> -->
                                <div class="d-lg-flex align-items-center mb-2 gap-3">
                                    <div class="ms-auto"><a href="<?php echo base_url(); ?>admin/add_home_top_slider" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add New Slider</a></div>
                                </div>
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>ID#</th>
                                                <th>Title</th>
                                                <th>Image</th>
                                                <th>Status</th>
                                                <!-- <th>Date</th> -->
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $count = 1;
                                            if (!empty($ts_data)) {
                                                foreach ($ts_data as $getdata) {
                                            ?>
                                                    <tr>
                                                        <td><?php echo $count; ?></td>
                                                        <td><?php echo (!empty($getdata['title']) ? $getdata['title'] : 'none'); ?></td>

                                                        <td><?php echo (!empty($getdata['slider']) ? '<img src=' . base_url() . 'uploads/home/top_slider/' . $getdata['slider'] . ' style="width:50px;height:50px">' : 'none'); ?></td>
                                                        <!-- <td><?php echo (!empty($getdata['date']) ? $getdata['date'] : 'none'); ?></td> -->
                                                        <td><?php if ($getdata['status'] == 0) { ?>
                                                                <a href="javascript:void(0)" href-data="<?php echo  $getdata['id']; ?>" class="home_slider_active" title="Change status"><i class="fa fa-toggle-off" style="font-size:24px;" aria-hidden="true"></i></a>
                                                            <?php }
                                                            if ($getdata['status'] == 1) { ?>
                                                                <a href="javascript:void(0)" href-data="<?php echo  $getdata['id']; ?>" class="home_slider_deactive" title="Change status"><i class="fa fa-toggle-on" style="font-size:24px;color:green;" aria-hidden="true"></i></a>
                                                            <?php } ?>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex order-actions">
                                                                <a href="<?php echo base_url() ?>admin/add_home_top_slider/<?php echo  $getdata['id']; ?>" class=""><i class='bx bxs-edit'></i></a>
                                                                <a href="javascript:void(0)" href-data="<?php echo  $getdata['id']; ?>" class="ms-3 tSlider_delete"><i class='bx bxs-trash'></i></a>
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
                                <!-- </div>
                                </div> -->
                            </div>
                            <div class="tab-pane fade" id="primaryprofile" role="tabpanel">
                                <div class="d-lg-flex align-items-center mb-2 gap-3">
                                    <div class="ms-auto"><a href="<?php echo base_url(); ?>admin/add_home_banner" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add Banner</a></div>
                                </div>
                                <div class="table-responsive">
                                    <table id="example1" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>ID#</th>
                                                <th>Title</th>
                                                <th>Image</th>
                                                <th>Status</th>
                                                <!-- <th>Date</th> -->
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $count = 1;
                                            if (!empty($b_data)) {
                                                foreach ($b_data as $getdata) {
                                            ?>
                                                    <tr>
                                                        <td><?php echo $count; ?></td>
                                                        <td><?php echo (!empty($getdata['title']) ? $getdata['title'] : 'none'); ?></td>

                                                        <td><?php echo (!empty($getdata['banner']) ? '<img src=' . base_url() . 'uploads/home/banner/' . $getdata['banner'] . ' style="width:50px;height:50px">' : 'none'); ?></td>
                                                        <!-- <td><?php echo (!empty($getdata['date']) ? $getdata['date'] : 'none'); ?></td> -->
                                                        <td><?php if ($getdata['status'] == 0) { ?>
                                                                <a href="javascript:void(0)" href-data="<?php echo  $getdata['id']; ?>" class="home_banner_active" title="Change status"><i class="fa fa-toggle-off" style="font-size:24px;" aria-hidden="true"></i></a>
                                                            <?php }
                                                            if ($getdata['status'] == 1) { ?>
                                                                <a href="javascript:void(0)" href-data="<?php echo  $getdata['id']; ?>" class="home_banner_deactive" title="Change status"><i class="fa fa-toggle-on" style="font-size:24px;color:green;" aria-hidden="true"></i></a>
                                                            <?php } ?>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex order-actions">
                                                                <a href="<?php echo base_url() ?>admin/add_home_banner/<?php echo  $getdata['id']; ?>" class=""><i class='bx bxs-edit'></i></a>
                                                                <a href="javascript:void(0)" href-data="<?php echo  $getdata['id']; ?>" class="ms-3 banner_delete"><i class='bx bxs-trash'></i></a>
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
                            <div class="tab-pane fade" id="primarycontact" role="tabpanel">
                                <div class="d-lg-flex align-items-center mb-2 gap-3">
                                    <div class="ms-auto"><a href="<?php echo base_url(); ?>admin/add_home_catwise_prod" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add Category Wise </a></div>
                                </div>
                                <div class="table-responsive">
                                    <table id="example2" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Products ID#</th>
                                                <th>Products Name</th>
                                                <th>Image</th>
                                                <!-- <th>Flash Deal</th> -->
                                                <!-- <th>Featured</th> -->
                                                <!-- <th>Publish</th> -->
                                                <th>View Details</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $count = 1;
                                            if (!empty($product_data)) {
                                                foreach ($product_data as $getdata) {
                                            ?>
                                                    <tr>
                                                        <td><?php echo $getdata['prod_reg_id']; ?></td>
                                                        <td><?php echo $getdata['product_name']; ?></td>
                                                        <td><img src='<?php echo base_url(); ?>uploads/product/main_image/<?php echo $getdata['main_image']; ?>' style="width:50px;height:50px"></td>
                                                        <!-- <td><?php if ($getdata['flashdeal'] == 0) { ?>
                                                                <a href="javascript:void(0)" href-data="<?php echo  $getdata['product_id']; ?>" class="pflash_activecat" title="Change status"><i class="fa fa-toggle-off" style="font-size:24px;" aria-hidden="true"></i></a>
                                                            <?php }
                                                            if ($getdata['flashdeal'] == 1) { ?>
                                                                <a href="javascript:void(0)" href-data="<?php echo  $getdata['product_id']; ?>" class="pflash_deactive" title="Change status"><i class="fa fa-toggle-on" style="font-size:24px;" aria-hidden="true"></i></a>
                                                            <?php } ?>
                                                        </td>
                                                        <td><?php if ($getdata['featured'] == 0) { ?>
                                                                <a href="javascript:void(0)" href-data="<?php echo  $getdata['product_id']; ?>" class="pfeatur_activecat" title="Change status"><i class="fa fa-toggle-off" style="font-size:24px;" aria-hidden="true"></i></a>
                                                            <?php }
                                                            if ($getdata['featured'] == 1) { ?>
                                                                <a href="javascript:void(0)" href-data="<?php echo  $getdata['product_id']; ?>" class="pfeatur_deactive" title="Change status"><i class="fa fa-toggle-on" style="font-size:24px;" aria-hidden="true"></i></a>
                                                            <?php } ?>
                                                        </td>
                                                        <td><?php if ($getdata['publish'] == 0) { ?>
                                                                <a href="javascript:void(0)" href-data="<?php echo  $getdata['product_id']; ?>" class="ppub_activecat" title="Change status"><i class="fa fa-toggle-off" style="font-size:24px;" aria-hidden="true"></i></a>
                                                            <?php }
                                                            if ($getdata['publish'] == 1) { ?>
                                                                <a href="javascript:void(0)" href-data="<?php echo  $getdata['product_id']; ?>" class="ppub_deactive" title="Change status"><i class="fa fa-toggle-on" style="font-size:24px;" aria-hidden="true"></i></a>
                                                            <?php } ?>
                                                        </td> -->

                                                        <td><a href="<?php echo base_url() ?>admin/product_details/<?php echo  $getdata['product_id']; ?>"><button type="button" class="btn btn-outline-info radius-30 px-3">View Details</button></a></td>

                                                        <td>
                                                            <div class="d-flex order-actions">
                                                                <a href="<?php echo base_url() ?>admin/add_new_products/<?php echo  $getdata['product_id']; ?>" class=""><i class='bx bxs-edit'></i></a>
                                                                <a href="javascript:void(0)" href-data="<?php echo  $getdata['product_id']; ?>" class="ms-3 product_delete"><i class='bx bxs-trash'></i></a>
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
                            <div class="tab-pane fade" id="primarybest" role="tabpanel">
                                <div class="table-responsive">
                                    <table id="example3" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Products ID#</th>
                                                <th>Products Name</th>
                                                <th>Best Seller</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $count = 1;
                                            if (!empty($products_list)) {
                                                foreach ($products_list as $product) {
                                            ?>
                                                    <tr>
                                                        <td><?php echo $product['prod_reg_id']; ?></td>
                                                        <td><?php echo $product['product_name'] ?></td>
                                                        <td>
                                                            <?php if ($product['best_seller_status'] == 0) { ?>
                                                                <a href="javascript:void(0)" href-data="<?php echo  $product['product_id']; ?>" class="bestseller_active" title="Change status"><i class="fa fa-toggle-off" style="font-size:24px;" aria-hidden="true"></i></a>
                                                            <?php }
                                                            if ($product['best_seller_status'] == 1) { ?>
                                                                <a href="javascript:void(0)" href-data="<?php echo  $product['product_id']; ?>" class="bestseller_deactive" title="Change status"><i class="fa fa-toggle-on" style="font-size:24px;color:green;" aria-hidden="true"></i></a>
                                                            <?php } ?>
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
            </div>

        </div>
    </div>
    <!--end page wrapper -->