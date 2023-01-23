
function validate()
{
	var firstName =document.getElementById("firstname").value;
	var lastname =document.getElementById("lastname").value;
	var email =document.getElementById("email").value;
	var password =document.getElementById("password").value;

	if(firstName =="" || lastname ==""  || email =="" ||  password =="")
	{
		document.getElementById("message").innerHTML="Not Success!! re-check this form";
		return false;
	}
	else
	{
		document.getElementById("message").innerHTML="Successfully Done!!";
		return true;
	}

}