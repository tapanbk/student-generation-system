<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <script src="jquery/jquery.min.js">
</script>
<script> 
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");
  });
});
</script>



</head>
<body>
   
  
   <div class="login_form" id="login_form" >
   <div id="flip">ADMIN PANEL</div>
 
           <div id="panel">
       
    <form id ="login" method="post" action="login_process.php">
           
           <input type="text" name="user_name" placeholder="UserName or E-mail">
           
           <input type="password" name="user_password" placeholder="your Password">
           <input type="submit" value="Sign IN" name="sign_in">
           
           
       </form>
       
   </div>
   </div>
   <div class ="marks_check">
       <a href="to_marksheet.php">Marks</a>
       
   </div>
   
   
  
</body>
</html>
