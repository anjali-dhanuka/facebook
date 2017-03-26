<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style>
body{background-image:url("http://img.freepik.com/free-photo/christmas-background-of-snowflakes-and-stars_1048-3464.jpg?size=338&ext=jpg");}

  </style>
  <?php
  include 'profilepagephp.php'
  ?>
 </head>
  <body>
<h1>COMPLETE PROFILE</h1>
  <form action="#" method="post" enctype="multipart/form-data">
<input type="text" name="branch" placeholder="enter branch">
<br><br>
<input type="text" name="interest" placeholder="enter intersets">
<br><br>
Upload profile picture
<br><br>
<input type="file" name="dp" id="dp">

<br><br>
Upload cover<br><br>
<input type="file" name="coverphoto"><br><br>
<br>
<input type="submit" value="submit" name="submit">
  </form>


  
  </body>
  </html>
