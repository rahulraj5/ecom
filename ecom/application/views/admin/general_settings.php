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
                        <li class="breadcrumb-item active" aria-current="page">General Setting</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <h6 class="mb-0 text-uppercase">General Setting</h6>
                <hr />
                <div class="card">
                    <div class="card-body">
                        <div class="p-4 border rounded">
                            <form class="row g-3" action="" id="generalSetti_form" method="post" enctype="multipart/form-data">
                                <div class="col-md-6">
                                    <label for="validationCustom01" class="form-label">System / Site Name</label>
                                    <input type="text" class="form-control" name="name" id="name" value="<?php echo (isset($g_data['name']) ?  $g_data['name'] : '');?>" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="validationCustom01" class="form-label">Company Address</label>
                                    <input type="text" class="form-control" name="address" id="" value="<?php echo (isset($g_data['company_add']) ?  $g_data['company_add'] : '');?>" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="inputProductDescription" class="form-label">Description</label>
                                    <textarea class="form-control" name="description" id="" rows="3" value="<?php echo (isset($g_data['description']) ?  $g_data['description'] : '');?>"><?php echo (isset(
                            $g_data['description']) ?  $g_data['description'] : '');?></textarea>
                                </div>
                                <div class="col-md-6">
                                    <label for="validationCustom01" class="form-label">Phone Number</label>
                                    <input type="number" class="form-control" name="number" id="" value="<?php echo (isset($g_data['number']) ?  $g_data['number'] : '');?>" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="validationCustomUsername" class="form-label">Email</label>
                                    <div class="input-group"> <span class="input-group-text" id="inputGroupPrepend">@</span>
                                        <input type="email" class="form-control" name="email" id="" value="<?php echo (isset($g_data['email']) ?  $g_data['email'] : '');?>" aria-describedby="inputGroupPrepend" required>
                                    </div>
                                </div>
                               
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Select Logo for the Site</label>
                                    <input class="form-control" type="file" name="image" id="image">
                                </div>
                                <?php
                                if (!empty($g_data)) {
                                ?>
                                    <div class="form-group">
                                        <img src="<?php echo base_url() ?>uploads/general_settings/<?php echo (!empty($g_data['site_logo']) ? $g_data['site_logo'] : "default.png") ?>">
                                    </div>

                                <?php
                                }
                                ?>
                                <div class="col-md-6">
                                    <label for="validationCustom01" class="form-label">Facebook Link</label>
                                    <input type="text" class="form-control" name="fbLink" id="" value="<?php echo (isset($g_data['facebook_login']) ?  $g_data['facebook_login'] : '');?>" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="validationCustom01" class="form-label">Instagram Link</label>
                                    <input type="text" class="form-control" name="instaLink" id="" value="<?php echo (isset($g_data['instagram_login']) ?  $g_data['instagram_login'] : '');?>" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="validationCustom01" class="form-label">Twitter Link</label>
                                    <input type="text" class="form-control" name="twLink" id="" value="<?php echo (isset($g_data['twitter_login']) ?  $g_data['twitter_login'] : '');?>" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="validationCustom01" class="form-label">Youtube Link</label>
                                    <input type="text" class="form-control" name="ybLink" id="" value="<?php echo (isset($g_data['youtube_login']) ?  $g_data['youtube_login'] : '');?>" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="validationCustom01" class="form-label">Google Plus Link</label>
                                    <input type="text" class="form-control" name="gpLink" id="" value="<?php echo (isset($g_data['google_plus_login']) ?  $g_data['google_plus_login'] : '');?>" required>
                                </div>

                                <div class="col-12">
                                <!-- <input type="hidden" name="id" value="<?php echo (!empty($g_data) && !empty($g_data['id']) ? $g_data['id'] : "" )?>"> -->
                                    <button class="btn btn-primary gSetti_btn" name="submit" type="button">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
<!--end page wrapper -->
