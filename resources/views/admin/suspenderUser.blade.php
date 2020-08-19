@extends('layouts.app')

@section('content')
    <div class="card testimonial-card" style="margin-top: 4%;">
        <div class="table-responsive">
            @if (!empty($mensagem))
                @if ($mensagem == 'error')
                    <div id="msg" class="alert alert-error">
                        <p>Erro, Usuario não foi suspenso.</p>
                    </div>
                @else
                    <div id="msg" class="alert alert-success">
                        <p>Usuario Suspenso Com Sucesso.</p>
                    </div>
                @endif
            @endif
            <table class="table">
                <thead class="black white-text">
                    <tr>
                        <th scope="col">NOME</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">STATUS</th>
                        <th scope="col">PERMISÂO</th>
                        <th scope="col">SUSPENDER</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th> {{ $user->name }}</th>
                            <th> {{ $user->email }}</th>
                            <th> {{ $user->status }}</th>
                            <th> {{ $user->permissao }}</th>
                            <th> <a href="{{ route('suspenderUser.edit', $user->id) }}"><i
                                        class="far fa-times-circle fa-2x"></i></a></th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
