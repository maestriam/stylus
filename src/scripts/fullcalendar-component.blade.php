@pushOnce('scripts')
<script type="text/javascript">

$('.fullcalendar').each(function(index) {

    const deleteModalOptions = $(this).data('delete-modal'); 

    const calendar = $(this).fullCalendar({
        editable: true,
        height: 'auto',
        events: $(this).data('events'),
        eventTextColor: $(this).data('text-color'),
        eventBackgroundColor: $(this).data('background-color'),
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },
        eventRender: (event, element) => {
            let html = `<i 
                data-id="${event.id}" 
                class="fc-event-remove fas fa-trash" />`;

            let deleteBtn = $(html);            
            element.append(deleteBtn);
        }
    });

    $(document).on('click', '.fc-event-remove', function() {
        let id = $(this).data('id'); 
        Livewire.dispatch('alert', {
            "type": "warning",
            "data": {"id": id},
            "message": calendar.data('delete-modal-title'),
            "options": deleteModalOptions,
            "events": {
                "onConfirmed": {
                    "component": calendar.data('component'),
                    "listener": calendar.data('on-remove')
                }
            },
        });
    });

    Livewire.on(calendar.data('on-reload'), function(data) {     
        let events = JSON.parse(data)
        calendar.fullCalendar("removeEvents");
        calendar.fullCalendar("addEventSource", events);
    })
});

</script>
@endpushOnce