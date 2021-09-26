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
        <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-4">
            <div class="container-fluid">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                    <div class="col mx-auto">
                        <div class="card mt-5 mt-lg-0">
                            <div class="card-body">
                                <div class="border p-4 rounded">
                                    <div class="text-center">
                                        <h3 class="">User Sign in</h3>
                                        <p>Don't have an account yet? <a href="<?php echo base_url();?>home/signup">Sign up here</a>
                                        </p>
                                    </div>
                                    <div class="d-grid">
                                        <!-- <a class="btn my-4 shadow-sm btn-white" href="javascript:;"> <span class="d-flex justify-content-center align-items-center">
                                                <img class="me-2" src="<?php echo base_url(); ?>backend_assets/images/icons/search.svg" width="16" alt="Image Description">
                                                <span>Sign in with Google</span>
                                            </span>
                                        </a> <a href="javascript:;" class="btn btn-facebook"><i class="bx bxl-facebook"></i>Sign in with Facebook</a> -->
                                    </div>
                                    <div class="login-separater text-center mb-4"> <span></span>
                                        <hr />
                                    </div>
                                    <div class="form-body">
                                        <form class="row g-3" method="POST" id="userloginform" enctype="multipart/form-data">
                                            <div class="col-12">
                                                <label for="inputEmailAddress" class="form-label">Mobile No.</label>
                                                <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Email Address">
                                            </div>
                                            <div class="col-12">
                                                <label for="inputChoosePassword" class="form-label">Enter Password</label>
                                                <div class="input-group" id="show_hide_password">
                                                    <input type="password" class="form-control border-end-0" name="password" id="password" value="12345678" placeholder="Enter Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                                </div>
                                            </div>
                                            <!-- <div class="col-md-6">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                                    <label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
                                                </div>
                                            </div> -->
                                            <div class="col-md-6 text-end"> <a href="">Forgot Password ?</a>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="button" name="submit" class="btn btn-primary user_log"><i class="bx bxs-lock-open"></i>Sign in</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
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
            // $("#show_hide_password a").on('click', function(event) {
            //     event.preventDefault();
            //     if ($('#show_hide_password input').attr("type") == "text") {
            //         $('#show_hide_password input').attr('type', 'password');
            //         $('#show_hide_password i').addClass("bx-hide");
            //         $('#show_hide_password i').removeClass("bx-show");
            //     } else if ($('#show_hide_password input').attr("type") == "password") {
            //         $('#show_hide_password input').attr('type', 'text');
            //         $('#show_hide_password i').removeClass("bx-hide");
            //         $('#show_hide_password i').addClass("bx-show");
            //     }
            // });
        });
    </script>

    <script type="text/javascript">
        // $(document).ready(function() {
        // $("#loginform").validator().on("submit", function(event) {
        //     if (event.isDefaultPrevented()) {
        //         // console.log(event.isDefaultPrevented());
        //     } else {
        //         // everything looks good!
        //         event.preventDefault();
        //         loginform();
        //     }
        // });

        // function loginform() {
        // $("#loginform .detail_submit_btn").attr('disabled', true);
        $(".user_log").click(function(e) {
                    // Initiate Variables With Form Content
                    var mobile = $("#mobile").val();
                    var password = $("#password").val();
                    var href = "<?php echo base_url() ?>home/loginbypassword";

                    $.ajax({
                        type: "POST",
                        dataType: "json",
                        url: href,
                        data: {
                            mobile_no: mobile,
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
                // }
                });
    </script>
    <!--app JS-->
    <script src="<?php echo base_url(); ?>backend_assets/js/app.js"></script>
</body>


<!-- Mirrored from codervent.com/rocker/demo/vertical/authentication-signin-with-header-footer.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Sep 2021 11:59:12 GMT -->

</html>