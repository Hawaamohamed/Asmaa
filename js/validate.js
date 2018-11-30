
function validate(e){
	var userName = document.getElementById("username").value;
	var password = document.getElementById("password").value;
	var errors = [];

	if (!checkLength(userName,1,100)) {
		errors[errors.length] = "You must enter a username.";
	}

	if (!checkLength(password,1,100)) {
		errors[errors.length] = "You must enter a password.";
	}

	if (errors.length > 0) {
		reportErrors(errors);
		e.preventDefault();
	}
}

function checkLength(text, min, max){
	if (text.length < min || text.length > max) {
		return false;
	}
	return true;
}

function reportErrors(errors){
	var msg = "There were some problems...\n";
	var numError;
	for (var i=0; i<errors.length; i++) {
		numError = i + 1;
		msg += "\n" + numError + ". " + errors[i];
	}
	alert(msg);
	
}

window.onload = function() {
	document.getElementById("logInForm").addEventListener("submit", 
		function(e){
    			validate(e);
		});
}

