@extends('layouts.app')

@section('content')

    <style>
        .modal-dialog.modal-notify .heading{
            font-weight: 600 !important;
        }
    </style>

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
                    @if (!empty($todas))
                        @foreach ($todas as $quadra)
                            <tr>
                                <th> {{ $quadra['titulo'] }}</th>
                                <th> {{ $quadra['rua'] . ', ' . $quadra['cidade'] . '-' . $quadra['estado'] }}</th>
                                <th> {{ 'R$ ' . $quadra['valorHora'] . ',00' }}</th>
                                <th>
                                    @if ($quadra['status'] == 1)
                                        <a href="{{ route('storeQuadra.show', $quadra['id']) }}">
                                            <i style="color: #4285f4" class="fas fa-pencil-alt"></i>
                                        </a>
                                    @else
                                        <a data-toggle="modal" data-target="#modal_bloqueada">
                                            <i style="color: #f0010c" class="fas fa-ban"></i>
                                        </a>
                                    @endif
                                </th>
                                <th>
                                    <a data-toggle="modal" data-target="#modal_delete{{ $quadra['id'] }}">
                                        <i style="color: #f0010c" class="far fa-trash-alt"></i>
                                    </a>
                                </th>
                            </tr>

                            <!--Modal: modalConfirmDelete-->
                            <div class="modal fade" id="modal_delete{{ $quadra['id'] }}" tabindex="-1" role="dialog"
                                aria-hidden="true">
                                <div class="modal-dialog modal-sm modal-notify modal-danger" role="document">
                                    <!--Content-->
                                    <div class="modal-content text-center">
                                        <!--Header-->
                                        <div class="modal-header d-flex justify-content-center">
                                            <p class="heading">CERTEZA QUE DESEJA DELETAR ESSA QUADRA ?</p>
                                        </div>

                                        <!--Body-->
                                        <div class="modal-body">
                                            <i class="fas fa-times fa-4x animated rotateIn"></i>
                                        </div>

                                        <!--Footer-->
                                        <div class="modal-footer flex-center">
                                            <form action="{{ route('storeQuadra.destroy', $quadra['id']) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger">SIM</button>
                                            </form>
                                            <a type="button" class="btn btn-danger waves-effect"
                                                data-dismiss="modal">NÃO</a>
                                        </div>
                                    </div>
                                    <!--/.Content-->
                                </div>
                            </div>
                            <!--Modal: modalConfirmDelete-->
                        @endforeach

                    @else
                        <tr>
                            <th>NÃO POSSUI QUADRAS ATÉ O MOMENTO.</th>
                        </tr>
                    @endif

                </tbody>
            </table>
        </div>
    </div>

    <!--Modal: modalConfirmDelete-->
    <div class="modal fade" id="modal_bloqueada" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-notify modal-danger" role="document">
            <!--Content-->
            <div class="modal-content text-center">
                <!--Header-->
                <div class="modal-header d-flex justify-content-center">
                    <p class="heading">DESCULPE, POR MOTIVOS ADIMINISTRATIVOS SUA QUADRA ESTÁ SUSPENSA.</p>
                </div>

                <!--Body-->
                <div class="modal-body">
                    <i class="fas fa-times fa-4x animated rotateIn"></i>
                </div>

                <!--Footer-->
                <div class="modal-footer flex-center">
                    <a type="button" class="btn btn-danger waves-effect" data-dismiss="modal">SAIR</a>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
    <!--Modal: modalConfirmDelete-->
@endsection
