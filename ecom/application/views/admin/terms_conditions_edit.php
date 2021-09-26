<!--start page wrapper -->
<!-- <script src="<?php echo base_url(); ?>backend_assets/ckeditor/ckeditor.js"></script> -->
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
                        <li class="breadcrumb-item active" aria-current="page">Frontend Settings</li>
                        <li class="breadcrumb-item active" aria-current="page">Policy Pages</li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Terms & Condition</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Edit Terms & Condition</h5>
                <hr />
                <div class="form-body mt-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="border border-3 p-4 rounded">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="mb-3">
                                            <label for="description" class="form-label">Description</label>
                                            <textarea class="form-control" name="description" id="" rows="6" value="<?php echo (isset($terms_conditions['description']) ?  $terms_conditions['description'] : '');?>"><?php echo (isset(
                            $terms_conditions['description']) ?  $terms_conditions['description'] : '');?></textarea>
                                        </div>
                                        <div class="mb-3">
                                        <input type="hidden" name="id" value="<?php echo (!empty($terms_conditions) && !empty($terms_conditions['id']) ? $terms_conditions['id'] : "" )?>">
                                            <button type="submit" name="submit" class="btn btn-primary px-5">Submit</button>
                                        </div>
                                    </div>
                                </form>
                                <!-- <script>
                                    CKEDITOR.replace('description');
                                </script> -->
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