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
                        <li class="breadcrumb-item active" aria-current="page">SMTP Setting</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">SMTP Setting</h5>
                <hr />
                <div class="form-body mt-4">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="border border-3 p-4 rounded">
                                <form class="row g-3 enctype=" multipart/form-data" id="smtp_form" method="post" action="">
                                    <div class="mb-3">
                                        <label for="mailDriver" class="form-label">MAIL DRIVER</label>
                                        <input type="text" class="form-control" name="mailDriver" value="<?php echo getWebOptionValue('driver');?>" id="mailDriver" placeholder="ENTER MAIL DRIVER" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="mailHost" class="form-label">MAIL HOST</label>
                                        <input type="text" class="form-control" name="mailHost" value="<?php echo getWebOptionValue('host');?>" id="mailHost" placeholder="ENTER MAIL HOST" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="mailPort" class="form-label">MAIL PORT</label>
                                        <input type="number" class="form-control" name="mailPort" value="<?php echo getWebOptionValue('port');?>" id="mailPort" placeholder="ENTER MAIL PORT" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="mailUsername" class="form-label">MAIL USERNAME</label>
                                        <input type="text" class="form-control" name="mailUsername" value="<?php echo getWebOptionValue('username');?>" id="mailUsername" placeholder="ENTER MAIL USERNAME" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="mailPassword" class="form-label">MAIL PASSWORD</label>
                                        <input type="text" class="form-control" name="mailPassword" value="<?php echo getWebOptionValue('password');?>" id="mailPassword" placeholder="ENTER MAIL PASSWORD" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="mailEncryp" class="form-label">MAIL ENCRYPTION</label>
                                        <input type="text" class="form-control" name="mailEncryp" value="<?php echo getWebOptionValue('encryption');?>" id="mailEncryp" placeholder="ENTER MAIL ENCRYPTION" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="mailFAdd" class="form-label">MAIL FROM ADDRESS</label>
                                        <input type="text" class="form-control" name="mailFAdd" value="<?php echo getWebOptionValue('from_address');?>" id="mailFAdd" placeholder="ENTER MAIL FROM ADDRESS" required> 
                                    </div>
                                    <div class="mb-3">
                                        <label for="mailFName" class="form-label">MAIL FROM NAME</label>
                                        <input type="text" class="form-control" name="mailFName" value="<?php echo getWebOptionValue('name_address');?>" id="mailFName" placeholder="ENTER MAIL FROM NAME" required>
                                    </div>
                                    <div class="mb-3">
                                        <button type="button" name="submit" class="btn btn-primary px-5 btn_smtp">Save</button>
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
                                                <h4 class="card-title">SMTP Details</h4>
                                                <b>MAIL DRIVER</b> - <span><?php echo getWebOptionValue('driver');?></span>
                                                <hr>
                                                <b>MAIL HOST</b> - <span><?php echo getWebOptionValue('host'); ?></span>
                                                <hr>
                                                <b>MAIL PORT</b> - <span><?php echo getWebOptionValue('port'); ?></span>
                                                <hr>
                                                <b>MAIL USERNAME</b> - <span><?php echo getWebOptionValue('username'); ?></span>
                                                <hr>
                                                <b>MAIL PASSWORD</b> - <span><?php echo getWebOptionValue('password'); ?></span>
                                                <hr>
                                                <b>MAIL ENCRYPTION</b> - <span><?php echo getWebOptionValue('encryption'); ?></span>
                                                <hr>
                                                <b>MAIL FROM ADDRESS</b> - <span><?php echo getWebOptionValue('from_address'); ?></span>
                                                <hr>
                                                <b>MAIL FROM NAME</b> - <span><?php echo getWebOptionValue('name_address'); ?></span>

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