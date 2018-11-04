<?php include("../session_validate.php"); ?>
 <header class="header">
        <nav class="navbar">
        
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <!-- Navbar Header-->
              <div class="navbar-header">
                <!-- Navbar Brand --><a href="home.php" class="navbar-brand">
                  <div class="brand-text brand-big"><img src="../img/school_logo.png" width="30"/> <span> Mount Carmel   </span><strong> Central School</strong></div>
                                <div class="brand-text brand-small"><img src="../img/school_logo_white.png" width="30"/></div></a>
                <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a> 
              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Search-->
               


                <!-- Notifications-->
                <li class="nav-item dropdown"> 
				<a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell-o"></i><span class="badge bg-red badge-corner">12</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification">
                          <div class="notification-content"><i class="fa fa-envelope bg-green"></i>You have 6 new messages </div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification">
                          <div class="notification-content"><i class="fa fa-twitter bg-blue"></i>You have 2 followers</div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification">
                          <div class="notification-content"><i class="fa fa-upload bg-orange"></i>Server Rebooted</div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification">
                          <div class="notification-content"><i class="fa fa-twitter bg-blue"></i>You have 2 followers</div>
                          <div class="notification-time"><small>10 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>view all notifications                                            </strong></a></li>
                  </ul>
                </li> 
                <!-- Messages                        -->
				        
                 <li class="nav-item"><a href="sms_management.php" title="SMS Management" class="nav-link logout"> SMS <i class="fa fa-comments-o"></i></a></li>
                <li class="nav-item hidden-xs">
                    <a data-target="#" href="#"  class="nav-link logout" tabindex="0">
                        
                             Admin <i class="fa fa-user-circle-o"></i>
                         
                    </a> 
                </li>
                 <li class="nav-item"><a href="change_password.php" class="nav-link logout">Change Password<i class="fa fa-lock"></i></a></li>
                <!-- Logout    -->
                <li class="nav-item"><a href="../logout.php" class="nav-link logout">Logout<i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>