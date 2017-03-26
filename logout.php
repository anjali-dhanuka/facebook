<?php
session_start();
?>



<!Doctype html>
<html>
<head>
<style>
</style>
</head>
<body>
<?php
session_destroy();

echo $_SESSION['login'];
setcookie("anjali", "", time() -3600,'/');


        



/*if(count($_COOKIE) > 0) {
      echo "Cookies are enabled.";
} else {
      echo "Cookies are disabled.";
}*/
?>
<h1>You have logged out!!</h1>
</body>
</html>
