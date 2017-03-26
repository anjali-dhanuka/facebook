<!DOCTYPE html>

<html>
<head>
<title></title>
<?php
include 'loginphp.php'
?>
<style>
 body{background-image:url("http://www.powerpointhintergrund.com/uploads/3d-ppt-background-33.jpg");
 display:flex;
 justify-content:center;
 }
.btton 
  {
   background-color: black;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;                                                                 display: inline-block;
   font-size: 16px;                                                                      margin: 4px 2px;                                                                     cursor: pointer;                                                                      }
</style>
</head>
<body>



<div class="frm">
<form action="" method="post">
<?php
 echo $valid;
?>
<h1>LOG IN</h1>
<input type="text" name="username" placeholder="username" required><br><br>
<input type="password" name="password" placeholder="enter password" required><br><br>
<?php
echo $errorpassword;
?>
<br><br>
<input type=checkbox name="remember" checked="checked"><div class="btton">Remember me</div>
<br><br>
<input type=submit class="btton">


</form>
</div>
</body>
</html>

