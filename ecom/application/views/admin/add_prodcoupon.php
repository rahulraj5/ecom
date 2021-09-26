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
                        <li class="breadcrumb-item active" aria-current="page">Coupon</li>
                        <li class="breadcrumb-item active" aria-current="page">Add Coupon Product Base</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Add Coupon Product Base</h5>
                <hr />
                <div class="form-body mt-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="border border-3 p-4 rounded">
                                <!-- <h4 class="card-title">General</h4>
								<hr /> -->
                                <form class="row g-3" method="POST" id="prodCoupon_form" enctype="multipart/form-data">
                                    <div class="col-md-12">
                                        <label for="inputProductTitle" class="form-label">Type Coupon Code</label>
                                        <input type="text" class="form-control" name="coupon_code" id="coupon_code" value="<?php echo (!empty($coupondata) && !empty($coupondata['coupon_code']) ? $coupondata['coupon_code'] : "") ?>" placeholder="Enter Coupon Code" required>
                                    </div>

                                    <!-- category data start here -->
                                    <div class="col-4">
                                        <label for="inputProductType" class="form-label">Select Category</label>
                                        <select class="form-select" name="category" id="category" required>
                                            <option value="">Select Category</option>
                                            <?php
                                            foreach ($categorylist as $allcategories) {
                                            ?>
                                                <option value="<?php echo $allcategories['category_id'] ?>" <?php echo (isset($coupondata['category']) && $coupondata['category'] == $allcategories['category_id'] ? 'selected' : ''); ?>><?php echo $allcategories['category_name']; ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                <!-- subcategory data start here -->
                                    <div class="col-4">
                                        <label for="inputProductType" class="form-label">Select Sub Category</label>
                                            <?php 
                                                // $sub_id = $coupondata['sub_category']; 
                                                // pp($sub_id);
                                                // $da = $this->Common_model->getSingleRecordById("sub_category",array('subcategory_id'=>$sub_id));
                                                // pp($da['subcategory_name']);
                                            ?>
                                        <select class="form-select" name="sub_category" id="sub_category" required>
                                            <option value="">Select Sub Category</option>
                                            <?php if (!empty($subcategorylist)) { 
                                                foreach ($subcategorylist as $subcategory) {
                                                ?>
                                                <option value="<?php echo $subcategory['subcategory_id'] ?>" <?php echo (isset($coupondata['sub_category']) && $coupondata['sub_category'] == $subcategory['subcategory_id'] ? 'selected' : ''); ?>><?php echo $subcategory['subcategory_name'] ?></option>
                                            <?php }} ?>
                                        </select>

                                    </div>
                                    <!-- Sub subcategory data start here -->
                                    <div class="col-4">
                                        <label for="inputProductType" class="form-label">Select Sub sub Category</label>
                                        <select class="form-select" name="sub_subcategory" id="sub_subcategory" required>
                                            <option value="">Select Sub subcategory</option>
                                            <?php if (!empty($sub_subcategorylist)) { 
                                                foreach ($sub_subcategorylist as $subcategory) {
                                                ?>
                                                <option value="<?php echo $subcategory['sub_subcategory_id'] ?>" <?php echo (isset($coupondata['sub_subcategory']) && $coupondata['sub_subcategory'] == $subcategory['sub_subcategory_id'] ? 'selected' : ''); ?>><?php echo $subcategory['sub_subcategory_name'] ?></option>
                                            <?php }} ?>
                                        </select>
                                    </div>
                                    <!-- Products data start here -->
                                    <div class="col-12">
                                        <label for="inputProductType" class="form-label">Select Product</label>
                                        <select class="multiple-select" name="inputProduct[]" data-placeholder="Choose anything" id="inputProduct" multiple="multiple">
                                            <option>Select Products</option>
                                            <?php
                                            foreach ($products_list as $product) {
                                            ?>
                                                <option value="<?php echo $product['product_id']; ?>" <?php if (isset($coupondata)) {
                                                                                                            foreach (json_decode($coupondata['products']) as $flashprod) {  ?> <?php echo $flashprod == $product['product_id'] ? 'selected' : ''; ?> <?php }
                                                                                                                                                                                                                                                } ?>><?php echo $product['product_name']; ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="inputProductUnit" class="form-label">Start Date</label>
                                        <input type="text" class="form-control datepickerCouponPB1" name="dateCouponPB1" id="dateCouponPB1" value="<?php echo isset($coupondata['start_date']) ? set_value('start_date', date('Y-m-d', strtotime($coupondata['start_date']))) : set_value('start_date'); ?>" placeholder="Enter Start Date" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputProductUnit" class="form-label">End Date</label>
                                        <input type="text" class="form-control datepickerCouponPB2" name="dateCouponPB2" id="dateCouponPB2" value="<?php echo isset($coupondata['end_date']) ? set_value('end_date', date('Y-m-d', strtotime($coupondata['end_date']))) : set_value('end_date'); ?>" placeholder="Enter End Date" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="inputProductUnit" class="form-label">Discount</label>
                                        <input type="text" class="form-control" name="discount" id="discount" value="<?php echo (!empty($coupondata) && !empty($coupondata['offer_amount']) ? $coupondata['offer_amount'] : "") ?>" placeholder="Enter Discount" required>
                                    </div>

                                    <div class="col-6">
                                        <label for="inputProductType" class="form-label">Discount Type</label>
                                        <select class="form-select" id="discount_ype" name="discount_type" required>
                                            <option></option>
                                            <option value="1" <?php echo (isset($coupondata['offer_amount_type']) && $coupondata['offer_amount_type'] == 1 ? 'Selected' : ''); ?>>Flat</option>
                                            <option value="2" <?php echo (isset($coupondata['offer_amount_type']) && $coupondata['offer_amount_type'] == 2 ? 'Selected' : '');  ?>>Percentage</option>
                                        </select>
                                    </div>

                                    <div class="col-md-12">
                                        <input type="hidden" name="id" value="<?php echo (!empty($coupondata) && !empty($coupondata['id']) ? $coupondata['id'] : "") ?>">
                                        <button type="button" name="submit" class="btn btn-primary px-5 prodCoupon_btn">Save</button>
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