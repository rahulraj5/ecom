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
                        <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo base_url(); ?>admin/flash_deal">Flashdeal List</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add Flashdeal Product</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Add Flashdeal Product</h5>
                <hr />
                <div class="form-body mt-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="border border-3 p-4 rounded">
                                <!-- <h4 class="card-title">General</h4>
								<hr /> -->
                                <?php
                                // print_r($flashproduct['start_date']);
                                // var_dump(date('d F, Y' ,strtotime($flashproduct['start_date'])));  
                                ?>
                                <form class="row g-3" method="post" enctype="multipart/form-data">
                                    <div class="col-md-12">
                                        <label for="flashdeal_title" class="form-label">Title</label>
                                        <input type="text" class="form-control" name="flashdeal_title" id="flashdeal_title" placeholder="Enter title" value="<?php echo (!empty($flashproduct) && !empty($flashproduct['title']) ? $flashproduct['title'] : "") ?>" required="required">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="bg_color" class="form-label">Background Color</label>
                                        <input type="text" class="form-control" name="bg_color" id="bg_color" value="<?php echo (!empty($flashproduct) && !empty($flashproduct['bg_color']) ? $flashproduct['bg_color'] : "") ?>" placeholder="Enter bg_color" required="required">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="txt_color" class="form-label">Text Color</label>
                                        <input type="text" class="form-control" name="txt_color" id="txt_color" value="<?php echo (!empty($flashproduct) && !empty($flashproduct['txt_color']) ? $flashproduct['txt_color'] : "") ?>" placeholder="Enter txt_color" required="required">
                                    </div>

                                    <!--  <div class="col-6">
                                        <label for="inputProductType" class="form-label">Background Color</label>
                                        <select class="form-select" id="inputProductType">
                                            <option></option>
                                            <option value="1">Red</option>
                                            <option value="2">Blue</option>
                                            <option value="3">Green</option>
                                        </select>
                                    </div> -->

                                    <div class="col-md-12 mb-3">
                                        <label for="banner_img" class="form-label">Banner Image</label>
                                        <input type="file" class="form-control" name="banner_img" id="banner_img" placeholder="Enter Main Image">
                                    </div>
                                    <?php
                                    if (!empty($flashproduct)) {
                                    ?>
                                        <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                                        <div class="carousel-inner">
                                                            <div class="carousel-item active">
                                                                <img src="<?php echo base_url() ?>uploads/flashdeal_products/<?php echo (!empty($flashproduct['banner_img']) ? $flashproduct['banner_img'] : "default.png") ?>" class="d-block w-100" alt="...">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                    <div class="col-md-6">
                                        <label for="start_date" class="form-label">Start Date</label>
                                        <input type="date" class="form-control datepicker" name="start_date" id="start_date" value="<?php echo isset($flashproduct['start_date']) ? set_value('start_date', date('Y-m-d', strtotime($flashproduct['start_date']))) : set_value('start_date'); ?>" placeholder="Enter Start Date">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="end_date" class="form-label">End Date</label>
                                        <input type="date" class="form-control datepicker1" name="end_date" id="end_date" value="<?php echo isset($flashproduct['end_date']) ? set_value('end_date', date('Y-m-d', strtotime($flashproduct['end_date']))) : set_value('end_date'); ?>" placeholder="Enter End Date">
                                    </div>
                                    <?php
                                    
                                    ?>
                                    <div class="col-12">
                                        <label for="product_id" class="form-label">Select Product</label>
                                        <?php
                                        // if (isset($products_list) && !empty($products_list)) {

                                        ?>
                                            <select class="multiple-select" name="product_id[]" data-placeholder="Choose anything" id="product_id" multiple="multiple">
                                                <option value="">Select Product</option>
                                                <?php
                                                foreach ($products_list as $product) {
                                                ?>
                                                    <!-- <option value="<?php echo $product['product_id']; ?>"><?php echo $product['product_name']; ?></option> -->
                                                    
                                                    <option value="<?php echo $product['product_id']; ?>" <?php if(isset($flashproduct)){ foreach (json_decode($flashproduct['product_id']) as $flashprod) {  ?>  <?php echo $flashprod == $product['product_id'] ? 'selected' : ''; ?> <?php }} ?>><?php echo $product['product_name']; ?></option>
                                                    <!-- <option value="<?php echo $product['product_id']; ?>" ><?php echo $product['product_name']; ?></option> -->
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        <?php
                                        // }
                                        ?>
                                    </div>


                                    <!-- <div class="col-md-6">
                                        <label for="discount_type" class="form-label">Discount Type</label>
                                        <input type="text" class="form-control" name="discount_type" id="discount_type" placeholder="Enter product unit">
                                    </div> -->
                                    <div class="col-6">
                                        <label for="discount_type" class="form-label">Discount Type</label>
                                        <select class="form-select" name="discount_type" id="discount_type">
                                            <option value="">Select</option>
                                            <option value="1" <?php echo (isset($flashproduct['flash_discount_type']) && $flashproduct['flash_discount_type'] == 1 ? 'Selected' : ''); ?>>Percentage</option>
                                            <option value="2" <?php echo (isset($flashproduct['flash_discount_type']) && $flashproduct['flash_discount_type'] == 2 ? 'Selected' : '');  ?>>Flat</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="discount_amt" class="form-label">Discount Amount</label>
                                        <input type="text" class="form-control" name="discount_amt" id="" value="<?php echo (!empty($flashproduct) && !empty($flashproduct['flash_discount_amt']) ? $flashproduct['flash_discount_amt'] : "") ?>" placeholder="Enter product unit">
                                    </div>

                                    <!-- <div class="col-md-6">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="checkFeaturedProd">
                                            <label class="form-check-label" for="checkFeaturedProd">Select for the Featured Product</label>
                                        </div>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="checkFlashDeal">
                                            <label class="form-check-label" for="checkFlashDeal">Publish for the Flash Deal</label>
                                        </div>
                                    </div> -->

                                    <div class="col-md-12">
                                        <input type="hidden" name="id" value="<?php echo (!empty($flashproduct) && !empty($flashproduct['id']) ? $flashproduct['id'] : "") ?>">
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
<!--end page wrapper 