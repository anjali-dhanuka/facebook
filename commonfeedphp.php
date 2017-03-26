<?php
session_start();
?>

<?php
if(!$_SESSION['login']){
     header("location:http://192.168.121.187:8001/anjali/index.html");
        die;
}
$thepost="";
$username="";

include 'dbconnect.php'


$username=$_SESSION["username"]; 
//echo "723";
//echo $_SESSION["username"];
//echo $username;

//echo "uwe";
if($_SERVER['REQUEST_METHOD'] === 'POST')
{
//echo "hsji";
$getId="select id from anjali_signup where username='$username'";
$query3=mysqli_query($con,$getId);
$id=mysqli_fetch_assoc($query3); 
$value=$id['id'];

$thepost=htmlspecialchars($_POST["userpost"]);
$feedpost="update anjali_posts a,anjali_signup b
           set post='$thepost' 
           where username='$username'
           and a.id=b.id and post is NULL";

$createid="insert into anjali_posts(id)
           values
           ($value)";
$query4=mysqli_query($con,$createid);

$setdate="update anjali_signup 
          set fdate=curdate()
          where username='$username'";
$settime="update anjali_signup set ftime=curtime() where username='$username'";

$query=mysqli_query($con,$feedpost);
$query3=mysqli_query($con,$setdate);
$query2=mysqli_query($con,$settime);
//echo $query;
}
$seepost="select anjali_posts.post,anjali_signup.name,anjali_signup.ftime,anjali_signup.fdate from anjali_posts,anjali_signup where anjali_signup.id=anjali_posts.id and anjali_posts.post is not NULL";
 $query1=mysqli_query($con,$seepost);
//echo $query1;
//echo "<div>";
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
//echo "</div>";
?>
