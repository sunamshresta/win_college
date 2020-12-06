function valid(){
	var fname=document.getElementById('fname').value;
	if(fname.length==0){
		showMessage("*REQUIRED","erru","red");
	}
	else if(fname.length<3){
		showMessage("no enough","erru","yellow");
	}
	else if(!fname.match(/^[a-zA-Z]{3,8}\s{1}[a-zA-Z]{4,12}$/)){
		showMessage("enter first and last name","erru","red");
	}
	else{
		showMessage("valid username","erru","green");
	}
}
function showMessage(message,location,color){
	document.getElementById(location).innerHTML=message;
	document.getElementById(location).style.color=color;
}
