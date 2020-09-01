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
                        <th scope="col">ID</th>
                        <th scope="col">TITULO</th>
                        <th scope="col">ENDEREÇO</th>
                        <th scope="col">USUARIO</th>
                        <th scope="col">STATUS</th>
                        <th scope="col">SUSPENDER</th>
                        <th scope="col">ATIVAR</th>

                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < count($quadras); $i++)

                        @if ($quadras[$i]['status'] == 0)
                            <tr style="background-color:  #ffcccc">
                                <th> {{ $quadras[$i]['id'] }}</th>
                                <th> {{ $quadras[$i]['titulo'] }}</th>
                                <th> {{ $quadras[$i]['nome_quadra'] }}</th>
                                <th> {{ $quadras[$i]['owner_id'] }}</th>
                                <th> {{ $quadras[$i]['status'] }}</th>

                                <th> <a href="{{ route('suspenderQuadra.edit', $quadras[$i]['id']) }}"><i
                                            style="color: #f0010c" class="fas fa-times fa-2x"></a></th>
                                <th> <a href="{{ route('suspenderQuadra.edit', $quadras[$i]['id']) }}"><i
                                            style="color: #4ee44e" class="fas fa-check fa-2x"></i></a></th>
                            </tr>
                        @else
                            <tr style="background-color: #ddffcc">
                                <th> {{ $quadras[$i]['id'] }}</th>
                                <th> {{ $quadras[$i]['titulo'] }}</th>
                                <th> {{ $quadras[$i]['nome_quadra'] }}</th>
                                <th> {{ $quadras[$i]['owner_id'] }}</th>
                                <th> {{ $quadras[$i]['status'] }}</th>

                                <th> <a href="{{ route('suspenderQuadra.edit', $quadras[$i]['id']) }}"><i
                                            style="color: #f0010c" class="fas fa-times fa-2x"></a></th>
                                <th> <a href="{{ route('suspenderQuadra.edit', $quadras[$i]['id']) }}"><i
                                            style="color: #4ee44e" class="fas fa-check fa-2x"></i></a></th>
                            </tr>
                        @endif
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
@endsection
