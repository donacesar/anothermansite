<?php 

	const COOCKIE_NAME = 'MYSESSID';
	const DB_PATH = 'mysql:host = localhost; dbname=anotherman';
	const DB_LOGIN = 'root';
	const DB_PASSWORD = '';
	
	function auth($login, $pass)
	{
		$login = $_POST['login'];
		$pass = $_POST['password'];
		if (empty($login) || empty($pass)) {
			header('Location: /login.php');
		}
		$dbh = new PDO(DB_PATH, DB_LOGIN, DB_PASSWORD);
		$sth = $dbh->prepare('SELECT * FROM admins WHERE login=:login');
		$sth->execute([':login' => $login]);
		$data = $sth->fetch();
		if(!empty($data)) {
			if (password_verify($pass, $data['password'])) {
				return $data['id']; 
			}

		}
		return false;
		die;

	}

	function saveAdminSession($admin, $hash)
	{	
		$dbh = new PDO(DB_PATH, DB_LOGIN, DB_PASSWORD);
		$sth = $dbh->prepare('INSERT INTO admin_sessions (admin_id, hash) VALUES (:admin_id, :hash)');
	
		return $sth->execute([':admin_id' => $admin, ':hash' => $hash]);
	}

	function getCurrentAdmin()
	{
		$hash = $_COOKIE[COOCKIE_NAME] ?? null;
		if (empty($hash)) {
			return null;
		}

		$dbh = new PDO(DB_PATH, DB_LOGIN, DB_PASSWORD);
		$sth = $dbh->prepare('SELECT * FROM admin_sessions WHERE hash=:hash');
		$sth->execute([':hash' => $hash]);
		$data = $sth->fetch();
		if (empty($data)) {
			return null;
		}

		$sth = $dbh->prepare('SELECT * FROM admins WHERE id=:id');
		$sth->execute([':id' => $data['admin_id']]);
		return $sth->fetch();
	}

 ?>