
 <!-- A place for users to sign up for tests using their username and password. -->

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
			<form class="form-signin" role="form" name="signUp" action="enter.php" method="post" onsubmit="return validateForm();">
	        <h2 class="form-signin-heading">Login</h2>
            	<input class="form-control" type="text" name="username" placeholder = "username" onblur="return validateUser();"/>
            	<div id="nameError"></div>
				<input class="form-control" type="password" name="password" placeholder="password" onblur="return validatePass();"/>
				<div id="passError"></div>
				<button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
			</form>
		</div>
	</body>
</html>