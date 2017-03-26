<?php
$con = mysqli_connect("192.168.121.187","first_year","first_year","first_year_db");
if(isset($_POST['username']))
   {
     $username=$_POST['username'];
     $checkdata=" SELECT username FROM anjali_signup WHERE username='$username' ";

     $query=mysqli_query($con,$checkdata);

       if(mysqli_num_rows($query)>0)
         {
            echo "No";
         }                                                                                                                                                                          else
         {
             echo "OK";
         }
 
   }
















?>
