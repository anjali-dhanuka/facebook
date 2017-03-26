<!DOCTYPE html>
<html>
<head>
<style>
body{
background-image:url("http://wallpaper-gallery.net/images/wallpaper-background/wallpaper-background-17.jpg");
position:relative;
}
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

.btton1 
  {
       background-color: black;
        border: none;
        color: white;
       padding: 15px 32px;
       text-align: center;
      text-decoration: none;                                                                 display: inline-block;
       font-size: 16px;                                                                      margin: 4px 162px;                                                                     cursor: pointer;
      position:absolute;
      top:0;
      right:0;

  }
.news{
  background-color:black;
color:white;
position:absolute;
top:0;
right:647px;
}
       </style>
<?php
include 'commonfeedphp.php';
?>
</head>
  <body>
<div class="news">
  <h1>NEWS FEED</h1>
</div>
<?php
while($see=mysqli_fetch_array($query1))                                               
{ 
    echo "<br>";                                                                        
    echo "<div>";
      echo $see['post'];                                                                  
      echo "</div>";
       echo $see['name'];                                                                   
       echo "<br>";
        echo $see['ftime'];                                                                  
        echo "<br>";
         echo $see['fdate'];                                                                  
         echo "<br>";                                                                
}
?>
 
 <h3>ADD POST</h3>
<form action="#" method=post>
<input type="text" name="userpost">
<input type=submit>
</form>

  <button class="btton1" onClick="document.location.href='http://192.168.121.187:8001/anjali/print.php'">Profile</button>  

<a href="http://192.168.121.187:8001/anjali/logout.php"><button class="btton">Log out</button></a>
  </body>
  </html>
