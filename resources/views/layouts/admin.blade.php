<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>@yield('title', 'undefined') | Dystopia Admin</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('backend/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/plugins/font-awesome/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/plugins/toastr/toastr.min.css') }}" rel="stylesheet">


    <!-- Theme Styles -->
    <link href="{{ asset('backend/css/lime.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/custom.css') }}" rel="stylesheet">
</head>

<body>
    <div class='loader'>
        <div class='spinner-grow text-primary' role='status'>
            <span class='sr-only'>Loading...</span>
        </div>
    </div>

    <div class="lime-sidebar">
        <div class="lime-sidebar-inner slimscroll">
            <ul class="accordion-menu">
                <li class="sidebar-title">
                    Apps
                </li>
                <li>
                    <a href="index.html" class="active"><i class="material-icons">dashboard</i>Dashboard</a>
                </li>
                <li>
                    <a href="#"><i class="material-icons">bookmark_border</i>Documentation</a>
                </li>
                <li>
                    <a href="#"><i class="material-icons">access_time</i>Change Log</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="lime-header">
        <nav class="navbar navbar-expand-lg">
            <section class="material-design-hamburger navigation-toggle">
                <a href="javascript:void(0)" class="button-collapse material-design-hamburger__icon">
                    <span class="material-design-hamburger__layer"></span>
                </a>
            </section>
            <a class="navbar-brand" href="#">Dystopia</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="material-icons">keyboard_arrow_down</i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="form-inline my-2 my-lg-0 search" id="search">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search for projects, apps, pages..."
                        aria-label="Search">
                </form>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">person</i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a class="dropdown-item" href="#">Account</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li class="divider"></li>
                            <li><a class="dropdown-item" href="#">Log Out</a></li>

                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="lime-container">
        <div class="lime-body">
            <div class="container">
                @yield('content')
            </div>
        </div>
    </div>


    <!-- Javascripts -->
    <script src="{{ asset('backend/plugins/jquery/jquery-3.1.0.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/chartjs/chart.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('backend/js/lime.min.js') }}"></script>
    <script src="{{ asset('backend/js/pages/dashboard.js') }}"></script>
</body>

</html>
