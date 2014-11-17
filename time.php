
 <!-- A place for users to sign up for tests by entering a day, time, and course number -->

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Test Scheduler</title>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="style.css" rel="stylesheet" />
		<link href='http://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>
		<!-- <script src="js/book-script.js"></script> -->
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<!-- Optional theme -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
		<!-- Latest compiled and minified JavaScript -->
		<script type="text/javascript" src="loginCheck.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<!--<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"</script>-->

		<!-- code for search bar auto complete -->
		  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
  		  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  		  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
		  <script>
			$(function() {
				var availableTags = [
			      "20418 Scripting I - CS 115 - 01",
			      "20415 Scripting II - CS 116 - 01",
			      "20385 Programming I - CS 120 - 01",
			      "21339 Programming I - Part 2- CS 120 - DW1",
			      // "C",
			      // "C++",
			      // "Clojure",
			      // "COBOL",
			      // "ColdFusion",
			      // "Erlang",
			      // "Fortran",
			      // "Groovy",
			      // "Haskell",
			      // "Java",
			      // "JavaScript",
			      // "Lisp",
			      // "Perl",
			      // "PHP",
			      // "Python",
			      // "Ruby",
			      // "Scala",
			      // "Scheme"
			    ];
			    $( "#course" ).autocomplete({
			      source: availableTags
			    });
			});
		  </script>

	</head>
	<body>
		<header>
			<div class="pageTitle">
				<img itemprop="image" class="logo" src="ACUlogo.png" alt="acu"/>
				<h1 class="title">Class Scheduler</h1>
			</div>
		</header>
		<div class="container">
        	<!-- http://www.w3schools.com/js/js_form_validation.asp | Copyright 1999-2014 by Refsnes Data. All Rights Reserved. -->	
            <form class="form-signin" name="schedule" action="calendar.php" method="post" onsubmit="return validateClass();">
           		<div id="semyearRemind">Spring 2015</div>
            	<!--<div id="course">Course Number / CRN</div>-->
            	<input class="form-control" id="course" type="text" name="courseNum" placeholder="Course Number (CS330) / CRN" autofocus/>

	             <div>
					<select class="form-control" name="instructor" id="instructor" class="dropdown">  
		               <option value = "">Instructor</option>
		               <option value = "James Prather">James Prather</option>
		               <option value = "John Homer">John Homer</option>
		               <option value = "Brent Reeves">Brent Reeves</option>
		            </select>
	        	</div>

            	<div class="checkbox">
  					<label>
				        <input type="checkbox" name="testDay" id ="Monday" value ="Monday"/>Monday
				    </label>
				</div>
				<div class="checkbox">
  					<label>
				        <input type="checkbox" name="testDay" id ="Tuesday" value ="Tuesday"/>Tuesday
				    </label>
				</div>
				<div class="checkbox">
  					<label>
				        <input type="checkbox" name="testDay" id ="Wednesday" value ="Wednesday"/>Wednesday
				    </label>
				</div>
				<div class="checkbox">
  					<label>
				        <input type="checkbox" name="testDay" id ="Thursday" value ="Thursday"/>Thursday
				    </label>
				</div>
				<div class="checkbox">
  					<label>
				        <input type="checkbox" name="testDay" id ="Friday" value ="Friday"/>Friday
				    </label>
	         	</div>

	             <div>
					<select class="form-control" name="testTime" id="time" class="dropdown">  
		               <option value = "">Time</option>
		               <option value = " 8:00">8:00</option>
		               <option value = " 9:00">9:00</option>
		               <option value = "10:00">10:00</option>
		               <option value = "10:00">12:00</option>
		               <option value = " 1:00"> 1:00</option>
		               <option value = " 2:00"> 2:00</option>
		               <option value = " 3:00"> 3:00</option>
		               <option value = " 4:00"> 4:00</option>
		               <option value = " 5:00"> 5:00</option>
		               <option value = " 6:00"> 6:00</option>
		               <option value = " 7:00"> 7:00</option>
		            </select>
	        	</div>
	            <div id="errorMessage"></div>
	            <button class="btn btn-lg btn-primary btn-block" type="submit">Schedule it!</button>
			</form>
		</div>
	</body>
</html>