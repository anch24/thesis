<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="icon" type="image/png" sizes="16x16" href="/material/assets/images/favicon.png">
    <!-- Bootstrap Core CSS -->
    <link href="/material/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="/material/assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="/material/assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="/material/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!--This page css - Morris CSS -->
    <link href="/material/assets/plugins/c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/material/html/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="/material/html/css/colors/blue.css" id="theme" rel="stylesheet">
</head>
<body class="fix-header fix-sidebar card-no-border">

        <div class="preloader">
            <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
        </div>

    <div id="main-wrapper">

        <header class="topbar">
            <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" style="color:white;" href="/admin">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            
                            <!-- Light Logo icon -->
                            <img src="/material/assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                            
                            <!-- Light Logo text -->    
                            <!--<img src="material/assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span>-->
                        Enrollment System
                    </a>
                    
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="/material/assets/images/users/1.jpg" alt="user" class="profile-pic m-r-10" />
                                {{Auth::guard('admin')->user()->name}}
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="waves-effect waves-dark" href="/admin" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="/admin/course" aria-expanded="false"><i class="mdi mdi-bulletin-board"></i><span class="hide-menu">Courses</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="/admin/students" aria-expanded="false"><i class="mdi mdi-account-check"></i><span class="hide-menu">Students</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="/admin/staff" aria-expanded="false"><i class="mdi mdi-account-settings"></i><span class="hide-menu">Staff</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="/admin/instructor" aria-expanded="false"><i class="mdi mdi-account-key"></i><span class="hide-menu">Instructors</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="/admin/chairperson" aria-expanded="false"><i class="mdi mdi-account-star"></i><span class="hide-menu">Chairperson</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="/admin/profile" aria-expanded="false"><i class="mdi mdi-account-settings-variant"></i><span class="hide-menu">Profile</span></a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->
            <div class="sidebar-footer">
                <!-- item--><a href="" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
                <!-- item--><a href="" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
                <!-- item--><a href="{{ route('admin.logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i>
                        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                            @csrf
                            </form> 
                    </a> 
            </div>
            <!-- End Bottom points-->
        </aside>

        <div class="page-wrapper">

            <div class="container-fluid">

                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor">@yield('breadcrumb-header')</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">@yield('breadcrumb-item')</li>
                        </ol>
                    </div>
                </div>
                
                <div class="row">

                    @yield('content')

                </div>

            </div>

        </div>

    </div>

    <script src="/material/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="/material/assets/plugins/bootstrap/js/tether.min.js"></script>
    <script src="//assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="/material/html/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="/material/html/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="/material/html/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="/material/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="/material/html/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <script src="/material/assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="/material/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 JavaScript -->
    <script src="/material/assets/plugins/d3/d3.min.js"></script>
    <script src="/material/assets/plugins/c3-master/c3.min.js"></script>
    <!-- Chart JS -->
    <script src="/material/html/js/dashboard1.js"></script>
    
</body>
</html>