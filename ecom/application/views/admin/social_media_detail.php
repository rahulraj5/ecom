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
                        <li class="breadcrumb-item active" aria-current="page">Social Media Details</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Social Media Details</h5>
                <hr />
                <div class="form-body mt-4">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="border border-3 p-4 rounded">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="mailDriver" class="form-label">Google Login Configuration</label>
                                        <input type="text" class="form-control" id="gLogConfig" value="<?php echo $socia_data['google_login_conf']; ?>" placeholder="Enter Google Configration">
                                    </div>
                                    <div class="mb-3">
                                        <label for="mailDriver" class="form-label">Facebook Login Configuration</label>
                                        <input type="text" class="form-control" id="fLogConfig" value="<?php echo $socia_data['facebook_login_conf']; ?>" placeholder="Enter Facebook Configuration">
                                    </div>
                                    <div class="mb-3">
                                        <label for="mailDriver" class="form-label">Twitter Login Configuration</label>
                                        <input type="text" class="form-control" id="tLogConfig" value="<?php echo $socia_data['twitter_login_conf']; ?>" placeholder="Enter Twitter Configuration">
                                    </div>
                                    <div class="mb-3">
                                        <button type="button" class="btn btn-primary px-5 socil_m">Submit</button>
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