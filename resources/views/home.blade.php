@extends('layouts.app')

@section('content')
    <style>
        .card{
            height: 300px;
            margin-top: 10px;
        }

        .card-text{

        }
    </style>

    <div class="row">
        @foreach (app(App\Http\Controllers\QuadrasController::class)->index() as $quadra)
            <div class="col-lg-6">
                <a href="">
                    <div class="card">
                        <div class="view overlay">
                            <img class="card-img-top"
                                src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg"
                                alt="Card image cap" />
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">{{ $quadra->titulo }}</h4>
                            <p class="card-text"><strong> Valor: </strong> {{ $quadra->valor_aluguel }} </p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection
