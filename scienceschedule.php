<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<link href='fullcalendar-2.1.1/fullcalendar.css' rel='stylesheet' />
<link href='fullcalendar-2.1.1/fullcalendar.print.css' rel='stylesheet' media='print' />
<script src='fullcalendar-2.1.1/lib/moment.min.js'></script>
<script src='fullcalendar-2.1.1/lib/jquery.min.js'></script>
<script src='fullcalendar-2.1.1/fullcalendar.js'></script>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<link href="style.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>
<!-- <script src="js/book-script.js"></script> -->
<!-- Latest compiled and minified CSS -->
<!-- <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
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
            isCustom: true,
            weekends: false,
            defaultDate: null,
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            events: [
                {
                    id: 100,
                    title: 'Math Tutor',
                    start: '2014-12-02T15:00:00',
                    end: '2014-12-02T18:00:00',
                    room: 'SB 115'
                },
                {
                    id: 100,
                    title: 'Math Tutor',
                    start: '2014-12-04T15:00:00',
                    end: '2014-12-04T18:00:00',
                    room: 'SB 115'
                },
                {
                    id: 185,
                    title: 'MATH185',
                    start: '2014-12-01T08:00:00',
                    end: '2014-12-01T09:00:00',
                    room: 'SB 132'
                },
                {
                    id: 185,
                    title: 'MATH185',
                    start: '2014-12-03T08:00:00',
                    end: '2014-12-03T09:00:00',
                    room: 'SB 132'
                },
                {
                    id: 185,
                    title: 'MATH185',
                    start: '2014-12-05T08:00:00',
                    end: '2014-12-05T09:00:00',
                    room: 'SB 132'
                },
                {
                    id: 124,
                    title: 'CHEM101',
                    start: '2014-12-01T13:00:00',
                    end: '2014-12-01T15:00:00',
                    room: 'SB 101'
                },
                {
                    id: 124,
                    title: 'CHEM101',
                    start: '2014-12-03T13:00:00',
                    end: '2014-12-03T15:00:00',
                    room: 'SB 101'
                },
                {
                    id: 124,
                    title: 'CHEM101',
                    start: '2014-12-05T13:00:00',
                    end: '2014-12-05T15:00:00',
                    room: 'SB 101'
                },
                {
                    id: 123,
                    title: 'MATH123',
                    start: '2014-12-05T10:00:00',
                    end: '2014-12-05T11:00:00',
                    room: 'SB 312'
                },
                {
                    id: 123,
                    title: 'MATH123',
                    start: '2014-12-03T10:00:00',
                    end: '2014-12-03T11:00:00',
                    room: 'SB 312'
                },
                {
                    id: 123,
                    title: 'MATH123',
                    start: '2014-12-01T10:00:00',
                    end: '2014-12-01T11:00:00',
                    room: 'SB 312'
                },
                {
                    id: 210,
                    title: 'BIO210',
                    start: '2014-12-02T08:00:00',
                    end: '2014-12-02T09:30:00',
                    room: 'SB 312'
                },
                {
                    id: 210,
                    title: 'BIO210',
                    start: '2014-12-04T08:00:00',
                    end: '2014-12-04T09:30:00',
                    room: 'SB 312'
                },
                {
                    id: 220,
                    title: 'CS220',
                    start: '2014-12-02T08:00:00',
                    end: '2014-12-02T09:30:00',
                    color: '#D11919',
                    room: 'UNAVAILABLE'
                },
                {
                    id: 220,
                    title: 'CS220',
                    start: '2014-12-04T08:00:00',
                    end: '2014-12-04T09:30:00',
                    color: '#D11919',
                    room: 'UNAVAILABLE'
                }
            ],
            //https://code.google.com/p/fullcalendar/issues/detail?id=236
            eventRender: function(calEvent, element, view) {
            if(calEvent.room) {
                element[0].innerHTML = element[0].innerHTML.replace(calEvent.title,'<div class="roomNum">'+calEvent.room+'</div>'+calEvent.title);
          }
        }
     });  
});

</script>
</head>
<body>
<div class="container">                                          
    <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="buildingMenu" data-toggle="dropdown">Building: Science Building
        <span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
          <li role="presentation"><a role="menuitem" tabindex="-1" href="bsbschedule.php">Bible Studies Building</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="anotherschedule.php">Another Building</a></li>
          <li role="presentation" class="divider"></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="calendar.php">Back to Mabee Business Building</a></li>
        </ul>
    </div>
    <div id='calendar'></div>
    <a class="btn btn-lg btn-primary btn-block" id="calButton" href="confirm.php">Confirm Class</a>
</div>

</body>
</html>
