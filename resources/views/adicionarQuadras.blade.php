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
        <div class="card-body">
            <form action="{{ route('storeQuadra.store') }}" method="POST">
                @csrf
                <p class="h4 text-center py-4">CADASTRO DA SUA QUADRA</p>

                <label for="nomeQuadra" class="grey-text font-weight-light">NOME DA QUADRA</label>
                <input type="text" id="nomeQuadra" name="titulo" class="form-control">
                <br>

                <label for="campoCep" class="grey-text font-weight-light">CEP</label>
                <input type="text" id="campoCep" name="cep" class="form-control">
                <br>

                <label for="campoLogradouro" class="grey-text font-weight-light">RUA</label>
                <input type="text" id="campoLogradouro" name="rua" class="form-control">
                <br>

                <label for="campoBairro" class="grey-text font-weight-light">BAIRRO</label>
                <input type="text" id="campoBairro" name="bairro" class="form-control">
                <br>

                <label for="campoCidade" class="grey-text font-weight-light">CIDADE</label>
                <input type="text" id="campoCidade" name="cidade" class="form-control">
                <br>

                <label for="campoEstado" class="grey-text font-weight-light">ESTADO</label>
                <input type="text" id="campoEstado" name="estado" class="form-control">
                <br>

                <label for="campoComplemento" class="grey-text font-weight-light">COMPLEMENTO</label>
                <input type="text" id="campoComplemento" name="complemento" class="form-control">
                <br>

                <label for="campoNumero" class="grey-text font-weight-light">NUMERO</label>
                <input type="number" id="campoNumero" name="numero" class="form-control">
                <br>

                <label for="valorAluguel" class="grey-text font-weight-light">VALOR ALUGUEL / HORA</label>
                <input type="number" id="valorAluguel" name="valorHora" class="form-control">
                <br>

                <div class="text-center py-4 mt-3">
                    <button class="btn btn-outline-primary waves-effect" type="submit">CADASTRAR</button>
                </div>
            </form>
        </div>
    </div>
@endsection
