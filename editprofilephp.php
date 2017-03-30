<?php
session_start();
?>

<?php

include 'dbconnect.php'
?>



<?php
if(!$_SESSION['login']){
       header("location:http://192.168.121.187:8001/anjali/index.html");
               die;
}




  $emptyname="";
  $name="";
  $emptyno="";
  $mobile_no="";
  $invalidname="";              
  $invalidno="";
 // $storesession="1";
  $emptybranch="";
  $emptyinterest="";
 $username=$_SESSION["username"];

$print="select * from anjali_signup where username='$username'";
$query=mysqli_query($con,$print);
$pr=mysqli_fetch_assoc($query);
$user=$pr['username'];
$name=$pr['name'];
$mobile_no=$pr['mobile_no'];
$email=$pr['email'];
$gender=$pr['gender'];
$branch=$pr['branch'];
$interest=$pr['interest'];
$profilepic=$pr['profilepic'];
$coverphoto=$pr['coverphoto'];

function check($value)
{
  $value= htmlspecialchars($value);
  return $value;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{   

/*if(empty($_POST["name"]))
{  $emptyname="name is required";
    $storesession="";
}
  else*/
    $name=check($_POST["name"]);
   // echo $name;  
   /* if(!preg_match ('/^([a-zA-Z]+)$/', $name))
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
        {*/   
          $mobile_no=check($_POST["mobile_no"]);
        // echo $mobile_no;      
         /* if(!preg_match("/^[0-9]{10}$/", $number))
                     {
                            $invalidno="enter a valid no";
                                 $storesession="";
                                    }
    }*/


/*if(empty($_POST["branch"]))
{  $emptybranch="branch is required";
    $storesession="";
}
  else
{*/
    $branch=check($_POST["branch"]);
   //                    }



/*if(empty($_POST["interest"]))
{  $emptyinterest="Don't have any interest sad life!!"; 
    $storesession="";
}
  else
{*/
    $interest=check($_POST["interest"]);
   //  }


/*if($storesession)
{*/
//echo "1";
echo $username;
echo $name;

$edit="update anjali_signup set name='$name' where username='$username'";
$query=mysqli_query($con,$edit);

$edit_phone="update anjali_signup set mobile_no='$mobile_no' where username='$username'";
$query=mysqli_query($con,$edit_phone);

$edit_branch="update anjali_signup set branch='$branch' where username='$username'";
$query=mysqli_query($con,$edit_branch);


$edit_interest="update anjali_signup set interest='$interest' where username='$username'";
// $edit_phone="update anjali_signup set mobile_no='$mobile_no'";
   
 //, branch='$branch',interest='$interest'  where username='$username'";
$query=mysqli_query($con,$edit_interest);
//$query2=mysqli_query($con,$edit_phone);
echo $query;
}
//}
?>
