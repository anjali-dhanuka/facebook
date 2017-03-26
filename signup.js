/*function check_user()
{
 var username= document.getElementbyId("user").innerHTML;
    if(!username)
    {
  document.getElementbyID("username").style.color="red";
    }
    else
    {
   var xmlhttp=new XMLHttpRequest();
 
}*/



function isValidEmail(mail) 
{
 // console.log("qqqqqqqqqq"); 
  var x=document.getElementById("email").value;

if ((/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/).test(x))
  {
    document.getElementById("wrongmail").innerHTML="";
//    console.log("ssss");
    document.getElementById("maildiv").style.borderColor="black";
    return 1;
  }
else
  { 
    document.getElementById("wrongmail").innerHTML="invalid email";
  
//  div.style.color=red;
//    console.log("wwwww");
    
    document.getElementById("maildiv").style.borderColor = "red"; 
    return 0;
  }
}
/*function isValidEmail()
{
   var email = document.getElementById("emailvalid");
    if(!email.match( /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/))
    {    
      document.getElementByID("emailvalid").innnerHTML='Please provide a valid email address';
  document.getElementbyID("wrongmail").style.color="red";
      return false;
    }
      else
      {
                    return true;
                       }
}*/

/*function checkno(nos)
{
  
  var no=document.getElementbyID("no").value;
  if(!no)
  {

  document.getElementbyID("wrongnumber").innnerHTML="PLease fill this field";
    document.getElementbyID("number").style.bordercolor="red";
     return false;
  }
  else
  {
    return true;
  }
  }*/

//function check

