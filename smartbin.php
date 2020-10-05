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
    <title>SafeBIN | Request For Smart Bin</title>
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
                    <!-- Content Goes Here -->
                    <?php
                    function datr(){
                    $time = time();
                    $actual_time =date('d M, Y', $time);
                    echo $actual_time;	
                    }

                    function tim(){
                    $time = time();
                    $actual_time =date('H:i:s', $time);
                    echo $actual_time;
                    }
                    ?>
                    <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Request For A SmartBin In Your Community</h4>
                                    <?php include 'functions.php'; ?>
                                    <p class="card-description">
                                        SmartBins are large waste baskets supplied by SafeBin to curb improper disposal of wastes. <strong>Note: Your application will be reviewed before sending the material. <br /><span style="color: red;">Make sure you have updated your profile before requesting for our SmartBin!</span></strong>
                                    </p>
                                    <form class="forms-sample" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                                        <div class="form-group">
                                            <label for="exampleInputName1">Community</label>
                                            <input type="text" name="location" class="form-control" id="exampleInputName1" placeholder="The Location you are requesting from (Enter Full Address)" required>
                                            <input type="hidden" name="date" value="<?php echo datr() ?>" class="form-control" id="exampleInputName1" placeholder="The Location you are requesting from (Enter Full Address)">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail3">Community Size</label>
                                            <input type="number" class="form-control" name="size" id="exampleInputEmail3" placeholder="The Approximate Number of Residents of Your Community" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleSelectGender">How Many SmartBin(s) Do You Need? <strong>eg 5</strong></label>
                                            <input type="number" class="form-control" name="number" id="exampleInputEmail3" placeholder="The Number of SmartBins Needed In Your Community" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleTextarea1">Additional Info (Optional) Why Should We Give You SmartBins?</label>
                                            <textarea class="form-control" name="info" id="exampleTextarea1" rows="7"></textarea>
                                        </div>
                                        <center><button type="submit" name="smartbin" class="btn btn-primary mr-2">Request For SmartBin</button></center>
                                    </form>
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