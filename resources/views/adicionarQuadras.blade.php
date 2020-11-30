@extends('layouts.app')

@section('content')

    <style>
        .font-weight-light {
            font-weight: 600 !important;
        }

    </style>
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
                <form action="{{ route('storeQuadra.update', $todas[0]['id']) }}" id="form-quadra" class="form-quadra"
                    method="POST">
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
                    </div>
                    <label for="horarioFuncionamento" class="black-text font-weight-light">HORARIO DE
                        FUNCIONAMENTO</label>
                    <div class="row">
                        <div class="col-lg">
                            <select name="horaInicio" class="browser-default custom-select" required>
                                <option> <strong> HORARIO INICIO </strong></option>
                                <option value="0"  @if($todas[0]['hora_inicio'] == 0) selected @endif>00:00</option>
                                <option value="1"  @if($todas[0]['hora_inicio'] == 1) selected @endif>01:00</option>
                                <option value="2"  @if($todas[0]['hora_inicio'] == 2) selected @endif>02:00</option>
                                <option value="3"  @if($todas[0]['hora_inicio'] == 3) selected @endif>03:00</option>
                                <option value="4"  @if($todas[0]['hora_inicio'] == 4) selected @endif>04:00</option>
                                <option value="5"  @if($todas[0]['hora_inicio'] == 5) selected @endif>05:00</option>
                                <option value="6"  @if($todas[0]['hora_inicio'] == 6) selected @endif>06:00</option>
                                <option value="7"  @if($todas[0]['hora_inicio'] == 7) selected @endif>07:00</option>
                                <option value="8"  @if($todas[0]['hora_inicio'] == 8) selected @endif>08:00</option>
                                <option value="9"  @if($todas[0]['hora_inicio'] == 9) selected @endif>09:00</option>
                                <option value="10"  @if($todas[0]['hora_inicio'] == 10) selected @endif>10:00</option>
                                <option value="11"  @if($todas[0]['hora_inicio'] == 11) selected @endif>11:00</option>
                                <option value="12"  @if($todas[0]['hora_inicio'] == 12) selected @endif>12:00</option>
                                <option value="13"  @if($todas[0]['hora_inicio'] == 13) selected @endif>13:00</option>
                                <option value="14"  @if($todas[0]['hora_inicio'] == 14) selected @endif>14:00</option>
                                <option value="15"  @if($todas[0]['hora_inicio'] == 15) selected @endif>15:00</option>
                                <option value="16"  @if($todas[0]['hora_inicio'] == 16) selected @endif>16:00</option>
                                <option value="17"  @if($todas[0]['hora_inicio'] == 17) selected @endif>17:00</option>
                                <option value="18"  @if($todas[0]['hora_inicio'] == 18)  selected @endif>18:00</option>
                                <option value="19"  @if($todas[0]['hora_inicio'] == 19) selected @endif>19:00</option>
                                <option value="20"  @if($todas[0]['hora_inicio'] == 20) selected @endif>20:00</option>
                                <option value="21"  @if($todas[0]['hora_inicio'] == 21) selected @endif>21:00</option>
                                <option value="22"  @if($todas[0]['hora_inicio'] == 22) selected @endif>22:00</option>
                                <option value="23"  @if($todas[0]['hora_inicio'] == 23) selected @endif>23:00</option>
                                <option value="24"  @if($todas[0]['hora_inicio'] == 24) selected @endif>24:00</option>
                            </select>
                        </div>
                        <div class="col-lg">
                            <select name="horaFim" class="browser-default custom-select" required>
                                <option><strong>HORARIO FIM </strong></option>
                                <option value="0"  @if($todas[0]['hora_fim'] == 0) selected @endif>00:00</option>
                                <option value="1"  @if($todas[0]['hora_fim'] == 1) selected @endif>01:00</option>
                                <option value="2"  @if($todas[0]['hora_fim'] == 2) selected @endif>02:00</option>
                                <option value="3"  @if($todas[0]['hora_fim'] == 3) selected @endif>03:00</option>
                                <option value="4"  @if($todas[0]['hora_fim'] == 4) selected @endif>04:00</option>
                                <option value="5"  @if($todas[0]['hora_fim'] == 5) selected @endif>05:00</option>
                                <option value="6"  @if($todas[0]['hora_fim'] == 6) selected @endif>06:00</option>
                                <option value="7"  @if($todas[0]['hora_fim'] == 7) selected @endif>07:00</option>
                                <option value="8"  @if($todas[0]['hora_fim'] == 8) selected @endif>08:00</option>
                                <option value="9"  @if($todas[0]['hora_fim'] == 9) selected @endif>09:00</option>
                                <option value="10"  @if($todas[0]['hora_fim'] == 10) selected @endif>10:00</option>
                                <option value="11"  @if($todas[0]['hora_fim'] == 11) selected @endif>11:00</option>
                                <option value="12"  @if($todas[0]['hora_fim'] == 12) selected @endif>12:00</option>
                                <option value="13"  @if($todas[0]['hora_fim'] == 13) selected @endif>13:00</option>
                                <option value="14"  @if($todas[0]['hora_fim'] == 14) selected @endif>14:00</option>
                                <option value="15"  @if($todas[0]['hora_fim'] == 15) selected @endif>15:00</option>
                                <option value="16"  @if($todas[0]['hora_fim'] == 16) selected @endif>16:00</option>
                                <option value="17"  @if($todas[0]['hora_fim'] == 17) selected @endif>17:00</option>
                                <option value="18"  @if($todas[0]['hora_fim'] == 18)  selected @endif>18:00</option>
                                <option value="19"  @if($todas[0]['hora_fim'] == 19) selected @endif>19:00</option>
                                <option value="20"  @if($todas[0]['hora_fim'] == 20) selected @endif>20:00</option>
                                <option value="21"  @if($todas[0]['hora_fim'] == 21) selected @endif>21:00</option>
                                <option value="22"  @if($todas[0]['hora_fim'] == 22) selected @endif>22:00</option>
                                <option value="23"  @if($todas[0]['hora_fim'] == 23) selected @endif>23:00</option>
                                <option value="24"  @if($todas[0]['hora_fim'] == 24) selected @endif>24:00</option>
                            </select>
                        </div>
                    </div>

                    <br>
                    <label for="dataFuncionamento" class="black-text font-weight-light">DIAS DE
                        FUNCIONAMENTO</label>
                    <div class="row">
                        <div class="col-lg">
                            <select name="dataInicio" class="browser-default custom-select" required>
                                <option><strong> DIA INICIO </strong></option>
                                <option value="dom" @if($todas[0]['data_inicio'] == 'dom') selected @endif>Domingo</option>
                                <option value="seg" @if($todas[0]['data_inicio'] == 'seg') selected @endif>Segunda</option>
                                <option value="ter" @if($todas[0]['data_inicio'] == 'ter') selected @endif>Terça</option>
                                <option value="qua" @if($todas[0]['data_inicio'] == 'qua') selected @endif>Quarta</option>
                                <option value="qui" @if($todas[0]['data_inicio'] == 'qui') selected @endif>Quinta</option>
                                <option value="sex" @if($todas[0]['data_inicio'] == 'sex') selected @endif>Sexta</option>
                                <option value="sab" @if($todas[0]['data_inicio'] == 'sab') selected @endif>Sábado</option>
                            </select>
                        </div>

                        <div class="col-lg">
                            <select name="dataFim" class="browser-default custom-select" required>
                                <option><strong> DIA FIM </strong></option>
                                <option value="dom" @if($todas[0]['data_fim'] == 'dom') selected @endif>Domingo</option>
                                <option value="seg" @if($todas[0]['data_fim'] == 'seg') selected @endif>Segunda</option>
                                <option value="ter" @if($todas[0]['data_fim'] == 'ter') selected @endif>Terça</option>
                                <option value="qua" @if($todas[0]['data_fim'] == 'qua') selected @endif>Quarta</option>
                                <option value="qui" @if($todas[0]['data_fim'] == 'qui') selected @endif>Quinta</option>
                                <option value="sex" @if($todas[0]['data_fim'] == 'sex') selected @endif>Sexta</option>
                                <option value="sab" @if($todas[0]['data_fim'] == 'sab') selected @endif>Sábado</option>
                            </select>
                        </div>
                        <br><br>
                    </div>
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
                    <br>

                    <label for="horarioFuncionamento" class="black-text font-weight-light">HORARIO DE
                        FUNCIONAMENTO</label>
                    <div class="row">
                        <div class="col-lg">
                            <select name="horaInicio" class="browser-default custom-select" required>
                                <option selected> <strong> HORARIO INICIO </strong></option>
                                <option value="0">00:00</option>
                                <option value="1">01:00</option>
                                <option value="2">02:00</option>
                                <option value="3">03:00</option>
                                <option value="4">04:00</option>
                                <option value="5">05:00</option>
                                <option value="6">06:00</option>
                                <option value="7">07:00</option>
                                <option value="8">08:00</option>
                                <option value="9">09:00</option>
                                <option value="10">10:00</option>
                                <option value="11">11:00</option>
                                <option value="12">12:00</option>
                                <option value="13">13:00</option>
                                <option value="14">14:00</option>
                                <option value="15">15:00</option>
                                <option value="16">16:00</option>
                                <option value="17">17:00</option>
                                <option value="18">18:00</option>
                                <option value="19">19:00</option>
                                <option value="20">20:00</option>
                                <option value="21">21:00</option>
                                <option value="22">22:00</option>
                                <option value="23">23:00</option>
                                <option value="24">24:00</option>
                            </select>
                        </div>
                        <div class="col-lg">
                            <select name="horaFim" class="browser-default custom-select" required>
                                <option selected><strong>HORARIO FIM </strong></option>
                                <option value="0">00:00</option>
                                <option value="1">01:00</option>
                                <option value="2">02:00</option>
                                <option value="3">03:00</option>
                                <option value="4">04:00</option>
                                <option value="5">05:00</option>
                                <option value="6">06:00</option>
                                <option value="7">07:00</option>
                                <option value="8">08:00</option>
                                <option value="9">09:00</option>
                                <option value="10">10:00</option>
                                <option value="11">11:00</option>
                                <option value="12">12:00</option>
                                <option value="13">13:00</option>
                                <option value="14">14:00</option>
                                <option value="15">15:00</option>
                                <option value="16">16:00</option>
                                <option value="17">17:00</option>
                                <option value="18">18:00</option>
                                <option value="19">19:00</option>
                                <option value="20">20:00</option>
                                <option value="21">21:00</option>
                                <option value="22">22:00</option>
                                <option value="23">23:00</option>
                                <option value="24">24:00</option>
                            </select>
                        </div>
                    </div>

                    <br>
                    <label for="dataFuncionamento" class="black-text font-weight-light">DIAS DE
                        FUNCIONAMENTO</label>
                    <div class="row">
                        <div class="col-lg">
                            <select name="dataInicio" class="browser-default custom-select" required>
                                <option selected><strong> DIA INICIO </strong></option>
                                <option value="seg">Segunda</option>
                                <option value="ter">Terça</option>
                                <option value="qua">Quarta</option>
                                <option value="qui">Quinta</option>
                                <option value="sex">Sexta</option>
                                <option value="sab">Sábado</option>
                                <option value="dom">Domingo</option>
                            </select>
                        </div>

                        <div class="col-lg">
                            <select name="dataFim" class="browser-default custom-select" required>
                                <option selected><strong> DIA FIM </strong></option>
                                <option value="seg">Segunda</option>
                                <option value="ter">Terça</option>
                                <option value="qua">Quarta</option>
                                <option value="qui">Quinta</option>
                                <option value="sex">Sexta</option>
                                <option value="sab">Sábado</option>
                                <option value="dom">Domingo</option>
                            </select>
                        </div>
                        <br><br>
                    </div>
                </form>

                @include('dropzone')
            </div>

        @endif

        <div class="text-center py-4 mt-3">
            <button class="btn btn-outline-primary waves-effect" type="submit" form="form-quadra">CADASTRAR</button>
        </div>
    </div>
@endsection
