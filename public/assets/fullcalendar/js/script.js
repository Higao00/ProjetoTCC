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
		let id = $('#modalCalendar input[name="id"]').val();
		let title = $('#modalCalendar input[name="title"]').val();
		let start = moment($('#modalCalendar input[name="start"]').val(), "DD/MM/YYYY HH:mm:ss").format('YYYY/MM/DD HH:mm:ss');
		let end = moment($('#modalCalendar input[name="end"]').val(), "DD/MM/YYYY HH:mm:ss").format('YYYY/MM/DD HH:mm:ss');
		let description = $('#modalCalendar textarea[name="description"]').val();

		let Event = {
			title: title,
			start: start,
			end: end,
			description: description,
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

