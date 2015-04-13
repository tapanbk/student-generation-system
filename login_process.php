<?php

if(isset($_POST['sign_in']))
{
 $user=$_POST['user_name'];
 $pwd=$_POST['user_password'];
$username="";
  
  $con = mysql_connect("localhost","root","");
    if (!$con)
      {
          die('Could not connect: ' . mysql_error());
      }

mysql_select_db("student_mis", $con);

    $result = mysql_query("SELECT * FROM admin where username='{$user}'");
   

    while($row = mysql_fetch_array($result))
      {
            $username= $row['username'] ;
            $password =$row['password'];
            
    }
  mysql_close($con);
  if((strcmp($user,$username)===0)&&(strcmp($pwd,$password)===0))
  {
 
          include('marksheet.php');
      }
    else
    {
        
        echo"<p> please use your valid user Id and password </p>";
    }  

}

else
{

echo "error";
}

?>







<?php

/* if(isset($_POST['sign_in']))
{
 $user=$_POST['user_name'];
 $pwd=$_POST['user_password'];
  
  if($user=='hacker' && $pwd=='imtapan1234')
      {
          include('marksheet.php');
      }
    else
    {
        
        echo" please use your valid user Id and password";
    }  
}

else
{
  
  
 echo"error";
 
}
*/

?>
