@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-3">
            <!-- Card Dark -->
            <div class="card">
                <!-- Card image -->
                <div class="view overlay">
                    <img class="card-img-top" src="{{ url('img/criar_quadra.jpg') }}" alt="criar_quadra">
                    <a>
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!-- Card content -->
                <div class="card-body elegant-color white-text rounded-bottom">
                    <a data-target="#modal-crate-quadra" data-toggle="modal" class="white-text d-flex justify-content-end">
                        <h5>Criar Quadra &nbsp<i class="fas fa-angle-double-right"></i></h5>
                    </a>
                </div>
            </div>
            <!-- Card Dark -->
        </div>
    </div>

    {{-- Model Create Quadra --}}
    <div class="modal fade" id="modal-crate-quadra" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Cadastro de Quadra</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3" style="overflow: auto; max-height: 550px">
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="md-form mb-5">
                                    <input type="text" id="form34" class="form-control validate">
                                    <label data-error="wrong" data-success="right" for="form34">Nome da Quadra</label>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="md-form mb-5">
                                    <input type="email" id="form29" class="form-control validate">
                                    <label data-error="wrong" data-success="right" for="form29">Valor do Aluguel</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="md-form mb-5">
                                    <input type="text" id="form32" class="form-control validate">
                                    <label data-error="wrong" data-success="right" for="form32">Cep</label>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="md-form mb-5">
                                    <input type="text" id="form32" class="form-control validate">
                                    <label data-error="wrong" data-success="right" for="form32">Rua</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="md-form mb-5">
                                    <input type="text" id="form32" class="form-control validate">
                                    <label data-error="wrong" data-success="right" for="form32">Bairro</label>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="md-form mb-5">
                                    <input type="text" id="form32" class="form-control validate">
                                    <label data-error="wrong" data-success="right" for="form32">Numero</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="md-form mb-5">
                                    <input type="text" id="form32" class="form-control validate">
                                    <label data-error="wrong" data-success="right" for="form32">Complemento</label>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="md-form mb-5">
                                    <input type="text" id="form32" class="form-control validate">
                                    <label data-error="wrong" data-success="right" for="form32">Cidade</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="md-form mb-5">
                                    <input type="text" id="form32" class="form-control validate">
                                    <label data-error="wrong" data-success="right" for="form32">Estado</label>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="md-form mb-5">
                                    <input type="text" id="form32" class="form-control validate">
                                    <label data-error="wrong" data-success="right" for="form32">Status</label>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="md-form mb-5">
                                    <input type="text" id="form32" class="form-control validate">
                                    <label data-error="wrong" data-success="right" for="form32">Foto Quadra</label>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="md-form mb-5">
                                    <input type="text" id="form32" class="form-control validate">
                                    <label data-error="wrong" data-success="right" for="form32">Propietario</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="md-form mb-5" align="center">
                                    <button type="button" class="btn btn-outline-primary waves-effect">Primary</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
