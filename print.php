<!DOCTYPE html>
<html>
<head>
<title></title>
<?php
include 'printphp.php';
?>
<style> :
.btton
{
  background-color: black;
border: none;
color: white;
padding: 15px 32px;
         text-align: center;
         text-decoration: none;                                                                 display: inline-block;
         font-size: 16px;                                                                      margin: 4px 2px;                                                                     cursor: pointer;
position:absolute;
top:0;
right:0;

}




</style> 



</style>
<link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body>
<h1>INFO PAGE</h1> 


<a href="http://192.168.121.187:8001/anjali/editprofile.php"><button class="btton">EDIT PROFILE</button>



<div class="box">
<input type="text" value="<?php  echo $user;?>"name="username" class="input" disabled>
</div>
<br><br>

<div class="box">
<input type="text" value="<?php echo $name;?>" class="input" disabled> 
</div>
<br><br>

<div class="box">
<input type="number" class="input" value="<?php echo  $mobile_no;?>" disabled>
</div>
<br><br>

<div class="box">
<input type="text" class="input" value="<?php echo $email;?>" disabled>
</div>
<br><br>

<div class="box">
<input type="text" class="input" value="<?php echo $gender;?>"disabled>
</div>
<br><br>

<div class="box">
<input type="text" class="input" value="<?php echo $branch;?>" disabled>
</div>
<br><br>

<div class="box">
<input type="text" class="input" value="<?php echo $interest;?>" disabled>
</div>
<br><br>

<img src="<?php echo $profilepic;?>" style="height:200px;width:200px">
<br>

<form action="" method="post" id=form1   enctype="multipart/form-data">
Change profile
<input type=file name="dp" id="dp">
<input type=submit name="p" value="profile">
</form>
<br><br>

<img src="<?php echo $coverphoto;?>" style="height:100px;width:200px">

<form action="" method="post" name="form2"  enctype="multipart/form-data">
Cover photo
<input type=file name="cover" id="cover">
<input type=submit name="c" value="cover">
</form>

<br><br>
<br><br><br>


<form action="" name="form3"  method="post">
Change password<br>
<br><br>
<input type=password name="old_password">Enter old password<br>
<br>
<input type=password  name="new_password">New password<br><br>
<input type="submit" value="change_password">
</form>
</body>
</html>

