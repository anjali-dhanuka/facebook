<!DOCTYPE html>
<html>
<head>
  <title></title>
    <?php
      include 'editprofilephp.php';
        ?>
           <link rel="stylesheet" type="text/css" href="signup.css">
             </head>
               <body>
                 <h1>EDIT INFO</h1> 
                <form action="" method=post>
                <div class="box">
                 <input type="text" value=<?php  echo $username; ?>
                  name="username" disabled>
                   </div>
<br><br>
                    <div class="box">
                    <input type="text" name="name" value="<?php echo $name;?>"> 
                    </div>
<br><br>
                    <div class="box">
                    <input type="number"name="mobile_no" value="<?php echo  $mobile_no;?>">
                    </div>
<br><br>
                    <div class="box">
                    <input type="text" value="<?php echo $email;?>" disabled>
                    </div>
<br><br>
                    <div class="box">
                    <input type="text" value="<?php echo $gender;?>" disabled>
                    </div>
<br><br>
                    <div class="box">
                    <input type="text" name="branch" value="<?php echo $branch;?>">
                    </div>
                    <?php echo $emptybranch; ?>
<br><br>

                    <div class="box">
                    <input type="text" name="interest" value="<?php echo $interest;?>"></div>
                     
                   <?php echo $emptyinterest;?>
<input type=submit>
</form> 

                   



       </body>
         </html>

