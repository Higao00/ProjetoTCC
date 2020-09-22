@extends('layouts.app')

@section('content')
    <div class="card mx-xl-5" style="margin-top: 1%;">
        @if (!empty($mensagem))
            @if ($mensagem == 'error')
                <div id="msg" class="alert alert-error">
                    <p>Erro, Contate o Administrador.</p>
                </div>
            @else
                <div id="msg" class="alert alert-success">
                    <p>Sucesso Os Dados Foram Salvos.</p>
                </div>
            @endif
        @endif

        @if (!empty($todas))
            <div class="card-body">
                <form action="{{ route('storeQuadra.update', $todas[0]['id']) }}" id="form-quadra" class="form-quadra" method="POST">
                    @csrf
                    @method('PUT')
                    <p class="h4 text-center py-4">EDITAR SUA QUADRA</p>

                    <div class="form-quadra">

                        <label for="nomeQuadra" class="black-text font-weight-light">NOME DA QUADRA</label>
                        <input type="text" id="nomeQuadra" name="titulo" class="form-control"
                            value="{{ $todas[0]['titulo'] }}">
                        <br>

                        <label for="campoCep" class="black-text font-weight-light">CEP</label>
                        <input type="text" id="campoCep" name="cep" class="form-control" value="{{ $todas[0]['cep'] }}">
                        <br>

                        <label for="campoLogradouro" class="black-text font-weight-light">RUA</label>
                        <input type="text" id="campoLogradouro" name="rua" class="form-control"
                            value="{{ $todas[0]['rua'] }}">
                        <br>

                        <label for="campoBairro" class="black-text font-weight-light">BAIRRO</label>
                        <input type="text" id="campoBairro" name="bairro" class="form-control"
                            value="{{ $todas[0]['bairro'] }}">
                        <br>

                        <label for="campoCidade" class="black-text font-weight-light">CIDADE</label>
                        <input type="text" id="campoCidade" name="cidade" class="form-control"
                            value="{{ $todas[0]['cidade'] }}">
                        <br>

                        <label for="campoEstado" class="black-text font-weight-light">ESTADO</label>
                        <input type="text" id="campoEstado" name="estado" class="form-control"
                            value="{{ $todas[0]['estado'] }}">
                        <br>

                        <label for="campoComplemento" class="black-text font-weight-light">COMPLEMENTO</label>
                        <input type="text" id="campoComplemento" name="complemento" class="form-control"
                            value="{{ $todas[0]['complemento'] }}">
                        <br>

                        <label for="campoNumero" class="black-text font-weight-light">NUMERO</label>
                        <input type="number" id="campoNumero" name="numero" class="form-control"
                            value="{{ $todas[0]['numero'] }}">
                        <br>

                        <label for="valorAluguel" class="black-text font-weight-light">VALOR ALUGUEL / HORA</label>
                        <input type="text" id="valorAluguel" name="valorHora" class="form-control"
                            value="{{ $todas[0]['valorHora'] }}">
                        <br>

                </form>
            </div>

        @else
            <div class="card-body">
                <form action="{{ route('storeQuadra.store') }}" class="form-quadra" id="form-quadra" method="POST">
                    @csrf
                    <p class="h4 text-center py-4">CADASTRO DA SUA QUADRA</p>

                    <div style="display: none;" class="form-quadra">

                    </div>
                    <div class="form-group">
                        <label for="nomeQuadra" class="black-text font-weight-light">NOME DA QUADRA</label>
                        <input type="text" id="nomeQuadra" name="titulo" class="form-control" required>
                    </div>


                    <label for="campoCep" class="black-text font-weight-light">CEP</label>
                    <input type="text" id="campoCep" name="cep" class="form-control" required>
                    <br>

                    <label for="campoLogradouro" class="black-text font-weight-light">RUA</label>
                    <input type="text" id="campoLogradouro" name="rua" class="form-control" required>
                    <br>

                    <label for="campoBairro" class="black-text font-weight-light">BAIRRO</label>
                    <input type="text" id="campoBairro" name="bairro" class="form-control" required>
                    <br>

                    <label for="campoCidade" class="black-text font-weight-light">CIDADE</label>
                    <input type="text" id="campoCidade" name="cidade" class="form-control" required>
                    <br>

                    <label for="campoEstado" class="black-text font-weight-light">ESTADO</label>
                    <input type="text" id="campoEstado" name="estado" class="form-control" required>
                    <br>

                    <label for="campoComplemento" class="black-text font-weight-light">COMPLEMENTO</label>
                    <input type="text" id="campoComplemento" name="complemento" class="form-control" required>
                    <br>

                    <label for="campoNumero" class="black-text font-weight-light">NUMERO</label>
                    <input type="number" id="campoNumero" name="numero" class="form-control" required>
                    <br>

                    <label for="valorAluguel" class="black-text font-weight-light">VALOR ALUGUEL / HORA</label>
                    <input type="text" id="valorAluguel" name="valorHora" class="form-control" required>

                </form>

                @include('dropzone')
            </div>

        @endif

        <div class="text-center py-4 mt-3">
            <button class="btn btn-outline-primary waves-effect" type="submit" form="form-quadra">CADASTRAR</button>
        </div>
    </div>
@endsection
