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
                data-route-load-events="{{ route('routeLoadEvents') }}"
                data-route-event-update="{{ route('routeEventUpdate') }}"
                data-route-event-delete="{{ route('routeEventDelete') }}"></div>
        </div>
    </div>

    @if (Auth::check())
        <button class="btn btn-success" id="new-event" style="margin-left: 0;">Reservar horario</button>
    @endif

    <div id='source-calendar'></div>

    <!-- Modal -->
    <div class="modal fade" id="modalCalendar" tabindex="-1" role="dialog" aria-labelledby="titleModal"
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
                        <div class="form-group">
                            <label for="title">Titulo</label>
                            <input type="text" class="form-control" name="title" id="title"
                                placeholder="Entre com Titulo" @if (!Auth::check())
                            readonly
                            @endif
                            >
                            <input type="text" class="form-control" name="id" id="id" style="display: none;">

                        </div>
                        <div class="form-group">
                            <label for="start">Data/Hora Inicial</label>
                            {{-- <select type="text" class="form-control" name="start" id="start">
                                @for ($x = 0; $x < 10; $x++)
                                    <option>
                                        @php
                                            echo date('Y-m-d');
                                        @endphp
                                    </option>
                                @endfor
                            </select> --}}


                            <input type="text" class="form-control date-time" name="start" id="start"
                                placeholder="Inicio" @if (!Auth::check())
                            readonly
                            @endif
                            >
                        </div>
                        <div class="form-group">
                            <label for="end">Data/Hora Final</label>
                            <input type="text" class="form-control date-time" name="end" id="end" placeholder="Fim"
                                @if (!Auth::check())
                            readonly
                            @endif
                            >
                        </div>
                        <div class="form-group">
                            <label for="description">Descrição</label>
                            <textarea class="form-control" value="Agendamento de quadra!" name="description"
                                id="description" cols="50" rows="5" readonly></textarea>
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
