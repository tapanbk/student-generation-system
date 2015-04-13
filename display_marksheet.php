<?php
$roll=$row['Rollno'];
$name=$row['Name'];
$class=$row['Class'];
$dob=$row['DOB'];
$AI=$row['subject1'];
$wireless=$row['subject2'];
$design=$row['subject3'];
$cryptography=$row['subject4'];
$network=$row['subject5'];
$simulation=$row['subject6'];



$total=$AI+$wireless+$design+$cryptography+$network+$simulation;

        if($AI>=24&&$wireless>=24&&$design>=24&&$cryptography>=24&&$network>=24&&$simulation>=24)
            {
                $percentage=$total/5; 
                if($percentage>=80)
                    {
                        $result="Distinction";
                    }  
                elseif($percentage>=70)
                    {
                        $result="First Division";
                    }
        
                elseif($percentage>=60)
                    {
                        $result="Second";
                    }    
                else
                    {
                         $result="Third";
                    }
        
            }

            else
            {
                $result="Failed";
                $percentage=0;
            }
    include("mdesign.php");




