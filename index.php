<?php
    require_once("required/connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SafeBIN | Register</title>
    <!-- base:css -->
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/vertical-layout-light/style.css">
    <!-- endinject -->
     <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper user-pages d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">
                                <img src="images/safebin1.png" alt="logo">
                            </div>
                            <h4>New here?</h4>
                            <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
                            <?php include 'functions.php'; ?>
                            <form class="pt-3" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Name" name="name" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <select class="form-control form-control-lg" id="exampleFormControlSelect2" name="gender" required>
                                        <option>Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control form-control-lg" id="exampleFormControlSelect2" name="country" required>
                                        <option>Country</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option>United States of America</option>
                                        <option>United Kingdom</option>
                                        <option>India</option>
                                        <option>Germany</option>
                                        <option>Argentina</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" placeholder="Username" name="username" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" name="password" required>
                                </div>
                                <div class="mb-4">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" class="form-check-input" required>
                                            I agree to all Terms & Conditions
                                        </label>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <button type="submit" name="register" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN UP</button>
                                </div>
                                <div class="text-center mt-4 font-weight-light">
                                    Already have an account? <a href="login" class="text-primary">Login</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- base:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/template.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/todolist.js"></script>
    <!-- endinject -->
</body>


<!-- Mirrored from www.urbanui.com/wagondash/template/demo/vertical-default-light/pages/samples/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Aug 2019 02:02:42 GMT -->

</html>
