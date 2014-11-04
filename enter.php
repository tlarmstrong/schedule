
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
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	</head>
	<body>
		<header>
			<div class="title">
				<h1 class="pageTitle">ACU Test Scheduler</h1>
			</div>
		</header>
		<div class="container">
        	<!-- http://www.w3schools.com/js/js_form_validation.asp | Copyright 1999-2014 by Refsnes Data. All Rights Reserved. -->	
            <form class="form-signin" name="schedule" action="calendar.php" method="post" onsubmit="return validateTest();">
            <h2 class="form-signin-heading">Schedule it!</h2>
           
            	<div id="course">Course Number</div>
            	<input class="form-control" type="text" name="courseNum" placeholder="CS330"/>

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
		               <option value = "">time</option>
		               <option value = " 8:00">8:00</option>
		               <option value = " 9:00">9:00</option>
		               <option value = "10:00">10:00</option>
		               <option value = " 1:00"> 1:00</option>
		               <option value = " 2:00"> 2:00</option>
		            </select>
	        	</div>
	            <div id="errorMessage"></div>
	            <button class="btn btn-lg btn-primary btn-block" type="submit">Go</button>
			</form>
		</div>
	</body>
</html>