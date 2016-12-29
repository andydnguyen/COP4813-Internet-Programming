/*************************************
Submit Button
*************************************/
function submit() {

	/*************************************
	Person-Info
	*************************************/	
	var firstName = document.getElementById('firstname').value;
	var lastName = document.getElementById('lastname').value;
	var contactNumber = document.getElementById('contact').value;
	var email = document.getElementById('e-mail').value;

	/*************************************
	Coffee-Info
	*************************************/

	/*var type = document.theForm.type[0].checked;
	var size = document.theForm.size[0].checked;*/
	var bean = document.getElementById('bean1');
	var bean2 = bean.options[bean.selectedIndex].value;
	var extras = document.querySelectorAll('.checkbox');

	isEmpty(firstName, lastName, contactNumber, email,bean2);

}

/*************************************
Reset Button
*************************************/
function reset() {

	document.getElementById("Form").reset();
}

/*************************************
Validate
*************************************/
function isEmpty(firstName, lastName, contactNumber, email, bean2) {
var errorMessage = "";

if(firstName == "")
{
	errorMessage = "Enter a first name.\n";
}

if(lastName == "")
{
	errorMessage += "Enter a last name.\n";
}

if(contactNumber == "")
{
	errorMessage += "You must provide a number.\n";
}

if(email == "")
{
	errorMessage += "Enter a email.\n";
}

if(bean2 == "default")
{
	errorMessage += "You must select a bean.\n"
}


if(errorMessage != "")
{
	alert(errorMessage);
}

if(errorMessage == "")
{
	alert('Thank you. Your order has been submit!!'); 	
}

}