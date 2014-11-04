function validateUser()
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
}

function validateForm()
{
	var user = document.forms["signUp"]["username"].value;
	var pass = document.forms["signUp"]["password"].value;

	if ((user == null || user == "") && (pass == null || pass == ""))
	{
			document.getElementById("passError").innerHTML = "Please enter a username and password";
			return false;
	}

	else if (user == null || user == "")
  	{
  		//alert("Please enter your username");
  		document.getElementById("nameError").innerHTML = "Please enter a username";
  		return false;
  	}

	else if (pass == "" || pass == null)
	{
		//alert("Passwords must match");
		document.getElementById("passError").innerHTML = "Please enter a password";
		return false;
	}
}

function validateTest()
{
	var course = document.forms["schedule"]["courseNum"].value;
	var time = document.forms["schedule"]["testTime"].value;
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


	if ((course == null || course == "") && (time == "") && (day == 0))
	{
			document.getElementById("errorMessage").innerHTML = "Please enter a course number, test day and time";
			return false;
	}

	else if (course == null || course == "")
  	{
  		//alert("Please enter your username");
  		document.getElementById("errorMessage").innerHTML = "Please enter a course number";
  		return false;
  	}

  	else if (time == "" && day == 0)
  	{
  		//alert("Please enter your username");
  		document.getElementById("errorMessage").innerHTML = "Please enter a time and day";
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