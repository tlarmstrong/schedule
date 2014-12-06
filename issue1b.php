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
		
		<div class="bodyWrap">
			<header>
			<div class="pageTitle todoListDetails">
				<img itemprop="image" class="logo" src="ACUlogo.png" alt="acu"/>
				<h1 class="title">Class Scheduler: To Do List Details</h1>
			</div>
		</header>

	        	<div class="row">

	        		<div class="col-md-4 issue">
				  	<div class="topStrip">
				  		<h4>CS435: Room Availability</h4>
				  	</div>
				  	<p><strong>CS432 Programming Languages</strong></br>
				  			Semester: Spring 2015</br></br>
  							Days: Monday | Wednesday | Friday</br>
  							Time: 8:00a - 8:50a</p>

  						<p>Professor: John Homer</p>
  							<p>Enrolled: 30 </br>
  							Action: Schedule a room</p>

				  		<form class="form-signin todoListForm" name="schedule" action="calendar1.php" method="post">
           
            	<!--<div id="course">Course Number / CRN</div>-->
            	<div class="topStrip">
            		<h5>Choose a room type</h5>
            	</div>
				<div class="checkbox">
  					<label>
				        <input type="checkbox" name="roomType" id ="roomType" value ="smallRoom"/>
				        <div class="room"><p>Small Smart Room | Seats: 30</p><img src="smartRoom.png" alt="small classroom" class="roomImages">
				        </div>
				    </label>
				</div>
				<div class="checkbox">
  					<label>
				        <input type="checkbox" name="roomType" id ="roomType" value ="workRoom"/>
				        <div class="room"><p>Work Room | Seats: 30</p><img src="workRoom.jpg" alt="work classroom" class="roomImages">
				        </div>
				    </label>
				</div>
				<div class="checkbox">
  					<label>
				        <input type="checkbox" name="roomType" id ="roomType" value ="lab"/>
				        <div class="room"><p>Computer Lab | Seats: 30</p><img src="computerLab.jpg" alt="computer lab" class="roomImages">
				        </div>
				    </label>
				</div>

				<div class="topStrip">
	        		<h5>Change day or time</h5>
	        	</div>
            	<div class="checkbox">
  					<label>
				        <input type="checkbox" name="testDay" id ="Monday" value ="Monday" />Monday
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
				  
				  <div class="col-md-4 issue">
				  	<div class="topStrip">
				  		<h4>IT325: Schedule Change</h4>
				  	</div>
				  		<p><strong>IT325 Web Development II</strong></br>
				  			Semester: Spring 2015</br></br>
				  			Room Type: Small Smart Room</br></br>
				  			<strong>Original Schedule</strong></br>
  							Days: Monday | Wednesday</br>
  							Time: 4:30p - 5:50p</p>
  						<p>Professor: James Prather</p>
  						<p>Note: Professor is unavailable.</br>
  							Action: Reschedule class</p>
				  		<form class="form-signin todoListForm" name="schedule" action="calendar.php" method="post" onsubmit="return validateClass();">
				<div class="topStrip">
	        		<h5>Available days and times</h5>
	        	</div>
            	<div class="checkbox">
  					<label>
				        <input type="checkbox" name="testDay" id ="Monday" value ="Monday" />Monday
				    </label>
				</div>

				<div class="checkbox">
  					<label>
				        <input type="checkbox" name="testDay" id ="Wednesday" value ="Wednesday"/>Wednesday
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
		               <option value = " 9:00">9:00</option>
		               <option value = "10:00">10:00</option>
		               <option value = "12:00">12:00</option>
		               <option value = " 1:00"> 1:00</option>
		               <option value = " 2:00"> 2:00</option>
		               <option value = " 3:00"> 3:00</option>
		            </select>
	        	</div>

	            <div id="errorMessage"></div>
	            <button class="btn btn-lg btn-primary btn-block" type="submit">Schedule it!</button>
			</form>
            </div>

            <div class="col-md-4 issue">
				  	<div class="topStrip">
				  		<h4>CS330: Schedule Conflicts</h4>
				  	</div>
				  		<p><strong>CS330 Human Computer Interaction I</strong></br>
				  			Semester: Spring 2015</br></br><strong>Original Schedule</strong></br>
  							Days: Monday | Wednesday | Friday</br>
  							Time: 8:00a - 8:50a</p>

  						<p><strong>New Schedule</strong></br>
  							Days: Tuesday | Thursday </br>
  							Time: 9:00a - 10:30a</p>

  							<p>Professor: James Prather</p>

  						<p>Number of students enrolled: <strong>18</strong></br>
  							Students with conflicts: <strong>3</strong></p>

  							<p>Action: Contact advisor<p/>

  						<div class="topStrip">
	        				<h5>Student Details</h5>
	        			</div>

  						<dl>
						  <dt>Tracey Armstrong</dt>
							  <dd>Major: Computer Science</dd>
							  <dd>Conflict: IT225 Web Development I</dd>
							  <dd>Advising Contact: <a class="link" href="mailto:someone@example.com">Kathy Garrison</a></dd>
							</br>
						  <dt>Landon Gray</dt>
							  <dd>Major: Computer Science</dd>
							  <dd>Conflict: CS330 HCI II</dd>
							  <dd>Advising Contact: <a class="link" href="mailto:someone@example.com">Kathy Garrison</a></dd>
							  </br>
						  <dt>Joe Smith</dt>
							  <dd>Major: Information Technology</dd>
							  <dd>Conflict: BIBL211 Old Testament</dd>
							  <dd>Advising Contact: <a class="link" href="mailto:someone@example.com">Kathy Garrison</a></dd>
							  </br>
						<a class="btn btn-lg btn-primary btn-block" href="confirm.php">Done!</a>
  					</div>
            	<!--<a class="btn btn-lg btn-primary btn-block" href="enter.php">Resolve</a>-->

		</div>
	</body>
</html>