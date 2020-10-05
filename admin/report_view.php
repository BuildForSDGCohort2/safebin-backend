<?php
    include ("../required/connect.php");
    include ("../required/core.php");
    $_GET['id'];
    $get_id=$_GET['id'];
?> 
<!DOCTYPE html>
<html>

<head>
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SafeBin Admin | Check Situation Report</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <?php include ("includes/header.php"); ?>
        <!-- Left side column. contains the logo and sidebar -->
        <?php include ("includes/sidebar.php"); ?>
        <!-- Left side column. contains the logo and sidebar -->
       
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    SafeBin  Users
                    <small>| Check Situation Report</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Check Situation Report</li>
                </ol>
            </section>

            <?php
                require_once "../required/dbconfig.php";
                $stmt = $DB_con->prepare("SELECT * from report WHERE id='$get_id'");
                $stmt->execute();
                
                if($stmt->rowCount() > 0)
                {
                    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                    {
                        extract($row);
                    ?>

            <!-- Main content -->
            <section class="content">
            <div class="row">
                <div class="col-md-12">
                <!-- The time line -->
                <ul class="timeline">
                    <!-- timeline time label -->
                    <li class="time-label">
                        <span class="bg-red">
                        <?php echo $date; ?>
                        </span>
                    </li>
                    <!-- /.timeline-label -->

                    <!-- timeline item -->
                    <li>
                    <i class="fa fa-user bg-aqua"></i>

                    <div class="timeline-item">
                        <!-- <span class="time"><i class="fa fa-clock-o"></i> </span> -->
                        <h3 class="timeline-header no-border"><a href="#"><?php echo $email; ?></a> from <?php echo $location; ?></h3>
                    </div>
                    </li>
                    <!-- END timeline item -->

                    <!-- timeline item -->
                    <li>
                    <i class="fa fa-envelope bg-blue"></i>

                    <div class="timeline-item">

                        <h3 class="timeline-header"><a href="#">Situation Report</a></h3>

                        <div class="timeline-body"><?php echo $info; ?>
                        </div>
                    </div>
                    </li>
                    <!-- END timeline item -->
                    <!-- timeline time label -->
                    <li class="time-label">
                        <span class="bg-green">
                            Media Attached
                        </span>
                    </li>
                    <!-- /.timeline-label -->
                    <!-- timeline item -->
                    <li>
                    <i class="fa fa-camera bg-purple"></i>

                    <div class="timeline-item">

                        <h3 class="timeline-header">Uploaded Photos</h3>

                        <div class="timeline-body">
                            <?php
                                // Include the database configuration file
                                include_once '../required/dbconfig.php';

                                // Get images from the database
                                $query = "SELECT * FROM images WHERE spe='$spe'";
                                $result = $DB_con->query($query);
                                if($result->rowCount() > 0){
                                    while($row = $result->fetch(PDO::FETCH_ASSOC)){
                                        $imageURL = '../uploads/'.$row["file_name"];
                                ?>
                                <a href="<?php echo $imageURL; ?>" target="_blank"><img src="<?php echo $imageURL; ?>" alt="..." width="47%" class="margin"></a>
                            <?php }
                                }else{ ?>
                                    <p>No image(s) found...</p>
                            <?php } ?> 
                        </div>
                    </div>
                    </li>
                    <!-- END timeline item -->
                    <!-- timeline item -->
                    <li>
                    <i class="fa fa-video-camera bg-maroon"></i>

                    <div class="timeline-item">
                        <h3 class="timeline-header">Shared Video</h3>

                        <div class="timeline-body">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $video; ?>"
                                    frameborder="0" allowfullscreen></iframe>
                        </div>
                        </div>
                    </div>
                    </li>
                    <!-- END timeline item -->
                </ul>
                </div>
                <!-- /.col -->
            </div>
                        <!-- /.row -->
            </section>
                            <?php }} ?>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Footer -->
            <?php include ("includes/footer.php"); ?>
        <!-- /Footer -->

        <!-- Control Sidebar -->
        <?php include ("includes/right-bar.php"); ?>
        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->
    <!-- //End Buttons -->
    <!-- jQuery 3.1.1 -->
    <script src="plugins/jQuery/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- page script -->
    <script>
        $(function() {
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false
            });
        });
    </script>
</body>

</html>