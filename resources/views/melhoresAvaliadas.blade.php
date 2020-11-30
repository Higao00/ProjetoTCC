@extends('layouts.app')

@section('content')

    <style>
        @media only screen and (max-width: 500px) {
            .avaliacao {
                text-align: left !important;
                display: block !important;
                float: unset !important;
            }

            .endereco {
                text-align: left !important;
                font-size: 10px;
                color: #7f7878;
                font-weight: 500 !important;
                display: block;
            }

            .titulo {
                font-size: 18px !important;
            }

            .preco {
                font-size: 20px !important;

            }
        }

        .card {
            margin-bottom: 10px;
        }

        .card-img-top {
            max-height: 350px;
        }

        .card-body {
            padding-bottom: 5 !important;
        }

        .titulo_preco {
            width: 100%;
            height: auto;
            margin-bottom: 15px;
        }

        .endereco_avaliacao {
            width: 100%;
            height: auto;
        }

        .titulo {
            text-align: left;
            color: #000;
            font-size: 20px;
            font-weight: bold !important;
            display: inline-block;
        }

        .preco {
            color: #dc3545 !important;
            font-weight: 600 !important;
            text-align: right;
            font-size: 22px;
            display: inline-block;
            float: right;
        }

        .endereco {
            text-align: left;
            font-size: 13px;
            color: #7f7878;
            font-weight: 500 !important;
            display: inline-block;
        }

        .avaliacao {
            text-align: right;
            display: inline-block;
            float: right;
        }

        .card-img-top {
            cursor: pointer;
        }

        .icon_avaliacao {
            color: #ffc107 !important;
            cursor: pointer;
        }

        .favoritas {
            list-style: none;
            color: #dc3545;
            border: 0px;
            background-color: #fff;
        }

        .favoritas:hover {
            color: #4285f4;
        }

        .checked {
            color: orange;
        }

    </style>

    <style>
        @media only screen and (max-width: 500px) {
            .avaliacao {
                text-align: left !important;
                display: block !important;
                float: unset !important;
            }

            .endereco {
                text-align: left !important;
                font-size: 10px;
                color: #7f7878;
                font-weight: 500 !important;
                display: block;
            }

            .titulo{
                font-size: 18px !important;
            }

            .preco {
                font-size: 20px !important;

            }
        }

        .card {
            margin-bottom: 10px;
        }

        .card-img-top {
            max-height: 300px;
            min-height: 300px;
        }

        .card-body {
            padding-bottom: 5 !important;
        }

        .titulo_preco {
            width: 100%;
            height: auto;
            margin-bottom: 15px;
        }

        .endereco_avaliacao {
            width: 100%;
            height: auto;
        }

        .titulo {
            text-align: left;
            color: #000;
            font-size: 20px;
            font-weight: bold !important;
            display: inline-block;
        }

        .preco {
            color: #dc3545 !important;
            font-weight: 600 !important;
            text-align: right;
            font-size: 22px;
            display: inline-block;
            float: right;
        }

        .endereco {
            text-align: left;
            font-size: 13px;
            color: #7f7878;
            font-weight: 500 !important;
            display: inline-block;
        }

        .avaliacao {
            text-align: right;
            display: inline-block;
            float: right;
        }

        .card-img-top {
            cursor: pointer;
        }

        .icon_avaliacao {
            color: #ffc107 !important;
        }

    </style>

    <div class="container">
        <div class="row">
            @foreach (app(App\Http\Controllers\QuadrasController::class)->melhoresAvaliadas() as $quadra)
                <div class="col-lg-6">
                    <div class="card">
                        <a href="{{ route('quadra', ['quadra'=>$quadra['id']]) }}">
                            <div class="view overlay">
                                <img class="card-img-top" src="{{ url('images/' . $quadra['fotos'][0]['path_foto']) }}"
                                    alt="imagens quadra" />
                            </div>
                            <div class="card-body">
                                <div class="titulo_preco">
                                    <h4 class="titulo">{{ $quadra['titulo'] }}</h4>
                                    <h5 class="preco">R$ {{ $quadra['valor_aluguel'] }},00</h5>
                                </div>

                                <div class="endereco_avaliacao">
                                    <p class="endereco">{{ $quadra['rua'] }} - {{ $quadra['cidade'] }}
                                        {{ $quadra['estado'] }}</p>


                                    <div class="avaliacao" style="float: right;">
                                        @php
                                        if(true){
                                            for ($i=1; $i <= 5 ; $i++) {

                                                if($i <= $quadra['media'] ){
                                                    ?>
                                                    <span class="fa fa-star checked" value="<?php echo($i) ?>" ></span>
                                                    <?php
                                                }else{
                                                    ?>
                                                    <span class="fa fa-star" value="<?php echo($i) ?>" style="color : #343a40!important;"></span>
                                                    <?php
                                                }
                                            }
                                        }else{
                                            for ($i=1; $i <= 5 ; $i++) {
                                            ?>
                                            <span class="fa fa-star" value="<?php echo($i) ?>"></span>
                                            <?php
                                            }
                                        }

                                        @endphp

                                    </div>

                                    {{-- <div class="avaliacao">
                                        <i class="far fa-star icon_avaliacao"></i>
                                        <i class="far fa-star icon_avaliacao"></i>
                                        <i class="far fa-star icon_avaliacao"></i>
                                        <i class="far fa-star icon_avaliacao"></i>
                                        <i class="far fa-star icon_avaliacao"></i>
                                    </div> --}}
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
