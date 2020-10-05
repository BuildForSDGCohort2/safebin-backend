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
    <title>SafeBIN | My Badges</title>
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
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper p-0">
                <?php
                    function datr(){
                    $time = time();
                    $actual_time =date('d M, Y', $time);
                    echo $actual_time;	
                    }
                    ?>
                    <div class="tab-content home-tab-content">
                        <div class="tab-pane fade show active" id="Dashboards-1" role="tabpanel" aria-labelledby="Dashboards-tab">
                            <div class="d-sm-flex justify-content-between align-items-center my-3">
                                <h3 class="text-dark font-weight-medium">My SafeBin Badges: <b><span style="color: #6a008a;"><?php
                                        $sql2 = "SELECT * FROM badge WHERE email='$email'";
                                        $result2 = $connect->query($sql2);
                                        if ($result2->num_rows > 0) {
                                            $rows1 = ($result2->num_rows);
                                            echo $rows1;
                                        }else{ echo '0'; } ?>
                                    </span></b></h3>
                                <div class="link-btn-group d-flex justify-content-start align-items-start">
                                    <a href="report"><button type="button" class="btn btn-link text-dark py-0">Report New Case</button></a>
                                    <a href="story"><button type="button" class="btn btn-link text-dark py-0">Submit Success Story</button></a>
                                </div>
                            </div>
                            <center>
                                <?php
                                include 'functions.php';
                                if ($rows1 >= 50){ ?>
                                    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                                    <input type="hidden" name="date" value="<?php echo datr() ?>" class="form-control">
                                    <input type="hidden" name="badges" value="<?php echo $rows1 ?>" class="form-control">
                                    <button type="submit" name="claimprize" class="btn btn-primary btn-icon-text">
                                        <i class="mdi mdi-shield btn-icon"></i>                                                    
                                        Congratulations, You have made 50 badges | <b>Click Here To Claim Your PRIZE</b>
                                    </button>
                                    </form><br />
                                <?php } ?>
                            </center>
                            <div class="row">
                                <!-- Fetching badges from database -->
                                <?php
                                    require_once "required/dbconfig.php";
                                    $stmt = $DB_con->prepare("SELECT * from badge WHERE email='$email' ORDER BY id DESC");
                                    $stmt->execute();
                                    
                                    if($stmt->rowCount() > 0)
                                        {
                                            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                                        {
                                            extract($row);
                                            ?>
                                <div class="col-xl-3 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h4 class="card-title mb-0"><?php echo $title?></h4>
                                                <button type="button" class="btn btn-link btn-md text-light p-0"><?php echo $date?></button>
                                            </div>
                                            <img src="images/badges/<?php 
                                                if($badge=='1'){ echo 'report'; }
                                                elseif($badge=='2'){ echo 'story'; }
                                                elseif($badge=='3'){ echo 'ambass'; }
                                                elseif($badge=='4'){ echo 'sponsor'; }
                                                ?>.png" width="100%">

                                            <a class="twitter-share-button"
                                                href="<?php 
                                                if($badge=='1'){ echo 'https://twitter.com/intent/tweet?text=I%20just%20won%20a%20SafeBin%20Reporter%20Badge:%20https://safebin.org%20pic.twitter.com/dGarvbbrXr'; }
                                                elseif($badge=='2'){ echo 'https://twitter.com/intent/tweet?text=I%20just%20won%20a%20SafeBin%20Success%20Story%20Badge:%20https://safebin.org%20pic.twitter.com/dGarvbbrXr'; }
                                                elseif($badge=='3'){ echo 'https://twitter.com/intent/tweet?text=I%20just%20won%20a%20SafeBin%20Ambassador%20Badge:%20https://safebin.org%20pic.twitter.com/dGarvbbrXr'; }
                                                elseif($badge=='4'){ echo 'https://twitter.com/intent/tweet?text=I%20just%20became%20a%20SafeBin%20Sponsor:%20https://safebin.org%20pic.twitter.com/dGarvbbrXr'; }
                                                ?>" target="_blank">
                                                <button class="btn btn-success"><i class="mdi mdi-twitter btn-icon-prepend"></i> Tweet</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <?php }}else{ ?>
                                    <center><div class="alert alert-warning" role="alert">
                                        <strong>NO BADGE TO DISPLAY!</strong> You have no badge so far. You can begin adding positively to community to start earning badges. Kindly submit reports to have them here!
                                    </div></center>
                                <?php } ?>                  
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <?php include ("includes/footer.php")?>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
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