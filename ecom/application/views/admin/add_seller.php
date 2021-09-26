<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Sellers</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo base_url();?>admin/sellers">Sellers List</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sellers</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <h6 class="mb-0 text-uppercase">Add Sellers</h6>
                <hr />
                <div class="card">
                    <div class="card-body">
                        <div class="p-4 border rounded">
                            <form class="row g-3" method="POST" id="seller_form" enctype="multipart/form-data">
                                <div class="col-md-12">
                                    <label for="validationCustom01" class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" id="name" value="<?php echo (!empty($seller_data) && !empty($seller_data['name']) ? $seller_data['name'] : "" )?>" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="validationCustomUsername" class="form-label">Email</label>
                                    <div class="input-group"> <span class="input-group-text" id="inputGroupPrepend">@</span>
                                        <input type="text" class="form-control" name="email" id="email" value="<?php echo (!empty($seller_data) && !empty($seller_data['email']) ? $seller_data['email'] : "" )?>" aria-describedby= "inputGroupPrepend" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="validationCustom01" class="form-label">Password</label>
                                    <input type="text" class="form-control" name="password" id="password" value="<?php echo (!empty($seller_data) && !empty($seller_data['show_password']) ? $seller_data['show_password'] : "" )?>" required>
                                </div>

                                <div class="col-12">
                                    <input type="hidden" id="categories_id" name="categories_id" value="<?php echo (!empty($seller_data) && !empty($seller_data['id']) ? $seller_data['id'] : "" )?>">
                                    <button class="btn btn-primary seller_btn" name="submit" type="button">Submit</button>
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
