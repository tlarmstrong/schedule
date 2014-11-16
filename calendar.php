<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<link href='fullcalendar-2.1.1/fullcalendar.css' rel='stylesheet' />
<link href='fullcalendar-2.1.1/fullcalendar.print.css' rel='stylesheet' media='print' />
<script src='fullcalendar-2.1.1/lib/moment.min.js'></script>
<script src='fullcalendar-2.1.1/lib/jquery.min.js'></script>
<script src='fullcalendar-2.1.1/fullcalendar.js'></script>

<link href="style.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>
<!-- <script src="js/book-script.js"></script> -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
<!-- Latest compiled and minified JavaScript -->
<script type="text/javascript" src="loginCheck.js"></script>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
<script>

        $(document).ready(function() {
        
        $('#calendar').fullCalendar({
            header: {
                left: '',
                center: '',
                right: 'title month,agendaWeek,agendaDay prev,next'
            },
            defaultDate: null,
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            events: [
                {
                    id: 230,
                    title: 'CS230',
                    start: '2014-11-18T15:00:00',
                    end: '2014-11-18T16:30:00',
                    room: 'MBB 115'
                },
                {
                    id: 230,
                    title: 'CS230',
                    start: '2014-11-20T15:00:00',
                    end: '2014-11-20T16:30:00',
                    room: 'MBB 115'
                },
                {
                    id: 330,
                    title: 'CS330',
                    start: '2014-11-20T16:30:00',
                    end: '2014-11-20T18:00:00',
                    room: 'MBB 217'
                },
                {
                    id: 330,
                    title: 'CS330',
                    start: '2014-11-18T16:30:00',
                    end: '2014-11-18T18:00:00',
                    room: 'MBB 217'
                },
                {
                    id: 432,
                    title: 'IS432',
                    start: '2014-11-17T10:00:00',
                    end: '2014-11-17T11:00:00',
                    room: 'MBB 317'
                },
                {
                    id: 432,
                    title: 'IS432',
                    start: '2014-11-19T10:00:00',
                    end: '2014-11-19T11:00:00',
                    room: 'MBB 317'
                },
                {
                    id: 432,
                    title: 'IS432',
                    start: '2014-11-21T10:00:00',
                    end: '2014-11-21T11:00:00',
                    room: 'MBB 317'
                },
                {
                    id: 115,
                    title: 'CS115',
                    start: '2014-11-17T10:00:00',
                    end: '2014-11-17T11:00:00',
                    room: 'MBB 312'
                },
                {
                    id: 115,
                    title: 'CS115',
                    start: '2014-11-19T10:00:00',
                    end: '2014-11-19T11:00:00',
                    room: 'MBB 312'
                },
                {
                    id: 115,
                    title: 'CS115',
                    start: '2014-11-21T10:00:00',
                    end: '2014-11-20T11:00:00',
                    room: 'MBB 312'
                },
                {
                    id: 310,
                    title: 'IT310',
                    start: '2014-11-18T08:00:00',
                    end: '2014-11-18T09:30:00',
                    color: '#D11919',
                    room: 'MBB 312'
                },
                {
                    id: 310,
                    title: 'IT310',
                    start: '2014-11-20T08:00:00',
                    end: '2014-11-20T09:30:00',
                    color: '#D11919',
                    room: 'MBB 312'
                },
                {
                    id: 220,
                    title: 'CS220',
                    start: '2014-11-18T08:00:00',
                    end: '2014-11-18T09:30:00',
                    color: '#D11919',
                    room: 'MBB 312'
                },
                {
                    id: 220,
                    title: 'CS220',
                    start: '2014-11-20T08:00:00',
                    end: '2014-11-20T09:30:00',
                    color: '#D11919',
                    description: 'MBB 312'
                }
            ],
     });   
});

</script>
</head>
<body>

    <div id='calendar'></div>

</body>
</html>
