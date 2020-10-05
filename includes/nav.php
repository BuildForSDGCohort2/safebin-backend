<nav class="sidebar sidebar-offcanvas" id="sidebar">
                <div class="dropdown sidebar-profile-dropdown">
                    <a class="dropdown-toggle d-flex align-items-center justify-content-between" href="#" data-toggle="dropdown" id="profileDropdown1">
                        <img src="images/<?php if($gender == 'Male'){ echo 'avatar'; }elseif($gender == 'Female'){ echo 'avatar1'; }?>.png" alt="profile" class="sidebar-profile-icon" />
                        <div>
                            <div class="nav-profile-name"><?php echo $name?></div>
                            <div class="nav-profile-designation">From <?php echo $country?></div>
                        </div>
                    </a>
                    <div class="dropdown-menu navbar-dropdown dropdown-menu-left" aria-labelledby="profileDropdown1">
                        <a class="dropdown-item" href="profile">
                            <i class="mdi mdi-account"></i> Profile
                        </a>
                        <a class="dropdown-item" href="required/logout">
                            <i class="mdi mdi-logout"></i> Logout
                        </a>
                    </div>
                </div>
                <ul class="nav">
                    <li class="nav-item">
                        <div class="sidebar-title">Main</div>
                        <a class="nav-link" href="home">
                            <i class="mdi mdi-cards-variant menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <div class="sidebar-title">My Tasks</div>
                        <a class="nav-link" data-toggle="collapse" href="#reports" aria-expanded="false" aria-controls="ui-basic">
                            <i class="mdi mdi-bell menu-icon"></i>
                            <span class="menu-title">Reports</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="reports">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="report">Submit New Report</a></li>
                                <li class="nav-item"> <a class="nav-link" href="myreports">View My Reports</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#stories" aria-expanded="false" aria-controls="ui-advanced">
                            <i class="mdi mdi-folder-outline menu-icon"></i>
                            <span class="menu-title">Stories</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="stories">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="story">Submit New Story</a></li>
                                <li class="nav-item"> <a class="nav-link" href="mystory">View My Stories</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="badges">
                            <i class="mdi mdi-cup menu-icon"></i>
                            <span class="menu-title">My Badges</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <div class="sidebar-title">Opportunities</div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#agent" aria-expanded="false" aria-controls="maps">
                            <i class="mdi mdi-heart-outline menu-icon"></i>
                            <span class="menu-title">Agent</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="agent">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="agent">Apply</a></li>
                                <li class="nav-item"> <a class="nav-link" href="agentstatus">Check Status</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://dashboard.flutterwave.com/donate/ryorc70dim19" target="_blank">
                            <i class="mdi mdi-card menu-icon"></i>
                            <span class="menu-title">Sponsor</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="error-404">
                            <i class="mdi mdi-table menu-icon"></i>
                            <span class="menu-title">Job Alerts</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="smartbin">
                            <i class="mdi mdi-recycle menu-icon"></i>
                            <span class="menu-title">SmartBin</span>
                        </a>
                    </li>

                    
                    <li class="nav-item">
                        <div class="sidebar-title">Account</div>
                        <a class="nav-link" href="profile">
                            <i class="mdi mdi-account menu-icon"></i>
                            <span class="menu-title">My Profile</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="required/logout">
                            <i class="mdi mdi-logout menu-icon"></i>
                            <span class="menu-title">Logout</span>
                        </a>
                    </li>
                </ul>
                <div class="designer-info">
                    Designed by: <a href="team">Cohort 2 Team 123</a>
                </div>
            </nav>