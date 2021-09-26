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
                        <li class="breadcrumb-item active" aria-current="page">Seller Commission</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Seller Commission</h5>
                <hr />
                <div class="form-body mt-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="border border-3 p-4 rounded">
                                <form action="" method="post" id="commission_form" enctype="multipart/form-data">

                                    <div class="mb-3">
                                        <label for="commission" class="form-label">Seller Commission</label>
                                        <input type="text" class="form-control" name="commission" id="commission" value="<?php echo (!empty($commission_data) && !empty($commission_data['commission']) ? $commission_data['commission'] : "") ?>" placeholder="Enter Commission">
                                    </div>

                                    <div class="mb-3">
                                        <input type="hidden" name="id" value="<?php echo (!empty($commission_data) && !empty($commission_data['id']) ? $commission_data['id'] : "") ?>">
                                        <button type="button" name="submit" id="btn_commission" class="btn btn-primary px-5 btn_commission">Submit</button>
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