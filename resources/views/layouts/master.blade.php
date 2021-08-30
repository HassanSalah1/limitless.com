<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image" href="{{asset('images/fav-icon.png')}}">

    <title>Limitless | Dashboard</title>

    @include('layouts.includes.dashboard.style')
    @include('layouts.includes.messages.style')
    <style>
        .swal-footer{
            text-align: center;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{asset('images/fav-icon.png')}}" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    @include('layouts.includes.dashboard.navbare')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
   @include('layouts.includes.dashboard.sidebare')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('content')
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2021 <a href="https://brandMark-corp.com">BrandMark-corp</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.1.0
        </div>
    </footer>
</div>
<!-- ./wrapper -->

@include('layouts.includes.dashboard.scripts')
@include('layouts.includes.messages.scripts')
@stack('js')
</body>
</html>
