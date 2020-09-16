<!DOCTYPE html>
<html>

<head>
	<meta charset='utf-8' />
	<link href='{{asset("assets/fullcalendar/lib/main.css")}}' rel='stylesheet' />

	<link href='{{asset("assets/fullcalendar/css/style.css")}}' rel='stylesheet' />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
	<div id='wrap'>

		<div id='external-events' style="display: none;">
			<h4>Draggable Events</h4>

			<div id='external-events-list'>
				<div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
					<div class='fc-event-main'>My Event 1</div>
				</div>
				<div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
					<div class='fc-event-main'>My Event 2</div>
				</div>
				<div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
					<div class='fc-event-main'>My Event 3</div>
				</div>
				<div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
					<div class='fc-event-main'>My Event 4</div>
				</div>
				<div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
					<div class='fc-event-main'>My Event 5</div>
				</div>
			</div>

			<p>
				<input type='checkbox' id='drop-remove' />
				<label for='drop-remove'>remove after drop</label>
			</p>
		</div>

		<div id=''>

			<div id='calendar' data-route-event-store="{{ route('routeEventStore')}}" data-route-load-events="{{ route('routeLoadEvents')}}" data-route-event-update="{{ route('routeEventUpdate')}}"></div>
		</div>

	</div>
	<div id='source-calendar'></div>

	<!-- Modal -->
	<div class="modal fade" id="modalCalendar" tabindex="-1" role="dialog" aria-labelledby="titleModal" aria-hidden="true">
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
							<input type="text" class="form-control" name="title" id="title" placeholder="Entre com Titulo">
							<input type="text" class="form-control" name="id" id="id" style="display: none;">

						</div>
						<div class="form-group">
							<label for="start">Data/Hora Inicial</label>
							<input type="text" class="form-control date-time" name="start" id="start" placeholder="Inicio">
						</div>
						<div class="form-group">
							<label for="end">Data/Hora Final</label>
							<input type="text" class="form-control date-time" name="end" id="end" placeholder="Fim">
						</div>
						<div class="form-group">
							<label for="description">Descrição</label>
							<textarea class="form-control" placeholder="Entre com Descrição" name="description" id="description" cols="50" rows="5"></textarea>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
					<button type="button" class="btn btn-danger deleteEvent">Excluir</button>
					<button type="button" class="btn btn-primary saveEvent">Salvar</button>
				</div>
			</div>
		</div>
	</div>

	<script
  src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
	<script src='{{asset("assets/fullcalendar/js/calendar.js")}}'></script>
	<script src='{{asset("assets/fullcalendar/js/script.js")}}'></script>
    <script src='{{asset("assets/fullcalendar/lib/main.js")}}'></script>
	<script src='{{asset("assets/fullcalendar/lib/locales-all.min.js")}}'></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.28.0/moment.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.28.0/locale/br.min.js"></script>

</body>

</html>