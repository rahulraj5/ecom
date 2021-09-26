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
                        <li class="breadcrumb-item active" aria-current="page">Currency List</li>
                        <li class="breadcrumb-item active" aria-current="page">Add Currency </li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Add Currency</h5>
                <hr />
                <div class="form-body mt-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="border border-3 p-4 rounded">
                                <form action="" method="post" enctype="multipart/form-data" id="currency_form">
                                    
                                    <div class="mb-3">
                                        <label for="mailDriver" class="form-label">Currency Name</label>
                                        <input type="text" class="form-control" name="currency_name" id="currency_name" value="<?php echo (!empty($currency_data) && !empty($currency_data['currency_name']) ? $currency_data['currency_name'] : "") ?>" placeholder="Enter Currency Name" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="mailDriver" class="form-label">Currency Symbol</label>
                                        <input type="text" class="form-control" name="currency_sym" id="currency_sym" value="<?php echo (!empty($currency_data) && !empty($currency_data['currency_sym']) ? $currency_data['currency_sym'] : "") ?>" placeholder="Enter Currency Symbol" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="mailDriver" class="form-label">Currency Code</label>
                                        <input type="text" class="form-control" name="currency_code" id="currency_code" value="<?php echo (!empty($currency_data) && !empty($currency_data['currency_code']) ? $currency_data['currency_code'] : "") ?>" placeholder="Enter Currency Code" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="mailDriver" class="form-label">Exchange Rate with 1 Dollar</label>
                                        <input type="text" class="form-control" name="exchange_rate" id="exchange_rate" value="<?php echo (!empty($currency_data) && !empty($currency_data['exchange_rate']) ? $currency_data['exchange_rate'] : "") ?>" placeholder="Enter Currency Exchange Rate" required>
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" value="0" id="publish">
                                            <label class="form-check-label" for="sandBoxmode">Publish</label>
                                        </div>
                                    </div>
                                    <div class="mb-3">  
                                        <input type="hidden" name="h_publish" id="h_publish" value="0">
                                        <input type="hidden" name="id" value="<?php echo (!empty($currency_data) && !empty($currency_data['id']) ? $currency_data['id'] : "") ?>">
                                        <button type="button" name="submit" class="btn btn-primary px-5 curr_btn">Submit</button>
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