<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<div class="border">
<?php
$tanggal= mktime(date("m"),date("d"),date("Y"));
date_default_timezone_set('Asia/Jakarta');
$jam=date("H:i:s");
$day = date ("H");
$agent = $_SERVER['HTTP_USER_AGENT'];

if (isset($_COOKIE))
	$acc = $_COOKIE['login'];

if ($acc == true){
	if (($day >= 6) and ($day <= 11)) {
		echo "<b> Selamat Pagi !! Semoga harimu menyenangkan </b><br><br>";
		echo "Anda sedang menggunakan web browser :" . "<br>" . $agent;
	}
	else if (($day > 12) and ($day <= 14)) {
		echo "<b> Selamat Siang !! Jangan lupa makan</b><br><br>";
		echo "Anda sedang menggunakan web browser :" . "<br>" . $agent;
	}
	else if (($day >= 15) and ($day <=18)) {
		echo "<b>Selamat Sore ^^</b><br><br>";
		echo "Anda sedang menggunakan web browser :" . "<br>" . $agent;
	}
	else {
		echo "<b>Selamat Malam !! Jangan tidur larut malam yah</b><br><br>";
		echo "Anda sedang menggunakan web browser :" . "<br>" . $agent;
}
}else { echo "Maaf anda belum Login";
}	
?>
</div>
</body>
</html>


