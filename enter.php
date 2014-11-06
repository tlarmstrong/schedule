
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
            <form class="form-signin" name="semyear" action="time.php" method="post" onsubmit="return validateSemester();">

	             <div>
					<select class="form-control" name="semester" id="semester" class="dropdown" autofocus>  
		               <option value = "">Semester</option>
		               <option value = "Fall">Fall</option>
		               <option value = "Spring">Spring</option>
		               <option value = "Summer I">Summer I</option>
		               <option value = "Summer II">Summer II</option>
		               <option value = "Summer III">Summer III</option>
		               <option value = "Summer III">Summer III</option>
		               <option value = "Summer IV">Summer III</option>
		            </select>
	        	</div>
	        	<div>
					<select class="form-control" name="year" id="year" class="dropdown">  
		               <option value = "">Year</option>
		               <option value = "2014">2014</option>
		               <option value = "2015">2015</option>
		               <option value = "2016">2016</option>
		            </select>
	        	</div>
	            <div id="errorMessage"></div>
	            <button class="btn btn-lg btn-primary btn-block" type="submit">Next</button>
			</form>
		</div>
	</body>
</html>