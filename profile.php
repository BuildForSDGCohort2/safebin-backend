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
    <title>SafeBIN | My Profile</title>
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
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <?php include ("includes/headbar.php")?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            <div class="theme-setting-wrapper">
                <div id="settings-trigger"><i class="mdi mdi-settings"></i></div>
                <div id="theme-settings" class="settings-panel">
                    <i class="settings-close mdi mdi-close"></i>
                    <p class="settings-heading">SIDEBAR SKINS</p>
                    <div class="sidebar-bg-options" id="sidebar-light-theme">
                        <div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
                    <div class="sidebar-bg-options selected" id="sidebar-dark-theme">
                        <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
                    <p class="settings-heading mt-2">HEADER SKINS</p>
                    <div class="color-tiles mx-0 px-4">
                        <div class="tiles success"></div>
                        <div class="tiles warning"></div>
                        <div class="tiles danger"></div>
                        <div class="tiles primary"></div>
                        <div class="tiles info"></div>
                        <div class="tiles dark"></div>
                        <div class="tiles default"></div>
                    </div>
                </div>
            </div>
            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            <?php include ("includes/nav.php")?>
            
            <!-- Main Panel Starts here -->
            <div class="main-panel">
                <div class="content-wrapper">
                <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="border-bottom text-center pb-4">
                                                <img src="images/<?php if($gender == 'Male'){ echo 'avatar'; }elseif($gender == 'Female'){ echo 'avatar1'; }?>.png" alt="profile" class="img-lg rounded-circle mb-3" />
                                                <div class="mb-3">
                                                    <h3><?php echo $name ?></h3>
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        <h5 class="mb-0 mr-2 text-muted"><?php echo $country ?></h5>
                                                    </div>
                                                </div>
                                                <p class="w-75 mx-auto mb-3"><?php echo $info ?></p>
                                            </div>
                                            <div class="border-bottom py-4">
                                                <p>My Latest Badges</p>
                                                <div>
                                                <?php
                                                    require_once "required/dbconfig.php";
                                                    $stmt = $DB_con->prepare("SELECT * from badge WHERE email='$email' ORDER BY id DESC LIMIT 4");
                                                    $stmt->execute();
                                                    
                                                    if($stmt->rowCount() > 0)
                                                        {
                                                            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                                                        {
                                                            extract($row);
                                                        ?><label class="badge badge-outline-dark"><?php echo $title.'/'.$date ?></label> <?php }} ?>
                                                </div>
                                            </div>
                                            
                                            <div class="py-4">
                                                <p class="clearfix">
                                                    <span class="float-left">
                            Status
                          </span>
                                                    <span class="float-right text-muted">
                            Active
                          </span>
                                                </p>
                                                <p class="clearfix">
                                                    <span class="float-left">
                            Phone
                          </span>
                                                    <span class="float-right text-muted">
                                                    <?php echo $phone ?>
                          </span>
                                                </p>
                                                <p class="clearfix">
                                                    <span class="float-left">
                            Mail
                          </span>
                                                    <span class="float-right text-muted">
                                                    <?php echo $email ?>
                          </span>
                                                </p>
                                                <p class="clearfix">
                                                    <span class="float-left">
                            Facebook
                          </span>
                                                    <span class="float-right text-muted">
                            <a href="https://facebook.com/<?php echo $facebook ?>" target="_blank"><?php echo $facebook ?></a>
                          </span>
                                                </p>
                                                <p class="clearfix">
                                                    <span class="float-left">
                            Twitter
                          </span>
                                                    <span class="float-right text-muted">
                            <a href="https://twitter.com/<?php echo $twitter ?>" target="_blank"><?php echo $twitter ?></a>
                          </span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="d-block d-md-flex justify-content-between mt-4 mt-md-0">
                                                <div class="text-center mt-4 mt-md-0">
                                                    <button class="btn btn-primary">Edit Profile</button>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-body">
                                                    <?php include 'functions.php'; ?>
                                                    <form class="forms-sample" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                                                        <div class="form-group row">
                                                            <label for="exampleTextarea1" class="col-sm-3 col-form-label">More Info About You</label>
                                                            <div class="col-sm-9">
                                                                <textarea class="form-control" name="info" id="exampleTextarea1" rows="4"><?php echo $info ?></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Phone Number</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" name="phone" id="exampleInputUsername2" value="<?php echo $phone ?>" placeholder="Phone Number (Include Country Code)">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Twitter</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" name="twitter" class="form-control" id="exampleInputEmail2" value="<?php echo $twitter ?>" placeholder="Twitter Username">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Facebook Username</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" name="facebook" class="form-control" id="exampleInputMobile" value="<?php echo $facebook ?>" placeholder="Facebook Username">
                                                            </div>
                                                        </div>
                                                        <center><button type="submit" name="profile_upd" class="btn btn-primary mr-2">Update Profile</button></center>
                                                       
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- main-panel ends -->
            <?php include ('includes/footer.php')?>
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- base:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/template.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/todolist.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="js/dashboard.js"></script>
    <!-- End custom js for this page-->
</body>


<!-- Mirrored from www.urbanui.com/wagondash/template/demo/vertical-default-light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Aug 2019 01:53:25 GMT -->

</html>