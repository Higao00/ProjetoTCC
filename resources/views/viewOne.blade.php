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

        .favoritas{
            border: 0px;
            background-color: #fff;
            margin-top: -9px;
        }
        
        .checked {
            color: orange;
        }

    </style>

   <?php

    use App\Avaliacoes;

    $quadra = $todas[0];

    if(Auth::check()){
        $idUser = auth()->user()->getId();

        $aux = Avaliacoes::where('id_quadra',$quadra['id'])->where('id_user', $idUser)->get()->all();

        if(empty($aux)){
            $avaliacao = 0;
        }else{
            $avaliacao = $aux[0]->avaliacao;
        }


    }else{
        $idUser = -1;
    }

    // dd($id);
    ?>

    <div class="container">

        <div class="card">
            <div class="card-body">
                <!-- BEGIN nav-tabs -->
                <ul class="nav nav-tabs" id="nav-tabs">
                    <li class="nav-item"><a href="#agenda" class="nav-link active" data-toggle="tab">Reservar</a>
                    </li>
                    <li class="nav-item"><a href="#detalhes" class="nav-link " data-toggle="tab">Detalhes</a></li>
                </ul>
                <!-- END nav-tabs -->
                <!-- BEGIN tab-content -->
                <div class="tab-content tab-content-bordered" style="padding-top: 5%;">
                    <div class="tab-pane fade show active" id="agenda">
                        @include('fullcalendar.master')
                    </div>
                    <div class="tab-pane fade " id="detalhes">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">

                                @foreach ($quadra['fotos'] as $key => $item)
                                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}" style="max-height: 500px">
                                        <img class="d-block w-100" src="{{ url('images/' . $item['path_foto']) }}" />
                                    </div>
                                @endforeach

                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Anterior</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Pr??ximo</span>
                            </a>
                        </div>

                        <div class="card-body">
                            <div class="titulo_preco">
                                <h4 class="titulo">{{ $quadra['titulo'] }}</h4>
                                <h5 class="preco">R$ {{ $quadra['valor_aluguel'] }},00</h5>
                            </div>

                            <div class="endereco_avaliacao row">
                                <div class="col-md-6">
                                    <p class="endereco">{{ $quadra['rua'] }} - {{ $quadra['cidade'] }}
                                        {{ $quadra['estado'] }}
                                    </p>
                                </div>



                                @if (auth()->user())


                                    @php
                                        if($avaliacao){
                                            for ($i=1; $i <= 5 ; $i++) {

                                                if($i <= $avaliacao){
                                                    ?>
                                                    <span class="fa fa-star checked" value="<?php echo($i) ?>"></span>
                                                    <?php
                                                }else{
                                                    ?>
                                                    <span class="fa fa-star" value="<?php echo($i) ?>"></span>
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

                                    {{-- <div class="col-md-4">
                                        <span class="fa fa-star" value="1"></span>
                                        <span class="fa fa-star" value="2"></span>
                                        <span class="fa fa-star" value="3"></span>
                                        <span class="fa fa-star" value="4"></span>
                                        <span class="fa fa-star" value="5"></span>
                                    </div> --}}
                                @endif

                                <div class="avaliacao" style="margin-left: 10px">
                                    @if (auth()->user())
                                        <form style="float: left; padding-right: 10px;"
                                            action="{{ route('favoritas.store') }}" id="favoritas_form" method="POST">
                                            @csrf
                                            <input type="hidden" name="id_quadra" value="{{ $quadra['id'] }}">

                                            @if(app(App\Http\Controllers\FavoritasController::class)->show($quadra['id']))
                                                <button type="submit" form="favoritas_form" class="favoritas">
                                                    <img src="{{ url('img/coracao2.png') }}" width="auto" height="30" alt="">
                                                </button>
                                            
                                                @else
                                                    <button type="submit" form="favoritas_form" class="favoritas">
                                                       <img src="{{ url('img/coracao.png') }}" width="auto" height="30" alt="">
                                                    </button>

                                            @endif
                                        </form>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
