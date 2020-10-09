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
    <title>SafeBIN | Developers</title>
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
                        <div class="col-md-4 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-sm-flex flex-row flex-wrap text-center text-sm-left align-items-center">
                                        <img src="images/team/Enoch.jpeg" class="img-lg rounded" alt="Olayode Enoch" />
                                        <div class="ml-sm-3 ml-md-0 ml-xl-3 mt-2 mt-sm-0 mt-md-2 mt-xl-0">
                                            <h6 class="mb-0">Olayode Enoch</h6>
                                            <p class="text-muted mb-1">olayodeenoch@gmail.com</p>
                                            <p class="mb-0 text-success font-weight-bold">Developer/Team Lead</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-sm-flex flex-row flex-wrap text-center text-sm-left align-items-center">
                                        <img src="images/team/Peter.jpeg" class="img-lg rounded" alt="Peter Awotola" />
                                        <div class="ml-sm-3 ml-md-0 ml-xl-3 mt-2 mt-sm-0 mt-md-2 mt-xl-0">
                                            <h6 class="mb-0">Peter Awotola</h6>
                                            <p class="text-muted mb-1">peterawotola@gmail.com</p>
                                            <p class="mb-0 text-success font-weight-bold">Developer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-sm-flex flex-row flex-wrap text-center text-sm-left align-items-center">
                                        <img src="images/team/Ikechukwu.jpeg" class="img-lg rounded" alt="Ikechukwu Anigbata" />
                                        <div class="ml-sm-3 ml-md-0 ml-xl-3 mt-2 mt-sm-0 mt-md-2 mt-xl-0">
                                            <h6 class="mb-0">Ikechukwu Anigbata</h6>
                                            <p class="text-muted mb-1">williamikechukwu@gmail.com</p>
                                            <p class="mb-0 text-success font-weight-bold">Designer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-sm-flex flex-row flex-wrap text-center text-sm-left align-items-center">
                                        <img src="images/team/Malan.jpeg" class="img-lg rounded" alt="Sulaiman Muhammad" />
                                        <div class="ml-sm-3 ml-md-0 ml-xl-3 mt-2 mt-sm-0 mt-md-2 mt-xl-0">
                                            <h6 class="mb-0">Abba Malan</h6>
                                            <p class="text-muted mb-1">abbamallams23@gmail.com</p>
                                            <p class="mb-0 text-success font-weight-bold">Tester</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-sm-flex flex-row flex-wrap text-center text-sm-left align-items-center">
                                        <img src="images/team/myde.jpeg" class="img-lg rounded" alt="Olumide Orija" />
                                        <div class="ml-sm-3 ml-md-0 ml-xl-3 mt-2 mt-sm-0 mt-md-2 mt-xl-0">
                                            <h6 class="mb-0">Olumide Orija</h6>
                                            <p class="text-muted mb-1">mrolubanty@gmail.com</p>
                                            <p class="mb-0 text-success font-weight-bold">Tester</p>
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
</html>
