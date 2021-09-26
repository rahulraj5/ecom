<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">NewsLetter</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Send NewsLetter</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <h6 class="mb-0 text-uppercase">Send NewsLetter</h6>
                <hr />
                <div class="card">
                    <div class="card-body">
                        <div class="p-4 border rounded">
                            <form class="row g-3">
                            <div class="col-md-12">
                                    <label for="" class="form-label">User's Email</label>
                                    <div class="input-group"> <span class="input-group-text" id="inputGroupPrepend">@</span>
                                        <input type="text" class="form-control" value="<?php echo (!empty($newsletter) && !empty($newsletter['user_email']) ? $newsletter['user_email'] : "" )?>" id="" aria-describedby="inputGroupPrepend" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="" class="form-label">Sender's Email</label>
                                    <div class="input-group"> <span class="input-group-text" id="inputGroupPrepend">@</span>
                                        <input type="text" class="form-control" id="" aria-describedby="inputGroupPrepend" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="" class="form-label">Subject</label>
                                    <input type="text" class="form-control" id="" value="" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="" class="form-label">Description</label>
                                    <textarea class="form-control" id="" rows="3"></textarea>
                                </div>
                                

                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Submit form</button>
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
