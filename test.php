<?php 

echo $_SERVER['REMOTE_ADDR'];
die;


foreach ($_SERVER as $key => $value) {
	echo $key . ' : ' . $value . '<br>';
}
die;
//var_dump($_SERVER);die;
//echo $_SERVER["HTTP_USER_AGENT"];die;
	
	$password = '123';

	//echo sha1($password);

	echo password_hash($password, PASSWORD_DEFAULT);

 ?>