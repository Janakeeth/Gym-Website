<?php
$connection= mysqli_connect('localhost:3306','root','');
	if(!$connection){
		echo "Not connected to the server!";
	}
	if(!mysqli_select_db($connection,'fitzonegymsdb'))
	{
	echo "Database not selected!!";	
	}
	else
	{
		//echo "You are successfully Logged in!";
	}
?>


