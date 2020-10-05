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
    <title>SafeBIN | My Dashboard</title>
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
    <!-- Facebook Share -->
    <meta property="og:url"           content="https://127.0.0.1/SafeBIN/home" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Your Website Title" />
    <meta property="og:description"   content="Your description" />
    <meta property="og:image"         content="https://safe-bin.herokuapp.com/images/badges/story.png" />
    <!-- Facebook Share End -->
</head>

<body>
    <!-- Facebook Share Script -->
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- Facebook Share Script End -->

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
                    <div class="welcome-message">
                        <div class="d-lg-flex justify-content-between align-items-center">
                            <div class="pr-5 image-border"><img src="images/dashboard/welcome.png" alt="welcome"></div>
                            <div class="pl-4">
                                <h2 class="text-white font-weight-bold mb-3">Welcome, <?php echo $name?>!</h2>
                                <p class="pb-0 mb-1">Congratulations! Your account has been setup and you are ready to configure your dashboard now.</p>
                                <p>Configuration only takes a couple of seconds.</p>
                            </div>
                            <div class="pl-4">
                                <button type="button" class="btn btn-primary" id="skip-mesages">Skip</button>
                                <a href="profile"><button type="button" class="btn btn-success ml-lg-0 ml-xl-2 ml-2 ml-l mt-lg-2 mt-xl-0">Setup Manually</button></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="tab-content home-tab-content">
                        <div class="tab-pane fade show active" id="Dashboards-1" role="tabpanel" aria-labelledby="Dashboards-tab">
                            <div class="d-sm-flex justify-content-between align-items-center my-3">
                                <h3 class="text-dark font-weight-medium">My Latest SafeBin Badges</h3>
                                <div class="link-btn-group d-flex justify-content-start align-items-start">
                                    <a href="badges"><button type="button" class="btn btn-link text-dark py-0 pl-0">View All Badges</button></a>
                                    <a href="report"><button type="button" class="btn btn-link text-dark py-0">Report New Case</button></a>
                                    <a href="story"><button type="button" class="btn btn-link text-dark py-0">Submit New Story</button></a>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Fetching badges from database -->
                                <?php
                                    require_once "required/dbconfig.php";
                                    $stmt = $DB_con->prepare("SELECT * from badge WHERE email='$email' ORDER BY id DESC LIMIT 4");
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
                                            <br />
                                            <!-- Facebook share button code -->
                                            <div class="fb-share-button" data-href="https://safe-bin.herokuapp.com" data-layout="button"></div>
                                                
                                            <!-- Twitter Share Link -->
                                            <a class="twitter-share-button"
                                                href="<?php 
                                                if($badge=='1'){ echo 'https://twitter.com/intent/tweet?text=I%20just%20won%20a%20SafeBin%20Reporter%20Badge:%20https://safebin.org%20pic.twitter.com/dGarvbbrXr'; }
                                                elseif($badge=='2'){ echo 'https://twitter.com/intent/tweet?text=I%20just%20won%20a%20SafeBin%20Success%20Story%20Badge:%20https://safe-bin.herokuapp.com/'; }
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

                            <div class="row">
                                <div class="col-md-4 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title mb-0">Total Reports Submitted</h4>
                                            <div class="d-xl-flex justify-content-between mt-3 mb-3 align-items-center">
                                                <h6 class="font-weight-normal">September, 2020 - Date</h6>
                                                <a href="myreports"><button type="button" class="btn btn-outline-primary">Details</button></a>
                                            </div>
                                            <div class="row mt-4 mb-4 mb-sm-0 d-flex align-items-center">
                                                <div class="col-xl-9 mb-4 mb-sm-0">
                                                    <h1 class="font-weight-medium m-0 text-dark"><?php
                                                        $sql2 = "SELECT * FROM report WHERE email='$email'";
                                                        $result2 = $connect->query($sql2);
                                                        if ($result2->num_rows >= 0) {
                                                            $rows1 = ($result2->num_rows);
                                                            echo $rows1;
                                                        }
                                                    ?></h1>
                                                </div>

                                                <div class="col-xl-3"><canvas id="total-conversion"></canvas></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title mb-0">Stories Submitted</h4>
                                            <div class="d-xl-flex justify-content-between mt-3 mb-3 align-items-center">
                                                <h6 class="font-weight-normal">September, 2020 - Date</h6>
                                                <a href="mystory"><button type="button" class="btn btn-outline-primary">Details</button></a>
                                            </div>
                                            <div class="row mt-4 mb-4 mb-sm-0 d-flex align-items-center">
                                                <div class="col-xl-9  mb-4 mb-sm-0">
                                                    <h1 class="font-weight-medium m-0 text-dark"><?php
                                                        $sql2 = "SELECT * FROM story WHERE email='$email'";
                                                        $result2 = $connect->query($sql2);
                                                        if ($result2->num_rows >= 0) {
                                                            $rows1 = ($result2->num_rows);
                                                            echo $rows1;
                                                        }
                                                    ?></h1>
                                                </div>

                                                <div class="col-xl-3"><canvas id="avrg-order-quantity"></canvas></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title mb-0">Badges Won</h4>
                                            <div class="d-xl-flex justify-content-between mt-3 mb-3 align-items-center">
                                                <h6 class="font-weight-normal">September, 2020 - Date</h6>
                                                <a href="badges"><button type="button" class="btn btn-outline-primary">More Detail</button></a>
                                            </div>
                                            <div class="row mt-4 mb-4 mb-sm-0 d-flex align-items-center">
                                                <div class="col-xl-9 mb-4 mb-sm-0">
                                                    <h1 class="font-weight-medium m-0 text-dark"><?php
                                                        $sql2 = "SELECT * FROM badge WHERE email='$email'";
                                                        $result2 = $connect->query($sql2);
                                                        if ($result2->num_rows >= 0) {
                                                            $rows1 = ($result2->num_rows);
                                                            echo $rows1;
                                                        }
                                                    ?></h1>
                                                </div>

                                                <div class="col-xl-3"><canvas id="percentage"></canvas></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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