<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/avatar.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $name; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li><a href="home"><i class="fa fa-dashboard"></i> <span>DASHBOARD</span></a></li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>SAFEBIN USERS</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="check_users"><i class="fa fa-users"></i> <span>Check Registered Users</span></a></li>
            <li><a href="reports"><i class="fa fa-edit"></i> <span>Check Submitted Reports</span></a></li>
            <li><a href="stories"><i class="fa fa-check"></i> <span>Check Success Stories</span></a></li>
            <li><a href="phone"><i class="fa fa-phone"></i> <span>All Phone Numbers</span></a></li>
            <li><a href="email"><i class="fa fa-envelope"></i> <span>All User Emails</span></a></li>
            <li><a href="userpass"><i class="fa fa-key"></i> <span>Change User Password</span></a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-shield"></i>
            <span>SAFEBIN AGENTS</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="agents"><i class="fa fa-users"></i> <span>Check Applications</span></a></li>
            <li><a href="agaccept"><i class="fa fa-check"></i> <span>Approved Agents</span></a></li>
            <li><a href="agreject"><i class="fa fa-times"></i> <span>Rejected Agents</span></a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-trash"></i>
            <span>SMARTBIN REQUESTS</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="smartbins"><i class="fa fa-edit"></i> <span>Check Requests</span></a></li>
            <li><a href="smartbinacc"><i class="fa fa-check"></i> <span>Approved SmartBins</span></a></li>
            <li><a href="smartbinrej"><i class="fa fa-times"></i> <span>Rejected SmartBins</span></a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-shopping-cart"></i>
            <span>PRIZE APPLICATIONS</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="prize"><i class="fa fa-edit"></i> <span>Check Applications</span></a></li>
            <li><a href="prizeapp"><i class="fa fa-check"></i> <span>Approved Prizes</span></a></li>
            <li><a href="prizerej"><i class="fa fa-times"></i> <span>Rejected Prizes</span></a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-envelope"></i>
            <span>CONTACT MESSAGES</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="contact"><i class="fa fa-envelope"></i> <span>Check New Messages</span></a></li>
            <li><a href="contactr"><i class="fa fa-envelope-o"></i> <span>Read Messages</span></a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-dollar"></i>
            <span>SPONSORS</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="sponsor"><i class="fa fa-edit"></i> <span>Add New Sponsor</span></a></li>
            <li><a href="sponsors"><i class="fa fa-eye"></i> <span>Check Sponsors</span></a></li>
          </ul>
        </li>
        
        
        <li><a href="add_admin"><i class="fa fa-user"></i> <span>ADD NEW ADMIN</span></a></li>
        <li><a href="change_pass"><i class="fa fa-key"></i> <span>CHANGE MY PASSWORD</span></a></li>


        <li><a href="../required/logout2"><i class="fa fa-sign-out"></i> <span>LOGOUT</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>