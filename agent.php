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
    <title>SafeBIN | Become An Agent</title>
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
                                    <h4 class="card-title">Become A Community Representative</h4>
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
                                    
                                    <!-- Getting if the user already submitted and application -->
                                    <?php
                                        $queryy ="SELECT * FROM agent WHERE email='$email'";
                                        $result = $connect->query($queryy);
                              
                                              if ($result->num_rows > 0) {
                                                  ?>
                                              <center>
                                                <div class="alert alert-danger">
                                                    <strong>Info!</strong> You already submitted an application, please await response! <strong><a href="agentstatus">Check your status HERE!!!</a></strong>
                                                </div>
                                              </center>
                                              <?php
                                              }else{
                                    ?>
                                    <hr>
                                    <?php include 'functions.php'; ?>
                                    <form class="forms-sample" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                                        <div class="form-group">
                                            <label for="exampleInputName1">Your Name</label>
                                            <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Enter Your Full Name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName1">Email</label>
                                            <input type="email" name="email" class="form-control" id="exampleInputName1" placeholder="Enter Valid Email" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName1">Phone Number <span style="color: red;">(Include Country Code)</span></label>
                                            <input type="text" name="phone" class="form-control" id="exampleInputName1" placeholder="Enter Valid Phone" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName1">Gender</label>
                                            <select name="gender" class="form-control" id="exampleInputName1" required>
                                                <option value="">Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName1">Community</label>
                                            <input type="community" name="community" class="form-control" id="exampleInputName1" placeholder="The Community You Want To Represent" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleTextarea1">Cover Letter (Why should we give you this position?)</label>
                                            <textarea class="form-control" name="cover" id="exampleTextarea1" rows="20" required></textarea>
                                        </div>
                                        <center><button type="submit" name="ambassador" class="btn btn-primary mr-2">Submit Application</button></center>
                                    </form>
                                              <?php } ?>
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