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
                    id: 435,
                    title: 'CS435',
                    start: '2014-12-08T08:00:00',
                    end: '2014-12-08T09:00:00',
                    color: '#9CC12E',
                    room: 'MBB 115'
                },
                {
                    id: 435,
                    title: 'CS435',
                    start: '2014-12-10T08:00:00',
                    end: '2014-12-10T09:00:00',
                    color: '#9CC12E',
                    room: 'MBB 115'
                },
                {
                    id: 435,
                    title: 'CS435',
                    start: '2014-12-12T08:00:00',
                    end: '2014-12-12T09:00:00',
                    color: '#9CC12E',
                    room: 'MBB 115'
                },
                {
                    id: 230,
                    title: 'CS230',
                    start: '2014-12-09T15:00:00',
                    end: '2014-12-09T16:30:00',
                    room: 'MBB 115'
                },
                {
                    id: 230,
                    title: 'CS230',
                    start: '2014-12-11T15:00:00',
                    end: '2014-12-11T16:30:00',
                    room: 'MBB 115'
                },
                {
                    id: 330,
                    title: 'CS330',
                    start: '2014-12-09T16:30:00',
                    end: '2014-12-09T18:00:00',
                    room: 'MBB 217'
                },
                {
                    id: 330,
                    title: 'CS330',
                    start: '2014-12-11T16:30:00',
                    end: '2014-12-11T18:00:00',
                    room: 'MBB 217'
                },
                {
                    id: 432,
                    title: 'IS432',
                    start: '2014-12-08T10:00:00',
                    end: '2014-12-08T11:00:00',
                    room: 'MBB 317'
                },
                {
                    id: 432,
                    title: 'IS432',
                    start: '2014-12-10T10:00:00',
                    end: '2014-12-10T11:00:00',
                    room: 'MBB 317'
                },
                {
                    id: 432,
                    title: 'IS432',
                    start: '2014-12-12T10:00:00',
                    end: '2014-12-12T11:00:00',
                    room: 'MBB 317'
                },
                {
                    id: 115,
                    title: 'CS115',
                    start: '2014-12-08T10:00:00',
                    end: '2014-12-08T11:00:00',
                    room: 'MBB 312'
                },
                {
                    id: 115,
                    title: 'CS115',
                    start: '2014-12-10T10:00:00',
                    end: '2014-12-10T11:00:00',
                    room: 'MBB 312'
                },
                {
                    id: 115,
                    title: 'CS115',
                    start: '2014-12-12T10:00:00',
                    end: '2014-12-12T11:00:00',
                    room: 'MBB 312'
                },
                {
                    id: 310,
                    title: 'IT310',
                    start: '2014-12-09T08:00:00',
                    end: '2014-12-09T09:30:00',
                    room: 'MBB 312'
                },
                {
                    id: 310,
                    title: 'IT310',
                    start: '2014-12-11T08:00:00',
                    end: '2014-12-11T09:30:00',
                    room: 'MBB 312'
                },
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
        <button class="btn btn-default dropdown-toggle" type="button" id="buildingMenu" data-toggle="dropdown">Building: Mabee Business Building
        <span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
          <li role="presentation"><a role="menuitem" tabindex="-1" href="bsbschedule.php">Bible Studies Building</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="scienceschedule.php">Science Building</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="anotherschedule.php">Another Building</a></li>
        </ul>
    </div>
    <div id='calendar'></div>
    <a class="btn btn-lg btn-primary btn-block" id="calButton" href="confirm2.php">Confirm Class</a>
</div>

</body>
</html>
