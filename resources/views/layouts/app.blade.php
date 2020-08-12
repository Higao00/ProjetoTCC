<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="theme-color" content="#ff2e17">
    <title>Esporte Para Todos</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/sweetalert2.min.css">
    <link href="css/dropzone.min.css" rel="stylesheet" />

    <style>
        .suspenso {
            display: none !important;
        }

        form#form_principal {
            margin: 2% !important;
            margin-left: 0px !important;
            margin-right: 0px !important;
        }

        .bold-1 {
            font-weight: 500;
        }

        .list-group-item.active {
            background-color: #e64a19 !important;
            border-color: #e64a19 !important;
        }
    </style>

    <style>
        .form-dark .font-small {
            font-size: 0.8rem;
        }

        .form-dark .md-form label {
            color: #fff;
        }

        .form-dark input[type=email]:focus:not([readonly]) {
            border-bottom: 1px solid #FF8C00;
            -webkit-box-shadow: 0 1px 0 0 #FF8C00;
            box-shadow: 0 1px 0 0 #FF8C00;
        }

        .form-dark input[type=email]:focus:not([readonly])+label {
            color: #fff;
        }

        .form-dark input[type=password]:focus:not([readonly]) {
            border-bottom: 1px solid #FF8C00;
            -webkit-box-shadow: 0 1px 0 0 #FF8C00;
            box-shadow: 0 1px 0 0 #FF8C00;
        }

        .form-dark input[type=password]:focus:not([readonly])+label {
            color: #fff;
        }

        .form-dark .modal-header {
            border-bottom: none;
        }

        .form-dark .font-small {
            font-size: 0.8rem;
        }

        .form-dark .md-form label {
            color: #fff;
        }

        .form-dark input[type=email]:focus:not([readonly]) {
            border-bottom: 1px solid #FF8C00;
            -webkit-box-shadow: 0 1px 0 0 #FF8C00;
            box-shadow: 0 1px 0 0 #FF8C00;
        }

        .form-dark input[type=email]:focus:not([readonly])+label {
            color: #fff;
        }

        .form-dark input[type=password]:focus:not([readonly]) {
            border-bottom: 1px solid #FF8C00;
            -webkit-box-shadow: 0 1px 0 0 #FF8C00;
            box-shadow: 0 1px 0 0 #FF8C00;
        }

        .form-dark input[type=password]:focus:not([readonly])+label {
            color: #fff;
        }

        .form-dark .modal-header {
            border-bottom: none;
        }

        #paises {
            background-color: #ffde75;
            overflow-y: scroll;
            max-height: 400px;
        }

        img#logo {
            width: 100% !important;
        }

        .modal-dialog.modal-notify.modal-info .fab,
        .modal-dialog.modal-notify.modal-info .far,
        .modal-dialog.modal-notify.modal-info .fas {
            color: rgb(255, 46, 23);
        }

        .modal-dialog.modal-notify.modal-info .badge,
        .modal-dialog.modal-notify.modal-info .modal-header {
            background-color: rgb(255, 46, 23);
        }

        a.list-group-item {
            font-size: 17px !important;
            font-weight: bold;
        }

        /*Botao Flutuante*/
        .fab {
            display: none;
            position: fixed;
            bottom: 10px;
            right: 10px;
            z-index: 2;
        }

        .fab button {
            cursor: pointer;
            width: 48px;
            height: 48px;
            border-radius: 30px;
            background-color: #cb60b3;
            border: none;
            box-shadow: 0 1px 5px rgba(0, 0, 0, .4);
            font-size: 24px;
            color: white;

            -webkit-transition: .2s ease-out;
            -moz-transition: .2s ease-out;
            transition: .2s ease-out;
        }

        .fab button.main {
            position: absolute;
            width: 60px;
            height: 60px;
            border-radius: 30px;
            background-color: #b30000;
            right: 0;
            bottom: 0;
        }

        .fab button.main:before {
            content: '+';
        }

        img#icon-mobile {
            display: none;
        }

        strong#titulo-mobile {
            font-size: 20px !important;
            font-weight: bold !important;
            text-transform: uppercase !important;
        }

        .list-group-item {
            color: #000;
        }

        li.ativo {
            border-radius: 5px !important;
            background: #F84A35 !important;
        }

        li.ativo>a {
            color: #FFF !important;
        }

        main {
            padding-top: 5% !important;
            padding-bottom: 3% !important;
        }
    </style>

    <style type="text/css">
        @media only screen and (max-width: 450px) {
            p#icon_fade_mobile {
                display: none;
            }

            .suspenso {
                display: inline-block !important;
            }

            .fab {
                display: block !important;
            }

            img#icon-mobile {
                display: inline-block !important;
            }

            main {
                padding-top: 25% !important;
                padding-bottom: 5% !important;
            }
        }
    </style>
</head>

