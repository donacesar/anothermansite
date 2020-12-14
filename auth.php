<?php 
	
	require_once __DIR__ . '/functions.php';

	$admin = auth($_POST['email'], $_POST['password']);
	if (false === $admin) {
		header('Location: /login.php');
		die;
	}

	$adminSessionId = hash('sha256', microtime(true) . uniqid());
	setcookie(COOCKIE_NAME, $adminSessionId);
	saveAdminSession($admin, $adminSessionId);
	header('Location: /admin.php');
 ?>