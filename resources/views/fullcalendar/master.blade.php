<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8' />
    <link href='{{ asset('assets/fullcalendar/lib/main.css') }}' rel='stylesheet' />

    <link href='{{ asset('assets/fullcalendar/css/style.css') }}' rel='stylesheet' />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <div id='wrap' align="center">
        <h2>Horários reservados</h2>
        <div id=''>
            <div id='calendar' data-route-event-store="{{ route('routeEventStore') }}"
                data-route-load-events="{{ route('routeLoadEvents', ['quadra' => $quadra['id']]) }}"
                data-route-event-update="{{ route('routeEventUpdate') }}"
                data-route-event-delete="{{ route('routeEventDelete') }}"
                id-quadra="{{ $quadra['id'] }}"
                id-usuario="{{ $idUser }}"
                ></div>
        </div>
    </div>

    @if (Auth::check())
        <button class="btn btn-success" id="new-event" style="margin-left: 0;">Reservar horario</button>
    @endif

    <div id='source-calendar'></div>

    <!-- Modal -->
    <?php
        date_default_timezone_set("America/Sao_Paulo");
        use App\Horario;

        $aux = Horario::where('id_quadra',$quadra['id'])->get()->all();

        $hora = $aux[0];

        // dd($hora);

    ?>


    <div class="modal fade" id="modalCalendarView" tabindex="-1" role="dialog" aria-labelledby="titleModal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="titleModal">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formEvent">
                        <div class="form-group" style="display: none;">
                            <label for="title">Titulo</label>
                            <input type="text" class="form-control" name="title" id="title" value="Agendamento"
                                placeholder="Entre com Titulo"
                                readonly

                            >
                            <input type="text" class="form-control" name="id" id="id" style="display: none;">

                        </div>
                        <div class="form-group">
                            <label for="start">Data Agendamento</label>
                            {{-- <select type="text" class="form-control" name="start" id="start">
                                @for ($x = 0; $x < 10; $x++)
                                    <option>
                                        @php
                                            echo date('Y-m-d');
                                        @endphp
                                    </option>
                                @endfor
                            </select> --}}

                            {{-- <select name="data" id="">
                                <option value="segunda"> Segunda</option>
                            </select> --}}


                            <input type="text" class="form-control date-time" name="start" id="start"
                                placeholder="EX: 15/10/2020 15:30:00"
                                readonly
                            >
                        </div>
                        <div class="form-group">
                            <label for="end">Hora Agendamento</label>
                            <input type="text" class="form-control date-time" name="end" id="end" placeholder="EX: 15/10/2020 17:30:00"
                                readonly
                            >

                            {{-- <select type="text" class="form-control" name="start" id="start">
                                @for ($x = $hora->hora_inicio; $x < $hora->hora_fim; $x++)

                                    <?php
                                        $aux = $x.':00 - '.($x+1).':00';
                                    ?>
                                    <option value="<?php echo $aux ?>">
                                        @php
                                            echo $aux;
                                        @endphp
                                    </option>
                                @endfor
                            </select> --}}
                        </div>
                        <div class="form-group" style="display: none;">
                            <label for="description">Descrição</label>
                            <textarea class="form-control" value="Agendamento de quadra!" name="description"
                                id="description" cols="50" rows="5" readonly></textarea>
                        </div>
                        <div class="form-group">
                            <p>
                                VALOR ALUGUEL/HORA <span style="color: green;">R$ {{ $quadra['valor_aluguel'] }},00</span>
                            </p>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    @if (Auth::check())
                        <button type="button" class="btn btn-danger deleteEvent">Excluir</button>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalCalendarCadastro" tabindex="-1" role="dialog" aria-labelledby="titleModal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="titleModal">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formEvent">
                        <div class="form-group" style="display: none;">
                            <label for="title">Titulo</label>
                            <input type="text" class="form-control" name="title" id="title" value="Agendamento"
                                placeholder="Entre com Titulo"
                                readonly
                            >
                            <input type="text" class="form-control" name="id" id="id" style="display: none;">

                        </div>
                        <div class="form-group">
                            <label for="start">Data Agendamento</label>

                            <?php


                                // $dia->modify('next monday');

                                // echo $dia->format('d/m/Y'); // 05/06/2017

                                $semana1 = [  'dom' => 1,
                                              'seg' => 2,
                                              'ter' => 3,
                                              'qua' => 4,
                                              'qui' => 5,
                                              'sex' => 6,
                                              'sab' => 7 ];

                                $semana2 = [  1 => 'dom',
                                              2 => 'seg',
                                              3 => 'ter',
                                              4 => 'qua',
                                              5 => 'qui',
                                              6 => 'sex',
                                              7 => 'sab' ];

                                $semana3 = [  'dom' => 'sunday',
                                              'seg' => 'monday',
                                              'ter' => 'tuesday',
                                              'qua' => 'wednesday',
                                              'qui' => 'thursday',
                                              'sex' => 'friday',
                                              'sab' => 'saturday' ];

                                // dd($hora);

                                // var_dump($semana[$hora->data_inicio]);
                                // var_dump($semana[$hora->data_fim]);
                                // die();
                            ?>

                            <select type="text" class="form-control" name="start_date" id="start_date">
                                @for ($x = $semana1[$hora->data_inicio]; $x <= $semana1[$hora->data_fim]; $x++)

                                    <?php
                                        $dia = new DateTime();
                                        $aux_next = $dia->modify('next '.$semana3[$semana2[$x]])->format('d/m/Y');
                                    ?>

                                    <option value="{{$aux_next}}">
                                        {{ $semana2[$x] }} - {{$aux_next}}
                                    </option>
                                @endfor
                            </select>


                            {{-- <input type="text" class="form-control date-time" name="start" id="start"
                                placeholder="EX: 15/10/2020 15:30:00" @if (!Auth::check())
                            readonly
                            @endif
                            > --}}
                        </div>
                        <div class="form-group">
                            <label for="end">Hora Agendamento</label>
                            {{-- <input type="text" class="form-control date-time" name="end" id="end" placeholder="EX: 15/10/2020 17:30:00"
                                @if (!Auth::check())
                            readonly
                            @endif
                            > --}}

                            <select type="text" class="form-control" name="start_hora" id="start_hora">
                                @for ($x = $hora->hora_inicio; $x < $hora->hora_fim; $x++)

                                    <?php
                                        $aux = $x.':00 - '.($x+1).':00';
                                    ?>
                                    <option value="<?php echo $aux ?>">
                                        @php
                                            echo $aux;
                                        @endphp
                                    </option>
                                @endfor
                            </select>
                        </div>
                        <div class="form-group" style="display: none;">
                            <label for="description">Descrição</label>
                            <textarea class="form-control" value="Agendamento de quadra!" name="description"
                                id="description" cols="50" rows="5" readonly></textarea>
                        </div>
                        <div class="form-group">
                            <p>
                                VALOR ALUGUEL/HORA <span style="color: green;">R$ {{ $quadra['valor_aluguel'] }},00</span>
                            </p>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    @if (Auth::check())
                        <button type="button" class="btn btn-danger deleteEvent">Excluir</button>
                        <button type="button" class="btn btn-primary saveEvent">Salvar</button>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src='{{ asset('assets/fullcalendar/js/calendar.js') }}'></script>
    <script src='{{ asset('assets/fullcalendar/js/script.js') }}'></script>
    <script src='{{ asset('assets/fullcalendar/lib/main.js') }}'></script>
    <script src='{{ asset('assets/fullcalendar/lib/locales-all.min.js') }}'></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.28.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.28.0/locale/br.min.js"></script>

    <script>

        $(document).ready(function(){

        });
    </script>

</body>

</html>
