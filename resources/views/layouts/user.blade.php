<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }} - Utilisateur - {{ pageTitle($title) }}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet"
        href="{{ asset('public/plugins/adminlte2.4.18/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="{{ asset('public/plugins/adminlte2.4.18/bower_components/font-awesome/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet"
        href="{{ asset('public/plugins/adminlte2.4.18/bower_components/Ionicons/css/ionicons.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('public/plugins/adminlte2.4.18/dist/css/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('public/plugins/adminlte2.4.18/dist/css/skins/_all-skins.min.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <link rel="icon" href="{{ asset('public/favicon.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/favicon.ico') }}">
    <link rel="icon" type="image/png" href="{{ asset('public/favicon.png') }}">

    @livewireStyles
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        @livewire('user.header')

        @livewire('user.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @livewire('user.breadcrumb', ['title' => $title])

            <!-- Main content -->
            <section class="content">

                <div class="row">
                    <div class="col-lg-12">
                        @include("layouts.partials._validation_errors")
                    </div>
                </div>

                @yield('body')

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        
        @livewire('user.footer')

        @livewire('user.control')
        
        <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="{{ asset('public/plugins/adminlte2.4.18/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{ asset('public/plugins/adminlte2.4.18/bower_components/bootstrap/dist/js/bootstrap.min.js') }}">
    </script>
    <!-- SlimScroll -->
    <script
        src="{{ asset('public/plugins/adminlte2.4.18/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}">
    </script>
    <!-- FastClick -->
    <script src="{{ asset('public/plugins/adminlte2.4.18/bower_components/fastclick/lib/fastclick.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('public/plugins/adminlte2.4.18/dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('public/plugins/adminlte2.4.18/dist/js/demo.js') }}"></script>
    <script>
    $(document).ready(function() {
        $('.sidebar-menu').tree()
    })
    </script>

    @livewireScripts
</body>

</html>