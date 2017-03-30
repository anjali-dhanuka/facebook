<?php
session_start();
?>

<?php
include 'dbconnect.php'
?>


<?php
if(!$_SESSION['signup']){
       header("location:http://192.168.121.187:8001/anjali/index.html");
}



$interest="";
$branch="";
$profilepic="";
$cover="";


$username=$_SESSION["username"];

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) 
{
  if ($_SERVER["REQUEST_METHOD"] == "POST")
      {
       $target_dir = "anjali_pics/";
       $profilepic = $target_dir . basename($_FILES["dp"]["name"]);
       $uploadOk = 1;
       $imageFileType = pathinfo($profilepic,PATHINFO_EXTENSION);
        $branch=$_POST["branch"];
       echo $branch;
        $interest=$_POST["interest"];
        $check = getimagesize($_FILES["dp"]["tmp_name"]);
         if($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                            $uploadOk = 1;
                                } else {
                                          echo "File is not an image.";
                                                  $uploadOk = 0;
                                                      }

          if (file_exists($profilepic)) {
             echo "Sorry, file already exists.";
              $uploadOk = 0;
              }
// Check file size
        if ($_FILES["dp"]["size"] > 500000) {
           echo "Sorry, your file is too large.";
             $uploadOk = 0;
        }
// Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
          $uploadOk = 0;
         }
// Check if $uploadOk is set to 0 by an error
      if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
      // if everything is ok, try to upload file
       }
      else
      {
      if (move_uploaded_file($_FILES["dp"]["tmp_name"], $profilepic)) {
                echo "The file ". basename( $_FILES["dp"]["name"]). " has          been uploaded.";
                    }
      else
      {
      echo "Sorry, there was an error uploading your file.";
       }
       }
      }
      }

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
 if ($_SERVER["REQUEST_METHOD"] == "POST")
     {
      $target_dir = "anjali_pics/";
      $cover = $target_dir . basename($_FILES["coverphoto"]["name"]);
      $uploadOk = 1;
      $imageFileType = pathinfo($cover,PATHINFO_EXTENSION);
       
       
       $check = getimagesize($_FILES["coverphoto"]["tmp_name"]);
          if($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                            $uploadOk = 1;
                                } else {
                                          echo "File is not an image.";
                                                  $uploadOk = 0;
                                                      }
// Check if file already exists
            if (file_exists($cover)) {
           echo "Sorry, file already exists.";
            $uploadOk = 0;
          }
// Check file size
         if ($_FILES["coverphoto"]["size"] > 500000) {
      echo "Sorry, your file is too large.";
          $uploadOk = 0;
          }
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
          $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
      // if everything is ok, try to upload file
} else {
      if (move_uploaded_file($_FILES["coverphoto"]["tmp_name"], $cover)) {
                echo "The file ". basename( $_FILES["coverphoto"]["name"]). " has been uploaded.";
                    } else {
                              echo "Sorry, there was an error uploading your file.";
                                  }
}

}
}


$update="update anjali_signup set branch='$branch',
      interest='$interest',
      profilepic='$profilepic',
      coverphoto='$cover'
      where username='$username'";

mysqli_query ($con,$update);   

  if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
header('location:http://192.168.121.187:8001/anjali/commonfeed.php');
}
//echo $branch;
//echo $username;
?>
