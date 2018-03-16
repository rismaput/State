<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<div class="subborder">
<?php
    $username = $_REQUEST['user'];
    $password = $_REQUEST['pass'];

    if($username == "rismaput" and 
        $password == "rahasia") {
            setcookie("login", true, time() + 1800);
            echo "Anda berhasil login";
        }
        else echo "Login gagal.";
?>
</div>
</body>
</html>