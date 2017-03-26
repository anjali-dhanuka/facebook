<?php
session_start();
?>
<?php
if(!$_SESSION['login']){
       header("location:http://192.168.121.187:8001/anjali/index.php");
               
}
include 'dbconnect.php'
$username="";
$name="";
$mobile_no="";
$email="";
$gender="";
$branch="";
$interest="";
$profilepic="";
$coverphoto="";
$new_password="";
$old_password="";
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

if ($_SERVER["REQUEST_METHOD"] == "POST")      
{
if(isset($_POST["p"])=="profile") 
{
  if (isset($_FILES["dp"]["name"])) {

  $target_dir = "anjali_pics/";
$profile = $target_dir.basename($_FILES["dp"]["name"]);
$uploadOk =0;
$imageFileType = pathinfo($profile,PATHINFO_EXTENSION);
if($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg" || $imageFileType == "gif" ) {
    //  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
         $uploadOk = 1;
          $profilepic=$profile;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
     // echo $profilepic;
      // if everything is ok, try to upload file
} else {
      if (move_uploaded_file($_FILES["dp"]["tmp_name"], $profilepic))
      {
      echo "The file ". basename( $_FILES["dp"]["name"]). " has been uploaded.";
     $update_profile="update anjali_signup set profilepic='$profilepic' where username='$username'";
mysqli_query($con,$update_profile); 
      } 
//$update_profile="update anjali_signup set profilepic='$profilepic' where username='$username'";
//mysqli_query($con,$update_profile);
}



}  
}
}






if ($_SERVER["REQUEST_METHOD"] == "POST")      
{

if(isset($_POST["c"])=="cover") 
{
  if (isset($_FILES["cover"]["name"])) {
  $target_dir = "anjali_pics/";
$covers = $target_dir . basename($_FILES["cover"]["name"]);
$uploadOk = 0;
$imageFileType = pathinfo($covers,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
/*if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["cover"]["tmp_name"]);
          if($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                            $uploadOk = 1;
                                } else {
                                          echo "File is not an image.";
                                                  $uploadOk = 0;
                                                      }
}
// Check if file already exists
if (file_exists($cover)) {
      echo "Sorry, file already exists.";
          $uploadOk = 0;
}
// Check file size
if ($_FILES["cover"]["size"] > 500000) {
      echo "Sorry, your file is too large.";
          $uploadOk = 0;
}*/
// Allow certain file formats
if($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg"
    || $imageFileType == "gif" ) {
     // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
          $uploadOk = 1;
          $coverphoto=$covers;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
      // if everything is ok, try to upload file
} else {
      if (move_uploaded_file($_FILES["cover"]["tmp_name"], $coverphoto)) {
                echo "The file ". basename( $_FILES["cover"]["name"]). " has been uploaded.";
      $update_cover="update anjali_signup set coverphoto='$coverphoto' where username='$username'";
mysqli_query($con,$update_cover);
header("location:http://192.168.121.187:8001/anjali/print.php");
      }
                             
}

}
}
}

if(isset($_POST["submit"])=="change_password")
{
$old_password=$_POST["old_password"];
$new_password=$_POST["new_password"];
echo $old_password;
echo $_POST["new_password"];
$fetch_password="select password from anjali_signup where username='$username' and password='md5($old_password)'";
$query=mysqli_query($con,$fetch_password);
if(mysqli_num_rows($query)>0)
{
$update_password="update anjali_signup set password=md5($new_password)  where username='$username'";
}
}
?>
