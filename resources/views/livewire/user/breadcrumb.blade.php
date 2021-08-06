<!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>{{ pageTitle($title) }}</h1>
                <ol class="breadcrumb">
                    <li><a href="{{ route('page.index') }}"><i class="fa fa-home"></i> Accueil</a></li>
                    <li><a href="{{ route('user.index') }}"><i class="fa fa-dashboard"></i> Tableau de bord</a></li>
                    <li class="active">{{ pageTitle($title) }}</li>
                </ol>
            </section>