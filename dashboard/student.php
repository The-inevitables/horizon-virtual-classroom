<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Student Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A dashboard dedicated for adding for students" name="description" />
    <meta content="Coderthemes" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/Horizon.svg">

    <!-- inline style to handle loading of various element-->
    <style>
        body.loading {
            visibility: hidden;
        }
        #feed-container {
                            width: 100%;
                            height: 550px;
                         }
        #tasks-container {
                            width: 100%;
                            height: 500px;
                         }                 
    </style>

    <!-- App css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="main-style-container" />
    <link href="assets/css/weavy.css" rel="stylesheet" type="text/css" />
    <script src="https://horizond.azurewebsites.net/javascript/weavy.jquery.js"></script>
    <script>var weavy = new Weavy();</script>

</head>

<body class="loading">
    <div id="detached-topbar-placeholder"></div>
    <!-- Begin page -->
    <div class="wrapper">

        <div id="vertical-sidebar-placeholder">
            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="slimscroll-menu" id="left-side-menu-container">

                    <!--- Sidemenu -->
                    <ul class="metismenu side-nav pt-4">

                        <li class="side-nav-title side-nav-item">Navigation</li>

                        <li class="side-nav-item mm-open">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="dripicons-home"></i>
                                <span> Dashboards </span>
                            </a>
                            <!-- <ul class="side-nav-second-level mm-show" aria-expanded="false">
                                <li>
                                    <a href="../index.php"><i class="dripicons-meter"></i> &nbsp;Home</a>
                                </li>
                            </ul> -->
                        </li>


                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link mm-active">
                                <i class="dripicons-clipboard"></i>
                                <span> Assignment </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link mm-active">
                                <i class="dripicons-document-edit"></i>
                                <span> Class Tests </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link mm-active">
                                <i class="dripicons-calendar"></i>
                                <span> Calender </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="./Digilibrary.php" class="side-nav-link mm-active">
                                <i class="dripicons-archive"></i>
                                <span> Digi-Library </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="HorizonFeeds.php" target="_blank" class="side-nav-link mm-active">
                                <i class="dripicons-feed"></i>
                                <span> Horizon Feeds  </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="threemodels.php" target="_blank" class="side-nav-link mm-active">
                                <i class="dripicons-pin"></i>
                                <span> Learn in 3D  </span>
                            </a>
                        </li>

                    </ul>

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->
        </div>
        <div id="detached-sidebar-placeholder"></div>

        <!-- ============================================================== -->
        <!-- Top panel  Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <div id="vertical-topbar-placeholder">
                    <!-- Topbar Start -->
                    <div class="navbar-custom">
                        <ul class="list-unstyled topbar-right-menu float-right mb-0">
                            <li class="notification-list topbar-dropdown d-lg-block">
                                <button class="nav-link dropdown-toggle arrow-none btn btn-link">
                                    <i class="dripicons-gear noti-icon"></i>
                                </button>
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#"
                                    role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="dripicons-bell noti-icon"></i>
                                    <span class="noti-icon-badge"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">

                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5 class="m-0">
                                            <span class="float-right">
                                                <a href="javascript: void(0);" class="text-dark">
                                                    <small>Clear All</small>
                                                </a>
                                            </span>Notification
                                        </h5>
                                    </div>

                                    <div class="slimscroll" style="max-height: 230px;">
                                        <!-- Notification Bar-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-primary">
                                                <i class="mdi mdi-comment-account-outline"></i>
                                            </div>
                                            <p class="notify-details">Akash added a new Horizon Feed.
                                                <small class="text-muted">1 min ago</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-primary">
                                                <i class="mdi mdi-comment-account-outline"></i>
                                            </div>
                                            <p class="notify-details">Anjana added a new Horizon Feed.
                                                <small class="text-muted">5 hours ago</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-primary">
                                                <i class="mdi mdi-comment-account-outline"></i>
                                            </div>
                                            <p class="notify-details">Nikhil added a new Horizon Feed.
                                                <small class="text-muted">1 days ago</small>
                                            </p>
                                        </a>
                                    </div>

                                    <!-- All-->
                                    <a href="javascript:void(0);"
                                        class="dropdown-item text-center text-primary notify-item notify-all">
                                        View All
                                    </a>
                                    <!-- End of Notification bar-->
                                </div>
                            </li>

                            <li class="notification-list topbar-dropdown d-lg-block toggle-messenger">
                                <button class="nav-link dropdown-toggle arrow-none btn btn-link">
                                    <i class="dripicons-message noti-icon"></i>
                                </button>
                                    <!-- Containter for messenger -->
                                <div id="weavy-messenger-container"></div>
                            </li>
                            
                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown"
                                    href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <span class="account-user-avatar">
                                        <img src="assets/images/users/avatar-1.svg" alt="user-image"
                                            class="rounded-circle">
                                    </span>
                                    <span>
                                        <span class="account-user-name">Student</span>
                                        <span class="account-position">Horizon</span>
                                    </span>
                                </a>
                                <div
                                    class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                    <!-- item-->
                                    <div class=" dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-circle mr-1"></i>
                                        <span>My Account</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-edit mr-1"></i>
                                        <span>Settings</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-lifebuoy mr-1"></i>
                                        <span>Support</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-lock-outline mr-1"></i>
                                        <span>Lock Screen</span>
                                    </a>

                                    <!-- item-->
                                    <a href="../logout.php" class="dropdown-item notify-item">
                                        <i class="mdi mdi-logout mr-1"></i>
                                        <span>Logout</span>
                                    </a>

                                </div>
                            </li>

                        </ul>
                        <button class="button-menu-mobile open-left disable-btn">
                            <i class="mdi mdi-menu"></i>
                        </button>
                        
                    </div>
                    <!-- end Topbar -->

                </div>
                <!-- start Topbar -->
                <div id="horizontal-topbar-placeholder"></div>
        <!-- ============================================================== -->
        <!-- Add page widgets and contents here -->
        <!-- ============================================================== -->
                <div class="container-fluid">
                            <div id="container-space">
                                </br> 
                                <h4 class="page-title">Welcome to Horizon, Student.</h4>
                                </br>
                            </div>
                    <div class="row">

                        <!-- end of horizon Widget -->
                        <!-- Task Manager-->
                        <div class="col-lg-6">
                            <div class="card section-customer" data-customer-id="acme">
                                <div class="card-body">
                                    <h4 class="header-title mb-3">Tasks</h4>

                                    <div id="tasks-container"></div>

                                </div>
                            </div>
                        </div>
                        <!-- end of Task Manager-->
                        <div class="col-lg-6">
                            <div class="card section-customer" data-customer-id="acme">
                                <div class="card-body">
                                    <h4 class="header-title mb-3">Horizon Feeds</h4>

                                    <div id="feed-container"></div>

                                </div>
                            </div>
                        </div>
                        <!-- end of Horizon Feeds-->
                        </div>

                    </div>
                    <!-- end row -->

                    <!-- Adding Weavy file browsing components -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card section-customer" data-customer-id="acme">
                                <div class="card-body">
                                    <h4 class="header-title mb-3">Files</h4>

                                    <div id="weavy-files-container"></div>

                                </div>
                            </div>
                        </div>

                        
                    <!-- end row -->


                </div>
                <!-- container -->

            </div>
            <!-- content -->

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">

                        </div>
                        <div class="col-md-6">
                            <div class="text-md-right footer-links d-none d-md-block">
                            &#169;Team Inevitables 2021 &nbsp;&nbsp;&nbsp;
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->


    <!-- Right Sidebar -->
    <div class="right-bar">
    </div>

    <div class="rightbar-overlay"></div>
    <!-- /Right-bar -->

    <!-- Containter for Weavy Messenger -->
    <div id="weavy-messenger-container"></div>
    <div id="feeds"></div>

    <!-- App js -->
    <script src="assets/js/app.js"></script>

    <!-- TASK: add weavy javascript library here -->
    <scrpit src="https://horizond.azurewebsites.net/javascript/weavy.jquery.js"></scrpit>

    <!-- weavy client script -->
    <script src="assets/js/weavy.js"></script>

    <!-- third party js -->
    <script src="assets/js/vendor/jsrsasign-all-min.js"></script>
    <script src="assets/js/vendor/Chart.bundle.min.js"></script>
    <!-- third party js ends -->

</body>

</html>