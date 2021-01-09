<!DOCTYPE HTML>
<html>
<head> <meta http-equiv="Content-Type„
	content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
session_start();
$zmienna = $_GET['z'];
$_SESSION['zm'] = $zmienna;


if(isset($_COOKIE['oddano_glos'])&&isset($_COOKIE['ip']))
{
	if($_COOKIE['oddano_glos']>time()&&$_COOKIE['ip']==$_SERVER['REMOTE_ADDR'])
	echo "<meta http-equiv=\"refresh\"content=\"0;URL=stop_captcha.html\">";
}







?>
	<div id="formularz">
		<form method="post" action="sprawdz.php">
		<img src="captcha.php" alt="captcha" name="captcha">
		<br>
		<input name="kod" type="text" placeholder="przepisz tekst z obrazka">
		<br><br>
		<input id="submit" type="submit" name="submit"  value="Oddaj głos">
		</form>
	</div>
</body>
</html>