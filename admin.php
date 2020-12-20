<?php
require __DIR__ . '/autoload.php';

$admin = new \Models\Admin();
$CurrentAdmin = $admin->getCurrentAdmin();
if ($CurrentAdmin == null) {
    header('Location: /login.php');
}
?>

<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="lt-ie9 lt-ie8 lt-ie7" lang="ru"> <![endif]-->
<!--[if IE 7]>
<html class="lt-ie9 lt-ie8" lang="ru"> <![endif]-->
<!--[if IE 8]>
<html class="lt-ie9" lang="ru"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="ru"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=0.78">

    <title>Admin</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="" type="image/x-icon">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
<div class="log-out"><a href="/logout.php"><p>Logout</p></a></div>
<div>
    <h1>Админка</h1>
    <h2><?php echo $CurrentAdmin['login']; ?></h2>
</div>

</body>
</html>
