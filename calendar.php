<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<link href='fullcalendar-2.1.1/fullcalendar.css' rel='stylesheet' />
<link href='fullcalendar-2.1.1/fullcalendar.print.css' rel='stylesheet' media='print' />
<script src='fullcalendar-2.1.1/lib/moment.min.js'></script>
<script src='fullcalendar-2.1.1/lib/jquery.min.js'></script>
<script src='fullcalendar-2.1.1/fullcalendar.min.js'></script>

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
            defaultDate: '2014-09-12',
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            events: [
                {
                    title: 'All Day Event',
                    start: '2014-09-01'
                },
                {
                    title: 'Long Event',
                    start: '2014-09-07',
                    end: '2014-09-10'
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: '2014-09-09T16:00:00'
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: '2014-09-16T16:00:00'
                },
                {
                    title: 'Conference',
                    start: '2014-09-11',
                    end: '2014-09-13'
                },
                {
                    title: 'Meeting',
                    start: '2014-09-12T10:30:00',
                    end: '2014-09-12T12:30:00'
                },
                {
                    title: 'Lunch',
                    start: '2014-09-12T12:00:00'
                },
                {
                    title: 'Meeting',
                    start: '2014-09-12T14:30:00'
                },
                {
                    title: 'Happy Hour',
                    start: '2014-09-12T17:30:00'
                },
                {
                    title: 'Dinner',
                    start: '2014-09-12T20:00:00'
                },
                {
                    title: 'Birthday Party',
                    start: '2014-09-13T07:00:00'
                },
                {
                    title: 'Click for Google',
                    url: 'http://google.com/',
                    start: '2014-09-28'
                }
            ]
        });
        
    });

</script>
<style>
/*
    body {
        margin: 40px 10px;
        padding: 0;
        font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
        font-size: 14px;
    }

    #calendar {
        max-width: 800px;
        margin: 0 auto;
    }
*/
</style>
</head>
<body>

    <div id='calendar'></div>

</body>
</html>
