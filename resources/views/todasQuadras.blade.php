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
                        <th scope="col">TITULO</th>
                        <th scope="col">ENDEREÇO</th>
                        <th scope="col">VALOR</th>
                        <th scope="col">ALTERAR</th>
                        <th scope="col">DELATAR</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($todas as $quadra)
                        <tr>
                            <th> {{ $quadra['titulo'] }}</th>
                            <th> {{ $quadra['endereco'] }}</th>
                            <th> {{ $quadra['valorHora'] }}</th>
                            <th>
                                <a href="{{ route('quadras.show', $quadra['id']) }}">
                                    <i style="color: #4285f4" class="fas fa-pencil-alt"></i>
                                </a>
                            </th>
                            <th>
                                <a href="{{ route('storeQuadra.destroy', $quadra['id']) }}">
                                    <i style="color: #f0010c" class="far fa-trash-alt"></i>
                                </a>
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
