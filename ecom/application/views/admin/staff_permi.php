<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Staff</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Add Staff</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <h6 class="mb-0 text-uppercase">Edit Staff Permission</h6>
                <hr />
                <div class="card">
                    <div class="card-body">
                        <div class="p-4 border rounded">
                            <form class="row g-3" method="POST" id="staff_form" enctype="multipart/form-data">
                                <div class="col-md-12">
                                    <label for="" class="form-label">Name</label>
                                    <input type="text" class="form-control"  name="name" id="name" value="<?php echo (!empty($staff_permi) && !empty($staff_permi['name']) ? $staff_permi['name'] : "" )?>" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="" class="form-label">Email</label>
                                    <div class="input-group"> <span class="input-group-text" id="inputGroupPrepend">@</span>
                                        <input type="text" class="form-control" id="email" name="email" value="<?php echo (!empty($staff_permi) && !empty($staff_permi['email']) ? $staff_permi['email'] : "" )?>" id="" aria-describedby="inputGroupPrepend" required>
                                    </div>
                                </div>
                                <!-- <div class="col-md-12">
                                    <label for="" class="form-label">Roll</label>
                                    <input type="text" class="form-control"  name="permission" id="" value="" required>
                                </div> -->
                                <div class="col-md-12">
                                    <label for="inputProductType" class="form-label">Roll</label>
                                    <select class="form-select" name="role" id="role">
                                        <option value="">Select the Roll</option>
                                        <option value="Sales Staff">Sales Staff</option>
                                        <option value="Sales Manager">Sales Manager</option>
                                        <option value="Sales Administrator">Sales Administrator</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for="" class="form-label">Permission</label>
                                    <input type="text" class="form-control" name="permission" id="permission" value="<?php echo (!empty($staff_permi) && !empty($staff_permi['permission']) ? $staff_permi['permission'] : "" )?>" required>
                                </div>

                                <div class="col-12">
                                <input type="hidden" id="id" name="id" value="<?php echo (!empty($staff_permi) && !empty($staff_permi['id']) ? $staff_permi['id'] : "" )?>">
                                    <button class="btn btn-primary staff_btn" name="submit" type="button">Submit</button>
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
<!-- 
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script> -->