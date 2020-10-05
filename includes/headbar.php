<?php
if (loggedin()){
	$user_id = $_SESSION['user_id'];
	$username = getusersfield($connect, 'username');
	$name = getusersfield($connect, 'name');
	$email = getusersfield($connect, 'email');
	$country = getusersfield($connect, 'country');
	$gender = getusersfield($connect, 'gender');
	$username = getusersfield($connect, 'username');
	$info = getusersfield($connect, 'info');
	$facebook = getusersfield($connect, 'facebook');
	$twitter = getusersfield($connect, 'twitter');
	$phone = getusersfield($connect, 'phone');
}else{
  header('Location: login');
}
?>
<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="navbar-brand-wrapper align-items-center">
                <a class="navbar-brand brand-logo" href="home"><img src="images/safebin.png" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="home"><img src="images/favicon.png" alt="logo" /></a>
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-sort-variant"></span> 
          </button>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <ul class="navbar-nav mr-lg-2">
                    <li class="nav-item d-none d-sm-block dropdown arrow-none">
                        <a href="agent"><button type="button" class="btn btn-success btn-icon-text">
                            <i class="mdi mdi-plus-circle btn-icon-prepend"></i>                                                    
                            Become A Community Representative
                        </button></a>
                    </li>
                    <li class="nav-item nav-search d-none d-sm-block">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="search">
                  <i class="mdi mdi-magnify"></i>
                </span>
                            </div>
                            <input type="text" class="form-control" placeholder="search" aria-label="search" aria-describedby="search">
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item d-none d-sm-block dropdown arrow-none">
                        <a href="contact"><button type="button" class="btn btn-warning btn-icon-text">
                            <i class="mdi mdi-message btn-icon-prepend"></i>                                                    
                            Contact Us
                        </button></a>
                    </li>
                    <li class="nav-item count-indicator nav-profile dropdown">
                        <span class="count">2</span>
                        <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <span class="nav-profile-name">Hi, <?php echo $name ?></span>
                            <img src="images/<?php if($gender == 'Male'){ echo 'avatar'; }elseif($gender == 'Female'){ echo 'avatar1'; }?>.png" alt="profile" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                            <a class="dropdown-item text-primary" href="profile">
                                <i class="mdi mdi-account"></i> Profile
                            </a>
                            <a class="dropdown-item text-primary" href="required/logout">
                                <i class="mdi mdi-logout text-primary"></i> Logout
                            </a>
                        </div>
                    </li>
                    <!-- <li class="nav-item dropdown count-indicator arrow-none">
                        <span class="count bg-success">3</span>
                        <a class="nav-link dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">
                            <i class="mdi mdi-bell-outline mx-0"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                            <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-success">
                                        <i class="mdi mdi-information mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-normal">Application Error</h6>
                                    <p class="font-weight-light small-text mb-0">
                                        Just now
                                    </p>
                                </div>
                            </a>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-warning">
                                        <i class="mdi mdi-settings mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-normal">Settings</h6>
                                    <p class="font-weight-light small-text mb-0">
                                        Private message
                                    </p>
                                </div>
                            </a>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-info">
                                        <i class="mdi mdi-account-box mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-normal">New user registration</h6>
                                    <p class="font-weight-light small-text mb-0">
                                        2 days ago
                                    </p>
                                </div>
                            </a>
                        </div>
                    </li> -->
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
            </div>
        </nav>