<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>DASHBOARD</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Pignose Calender -->
    <link href="themes/plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="themes/plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="themes/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="login-form-17/css/style.css">
    <!-- Custom Stylesheet -->
    <link href="themes/css/style.css" rel="stylesheet">

    
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="index.html">
                    <b class="logo-abbr"><img src="themes/images/logo.png" alt=""> </b>
                    <span class="logo-compact"><img src="themes/images/logo-compact.png" alt=""></span>
                    <span class="brand-title">
                        <h4>KMS Application </h4>
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">    
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-left">
                    <div class="input-group icons">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i class="mdi mdi-magnify"></i></span>
                        </div>
                        <input type="search" class="form-control" placeholder="Search Dashboard" aria-label="Search Dashboard">
                        <div class="drop-down animated flipInX d-md-none">
                            <form action="#">
                                <input type="text" class="form-control" placeholder="Search">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons dropdown"><a href="javascript:void(0)" data-toggle="dropdown">
                                <i class="mdi mdi-email-outline"></i>
                                <span class="badge badge-pill gradient-1">3</span>
                            </a>
                        </li>
                        <li class="icons dropdown"><a href="javascript:void(0)" data-toggle="dropdown">
                                <i class="mdi mdi-bell-outline"></i>
                                <span class="badge badge-pill gradient-2">3</span>
                            </a>
                        </li>
                        <li class="icons dropdown d-none d-md-flex">
                            <a href="javascript:void(0)" class="log-user">
                                <span><?php echo e(auth()->user()->name); ?></span><i aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="themes/images/user/coba2.png" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="icon-user"></i> <span>Profile</span></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <i class="icon-envelope-open"></i> <span>Inbox</span> <div class="badge gradient-3 badge-pill gradient-1">3</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/changepassword">
                                                <i class="icon-lock"></i> <span>Change Password</span>
                                            </a>
                                        </li>
                                        
                                        <hr class="my-2">
                                        <li><a href="/logout"><i class="icon-key"></i> <span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end 
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li>
                        <a href="/dashboard" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                    </li>

                    <?php if(auth()->user()->role=='admin'): ?>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-database"></i><span class="nav-text">Master</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="/bidang">Bidang</a></li>
                            <li><a href="/seksi">Seksi</a></li>
                            <li><a href="/pegawai">Pegawai</a></li>
                        </ul>
                    </li>
                    <?php endif; ?>
                    
                    <li>
                        <a href="/konten" aria-expanded="false">
                            <i class="fa fa-clipboard"></i><span class="nav-text">Konten</span>
                        </a>
                    </li>

                     


                    
                   

                    

                <li class="nav-label">Tools</li>
                <li>
                    <a href="/" aria-expanded="false">
                        <i class="fa fa-home"></i><span class="nav-text">Home</span>
                    </a>
                </li>
                <li>
                    <a href="/logout" aria-expanded="false">
                        <i class="fa fa-sign-out"></i><span class="nav-text">Logout</span>
                    </a>
                </li>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
       
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <?php echo $__env->yieldContent('container'); ?>
           
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Knowledge Management System Application | Dinas Komunikasi dan Informatika Provinsi Jawa Timur</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="themes/plugins/common/common.min.js"></script>
    <script src="themes/js/custom.min.js"></script>
    <script src="themes/js/settings.js"></script>
    <script src="themes/js/gleek.js"></script>
    <script src="themes/js/styleSwitcher.js"></script>

    <!-- Chartjs -->
    <script src="themes/plugins/chart.js/Chart.bundle.min.js"></script>
    <!-- Circle progress -->
    <script src="themes/plugins/circle-progress/circle-progress.min.js"></script>
    <!-- Datamap -->
    <script src="themes/plugins/d3v3/index.js"></script>
    <script src="themes/plugins/topojson/topojson.min.js"></script>
    <script src="themes/plugins/datamaps/datamaps.world.min.js"></script>
    <!-- Morrisjs -->
    <script src="themes/plugins/raphael/raphael.min.js"></script>
    <script src="themes/plugins/morris/morris.min.js"></script>
    <!-- Pignose Calender -->
    <script src="themes/plugins/moment/moment.min.js"></script>
    <script src="themes/plugins/pg-calendar/js/pignose.calendar.min.js"></script>
    <!-- ChartistJS -->
    <script src="themes/plugins/chartist/js/chartist.min.js"></script>
    <script src="themes/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>



    <script src="themes/js/dashboard/dashboard-1.js"></script>

</body>

</html><?php /**PATH C:\xampp\htdocs\PKL\resources\views/main.blade.php ENDPATH**/ ?>