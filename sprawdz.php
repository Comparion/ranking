<?php
session_start();
$kodek = htmlspecialchars($_POST['kod']);
$zmienna = $_SESSION['zm'];
$plik = 'glosy.txt';

if ($kodek==$_SESSION['captcha'])
{
	setcookie('oddano_glos', time()+120);
	setcookie('ip',$_SERVER['REMOTE_ADDR']);
	$fp = fopen("glosy.txt", "r");

  for ($i = 0; $i < $zmienna; $i++) {
	$linia = fgets($fp);          
	}
	

	fclose ($fp);
	$linia = (int) $linia;
	$linia++;
	$p = (int)$zmienna;
	$stats = file('glosy.txt', FILE_IGNORE_NEW_LINES);   // read file into array


	array_splice($stats, $zmienna, 0, $linia);    // insert $newline at $offset
	array_splice($stats,$zmienna-1 , 1);
	file_put_contents('glosy.txt', join("\n", $stats));    // write to file
		

	echo "<meta http-equiv=\"refresh\"content=\"0;URL=good_captcha.html\">";
	unset($_SESSION['zm']);
	session_destroy();
}
else 
{
	echo "<meta http-equiv=\"refresh\"content=\"0;URL=error_captcha.html\">";
	unset($_SESSION['zm']);
	session_destroy();
}

?>