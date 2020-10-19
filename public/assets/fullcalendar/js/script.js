function routeEvents(route) {
	return document.getElementById('calendar').dataset[route];
}

$(document).ready(function () {

	$.ajax({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	$('.saveEvent').click(function () {
		let id = $('#modalCalendarCadastro input[name="id"]').val();
		let title = $('#modalCalendarCadastro input[name="title"]').val();
		let DIA = moment($('#modalCalendarCadastro select[name="start_date"] option:selected').val(), "DD/MM/YYYY").format('YYYY/MM/DD');
		let HORA = $('#modalCalendarCadastro select[name="start_hora"] option:selected').val();
        let description = $('#modalCalendarCadastro textarea[name="description"]').val();
        let quadra_id = $('#calendar').attr('id-quadra');
        let usuario_id = $('#calendar').attr('id-usuario');

        HORA = HORA.split('-');

        let start = DIA + ' ' + HORA[0];
        let end = DIA + '' + HORA[1];

        console.log(start, end);

		let Event = {
			title: title,
			start: start,
			end: end,
            description: description,
            quadra_id: quadra_id,
            usuario_id: usuario_id
		};

		let route;

		if (id == '') {
			route = routeEvents('routeEventStore');
		} else {
			route = routeEvents('routeEventUpdate');
			Event.id = id;
			Event._method = 'PUT';
		}

		sendEvent(route, Event);

	});

	$('.deleteEvent').click(function(){
		let id = $("#modalCalendarView input[name='id']").val();

		let Event = {
			id:id,
			_method: 'DELETE'
		};

		let route = routeEvents('routeEventDelete');

		sendEvent(route, Event);
	});
});

function sendEvent(route, data_) {

	$.ajax({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		},
		url: route,
		data: data_,
		method: 'POST',
		dataType: 'json',
		success: function (json) {
			if (json) {
				location.reload();
			}
		}
	});
}

$('.date-time').mask('00/00/0000 00:00:00');


function resetForm(form) {
	$(form)[0].reset();
}
$('#new-event').click(function (event) {
    resetForm("#formEvent");

    $('#modalCalendarCadastro').modal('show');
    $('#modalCalendarCadastro #titleModal').text('Fazer reserva');
    $('#modalCalendarCadastro button.deleteEvent').css('display', 'none');

});




