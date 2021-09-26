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
                        <li class="breadcrumb-item active" aria-current="page">Facebook Chat & Pixel</li>
                        <li class="breadcrumb-item active" aria-current="page">Facebook Chat</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Facebook Chat</h5>
                <hr />
                <div class="form-body mt-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="border border-3 p-4 rounded">
                                <form action="" method="post" id="fbchat_form">
                                    <div class="mb-3">
                                        <div class="form-check form-switch">
                                            <?php if(isset($fb_data['fb_chat_status']) && $fb_data['fb_chat_status'] == 0){ ?>
                                            <input class="form-check-input" type="checkbox" value="0" id="fbChat_status">
                                            <?php }else{ ?>            
                                            <input class="form-check-input" type="checkbox" value="0" id="fbChat_status" checked>
                                            <?php } ?>
                                            <label class="form-check-label" for="sandBoxmode">Enable Facebook Chat</label>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="mailDriver" class="form-label">Page ID</label>
                                        <input type="text" class="form-control" id="fPageId" name="fPageId" value="<?php echo (!empty($fb_data) && !empty($fb_data['page_id']) ? $fb_data['page_id'] : "") ?>" placeholder="Enter Page ID">
                                    </div>
                                    <div class="mb-3">
                                        <input type="hidden" name="h_fbchat" id="h_fbchat" value="0">
                                        <button type="button" name="submit" class="btn btn-primary px-5 fbChat_btn">Submit</button>
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