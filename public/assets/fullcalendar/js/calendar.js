document.addEventListener('DOMContentLoaded', function () {

    /* initialize the external events
    -----------------------------------------------------------------*/

    var containerEl = document.getElementById('external-events-list');
    new FullCalendar.Draggable(containerEl, {
        itemSelector: '.fc-event',
        eventData: function (eventEl) {
            return {
                title: eventEl.innerText.trim()
            }
        }
    });

    /* initialize the calendar
    -----------------------------------------------------------------*/

    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
        },
        businessHours: {
            // days of week. an array of zero-based day of week integers (0=Sunday)
            daysOfWeek: [1, 2, 3, 4], // Monday - Thursday

            startTime: '10:00', // a start time (10am in this example)
            endTime: '18:00', // an end time (6pm in this example)
        },
        locale: 'pt-br',
        navLinks: true,
        initialDate: Date.now(),
        //   eventLimit: true,
        editable: true,
        // height: 600,

        // visibleRange: {
        //     start: '2020-09-15',
        //     end: '2020-09-22'
        // },

        // plugins: [ dayGridPlugin ],
        initialView: 'dayGridWeek',

        views: {
            pastAndFutureView: {
                visibleRange: function (currentDate) {
                    // Generate a new date for manipulating in the next step
                    var startDate = new Date(currentDate.valueOf());
                    var endDate = new Date(currentDate.valueOf());

                    // Adjust the start & end dates, respectively
                    startDate.setDate(startDate.getDate() - 1); // One day in the past
                    endDate.setDate(endDate.getDate() + 2); // Two days into the future

                    return { start: startDate, end: endDate };
                }
            }
        },

        contentHeight: 600,
        selectable: true,
        droppable: false, // this allows things to be dropped onto the calendar
        events: routeEvents('routeLoadEvents'),
        drop: function (arg) {
            // is the "remove after drop" checkbox checked?
            if (document.getElementById('drop-remove').checked) {
                // if so, remove the element from the "Draggable Events" list
                arg.draggedEl.parentNode.removeChild(arg.draggedEl);
            }
        },
        select: function (event) {
            resetForm("#formEvent");

            $('#modalCalendar').modal('show');
            $('#modalCalendar #titleModal').text('Adicionar Evento');
            $('#modalCalendar button.deleteEvent').css('display', 'none');

        },
        eventClick: function (event) {

            resetForm("#formEvent");

            $('#modalCalendar').modal('show');
            $('#modalCalendar #titleModal').text('Alterar Evento');
            $('#modalCalendar button.deleteEvent').css('display', 'flex');

            let id = event.event.id;
            $('#modalCalendar input[name="id"]').val(id);

            let title = event.event.title;
            $('#modalCalendar input[name="title"]').val(title);

            let start = moment(event.event.start).format('DD/MM/YYYY HH:mm:ss');
            $('#modalCalendar input[name="start"]').val(start);

            let end = moment(event.event.end).format('DD/MM/YYYY HH:mm:ss');
            $('#modalCalendar input[name="end"]').val(end);

            let description = event.event.extendedProps.description;
            $('#modalCalendar textarea[name="description"]').val(description);

            console.log(event);
        }
    });
    calendar.render();

});

