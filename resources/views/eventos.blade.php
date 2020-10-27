@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card testimonial-card" style="margin-top: 1%;">
            @if (!empty($todos))
                <div class="table-responsive">
                    <table class="table">
                        <thead class="black white-text">
                            <tr>
                                <th scope="col">NOME QUADRA</th>
                                <th scope="col">HORARIO INICIO</th>
                                <th scope="col">HORARIO FIM</th>
                                <th scope="col">VALOR</th>
                                <th scope="col">LOCATARIO</th>
                                <th scope="col">EMAIL LOCATARIO</th>
                                <th scope="col">DOCUMENTO LOCATARIO</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($todos as $evento)
                                <tr>
                                    <th> {{ $evento['quadra'] }}</th>
                                    <th> {{ $evento['start'] }}</th>
                                    <th> {{ $evento['end'] }}</th>
                                    <th> {{ $evento['valor'] }}</th>
                                    <th> {{ $evento['nome_user'] }}</th>
                                    <th> {{ $evento['email_user'] }}</th>
                                    <th> {{ $evento['doc_user'] }}</th>
                                    </th>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            @else
                <br>
                <h2 style="text-align: center"> <strong> NÃO ENCONTRAMOS NEM UM AGENDAMENTO PARA HOJE. </strong> </h2>
                <br>
            @endif
        </div>
    </div>
@endsection
