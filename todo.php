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
				<h1 class="title">Class Scheduler: To Do / Edit New</h1>
			</div>
			</header>

	        <div class="row">

	       <div class="col-md-5">
			<div class="todoList">
	        	<div class="topStripWelcome">
            		<h3>Work on do list</h3>
            	</div>
	        	<div class="checkbox todoIssue">
  					<label>
				        <input type="checkbox" name="issue" id ="conflict" value ="conflict"/>
				        <div class="todo1">
  							<h4>CS230: Schedule Conflicts</h4>
  							<p>The class time has changed. View a list of students with conflicts.</p>
						</div>
				    </label>
				</div>
				<div class="checkbox todoIssue">
  					<label>
				        <input type="checkbox" name="issue" id ="conflict" value ="conflict"/>
				        <div class="todo">
  							<h4>IT331: Room Availability</h4>
  							<p>No room is available for the class at the scheduled time. Choose a different time or schedule a room.</p>
						</div>
				    </label>
				</div>
				<div class="checkbox todoIssue">
  					<label>
				        <input type="checkbox" name="issue" id ="conflict" value ="conflict"/>
				        <div class="todo">
  							<h4>IT325: Schedule Change</h4>
  							<p>The class time has changed. View a list of students with conflicts.</p>
						</div>
				    </label>
				</div>
				<div class="checkbox todoIssue">
  					<label>
				        <input type="checkbox" name="issue" id ="conflict" value ="conflict"/>
				        <div class="todo">
  							<h4>CS330: Time Conflict</h4>
  							<p>The scheduled class time conflicts with a professor's schedule. Choose a different time.</p>
						</div>
				    </label>
				</div>
				<div class="checkbox todoIssue">
  					<label>
				        <input type="checkbox" name="issue" id ="conflict" value ="conflict"/>
				        <div class="todo">
  							<h4>CS432: Room Availablity</h4>
  							<p>No room is available for the class at the scheduled time. Choose a different time or schedule a room.</p>
						</div>
				    </label>
	         	</div>

	         	<div class="checkbox todoIssue">
  					<label>
				        <input type="checkbox" name="issue" id ="conflict" value ="conflict"/>
				        <div class="todo">
  							<h4>CS325: Schedule Change</h4>
  							<p>The class time has changed. View a list of students with conflicts.</p>
						</div>
				    </label>
	         	</div>

	         	<div class="checkbox todoIssue">
  					<label>
				        <input type="checkbox" name="issue" id ="conflict" value ="conflict"/>
				        <div class="todo">
  							<h4>CS432: Room Availablity</h4>
  							<p>No room is available for the class at the scheduled time. Choose a different time or schedule a room.</p>
						</div>
				    </label>
	         	</div>

	         	<div class="checkbox todoIssue">
  					<label>
				        <input type="checkbox" name="issue" id ="conflict" value ="conflict"/>
				        <div class="todo">
  							<h4>CS525: Schedule Change</h4>
  							<p>The class time has changed. View a list of students with conflicts.</p>
						</div>
				    </label>
	         	</div>

	         	<div class="checkbox todoIssue">
  					<label>
				        <input type="checkbox" name="issue" id ="conflict" value ="conflict"/>
				        <div class="todo">
  							<h4>CS130: Schedule Conflicts</h4>
  							<p>The class time has changed. View a list of students with conflicts.</p>
						</div>
				    </label>
	         	</div>

	         	<div class="checkbox todoIssue">
  					<label>
				        <input type="checkbox" name="issue" id ="conflict" value ="conflict"/>
				        <div class="todo">
  							<h4>CS430: Schedule Conflicts</h4>
  							<p>The class time has changed. View a list of students with conflicts.</p>
						</div>
				    </label>
	         	</div>

	         	<div class="checkbox todoIssue">
  					<label>
				        <input type="checkbox" name="issue" id ="conflict" value ="conflict"/>
				        <div class="todo">
  							<h4>CS120: Time Conflict</h4>
  							<p>The scheduled class time conflicts with a professor's schedule. Choose a different time.</p>
						</div>
				    </label>
	         	</div>

	         	<div class="checkbox todoIssue">
  					<label>
				        <input type="checkbox" name="issue" id ="conflict" value ="conflict"/>
				        <div class="todo">
  							<h4>CS115: Time Conflict</h4>
  							<p>The scheduled class time conflicts with a professor's schedule. Choose a different time.</p>
						</div>
				    </label>
	         	</div>
            
            <a class="btn btn-lg btn-primary btn-block" href="issue1.php">Resolve</a>

			</div>
		</div>
			<div class="col-md-5">
				<form class="form-signin todoList" name="schedule" action="calendar.php" method="post" onsubmit="return validateClass();">
           		<div class="topStripWelcome">
            		<h3>Edit a new class</h3>
            	</div>
            	<!--<div id="course">Course Number / CRN</div>-->

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

            	<input class="form-control" id="course" type="text" name="courseNum" placeholder="Course Number (CS330) / CRN" autofocus/>

	        	<div class="topStripWelcome">
            		<h5>Choose a room type</h5>
            	</div>
	        	<div class="checkbox">
  					<label>
				        <input type="checkbox" name="roomType" id ="roomType" value ="auditorium"/>
				        <div class="room"><p>Auditorium | Seats: 300</p><img src="auditorium.jpg" alt="auditorium classroom" class="roomImages">
				        </div>
				    </label>
				</div>
				<div class="checkbox">
  					<label>
				        <input type="checkbox" name="roomType" id ="roomType" value ="largeRoom"/>
				        <div class="room"><p>Large Smart Room | Seats: 100</p><img src="largeRoom.jpg" alt="large classroom" class="roomImages">
				        </div>
				    </label>
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

				<div class="topStripWelcome">
            		<h5>Edit day and time</h5>
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
		</div>
	</body>
</html>