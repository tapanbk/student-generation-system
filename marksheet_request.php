<?php
if(isset($_POST['show_result']))
    {

        $con = mysql_connect("localhost","root","");
        if (!$con)
          {
              die('Could not connect: ' . mysql_error());
          }
        $rollno=$_POST['user_rollno'];
        $dob=$_POST['user_dob'];
            
            mysql_select_db('student_mis', $con);

            $result = mysql_query("SELECT * FROM student_record where Rollno=$rollno and DOB=$dob");

            if($row = mysql_fetch_array($result))
                  {
                      echo $dob;
                      include('display_marksheet.php');
  
                  }
                  
                else
                {
                    echo "no data found in the database.";
                }  

            mysql_close($con);
}

        else
        
        {
            echo "error from submitting the value";
        }        
?>