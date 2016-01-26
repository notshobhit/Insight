function validateForm() {
	
	var fnam = document.forms["signUpForm"]["fname"].value;
	var lnam = document.forms["signUpForm"]["lname"].value;
	var mailId = document.forms["signUpForm"]["email"].value;
	var pass1 = document.forms["signUpForm"]["pass"].value;
	var pass2 = document.forms["signUpForm"]["passConfirm"].value;
	var date = document.forms["signUpForm"]["birthDate"].value;
	var month = document.forms["signUpForm"]["birthMonth"].value;
	var year = document.forms["signUpForm"]["birthYear"].value;
	var check = 0;
	
	
	
	if (fnam == null || fnam == "" ){
		document.getElementById('fnametextbox').style.borderBottom='2px solid #ff0000';
		check = 1;
	}
	else {
		document.getElementById('fnametextbox').style.borderBottom='2px solid #dcdcdc'; //if user enters input after being prompted, red borderBottom should change back to normal
	}
	
	
	if (lnam == null || lnam == "" ){
		document.getElementById('lnametextbox').style.borderBottom='2px solid #ff0000';
		check = 1;
	}
	else {
		document.getElementById('lnametextbox').style.borderBottom='2px solid #dcdcdc'; //if user enters input after being prompted, red borderBottom should change back to normal
	}
	
	
	if (mailId == null || mailId == "" ){
		document.getElementById('emailidtextbox').style.borderBottom='2px solid #ff0000';
		check = 1;
	}
	else {
		document.getElementById('emailidtextbox').style.borderBottom='2px solid #dcdcdc'; //if user enters input after being prompted, red borderBottom should change back to normal
	}
	
	
	if (pass1 == null || pass1 == "" ){
		document.getElementById('pass1textbox').style.borderBottom='2px solid #ff0000';
		check = 1;
	}
	else {
		document.getElementById('pass1textbox').style.borderBottom='2px solid #dcdcdc'; //if user enters input after being prompted, red borderBottom should change back to normal
	}
	
	
	if (pass2 == null || pass2 == "" ){
		document.getElementById('pass2textbox').style.borderBottom='2px solid #ff0000';
		check = 1;
	}
	else {
		document.getElementById('pass2textbox').style.borderBottom='2px solid #dcdcdc'; //if user enters input after being prompted, red borderBottom should change back to normal
	}
	
	//to ensure passwords match :
	if (pass1 != pass2){
		document.getElementById('notif').innerHTML = "Entered passwords do not match.";
		document.getElementById('pass1textbox').style.borderBottom='2px solid #ff0000';
		document.getElementById('pass2textbox').style.borderBottom='2px solid #ff0000';
		check = 1;
	}
	else if(pass2.strlen>0){
		document.getElementById('pass1textbox').style.borderBottom='2px solid #dcdcdc';  //if passwords match after being prompted, red borderBottom should change back to normal
		document.getElementById('pass2textbox').style.borderBottom='2px solid #dcdcdc';
	}
	
	if (pass1.length < 5) {
		document.getElementById('notif').innerHTML = "Password should be at least 5 charecters long";
		document.getElementById('pass1textbox').style.borderBottom='2px solid #ff0000';
		check = 1;
	}
	
	
	//check for DOB
	if (date == "0"){
		document.getElementById('selectDate').style.borderLeft='2px solid #ff0000';
		document.getElementById('selectDate').style.borderRight='2px solid #ff0000';
		check = 1;
	}
	
	if (month == "0"){
		document.getElementById('selectMonth').style.borderLeft='2px solid #ff0000';
		document.getElementById('selectMonth').style.borderRight='2px solid #ff0000';
		check = 1;
	}
	
	if (year == "0"){
		document.getElementById('selectYear').style.borderLeft='2px solid #ff0000';
		document.getElementById('selectYear').style.borderRight='2px solid #ff0000';
		check = 1;
	}
	
	
	
	//Final check :
	if (check == 1){
		return false;
	}
}