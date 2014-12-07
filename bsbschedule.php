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
                    id: 101,
                    title: 'BIBL101',
                    start: '2014-12-09T15:00:00',
                    end: '2014-12-09T16:30:00',
                    room: 'BSB 115'
                },
                {
                    id: 230,
                    title: 'CS230',
                    start: '2014-12-11T15:00:00',
                    end: '2014-12-11T16:30:00',
                    room: 'BSB 115'
                },
                {
                    id: 310,
                    title: 'CORE310',
                    start: '2014-12-08T12:00:00',
                    end: '2014-12-08T13:00:00',
                    room: 'BSB 101'
                },
                {
                    id: 310,
                    title: 'CORE310',
                    start: '2014-12-10T12:00:00',
                    end: '2014-12-10T13:00:00',
                    room: 'BSB 101'
                },
                {
                    id: 310,
                    title: 'CORE310',
                    start: '2014-12-12T12:00:00',
                    end: '2014-12-12T13:00:00',
                    room: 'BSB 101'
                },
                {
                    id: 115,
                    title: 'CORE115',
                    start: '2014-12-09T10:00:00',
                    end: '2014-12-09T11:00:00',
                    room: 'BSB 115'
                },
                {
                    id: 115,
                    title: 'CORE115',
                    start: '2014-12-11T10:00:00',
                    end: '2014-12-11T11:00:00',
                    room: 'BSB 115'
                },
                {
                    id: 211,
                    title: 'BIBL211',
                    start: '2014-12-08T13:00:00',
                    end: '2014-12-08T14:00:00',
                    room: 'BSB 102'
                },
                {
                    id: 211,
                    title: 'BIBL211',
                    start: '2014-12-10T13:00:00',
                    end: '2014-12-10T14:00:00',
                    room: 'BSB 102'
                },
                {
                    id: 211,
                    title: 'BIBL211',
                    start: '2014-12-12T13:00:00',
                    end: '2014-12-12T14:00:00',
                    room: 'BSB 102'
                },
                {
                    id: 105,
                    title: 'BIBL105',
                    start: '2014-12-09T09:30:00',
                    end: '2014-12-09T11:00:00',
                    room: 'BSB 130'
                },
                {
                    id: 105,
                    title: 'BIBL105',
                    start: '2014-12-11T09:30:00',
                    end: '2014-12-11T11:00:00',
                    room: 'BSB 130'
                },
                {
                    id: 220,
                    title: 'CS220',
                    start: '2014-12-09T08:00:00',
                    end: '2014-12-09T09:30:00',
                    color: '#9CC12E',
                    room: 'BSB 142'
                },
                {
                    id: 220,
                    title: 'CS220',
                    start: '2014-12-11T08:00:00',
                    end: '2014-12-11T09:30:00',
                    color: '#9CC12E',
                    room: 'BSB 142'
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
        <button class="btn btn-default dropdown-toggle" type="button" id="buildingMenu" data-toggle="dropdown">Building: Bible Studies Building
        <span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
          <li role="presentation"><a role="menuitem" tabindex="-1" href="scienceschedule.php">Science Building</a></li>
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
