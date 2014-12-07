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
                    id: 302,
                    title: 'GEN302',
                    start: '2014-12-08T17:00:00',
                    end: '2014-12-08T18:00:00',
                    room: 'AB 101'
                },
                {
                    id: 302,
                    title: 'GEN302',
                    start: '2014-12-10T17:00:00',
                    end: '2014-12-10T18:00:00',
                    room: 'AB 101'
                },
                {
                    id: 302,
                    title: 'GEN302',
                    start: '2014-12-09T17:00:00',
                    end: '2014-12-09T18:00:00',
                    room: 'AB 101'
                },
                {
                    id: 302,
                    title: 'GEN302',
                    start: '2014-12-11T17:00:00',
                    end: '2014-12-11T18:00:00',
                    room: 'AB 101'
                },
                {
                    id: 201,
                    title: 'GEN201',
                    start: '2014-12-08T13:00:00',
                    end: '2014-12-08T14:00:00',
                    room: 'AB 301'
                },
                {
                    id: 201,
                    title: 'GEN201',
                    start: '2014-12-10T13:00:00',
                    end: '2014-12-10T14:00:00',
                    room: 'AB 301'
                },
                {
                    id: 201,
                    title: 'GEN201',
                    start: '2014-12-12T13:00:00',
                    end: '2014-12-12T14:00:00',
                    room: 'AB 301'
                },
                {
                    id: 103,
                    title: 'GEN103',
                    start: '2014-12-09T13:00:00',
                    end: '2014-12-09T14:30:00',
                    room: 'AB 202'
                },
                {
                    id: 103,
                    title: 'GEN103',
                    start: '2014-12-11T13:00:00',
                    end: '2014-12-11T14:30:00',
                    room: 'AB 202'
                },
                {
                    id: 101,
                    title: 'GEN101',
                    start: '2014-12-08T09:00:00',
                    end: '2014-12-08T10:30:00',
                    room: 'AB 102'
                },
                {
                    id: 101,
                    title: 'GEN101',
                    start: '2014-12-10T09:00:00',
                    end: '2014-12-10T10:30:00',
                    room: 'AB 102'
                },
                {
                    id: 101,
                    title: 'GEN101',
                    start: '2014-12-12T09:00:00',
                    end: '2014-12-12T10:30:00',
                    room: 'AB 102'
                },
                {
                    id: 220,
                    title: 'CS220',
                    start: '2014-12-09T08:00:00',
                    end: '2014-12-09T09:30:00',
                    color: '#9CC12E',
                    room: 'AB 101'
                },
                {
                    id: 220,
                    title: 'CS220',
                    start: '2014-12-11T08:00:00',
                    end: '2014-12-11T09:30:00',
                    color: '#9CC12E',
                    room: 'AB 101'
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
        <button class="btn btn-default dropdown-toggle" type="button" id="buildingMenu" data-toggle="dropdown">Building: Another Building
        <span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
          <li role="presentation"><a role="menuitem" tabindex="-1" href="bsbschedule.php">Bible Studies Building</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="scienceschedule.php">Science Building</a></li>
          <li role="presentation" class="divider"></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="calendar.php">Back to Mabee Business Building</a></li>
        </ul>
    </div>
    <div id='calendar'></div>
    <a class="btn btn-lg btn-primary btn-block" id="calButton" href="confirm.php">Confirm Class</a>
</div>

</body>
</html>
