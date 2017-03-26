
<! doctype html>
<html>
<head>
<?php include 'signupphp.php';

?>
<script src="signup.js"></script>
<link rel="stylesheet" type="text/css" href="signup.css">
<style>
</style>
</head>
<body>

<h1>Sign up</h1>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<form action="#" method="post">

<script type="text/javascript">
function register_user()
{
  $.ajax({
    type: "POST",
    url: '/anjali/checkusername.php',
    data: {
        username: $('#username').val()
      },
//console.log(username);
    success: function(data)
    {
      if(data == 'No')
      {
        $('#user').css({"border-width":"1px",
                        "border-color":"red"});
    }
    else
    {
    $('#user').css({"border-width":"1px",
                    "border-color":"black"});
   }
   }
   });
}
</script>



<intercept-url pattern="/favicon.ico" access="ROLE_ANONYMOUS" />

<div id="user" class="box">
<input type="text" name="username" id="username" onkeyup="register_user()">
</div>
<?php
echo $emptyusername;
?>
<br><br>
<span id="wronguser"></span>
<br><br>

<div id="name" class="box">
<input type="text" name="name" placeholder="Name"><br><br>
</div>
<span id="wrongname"></span>
<br><br>
<?php
echo $emptyname;
?>
<?php
echo $invalidname;
?>
<br>

<div id="number" class="box">
<input type="number" name="phone_no" placeholder="Enter mobile no" id="no">
<br><br>
</div>
<span id="wrongnumber"></span>
<br><br>
<?php
echo $emptyno;
?>
<?php
echo $invalidno;
?>
<br>

<div id="maildiv" class="box" >
<input type="text" name="field" placeholder="Email" id="email" onchange="isValidEmail(this)"><br><br>
</div>
<span id="wrongmail"></span>
<br>
<br>

<input type="password" name="password" class="box" maxlength="6" placeholder="maximum 6 characters" id="pass1"><br><br>
<input type="password" name="coord" class="box" maxlength="6" placeholder="confirm password" id="pass2"><br>
<?php
echo $wrong;
?>
<br>
<select name="gender">
<option>Male</option>
<option>Female</option>
</select>
<br><br>

<button>Reset</button>

<button>Submit</button>
</form>
</body>
</html>
