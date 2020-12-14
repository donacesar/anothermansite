<?php 
	
	$password = '123';

	//echo sha1($password);

	echo password_hash($password, PASSWORD_DEFAULT);

 ?>