<body class="grey lighten-3">
    <!--Main Navigation-->
    <header>
        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
            <div class="container-fluid">

                <a class="navbar-brand waves-effect" style="margin: 0px !important;" href="#">
                    <img src="img/favicon.jpg" style="width: 45px;" id="icon-mobile">
                    <strong class="bold-1" style="color: #ca0303;" id="titulo-mobile">Esporte Para Todos</strong>
                </a>

                <!-- Collapse -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Links -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="home.php" class="nav-link waves-effect bold-1 suspenso">
                                <i class="fas fa-home mr-3 suspenso"></i>Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="lista_receita.php?tipo=top_receita" class="nav-link waves-effect bold-1">
                                <i class="fas fa-star mr-3 suspenso"></i>As Mais Avaliadas
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a href="lista_receita.php?tipo=self" class="nav-link waves-effect bold-1">
                                <i class="fas fa-book-open mr-3 suspenso"></i>Melhor Custo Beneficio
                            </a>
                        </li>

                        @if(auth()->check())
                        <li class="nav-item suspenso">
                            <a href="lista_receita.php?tipo=favoritas" class="nav-link waves-effect bold-1">
                                <i class="fas fa-star mr-3"></i>Favoritas
                            </a>
                        </li>

                        <li class="nav-item suspenso">
                            <a href="perfil.php" class="nav-link waves-effect bold-1">
                                <i class="fas fa-user mr-3"></i>Perfil
                            </a>
                        </li>
                        @endif

                        @if(!auth()->check())
                        <li class="nav-item suspenso">
                            <a href="" class="nav-link waves-effect bold-1"><i class="fas fa-user-plus mr-3"></i>Cadastrar-se
                            </a>
                        </li>

                        <li class="nav-item suspenso">
                            <a href="" class="nav-link waves-effect bold-1"><i class="fas fa-user-plus mr-3"></i>Cadastre-se Como Parceiros
                            </a>
                        </li>

                        <li class="nav-item suspenso">
                            <a href="" class="nav-link waves-effect bold-1"><i class="fas fa-sign-in-alt mr-3"></i>Fazer
                                Login
                            </a>
                        </li>
                        @endif

                        @if(auth()->check())
                        <li class="nav-item suspenso">
                            <a href="#" class="nav-link waves-effect bold-1">
                                <i class="fas fa-sign-out-alt mr-3"></i>Sair
                            </a>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar -->

        <!-- Sidebar -->
        <div class="sidebar-fixed position-fixed">

            <img src="img/logo.jpg" id="logo" onclick="window.location='home.php'">

            <div class="list-group list-group-flush">

                <a href="home.php" class="list-group-item list-group-item-action waves-effect">
                    <i class="fas fa-home mr-3"></i>Home</a>

                @if(auth()->check())
                <a href="lista_receita.php?tipo=favoritas" class="list-group-item list-group-item-action waves-effect">
                    <i class="fas fa-star mr-3"></i>Favoritas
                </a>

                <a href="perfil.php" class="list-group-item list-group-item-action waves-effect">
                    <i class="fas fa-user mr-3"></i>Perfil
                </a>
                @endif

                @if(!auth()->check())

                <a href="" class="list-group-item list-group-item-action waves-effect" data-toggle="modal" data-target="#cadastro"><i class="fas fa-user-plus mr-3"></i>Cadastrar-se
                </a>

                <a href="" class="list-group-item list-group-item-action waves-effect" data-toggle="modal" data-target="#cadastro"><i class="fas fa-user-plus mr-3"></i>Cadastre-se Como Parceiros
                </a>

                <a href="" class="list-group-item list-group-item-action waves-effect" data-toggle="modal" data-target="#login"><i class="fas fa-sign-in-alt mr-3"></i>Fazer Login
                </a>
                @endif

                @if(auth()->check())
                <a href="#" class="list-group-item list-group-item-action waves-effect" data-toggle="modal" data-target="#sair">
                    <i class="fas fa-sign-out-alt mr-3"></i>Sair
                </a>
                @endif
            </div>

        </div>
        <!-- Sidebar -->
    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main class="mx-lg-5">
        @yield('content')
        
        <div class="modal fade" id="cadastro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria="true">
            <div class="modal-dialog" role="document">
                <!--Content-->
                <div class="modal-content">
                    <!--Header-->
                    <div class="modal-header text-center pb-4">
                        <h3 class="modal-title w-100 font-weight-bold" id="myModalLabel">
                            Cadastre-se</h3>
                        <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                            <span aria="true">&times;</span>
                        </button>
                    </div>
                    <!--Body-->
                    <div class="modal-body">
                        <!--Body-->

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome Completo') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Documento (CPF/CNPJ)') }}</label>

                                <div class="col-md-6">
                                    <input id="documento" type="text" class="form-control @error('documento') is-invalid @enderror" name="documento" value="{{ old('documento') }}" required autocomplete="documento" autofocus>

                                    @error('documento')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirme sua Senha') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Cadatrar') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!--/.Content-->
            </div>
        </div>

        <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria="true">
            <div class="modal-dialog" role="document">
                <!--Content-->
                <div class="modal-content">
                    <!--Header-->
                    <div class="modal-header text-center pb-4">
                        <h3 class="modal-title w-100 font-weight-bold" id="myModalLabel">
                            Fazer Login</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria="true">&times;</span>
                        </button>
                    </div>
                    <!--Body-->
                    <div class="modal-body">
                        <!--Body-->
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Lembre-me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    <!-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Esqueceu sua Senha?') }}
                                    </a>
                                    @endif -->
                                </div>
                            </div>
                        </form>
                        <!--Grid row-->
                    </div>
                </div>
                <!--/.Content-->
            </div>
        </div>

        <div class="modal fade top" id="sair" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria="true" data-backdrop="true">
            <div class="modal-dialog modal-notify modal-info" role="document">
                <!--Content-->
                <div class="modal-content" align="center">
                    <!--Body-->
                    <div class="modal-body">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf

                            <p class="pt-3 pr-2" style="font-size: 18px; text-transform: uppercase; font-weight: bold; color: #000;">
                                <i class="fas fa-sign-out-alt" style="color: #000!important;"></i> Deseja sair da
                                sua conta ?</p>

                            <button type="button" class="btn btn-success" data-dismiss="modal" aria-label="Close">Não</button>
                            <a class="btn btn-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Sim') }}
                            </a>
                        </form>

                    </div>
                </div>
                <!--/.Content-->
            </div>
        </div>
    </main>

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script src="js/sweetalert2.min.js"></script>
    <script src="js/dropzone.min.js"></script>

    <script src="js/main.js"></script>
</body>

</html>