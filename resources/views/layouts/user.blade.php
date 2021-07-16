<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }} - Utilisateur - {{ $title ?? 'Laravel' }}</title>
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
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="{{ route('page.index') }}" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>A</b>RT</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>AVIV'</b>ART</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="{{ route('user.index') }}" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="{{ Auth::user()->image->link }}" class="user-image" alt="User Image"
                                    width="160" height="160">
                                <span class="hidden-xs">{{ Auth::user()->username }}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="{{ Auth::user()->image->link }}" class="img-circle" alt="User Image"
                                        width="160" height="160">

                                    <p>
                                        {{ Auth::user()->fullName() }} - {{ Auth::user()->userType->name }}
                                        <small>Membre depuis {{ Auth::user()->image->created }}</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="row">
                                        <div class="col-xs-4 text-center">
                                            <a href="{{ route('user.orders') }}"><i class="fa fa-shopping-cart"></i></a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="{{ route('user.favorite_products') }}"><i
                                                    class="fa fa-star"></i></a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="{{ route('user.transactions') }}"><i class="fa fa-refresh"></i></a>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="{{ route('user.show', array('user' => Auth::user())) }}"
                                            class="btn btn-default btn-flat">Profil</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="{{ route('page.logout') }}"
                                            class="btn btn-default btn-flat">Déconnexion</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                        <li>
                            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="{{ Auth::user()->image->link }}" class="img-circle" alt="User Image" width="160"
                            height="160">
                    </div>
                    <div class="pull-left info">
                        <p>+{{ Auth::user()->longPhone() }}</p>
                        <a href="{{ route('user.show', array('user' => Auth::user())) }}"><i
                                class="fa fa-calendar text-success"></i> {{ Auth::user()->last_login }}</a>
                    </div>
                </div>

                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li>
                        <a href="{{ route('page.index') }}">
                            <i class="fa fa-home"></i> <span>Accueil</span>
                        </a>
                    </li>

                    <li class="active">
                        <a href="{{ route('user.index') }}">
                            <i class="fa fa-dashboard"></i> <span>Tableau de bord</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('user.orders') }}">
                            <i class="fa fa-shopping-cart"></i> <span>Mes commandes</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('user.favorite_products') }}">
                            <i class="fa fa-star"></i> <span>Mes produits favoris</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('user.transactions') }}">
                            <i class="fa fa-refresh"></i> <span>Mes transactions</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('user.payments') }}">
                            <i class="fa fa-money"></i> <span>Mes payements</span>
                        </a>
                    </li>

                    <li class="treeview">
                        <a href="{{ route('user.index') }}">
                            <i class="fa fa-user-o"></i> <span>{{ Auth::user()->email }}</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('user.show', array('user' => Auth::user())) }}"><i
                                        class="fa fa-user"></i> Profil</a></li>
                            <li><a href="{{ route('user.edit', array('user' => Auth::user())) }}"><i
                                        class="fa fa-pencil"></i> Edition</a></li>
                            <li><a href="{{ route('page.logout') }}"><i class="fa fa-lock"></i> Déconnexion</a></li>
                        </ul>
                    </li>

                    <li><a href="{{ route('settings.index') }}"><i class="fa fa-cog"></i> <span>Parametres</span></a>
                    </li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1> {{ $title ?? 'Laravel' }}</h1>
                <ol class="breadcrumb">
                    <li><a href="{{ route('page.index') }}"><i class="fa fa-home"></i> Accueil</a></li>
                    <li><a href="{{ route('user.index') }}"><i class="fa fa-dashboard"></i> Tableau de bord</a></li>
                    <li class="active">{{ $title ?? 'Laravel' }}</li>
                </ol>
            </section>

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
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <a href="{{ route('contact.index') }}" target="_blank">Contactez-nous</a>
            </div>
            <strong>Copyright &copy; {{ date('Y') }} <a href="#">AVIV'ART</a>.</strong> Tous Droits Réservés.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark" style="display: none;">
            <!-- Create the tabs -->
            <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
                <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <!-- Home tab content -->
                <div class="tab-pane" id="control-sidebar-home-tab">

                </div>
                <!-- /.tab-pane -->
                <!-- Stats tab content -->
                <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                <!-- /.tab-pane -->
                <!-- Settings tab content -->
                <div class="tab-pane" id="control-sidebar-settings-tab">

                </div>
                <!-- /.tab-pane -->
            </div>
        </aside>
        <!-- /.control-sidebar -->
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
</body>

</html>