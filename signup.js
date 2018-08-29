var check = function() {
	if (document.getElementById('password').value ==
		document.getElementById('reppassword').value) 
	{
		document.getElementById('reppassword').style.color = 'green';
	} 
	else 
	{
		document.getElementById('reppassword').style.color = 'red';
	}
}

function signup(){
    
	if (document.getElementById('password').value ==
		document.getElementById('reppassword').value) 
	{
		document.getElementById('form1').action="newuser.php";
		document.getElementById('form1').submit();
	} 
	else 
	{
		document.getElementById('message').innerHTML = '<br><i class="fa fa-exclamation-triangle"  style="color:#660000"></></i> Password did not matched <br>';
	}
}