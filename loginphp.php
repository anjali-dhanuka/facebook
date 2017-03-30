<?php
session_start();                        
?> 
<?php

include 'dbconnect.php'
?>

<?php

//include 'dbconnect.php'

if(isset($_SESSION['login']))
{
  if ($_SESSION['login'] == true) 
  {
         header("location:http://192.168.121.187:8001/anjali/commonfeed.php");
  }
}

//echo $SESSION["login"];

$errorpassword="";
$username="";
$password="";
$valid="";

function checks($value)
  {
  $value=htmlspecialchars($value);
  return $value;
  }


if ($_SERVER["REQUEST_METHOD"] == "POST")
  {
    $username = checks($_POST["username"]);
    $password=checks($_POST["password"]);
    $checkpass="select username from anjali_signup where username='".$username."'";
  // echo $username;
    $query=mysqli_query($con,$checkpass);
//    echo $checkpass; 
    if(mysqli_num_rows($query)>0)
         {
         $password= md5($password);
         $check="select password from anjali_signup where password='$password' and username='$username'";
         //echo $check;
         //echo $check;
         //echo mysqli_num_rows($query);
           if($query && mysqli_num_rows($query)>0)
            { 
             $_SESSION["username"]=$username;
            $_SESSION["login"]=true;
     //     echo $_SESSION["login"];  
             if (isset($_POST['remember']))
                 {
                   $value=mt_rand();
                   setcookie("anjali",$value,time()+3600,'/');
                   //echo "checked";
                     if(isset($_COOKIE['anjali']))
                       {
                         echo "cookie is set";
                         $cookie="insert into anjali_cookies(username,value)
                               values
                           ('$username','$value')";

                         mysqli_query($con,$cookie);
                        }
                    }
              header('Location:http://192.168.121.187:8001/anjali/commonfeed.php');
              }  
             else
              {
               $errorpassword="Enter valid password";
              }
            }
        else
         {
           $valid="please enter username only";
         }
                 //$username=$_SESSION["username"];
 } ?>
