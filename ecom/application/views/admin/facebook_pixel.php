<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Settings</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Business Settings</li>
                        <li class="breadcrumb-item active" aria-current="page">Facebook Chat & Pixel</li>
                        <li class="breadcrumb-item active" aria-current="page">Facebook Pixel</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Facebook Pixel</h5>
                <hr />
                <div class="form-body mt-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="border border-3 p-4 rounded">
                                <form action="" method="post" id="fb_pix_form" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <div class="form-check form-switch">
                                            <?php if(isset($fbp_data['fb_pix_status']) && $fbp_data['fb_pix_status'] == 0){ ?>
                                            <input class="form-check-input" type="checkbox" value="0" id="fbPix_status">
                                            <?php }else{ ?>            
                                            <input class="form-check-input" type="checkbox" value="0" id="fbPix_status" checked>
                                            <?php } ?>
                                            <label class="form-check-label" for="sandBoxmode">Enable Facebook Pixel</label>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="mailDriver" class="form-label">Pixel ID</label>
                                        <input type="text" class="form-control" id="fPixelId" name="fPixelId" value="<?php echo (!empty($fbp_data) && !empty($fbp_data['pixel_id']) ? $fbp_data['pixel_id'] : "") ?>" placeholder="Enter Pixel ID">
                                    </div>
                                    <div class="mb-3">
                                        <input type="hidden" name="h_fbstatus" id="h_fbstatus" value="0">
                                        <button type="button" name="submit" class="btn btn-primary px-5 fbPix_btn">Submit</button>
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
<!--end page wrapper -->