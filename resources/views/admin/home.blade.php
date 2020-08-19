@extends('layouts.app')

@section('content')

    <div class="row">

        {{-- SUSPENDER USUARIO --}}
        <div class="col-lg-4 col-md-6 mb-4">
            <!--Card-->
            <div class="card card-cascade narrower mb-4" style="margin-top: 28px">
                <!--Card image-->
                <div class="view view-cascade">
                    <img src="{{ url('img/suspender_user.jpg') }}" class="card-img-top" alt="">
                </div>
                <!--/.Card image-->
                <!--Card content-->
                <div class="card-body card-body-cascade">
                    <!--Title-->
                    <h4 class="card-title">SUSPENDER USUARIO</h4>
                    <a href="{{ route('suspenderUser.index') }}" class="btn btn-outline-primary waves-effect">Editar</a>
                </div>
                <!--/.Card content-->
            </div>
            <!--/.Card-->

        </div>

        {{-- SUSPENDER QUADRA --}}
        <div class="col-lg-4 col-md-6 mb-4">
            <!--Card-->
            <div class="card card-cascade narrower mb-4" style="margin-top: 28px">
                <!--Card image-->
                <div class="view view-cascade">
                    <img src="{{ url('img/suspender_quadra.jpg') }}" class="card-img-top" alt="">
                </div>
                <!--/.Card image-->

                <!--Card content-->
                <div class="card-body card-body-cascade">
                    <!--Title-->
                    <h4 class="card-title">SUSPENDER QUADRA</h4>
                    <a href="" class="btn btn-outline-primary waves-effect">Editar</a>
                </div>
                <!--/.Card content-->

            </div>
            <!--/.Card-->

        </div>
    </div>

@endsection
