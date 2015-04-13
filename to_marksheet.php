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
   
  
   <div class="login_form"  >
   <div id="flip">GUEST PANEL</div>
 
           <div id="panel">
       
    <form id ="login" method="post" action="marksheet_request.php">
           <legend for="user_rollno">Roll No</legend>
           <input type="text" name="user_rollno" placeholder="Eg: 1076">
           <legend for="user_dob">Date of Birth</legend>
           <input type="text" name="user_dob" >
           <input type="submit" value="Submit" name="show_result">
           
           
       </form>
       
   </div>
   </div>
   
   
  
</body>
</html>