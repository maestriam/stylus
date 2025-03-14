@pushOnce('scripts')
<script type="text/javascript">


    $(".fullcalendar").fullCalendar({
        height: 'auto',
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },
        editable: true,
        eventTextColor: $('.fullcalendar').data('text-color'),
        eventBackgroundColor: $('.fullcalendar').data('background-color'),
        events: $('.fullcalendar').data('collection'),
    });
</script>
@endpushOnce