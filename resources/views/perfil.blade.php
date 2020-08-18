@extends('layouts.app')

@section('content')

    <div class="container">
        <!-- Card -->
        <div class="card testimonial-card">

            <!-- Background color -->
            <div class="card-up indigo lighten-1"></div>

            <!-- Avatar -->
            <div class="avatar mx-auto white">
                <img src="{{ url('img/sem_foto2.jpg') }}" id="perfil" class="rounded-circle" alt="woman avatar">
            </div>

            <!-- Content -->
            <div class="card-body">
                <!-- Name -->
                <hr>
                <!-- Card -->
                <div class="card">
                    <!-- Card body -->
                    <div class="card-body">
                        @if (!empty($mensagem))
                            @if ($mensagem == 'error')
                                <div id="msg" class="alert alert-error">
                                    <p>Erro, Verifique o Formulario</p>
                                </div>
                            @else
                                <div id="msg" class="alert alert-success">
                                    <p>Seus Dados Foram Alterados com Sucesso.</p>
                                </div>
                            @endif
                        @endif

                        <!-- Material form register -->
                        <form method="POST" action="{{ route('perfil.update', $user->id) }}">
                            {{ method_field('PUT') }}
                            {{ csrf_field() }}
                            <!-- Material input text -->
                            <div class="md-form">
                                <i class="fa fa-user prefix grey-text"></i>
                                <input type="text" id="nome" required name="nome" class="form-control"
                                    value="{{ $user->name }}">
                                <label for="nome" class="font-weight-light">Seu Nome</label>
                            </div>

                            <!-- Material input text -->
                            <div class="md-form">
                                <i class="fa fa-at prefix grey-text"></i>
                                <input type="text" id="email" required name="email" class="form-control"
                                    value="{{ $user->email }}">
                                <label for="email" class="font-weight-light">Seu Email</label>
                            </div>

                            <!-- Material input document -->
                            <div class="md-form">
                                <i class="fa fa-id-card prefix grey-text"></i>
                                <input type="text" id="documento" required name="documento" class="form-control"
                                    value="{{ $user->documento }}">
                                <label for="documento" class="font-weight-light">Seu Documento</label>
                            </div>

                            <!-- Material input password -->
                            <div class="md-form">
                                <i class="fa fa-lock prefix grey-text"></i>
                                <input type="password" id="senha" name="senha" class="form-control" value="">
                                <label for="senha" class="font-weight-light">Sua Senha</label>
                            </div>

                            <div class="text-center py-4 mt-3">
                                <button class="btn btn-primary" name="update-usuario" type="submit">Registrar</button>
                            </div>
                        </form>
                        <!-- Material form register -->

                    </div>
                    <!-- Card -->
                </div>
            </div>
            <!-- Card -->
        </div>
    </div>

@endsection
