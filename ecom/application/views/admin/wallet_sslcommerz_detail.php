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
                        <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo base_url(); ?>admin/activation">Activation</a></li>
                        <li class="breadcrumb-item active" aria-current="page">SSLCommerz Details</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">SSLCommerz Details</h5>
                <hr />
                <div class="form-body mt-4">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="border border-3 p-4 rounded">
                                <form action="" method="post" id="sslCommerz_form">
                                    <div class="mb-3">
                                        <label for="mailDriver" class="form-label">SSLCZ Store ID</label>
                                        <input type="text" class="form-control" name="clientId" id="clientId" placeholder="Enter Client ID">
                                    </div>
                                    <div class="mb-3">
                                        <label for="mailHost" class="form-label">SSLCZ Store Password</label>
                                        <input type="text" class="form-control" name="clientSecret" id="clientSecret" placeholder="Enter Client Secret">
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="sBMode_sslCommerz" checked>
                                            <label class="form-check-label" for="sandBoxmode">Switched Off the Sandbox mode (demo)</label>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <input type="hidden" name="h_sslCommerz" id="h_sslCommerz" value="1">
                                        <button type="button" class="btn btn-primary px-5 sslCommerz_btn">Submit</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!-- <div class="border border-3 p-4 rounded"> -->
                                <div class="container py-2">
                                    <div class="row g-3">

                                        <div class="col-sm py-2">
                                            <div class="card radius-15">
                                                <div class="card-body">
                                                    <!-- <div class="float-end text-muted small">Jan 11th 2019 8:30 AM</div> -->
                                                    <h4 class="card-title">Details</h4>
                                                    <b>SSLCZ Store ID</b> - <span>id</span><hr>
                                                    <b>SSLCZ Store Password</b> - <span>*****</span><hr>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            <!-- </div> -->
                        </div>
                    </div>
                    <!--end row-->
                </div>
            </div>
        </div>


    </div>
</div>
<!--end page wrapper -->