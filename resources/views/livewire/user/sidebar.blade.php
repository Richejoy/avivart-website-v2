<!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="{{ auth()->user()->image->link }}" class="img-circle" alt="User Image" width="160" height="160">
                    </div>
                    <div class="pull-left info">
                        <p>+{{ auth()->user()->longPhone() }}</p>
                        <a href="{{ route('user.show', array('user' => auth()->id())) }}"><i
                                class="fa fa-calendar text-success"></i> {{ auth()->user()->last_login }}</a>
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

                    <li class="treeview">
                        <a href="{{ route('user.index') }}">
                            <i class="fa fa-shopping-basket"></i> <span>Produits</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="{{ route('user.orders') }}"><i class="fa fa-shopping-cart"></i> Mes commandes</a>
                            </li>
                            <li>
                                <a href="{{ route('user.favorite_products') }}"><i class="fa fa-star"></i> Mes produits favoris</a>
                            </li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="{{ route('user.index') }}">
                            <i class="fa fa-bullhorn"></i> <span>Annonces</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="{{ route('user.ads') }}"><i class="fa fa-bullhorn"></i> Mes annonces</a>
                            </li>
                            <li>
                                <a href="{{ route('user.favorite_ads') }}"><i class="fa fa-star"></i> Mes annonces favoris</a>
                            </li>
                        </ul>
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
                            <i class="fa fa-user-o"></i> <span>{{ auth()->user()->email }}</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('user.show', array('user' => auth()->id())) }}"><i
                                        class="fa fa-user"></i> Profil</a></li>
                            <li><a href="{{ route('user.edit', array('user' => auth()->id())) }}"><i
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