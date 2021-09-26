<!doctype html>
<html lang="en">


<!-- Mirrored from codervent.com/rocker/demo/vertical/authentication-signin-with-header-footer.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Sep 2021 11:59:12 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="<?php echo base_url(); ?>backend_assets/images/favicon-32x32.png" type="image/png" />
    <!--plugins-->
    <link href="<?php echo base_url(); ?>backend_assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>backend_assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>backend_assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="<?php echo base_url(); ?>backend_assets/css/pace.min.css" rel="stylesheet" />
    <script src="<?php echo base_url(); ?>backend_assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url(); ?>backend_assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>backend_assets/css/bootstrap-extended.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    <link href="<?php echo base_url(); ?>backend_assets/css/app.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>backend_assets/css/icons.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>backend_assets/plugins/notifications/css/lobibox.min.css" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <title>Login</title>
</head>

<body class="bg-login">
    <!--wrapper-->
    <div class="wrapper">
        <header class="login-header shadow">
            <nav class="navbar navbar-expand-lg navbar-light bg-white rounded fixed-top rounded-0 shadow-sm">
                <div class="container-fluid">
                    <!-- <a class="navbar-brand" href="#">
                        <img src="<?php echo base_url(); ?>backend_assets/images/logo-img.png" width="140" alt="" />
                    </a> -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent1">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"> <a class="nav-link active" aria-current="page" href="<?php echo base_url();?>home"><i class='bx bx-home-alt me-1'></i>Home</a>
                            </li>
                            <!-- <li class="nav-item"> <a class="nav-link" href="#"><i class='bx bx-user me-1'></i>About</a>
							</li>
							<li class="nav-item"> <a class="nav-link" href="#"><i class='bx bx-category-alt me-1'></i>Features</a>
							</li>
							<li class="nav-item"> <a class="nav-link" href="#"><i class='bx bx-microphone me-1'></i>Contact</a>
							</li> -->
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="d-flex align-items-center justify-content-center my-5">
            <div class="container">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
                    <div class="col mx-auto">
                        <div class="card mt-5">
                            <div class="card-body">
                                <div class="border p-4 rounded">
                                    <div class="text-center">
                                        <h3 class="">User Sign Up</h3>
                                        <p>Already have an account? <a href="<?php echo base_url(); ?>home/login">Sign in here</a>
                                        </p>
                                    </div>
                                    <!-- <div class="d-grid">
                                        <a class="btn my-4 shadow-sm btn-white" href="javascript:;"> <span class="d-flex justify-content-center align-items-center">
                                                <img class="me-2" src="<?php echo base_url(); ?>backend_assets/images/icons/search.svg" width="16" alt="Image Description">
                                                <span>Sign Up with Google</span>
                                            </span>
                                        </a> <a href="javascript:;" class="btn btn-facebook"><i class="bx bxl-facebook"></i>Sign Up with Facebook</a>
                                    </div> -->
                                    <!-- <div class="login-separater text-center mb-4"> <span></span> -->
                                        <!-- <hr /> -->
                                    </div>
                                    <div class="form-body mt-3">
                                        <form class="row g-3" method="POST" id="usersignupform" enctype="multipart/form-data">
                                            <div class="col-sm-6">
                                                <label for="inputFirstName" class="form-label">First Name</label>
                                                <input type="text" class="form-control" id="fname" placeholder="Jhon">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="inputLastName" class="form-label">Last Name</label>
                                                <input type="text" class="form-control" id="lname" placeholder="Deo">
                                            </div>
                                            <div class="col-6">
                                                <label for="inputEmailAddress" class="form-label">Email Address</label>
                                                <input type="email" class="form-control" id="email" placeholder="example@user.com">
                                            </div>
                                            <div class="col-6">
                                                <label for="inputEmailAddress" class="form-label">Contact No.</label>
                                                <input type="text" class="form-control" id="mobile" placeholder="982*******">
                                            </div>
                                            <div class="col-6">
                                                <label for="inputChoosePassword" class="form-label">Password</label>
                                                <div class="input-group" id="show_hide_password">
                                                    <input type="password" class="form-control border-end-0" id="password" value="12345678" placeholder="Enter Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <label for="inputChoosePassword" class="form-label">Confirm Password</label>
                                                <div class="input-group" id="show_hide_password2">
                                                    <input type="text" class="form-control border-end-0" id="checkpass" value="12345678" placeholder="Enter Password"> 
                                                </div>
                                            </div>
                                            <!-- <div class="col-12">
                                                <label for="inputSelectCountry" class="form-label">Country</label>
                                                <select class="form-select" id="inputSelectCountry" aria-label="Default select example">
                                                    <option selected>India</option>
                                                    <option value="1">United Kingdom</option>
                                                    <option value="2">America</option>
                                                    <option value="3">Dubai</option>
                                                </select>
                                            </div> -->
                                            <div class="col-12">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                                                    <label class="form-check-label" for="flexSwitchCheckChecked">I read and agree to Terms & Conditions</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="button" class="btn btn-primary signup"><i class='bx bx-user'></i>Sign up</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="row mt-5">
					<div class="col-xl-9 mx-auto">
						
						<div class="card border-top border-0 border-4 border-info">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="card-title d-flex align-items-center">
										<div><i class="bx bxs-user me-1 font-22 text-info"></i>
										</div>
										<h5 class="mb-0 text-info">User Registration</h5>
									</div>
									<hr/>
									<div class="row mb-3">
										<label for="inputEnterYourName" class="col-sm-3 col-form-label">Enter Your Name</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="inputEnterYourName" placeholder="Enter Your Name">
										</div>
									</div>
									<div class="row mb-3">
										<label for="inputPhoneNo2" class="col-sm-3 col-form-label">Phone No</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="inputPhoneNo2" placeholder="Phone No">
										</div>
									</div>
									<div class="row mb-3">
										<label for="inputEmailAddress2" class="col-sm-3 col-form-label">Email Address</label>
										<div class="col-sm-9">
											<input type="email" class="form-control" id="inputEmailAddress2" placeholder="Email Address">
										</div>
									</div>
									<div class="row mb-3">
										<label for="inputChoosePassword2" class="col-sm-3 col-form-label">Choose Password</label>
										<div class="col-sm-9">
											<input type="email" class="form-control" id="inputChoosePassword2" placeholder="Choose Password">
										</div>
									</div>
									<div class="row mb-3">
										<label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Confirm Password</label>
										<div class="col-sm-9">
											<input type="email" class="form-control" id="inputConfirmPassword2" placeholder="Confirm Password">
										</div>
									</div>
									<div class="row mb-3">
										<label for="inputAddress4" class="col-sm-3 col-form-label">Address</label>
										<div class="col-sm-9">
											<textarea class="form-control" id="inputAddress4" rows="3" placeholder="Address"></textarea>
										</div>
									</div>
									<div class="row mb-3">
										<label for="inputAddress4" class="col-sm-3 col-form-label"></label>
										<div class="col-sm-9">
											<div class="form-check">
												<input class="form-check-input" type="checkbox" id="gridCheck4">
												<label class="form-check-label" for="gridCheck4">Check me out</label>
											</div>
										</div>
									</div>
									<div class="row">
										<label class="col-sm-3 col-form-label"></label>
										<div class="col-sm-9">
											<button type="submit" class="btn btn-info px-5">Register</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> -->
                <!--end row-->
            </div>
        </div>
        <footer class="bg-white shadow-sm border-top p-2 text-center fixed-bottom">
            <p class="mb-0">Copyright © 2021. All right reserved.</p>
        </footer>
    </div>
    <!--end wrapper-->
    <!-- Bootstrap JS -->
    <script src="<?php echo base_url(); ?>backend_assets/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="<?php echo base_url(); ?>backend_assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>backend_assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="<?php echo base_url(); ?>backend_assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="<?php echo base_url(); ?>backend_assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <!--notification js -->
    <script src="<?php echo base_url(); ?>backend_assets/plugins/notifications/js/lobibox.min.js"></script>
    <script src="<?php echo base_url(); ?>backend_assets/plugins/notifications/js/notifications.min.js"></script>
    <script src="<?php echo base_url(); ?>backend_assets/plugins/notifications/js/notification-custom-script.js"></script>
    <!--Password show & hide js -->
    <script>
        $(document).ready(function() {
            $("#show_hide_password a").on('click', function(event) {
                event.preventDefault();
                if ($('#show_hide_password input').attr("type") == "text") {
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass("bx-hide");
                    $('#show_hide_password i').removeClass("bx-show");
                } else if ($('#show_hide_password input').attr("type") == "password") {
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass("bx-hide");
                    $('#show_hide_password i').addClass("bx-show");
                }
            });
        });

        $(".signup").click(function(e) {
                    // Initiate Variables With Form Content
                    var fname = $("#fname").val();
                    var lname = $("#lname").val();
                    var mobile = $("#mobile").val();
                    var email = $("#email").val();
                    var password = $("#password").val();
                    // var tandcond = $("#flexSwitchCheckChecked").val();
                    // alert(tandcond);
                    var href = "<?php echo base_url() ?>home/user_signup";
                    // if ($('#flexSwitchCheckChecked').is(':checked')) {  
                        $.ajax({
                            type: "POST",
                            dataType: "json",
                            url: href,
                            data: {
                                fname: fname,
                                lname: lname,
                                mobile_no: mobile,
                                email: email,
                                password: password
                            },
                            success: function(data) {
                                if (data.status == 1) {
                                    round_success_noti(data.msg);
                                    setTimeout(function() {
                                        window.location.href = "<?php echo base_url(); ?>home"
                                    }, 1000);
                                } else {
                                    round_error_noti(data.msg);
                                }
                            },
                            error: function(data) {
                                round_error_noti(data.msg);
                            },
                        });
                    // }else{
                    //         round_error_noti(data.msg);
                    //     } 
                // }
                });
    </script>
    <!--app JS-->
    <script src="<?php echo base_url(); ?>backend_assets/js/app.js"></script>
</body>


<!-- Mirrored from codervent.com/rocker/demo/vertical/authentication-signin-with-header-footer.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Sep 2021 11:59:12 GMT -->

</html>