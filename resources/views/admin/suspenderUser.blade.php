@extends('layouts.app')

@section('content')

    <div class="card testimonial-card" style="margin-top: 1%;">
        <div class="table-responsive">
            <table class="table">
                <thead class="black white-text">
                    @if (!empty($mensagem))
                        @if ($mensagem == 'error')
                            <div id="msg" class="alert alert-error">
                                <p>Erro, Contate o Administrador.</p>
                            </div>
                        @else
                            <div id="msg" class="alert alert-success">
                                <p>Sucesso Os Dados Foram Alterados.</p>
                            </div>
                        @endif
                    @endif
                    <tr>
                        <th scope="col">NOME</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">STATUS</th>
                        <th scope="col">PERMISÂO</th>
                        <th scope="col">SUSPENDER</th>
                        <th scope="col">ATIVAR</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        @if ($user->status == 0)
                            <tr style="background-color:  #ffcccc">
                                <th> {{ $user->name }}</th>
                                <th> {{ $user->email }}</th>
                                <th> {{ $user->status }}</th>
                                <th> {{ $user->permissao }}</th>
                                <th> <a href="{{ route('suspenderUser.edit', $user->id) }}"><i style="color: #f0010c"
                                            class="fas fa-times fa-2x"></i></a></th>
                                <th> <a href="{{ route('suspenderUser.edit', $user->id) }}"><i style="color: #4ee44e"
                                            class="fas fa-check fa-2x"></i></a></th>
                            </tr>

                        @else
                            <tr style="background-color: #ddffcc">
                                <th> {{ $user->name }}</th>
                                <th> {{ $user->email }}</th>
                                <th> {{ $user->status }}</th>
                                <th> {{ $user->permissao }}</th>
                                <th> <a href="{{ route('suspenderUser.edit', $user->id) }}"><i style="color: #f0010c"
                                            class="fas fa-times fa-2x"></i></a></th>
                                <th> <a href="{{ route('suspenderUser.edit', $user->id) }}"><i style="color: #4ee44e"
                                            class="fas fa-check fa-2x"></i></a></th>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
