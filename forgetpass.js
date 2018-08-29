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

function submit1(){
    
	if (document.getElementById('password').value ==
		document.getElementById('reppassword').value) 
	{
		document.getElementById('form2').action="renewpass.php";
		document.getElementById('form2').submit();
	} 
	else 
	{
		document.getElementById('message').innerHTML = '<br><i class="fa fa-exclamation-triangle"  style="color:#660000"></></i> Password did not matched <br>';
	}
}