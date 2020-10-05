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
    <title>SafeBIN | Community Agent Application Status</title>
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
                <div class="content-wrapper p-0">
                    <!-- Content Goes Here -->
                    <div class="welcome-message">
                        <div class="d-lg-flex justify-content-between align-items-center">
                            <div class="pr-5 image-border"><img src="images/dashboard/welcome.png" alt="welcome"></div>
                            <div class="pl-4">
                                <h2 class="text-white font-weight-bold mb-3">Community Agent Application Status</h2>
                                <?php
                                        $queryy ="SELECT * FROM agent WHERE email='$email'";
                                        $result = $connect->query($queryy);
                                        $user_data=mysqli_fetch_assoc($result);
                                        if ($result->num_rows > 0) {
                                        $status = $user_data['status'];
                                        if ($status == '0'){
                                            ?>
                                            <p class="pb-0 mb-1">Hello! Your Application is still under review, please check back later.</p>
                                            <div class="progress progress-md">
                                                <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        <?php
                                        }elseif ($status == '1'){ ?>
                                            <p class="pb-0 mb-1">Congratulations! You were approved, you will get a mail from us, soon.</p>
                                            <div class="progress progress-md">
                                                <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        <?php }elseif ($status == '2'){ ?>
                                            <p class="pb-0 mb-1">Sorry! You were not qualified, consider applying again!</p>
                                            <div class="progress progress-md">
                                                <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        <?php }}else{ ?>
                                            <p class="pb-0 mb-1">We noticed you do not have an active application.
                                            <a href="agent" class="btn btn-success ml-lg-0 ml-xl-2 ml-2 ml-l mt-lg-2 mt-xl-0">Apply Here</a></p>
                                    <?php } ?>
                            </div>
                            <div class="pl-4">
                                <button type="button" class="btn btn-primary" id="skip-mesages">Close</button>
                                <a href="agent" class="btn btn-success ml-lg-0 ml-xl-2 ml-2 ml-l mt-lg-2 mt-xl-0">Apply Here</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div>
                                        <div class="row" style="width: 50%; float: left">
                                            <p class="card-description">
                                            <strong>Benefits of Becoming a SafeBin Community Agent!</strong>
                                            </p><br>
                                            <ul>
                                                <li>Get First Hand Information</li>
                                                <li>Get information about job Opportunities at the ministry of water resources/sanitation</li>
                                                <li>Get Stipends and gifts from government for Cleaning</li>
                                                <li>Get Free Clothe/gifts (SafeBIN Vest)</li>
                                                <li>Get the SafeBin Ambassador badge Online</li>
                                                <li>Attend helpful Online/Physical Conferences and Seminars</li>
                                                <li>A chance to get hired and work with us (Based on commitment to the community)</li>
                                            </ul>
                                        </div>
                                        <div class="row" style="width: 50%; float: right">
                                            <p class="card-description">
                                            <strong>Functions a SafeBin Community Agent!</strong>
                                            </p><br>
                                            <ul>
                                                <li>Organize Health Seminars/Workshops</li>
                                                <li>Organize Cleaning Activities in the community</li>
                                                <li>Encourage people to register and participate on the SafeBin platform</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
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