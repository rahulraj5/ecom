<style>
    .custom {
        font-size: 24px !important;
        float: right;
    }
</style>
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Business Settings</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Activation</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary">Settings</button>
                    <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"> <a class="dropdown-item" href="javascript:;">Action</a>
                        <a class="dropdown-item" href="javascript:;">Another action</a>
                        <a class="dropdown-item" href="javascript:;">Something else here</a>
                        <div class="dropdown-divider"></div> <a class="dropdown-item" href="javascript:;">Separated link</a>
                    </div>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->
        <h5 class="card-title">Business Related</h5>
        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-3 row-cols-xl-3">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h5 class="card-title">Product Activation</h5>
                        </div>
                        <!-- <a href="javascript:;" class="btn btn-primary">Go somewhere</a> -->
                        <div class="form-check form-switch custom" style="font-size: 24px !important;">
                            <input class="form-check-input" type="checkbox" id="checkFlashDeal">
                            <label class="form-check-label" for="checkFlashDeal"></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h5 class="card-title">Vendor System</h5>
                        </div>
                        <!-- <a href="javascript:;" class="btn btn-danger">Go somewhere</a> -->

                        <div class="form-check form-switch custom">
                            <input class="form-check-input" type="checkbox" id="checkFlashDeal">
                            <label class="form-check-label" for="checkFlashDeal"></label>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h5 class="card-title">Show Vendor</h5>
                        </div>
                        <!-- <a href="javascript:;" class="btn btn-success">Go somewhere</a> -->
                        <div class="form-check form-switch custom">
                            <input class="form-check-input" type="checkbox" id="checkFlashDeal">
                            <label class="form-check-label" for="checkFlashDeal"></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr />
        <h5 class="card-title">Pyment Related</h5>
        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-3 row-cols-xl-3">
            <?php 
                // p($maintenance_val);
                if (!empty($wallet_detail)) {
                // print_r($wallet_detail[1]);

            } ?>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h5 class="card-title">Paypal Activation</h5>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mt-3">
                                <a href="<?php echo base_url(); ?>admin/paypal_detail" class="btn btn-primary">Details</a>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="form-check form-switch custom">
                                    <?php if ($wallet_detail[0]['activate'] == 0) { ?>
                                        <input class="form-check-input" type="checkbox" href-data="<?php echo  $wallet_detail[0]['id']; ?>" id="activePypal" value="0">
                                    <?php }
                                    if ($wallet_detail[0]['activate'] == 1) { ?>
                                        <input class="form-check-input" type="checkbox" href-data="<?php echo  $wallet_detail[0]['id']; ?>" id="deactivePaypal" value="0" checked>
                                    <?php } ?>
                                    <!-- <input type="hidden" name="h_paypalActi" id="h_paypalActi" value="0">  -->
                                    <label class="form-check-label" for="checkFlashDeal"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h5 class="card-title">Stripe Activation</h5>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mt-3">
                                <a href="<?php echo base_url(); ?>admin/stripe_detail" class="btn btn-primary">Details</a>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="form-check form-switch custom">
                                    <?php if ($wallet_detail[1]['activate'] == 0) { ?>
                                        <input class="form-check-input" type="checkbox" href-data="<?php echo  $wallet_detail[1]['id']; ?>" id="activeStripe" value="0">
                                    <?php }
                                    if ($wallet_detail[1]['activate'] == 1) { ?>
                                        <input class="form-check-input" type="checkbox" href-data="<?php echo  $wallet_detail[1]['id']; ?>" id="deactiveStripe" value="0" checked>
                                    <?php } ?>
                                    <label class="form-check-label" for="checkFlashDeal"></label>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h5 class="card-title">Instamojo Activation</h5>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mt-3">
                                <a href="<?php echo base_url(); ?>admin/instamojo_detail" class="btn btn-primary">Details</a>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="form-check form-switch custom">
                                    <?php if ($wallet_detail[2]['activate'] == 0) { ?>
                                        <input class="form-check-input" type="checkbox" href-data="<?php echo  $wallet_detail[2]['id']; ?>" id="activeStripe" value="0">
                                    <?php }
                                    if ($wallet_detail[2]['activate'] == 1) { ?>
                                        <input class="form-check-input" type="checkbox" href-data="<?php echo  $wallet_detail[2]['id']; ?>" id="deactiveStripe" value="0" checked>
                                    <?php } ?>
                                    <label class="form-check-label" for="checkFlashDeal"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h5 class="card-title">RazorPay Activation</h5>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mt-3">
                                <a href="<?php echo base_url(); ?>admin/razorpay_detail" class="btn btn-primary">Details</a>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="form-check form-switch custom">
                                    <?php if ($wallet_detail[3]['activate'] == 0) { ?>
                                        <input class="form-check-input" type="checkbox" href-data="<?php echo  $wallet_detail[3]['id']; ?>" id="activeStripe" value="0">
                                    <?php }
                                    if ($wallet_detail[3]['activate'] == 1) { ?>
                                        <input class="form-check-input" type="checkbox" href-data="<?php echo  $wallet_detail[3]['id']; ?>" id="deactiveStripe" value="0" checked>
                                    <?php } ?>
                                    <label class="form-check-label" for="checkFlashDeal"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h5 class="card-title">Paystack Activation</h5>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mt-3">
                                <a href="<?php echo base_url(); ?>admin/paystack_detail" class="btn btn-primary">Details</a>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="form-check form-switch custom">
                                    <?php if ($wallet_detail[4]['activate'] == 0) { ?>
                                        <input class="form-check-input" type="checkbox" href-data="<?php echo  $wallet_detail[4]['id']; ?>" id="activeStripe" value="0">
                                    <?php }
                                    if ($wallet_detail[4]['activate'] == 1) { ?>
                                        <input class="form-check-input" type="checkbox" href-data="<?php echo  $wallet_detail[4]['id']; ?>" id="deactiveStripe" value="0" checked>
                                    <?php } ?>
                                    <label class="form-check-label" for="checkFlashDeal"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h5 class="card-title">Voguepay Activation</h5>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mt-3">
                                <a href="<?php echo base_url(); ?>admin/voguepay_detail" class="btn btn-primary">Details</a>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="form-check form-switch custom">
                                    <?php if ($wallet_detail[5]['activate'] == 0) { ?>
                                        <input class="form-check-input" type="checkbox" href-data="<?php echo  $wallet_detail[5]['id']; ?>" id="activeStripe" value="0">
                                    <?php }
                                    if ($wallet_detail[5]['activate'] == 1) { ?>
                                        <input class="form-check-input" type="checkbox" href-data="<?php echo  $wallet_detail[5]['id']; ?>" id="deactiveStripe" value="0" checked>
                                    <?php } ?>
                                    <label class="form-check-label" for="checkFlashDeal"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h5 class="card-title">SSlCommerz Activation</h5>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mt-3">
                                <a href="<?php echo base_url(); ?>admin/sslcommerz_detail" class="btn btn-primary">Details</a>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="form-check form-switch custom">
                                    <?php if ($wallet_detail[6]['activate'] == 0) { ?>
                                        <input class="form-check-input" type="checkbox" href-data="<?php echo  $wallet_detail[6]['id']; ?>" id="activeStripe" value="0">
                                    <?php }
                                    if ($wallet_detail[6]['activate'] == 1) { ?>
                                        <input class="form-check-input" type="checkbox" href-data="<?php echo  $wallet_detail[6]['id']; ?>" id="deactiveStripe" value="0" checked>
                                    <?php } ?>
                                    <label class="form-check-label" for="checkFlashDeal"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr />
        <h5 class="card-title">Pickup Point</h5>
        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-3 row-cols-xl-3">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h5 class="card-title"> Activate</h5>
                        </div>
                        <!-- <a href="javascript:;" class="btn btn-primary">Go somewhere</a> -->
                        <div class="form-check form-switch custom">
                            <input class="form-check-input" type="checkbox" id="checkFlashDeal">
                            <label class="form-check-label" for="checkFlashDeal"></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr />
        <h5 class="card-title">Maintenance Mode</h5>
        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-3 row-cols-xl-3">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h5 class="card-title"> Activate</h5>
                        </div>
                        <!-- <a href="javascript:;" class="btn btn-primary">Go somewhere</a> -->
                        <div class="form-check form-switch custom">
                            <?php if ($maintenance_val['status'] == 0) { ?>
                                <input class="form-check-input" type="checkbox" href-data="<?php echo  $maintenance_val['id']; ?>" id="maintenance_active" value="0">
                            <?php }
                            if ($maintenance_val['status'] == 1) { ?>
                                <input class="form-check-input" type="checkbox" href-data="<?php echo  $maintenance_val['id']; ?>" id="maintenance_deactive" value="0" checked>
                            <?php } ?>
                            <label class="form-check-label" for="checkFlashDeal"></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end page wrapper -->