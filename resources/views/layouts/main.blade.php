<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>SIMIK MI ESA Al Muhajirin - @yield('title')</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset ('Template/images/favicon.png') }}">
    <!-- Pignose Calender -->
    <link href="{{ asset ('Template/plugins/pg-calendar/css/pignose.calendar.min.css') }}" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="{{ asset ('Template/plugins/chartist/css/chartist.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('Template/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css')}}">
    <!-- Table -->
    <link href="{{ asset('Template/plugins/tables/css/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="{{ asset('Template/css/style.css') }}" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3"
                    stroke-miterlimit="10" />
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

        @yield('header')
        @yield('sidebar')
        @yield('content')


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Madrasah Ibtidaiyah ESA Al Muhajirin
                    2022</p>
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
    <script src="{{ asset('Template/plugins/common/common.min.js') }}"></script>
    <script src="{{ asset('Template/js/custom.min.js') }}"></script>
    <script src="{{ asset('Template/js/settings.js') }}"></script>
    <script src="{{ asset('Template/js/gleek.js') }}"></script>
    <script src="{{ asset('Template/js/styleSwitcher.js') }}"></script>

    <!-- Chartjs -->
    <script src="{{ asset('Template/plugins/chart.js/Chart.bundle.min.js') }}"></script>
    <!-- Circle progress -->
    <script src="{{ asset('Template/plugins/circle-progress/circle-progress.min.js') }}"></script>
    <!-- Datamap -->
    <script src="{{ asset('Template/plugins/d3v3/index.js') }}"></script>
    <script src="{{ asset('Template/plugins/topojson/topojson.min.js') }}"></script>
    <script src="{{ asset('Template/plugins/datamaps/datamaps.world.min.js') }}"></script>
    <!-- Morrisjs -->
    <script src="{{ asset('Template/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('Template/plugins/morris/morris.min.js') }}"></script>
    <!-- Pignose Calender -->
    <script src="{{ asset('Template/plugins/moment/moment.min.js') }}"></script>
    <script src="
    {{ asset('Template/plugins/pg-calendar/js/pignose.calendar.min.js') }}"></script>
    <!-- ChartistJS -->
    <script src="{{ asset('Template/plugins/chartist/js/chartist.min.js') }}"></script>
    <script src="{{ asset('Template/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js') }}"></script>



    <script src="{{ asset('Template/js/dashboard/dashboard-1.js') }}"></script>

    <script src="{{ asset('Template/plugins/tables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('Template/plugins/tables/js/datatable/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('Template/plugins/tables/js/datatable-init/datatable-basic.min.js') }}"></script>

</body>

</html>
