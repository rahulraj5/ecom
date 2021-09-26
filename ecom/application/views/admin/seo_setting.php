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
                        <li class="breadcrumb-item active" aria-current="page">SEO Settings</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">SEO Settings</h5>
                <hr />
                <div class="form-body mt-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="border border-3 p-4 rounded">
                                <form action="" method="post" id="seo_form" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="mailDriver" class="form-label">Keywords</label>
                                            <input type="text" class="form-control" name="keyword" id="keyword" value="<?php echo (isset($seo_data['keywords']) ?  $seo_data['keywords'] : '');?>" placeholder="Enter Keywords">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="mailDriver" class="form-label">Auther Name</label>
                                            <input type="text" class="form-control" name="auth_name" id="auth_name" value="<?php echo (isset($seo_data['auth_name']) ?  $seo_data['auth_name'] : '');?>" placeholder="Enter Auther Name">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="mailDriver" class="form-label">Revisit Name</label>
                                            <input type="text" class="form-control" name="revisit_name" id="revisit_name" value="<?php echo (isset($seo_data['revisite_name']) ?  $seo_data['revisite_name'] : '');?>" placeholder="Enter Revisit Name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="mailDriver" class="form-label">Sitemap Link</label>
                                            <input type="text" class="form-control" name="site_link" id="site_link" value="<?php echo (isset($seo_data['sitemap_link']) ?  $seo_data['sitemap_link'] : '');?>" placeholder="Enter Sitemap Link">
                                        </div>
                                        <div class="mb-3">
                                            <label for="inputProductDescription" class="form-label">Description</label>
                                            <textarea class="form-control" name="description" id="description" value="<?php echo (isset($seo_data['description']) ?  $seo_data['description'] : '');?>"  rows="3"><?php echo (isset(
                                                $seo_data['description']) ?  $seo_data['description'] : '');?></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <!-- <input type="hidden" name="id" id="id" value="<?php echo (!empty($seo_data) && !empty($seo_data['id']) ? $seo_data['id'] : "" )?>"> -->
                                            <button type="button" name="submit" class="btn btn-primary px-5 seo_btn">Submit</button>
                                        </div>
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