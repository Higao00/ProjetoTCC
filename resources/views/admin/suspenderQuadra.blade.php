@extends('layouts.app')

@section('content')
    <div class="card testimonial-card" style="margin-top: 4%;">
        <div class="table-responsive">
            @if (!empty($mensagem))
                @if ($mensagem == 'error')
                    <div id="msg" class="alert alert-error">
                        <p>Erro, Quadra não foi suspensa.</p>
                    </div>
                @else
                    <div id="msg" class="alert alert-success">
                        <p>A Quadra Foi Suspensa Com Sucesso.</p>
                    </div>
                @endif
            @endif
            <table class="table">
                <thead class="black white-text">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">TITULO</th>
                        <th scope="col">ENDEREÇO</th>
                        <th scope="col">USUARIO</th>
                        <th scope="col">STATUS</th>
                        <th scope="col">SUSPENDER</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < count($quadras); $i++)
                        <tr>
                            {{-- {{ $id_quadra = $quadras[$i]['id'] }} --}}
                            <th> {{ $quadras[$i]['id']}}</th>
                            <th> {{ $quadras[$i]['titulo'] }}</th>
                            <th> {{ $quadras[$i]['nome_quadra'] }}</th>
                            <th> {{ $quadras[$i]['owner_id'] }}</th>
                            <th> {{ $quadras[$i]['status'] }}</th>

                            <th> <a href="{{ route('suspenderQuadra.edit', $quadras[$i]['id']) }}"><i
                                        class="far fa-times-circle fa-2x"></i></a></th>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
@endsection
