function validateForm()
{
if(window.document.formElem.name.value == "" || window.document.formElem.name.value == NULL)
	{
		alert("ERROR!! Please Enter a valid Name");
		return false;
	}
if(window.document.formElem.username.value == "" || window.document.formElem.username.value == NULL)
	{
		alert("ERROR!! Please Enter a valid USERNAME");
		return false;
	}
if(window.document.formElem.password.value == "" || window.document.formElem.password.value == NULL)
	{
		alert("ERROR!! Please Enter a valid PASSWORD");
		return false;
	}
if(window.document.formElem.mail.value == "" || window.document.formElem.mail.value == NULL)
	{
		alert("ERROR!! Please Enter a valid EMAIL ID");
		return false;
	}
if(window.document.formElem.age.value == "" || window.document.formElem.age.value == NULL)
	{
		alert("ERROR!! Please Enter a valid AGE");
		return false;
	}
if(window.document.formElem.address.value == "" || window.document.formElem.address.value == NULL)
	{
		alert("ERROR!! Please Enter a valid ADDRESS");
		return false;
	}
}