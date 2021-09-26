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
                        <li class="breadcrumb-item active" aria-current="page">Business Setting</li>
                        <li class="breadcrumb-item active" aria-current="page">Google Analytics</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Google Analytics</h5>
                <hr />
                <div class="form-body mt-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="border border-3 p-4 rounded">
                                <form action="" method="post" id="googleAnaly_form" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" value="0" type="checkbox" id="feature">
                                            <label class="form-check-label" for="sandBoxmode">Switch on the Feature</label>
                                        </div>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="mailDriver" class="form-label">Tracking ID</label>
                                        <input type="text" class="form-control" name="traking_id" id="traking_id" value="<?php echo (!empty($ganalytic_data) && !empty($ganalytic_data['tracking_id']) ? $ganalytic_data['tracking_id'] : "") ?>" placeholder="Enter Tracking ID">
                                    </div>

                                    <!-- <div class="mb-3">
                                    <?php if ($ganalytic_data['featured_status'] == 0) { ?>
                                    <a href="javascript:void(0)" href-data="<?php echo  $ganalytic_data['id']; ?>" class="ga_activecat" title="Change status"><i class="fa fa-toggle-off" style="font-size:24px;" aria-hidden="true"></i></a><span>Switch on the Feature</span>
                                    <?php }
                                    if ($ganalytic_data['featured_status'] == 1) { ?>
                                        <a href="javascript:void(0)" href-data="<?php echo  $ganalytic_data['id']; ?>" class="ga_deactive" title="Change status"><i class="fa fa-toggle-on" style="font-size:24px;color:green"  aria-hidden="true"></i></a><span>Switch off the Feature</span>
                                    <?php } ?>
                                    </div> -->
                                    <div class="mb-3">
                                        <input type="hidden" id="h_feature" name="h_feature" value="0">
                                        <button type="button" name="submit" class="btn btn-primary px-5 gAna_btn">Submit</button>
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