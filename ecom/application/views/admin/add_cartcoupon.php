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
                        <li class="breadcrumb-item active" aria-current="page">Add Coupon Cart Base</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Add Coupon Cart Base</h5>
                <hr />
                <div class="form-body mt-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="border border-3 p-4 rounded">
                                <!-- <h4 class="card-title">General</h4>
								<hr /> -->
                                <form class="row g-3" method="POST" id="cartCoupon_form" enctype="multipart/form-data">
                                    <div class="col-md-12">
                                        <label for="inputProductTitle" class="form-label">Type Coupon Code</label>
                                        <input type="text" class="form-control" name="coupon_code" id="coupon_code" value="<?php echo (!empty($coupondata) && !empty($coupondata['coupon_code']) ? $coupondata['coupon_code'] : "") ?>" placeholder="Enter title">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="inputProductTitle" class="form-label">Enter Minimum Shopping</label>
                                        <input type="text" class="form-control" name="min_shopping" id="min_shopping" value="<?php echo (!empty($coupondata) && !empty($coupondata['min_total_amount']) ? $coupondata['min_total_amount'] : "") ?>" placeholder="Enter title">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="inputProductTitle" class="form-label">Enter Maximum Discount Amount</label>
                                        <input type="text" class="form-control" name="max_discount" id="max_discount" value="<?php echo (!empty($coupondata) && !empty($coupondata['max_discount_amt']) ? $coupondata['max_discount_amt'] : "") ?>" placeholder="Enter title">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="inputProductUnit" class="form-label">Discount</label>
                                        <input type="text" class="form-control" name="discount" id="discount" value="<?php echo (!empty($coupondata) && !empty($coupondata['offer_amount']) ? $coupondata['offer_amount'] : "") ?>" placeholder="Enter product unit">
                                    </div>

                                    <div class="col-6">
                                        <label for="inputProductType" class="form-label">Discount Type</label>
                                        <select class="form-select" name="discount_type" id="discount_type">
                                            <option></option>
                                            <option value="1" <?php echo (isset($coupondata['offer_amount_type']) && $coupondata['offer_amount_type'] == 1 ? 'Selected' : ''); ?>>Flat</option>
                                            <option value="2" <?php echo (isset($coupondata['offer_amount_type']) && $coupondata['offer_amount_type'] == 2 ? 'Selected' : '');  ?>>Percentage</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="hidden" name="id" value="<?php echo (!empty($coupondata) && !empty($coupondata['id']) ? $coupondata['id'] : "") ?>">
                                        <button type="button" name="submit" class="btn btn-primary px-5 cartCoupon_btn">Save</button>
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