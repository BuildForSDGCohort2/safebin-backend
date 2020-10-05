<?php
    require_once("required/connect.php");
    require_once("required/core.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SafeBIN | Login</title>
    <!-- base:css -->
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0&appId=738463593552415&autoLogAppEvents=1" nonce="USwYQMcI"></script>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper user-pages d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">
                                <img src="images/safebin1.png" alt="logo">
                            </div>
                            <h4>Hello! let's get started in building a clean community...</h4>
                            <h6 class="font-weight-light">Sign in to continue.</h6>
                            <?php include 'functions.php'; ?>
                            <form class="pt-3" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" name="password" required>
                                </div>
                                <div class="mt-3">
                                    <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="login" name="login">SIGN IN</button>
                                </div>
                                <div class="my-2 d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                                    </div>
                                    <a href="#" class="auth-link text-black">Forgot password?</a>
                                </div>
                                <!-- <div class="mb-2">
                                    <button type="button" scope="public_profile,email" onlogin="checkLoginState();" class="btn btn-block btn-facebook auth-form-btn">
                    <i class="mdi mdi-facebook mr-2"></i>Connect using facebook
                  </button>
                                </div> -->
                                
                                <!-- Facebook Login -->
                                <script>
                                    function statusChangeCallback(response) {  // Called with the results from FB.getLoginStatus().
                                        console.log('statusChangeCallback');
                                        console.log(response);                   // The current login status of the person.
                                        if (response.status === 'connected') {   // Logged into your webpage and Facebook.
                                        testAPI();  
                                        } else {                                 // Not logged into your webpage or we are unable to tell.
                                        document.getElementById('status').innerHTML = 'Please log ' +
                                            'into this webpage.';
                                        }
                                    }


                                    function checkLoginState() {               // Called when a person is finished with the Login Button.
                                        FB.getLoginStatus(function(response) {   // See the onlogin handler
                                        statusChangeCallback(response);
                                        });
                                    }


                                    window.fbAsyncInit = function() {
                                        FB.init({
                                        appId      : '738463593552415',
                                        cookie     : true,                     // Enable cookies to allow the server to access the session.
                                        xfbml      : true,                     // Parse social plugins on this webpage.
                                        version    : '{api-version}'           // Use this Graph API version for this call.
                                        });


                                        FB.getLoginStatus(function(response) {   // Called after the JS SDK has been initialized.
                                        statusChangeCallback(response);        // Returns the login status.
                                        });
                                    };
                                    
                                    function testAPI() {                      // Testing Graph API after login.  See statusChangeCallback() for when this call is made.
                                        console.log('Welcome!  Fetching your information.... ');
                                        FB.api('/me', function(response) {
                                        console.log('Successful login for: ' + response.name);
                                        document.getElementById('status').innerHTML =
                                            '<p>Welcome, '+response.name+' <a href=home?name=' + response.name.replace(" ", "_") + '&email=' + response.email +'>Continue with Facebook</a></p>';
                                        });
                                    }
                                </script>

                                <!-- Facebook Button -->
                                <fb:login-button scope="public_profile,email" onlogin="checkLoginState();" class="btn btn-block btn-facebook auth-form-btn">
                                Continue with Facebook</fb:login-button>

                                <div id="status">
                                </div>
                                <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>

                                <div class="text-center mt-4 font-weight-light">
                                    Don't have an account? <a href="./" class="text-primary">Create One</a>
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


<!-- Mirrored from www.urbanui.com/wagondash/template/demo/vertical-default-light/pages/samples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Aug 2019 02:02:42 GMT -->

</html>