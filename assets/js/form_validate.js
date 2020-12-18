// alert('hello world');

function validFirstname(){
	var fname=document.getElementById('fname').value;
	if(fname.length==0 || fname == ''){
		showMessage("* Required.","firstname_error","red");
	}
	else if(fname.length<3){
		showMessage("Not enough.","firstname_error","orange");
	}
	else if(!fname.match(/^[a-zA-Z]+$/)){
		showMessage("Alphabet are only accepted.","firstname_error","red");
	}
	else {
		showMessage("","firstname_error","");
	}
}

function validLastname() {
	var lname=document.getElementById('lname').value;
	if(lname.length==0 || lname == ''){
		showMessage("* Required.","lastname_error","red");
	}
	else if(lname.length<3){
		showMessage("Not enough.","lastname_error","orange");
	}
	else if(!lname.match(/^[a-zA-Z]+$/)){
		showMessage("Alphabet are only accepted.","lastname_error","red");
	}
	else {
		showMessage("","lastname_error","");
	}
}

function validEmail() {
	var email=document.getElementById('email').value;
	if(email.length==0 || email == ''){
		showMessage("* Required.","email_error","red");
	}
	else if(email.length<3){
		showMessage("Not enough.","email_error","orange");
	}
	else if(!email.match(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/)){
		showMessage("Invalid email.","email_error","red");
	}
	else {
		showMessage("","email_error","");
	}
}

function validMobile() {
	var mobile=document.getElementById('mobile').value;
	if(mobile.length==0 || mobile == ''){
		showMessage("* Required.","mobile_error","red");
	}
	else if(!mobile.match(/^9[0-9]{9}$/)){
		showMessage("Valid mobile no. can contain only 10 digits.","mobile_error","red");
	}
	else {
		showMessage("","mobile_error","");
	}
}

function validUsername() {
	var username=document.getElementById('username').value;
	if(username.length==0 || username == ''){
		showMessage("* Required.","username_error","red");
	}
	else if(username.length<3){
		showMessage("Not enough.","username_error","orange");
	}
	else if(!username.match(/^[a-zA-Z0-9]+$/)){
		showMessage("Alpha-nmeric value only accepted.","username_error","red");
	}
	else {
		showMessage("","username_error","");
	}
}

function validPassword1() {
	var password=document.getElementById('password').value;
	if(password.length==0 || password == ''){
		showMessage("* Required.","password_error","red");
	}
	else if(password.length<6){
		showMessage("Password must contain at least 6 characters.","password_error","orange");
	}
	// else if(!password.match(/^[a-zA-Z]+$/)){
	// 	showMessage("Alphabet are only accepted","password_error","red");
	// }
	else {
		showMessage("","password_error","");
	}
}

function validPassword2() {
	var password=document.getElementById('password').value;
	var confirmPassword=document.getElementById('confirmPassword').value;
	if(confirmPassword.length==0 || confirmPassword == ''){
		showMessage("* Required.","confirmPassword_error","red");
	}
	else if(confirmPassword !== password){
		showMessage("Password not matched.","confirmPassword_error","red");
	}
	else {
		showMessage("","confirmPassword_error","");
	}
}



function showMessage(message,location,color){
	document.getElementById(location).innerHTML=message;
	document.getElementById(location).style.color=color;
	document.getElementById(location).select;
}
