<?php
session_start();
?>
<?php
if(isset($_SESSION['login'])){
       header("location:http://192.168.121.187:8001/anjali/index.php");
        
  }
include 'dbconnect.php'

  $emptyname="";
  $name="";
  $emptyno="";
  $number="";
  $email="";
  $gender="";
  $emptygender="";
  $invalidname="";
  $wrong="";
  $password="";
  $confirm="";
  $invalidno="";
  $emptyusername="";
  $storesession="";

  if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
 
  if(empty($_POST["username"]))
    {
     $emptyusername="valid username is required";
     $storesession="";
    }
   else
   {
     $username=check($_POST["username"]);
     $username=trim($username);
     if(isset($_POST['username']))
     {
      $username=$_POST['username'];

       $checkdata=" SELECT username FROM anjali_signup WHERE username='$username' ";

       $query=mysqli_query($con,$checkdata);

        if(mysqli_num_rows($query)>0)
         {
          echo "User Name Already Exist";
           $storesession="";
         }
        else
        $storesession=1;
         }
     
     }


if(empty($_POST["name"]))
{  $emptyname="name is required";
  $storesession="";
}
  else
  $name=check($_POST["name"]);
  if(!preg_match ('/^([a-zA-Z]+)$/', $name))
  {
   $invalidname="enter letters only";
   $storesession="";
  }


  if(empty($_POST["phone_no"]))
{
  $emptyno="number is required";
  $storesession="";
}
  else
  {
    $number=check($_POST["phone_no"]);
    if(!preg_match("/^[0-9]{10}$/", $number))
    {
      $invalidno="enter a valid no";
      $storesession="";
    }
  }

  $email=check($_POST["field"]);

  $gender=check($_POST["gender"]); 
 
  $password1=check($_POST["password"]);
 
  $confirm=check($_POST["coord"]);

  $password=md5($password1);

 if($password1!=$confirm)
  {
   $wrong="Enter same passwords";
  }
 else
  {
   if($storesession)
   {
     $_SESSION["username"]=$username;
     $_SESSION["signup"]=true;
     mysqli_query ($con,"INSERT INTO anjali_signup(username,name,mobile_no,email,gender,password)
  values
  ('$username','$name','$number','$email','$gender','$password')");
  mysqli_close($con);
//echo $_SESSION["username"]; 
 header('Location:http://192.168.121.187:8001/anjali/profilepage.php');
  
   }
  }
}

   function check($value)
{
$value= htmlspecialchars($value);
return $value;
}

?>

