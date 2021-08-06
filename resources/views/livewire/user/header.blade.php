<section>
    @livewire('user.nav')
    
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
                                <img src="{{ auth()->user()->image->link }}" class="user-image" alt="User Image"
                                    width="160" height="160">
                                <span class="hidden-xs">{{ auth()->user()->username }}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="{{ auth()->user()->image->link }}" class="img-circle" alt="User Image"
                                        width="160" height="160">
                                    <p>
                                        {{ auth()->user()->fullName() }} - {{ auth()->user()->userType->name }}
                                        <small>Membre depuis {{ auth()->user()->image->created }}</small>
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
                                        <a href="{{ route('user.show', array('user' => auth()->id())) }}"
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
</section>