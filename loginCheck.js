/*function validateUser()
{
	var user = document.forms["signUp"]["username"].value;

	if (user == null || user == "")
	  	{
	  		alert("Please enter your username");
	  		return false;
	  	}
}

function validatePass()
{
	// http://stackoverflow.com/questions/14411235/while-typing-in-a-text-input-field-printing-the-content-typed-in-a-div
	var pass = document.forms["signUp"]["password"].value;

	if (pass == null || pass == "")
	{
		alert("Please enter your password");
	  		return false;
	}
}*/

function validateForm()
{
	var user = document.forms["signUp"]["username"].value;
	var pass = document.forms["signUp"]["password"].value;

	if ((user == null || user == "") && (pass == null || pass == ""))
	{
			document.getElementById("errorMessage").innerHTML = "Please enter a username and password";
			return false;
	}

	else if (user == null || user == "")
  	{
  		//alert("Please enter your username");
  		document.getElementById("errorMessage").innerHTML = "Please enter a username";
  		return false;
  	}

	else if (pass == "" || pass == null)
	{
		//alert("Passwords must match");
		document.getElementById("errorMessage").innerHTML = "Please enter a password";
		return false;
	}
}

function validateSemester()
{
	var semester = document.forms["semyear"]["semester"].value;
	var year = document.forms["semyear"]["year"].value;

	if (semester == "" && year == "")
	{
			document.getElementById("errorMessage").innerHTML = "Please choose a semester and year";
			return false;
	}

	else if (semester == "")
	{
			document.getElementById("errorMessage").innerHTML = "Please choose a semester";
			return false;
	}

	else if (year == "")
	{
			document.getElementById("errorMessage").innerHTML = "Please choose a year";
			return false;
	}
}

function validateClass()
{
	var course = document.forms["schedule"]["courseNum"].value;
	var time = document.forms["schedule"]["testTime"].value;
	var instructor = document.forms["schedule"]["instructor"].value;
	//var day = document.forms["schedule"]["testDay"].value;


	var day = 0;
	if(document.getElementById("Monday").checked)
		day += 1;
	if(document.getElementById("Tuesday").checked)
		day += 1;
	if(document.getElementById("Wednesday").checked)
		day += 1;
	if(document.getElementById("Thursday").checked)
		day += 1;
	if(document.getElementById("Friday").checked)
		day += 1;


	if ((course == null || course == "") && (instructor == "") && (time == "") && (day == 0))
	{
			document.getElementById("errorMessage").innerHTML = "Please enter a course number, instructor, day, and time for the course";
			return false;
	}

  	else if (time == "" && day == 0 && instructor == "")
  	{
  		//alert("Please enter your username");
  		document.getElementById("errorMessage").innerHTML = "Please choose an instructor, day, and time for the course";
  		return false;
  	}

  		else if (course == null || course == "")
  	{
  		//alert("Please enter your username");
  		document.getElementById("errorMessage").innerHTML = "Please enter a course number";
  		return false;
  	}
  	
  	else if (instructor == "")
  	{
  		document.getElementById("errorMessage").innerHTML = "Please choose an instructor";
  		return false;
  	}

	else if (time == "")
  	{
  		//alert("Please enter your username");
  		document.getElementById("errorMessage").innerHTML = "Please enter a time";
  		return false;
  	}

	else if (day == 0)
	{
		//alert("Passwords must match");
		document.getElementById("errorMessage").innerHTML = "Please enter a day";
		return false;
	}
}