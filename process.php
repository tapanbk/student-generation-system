
<?php

$error[]=array(); 
if(isset($_POST["get_result"]))
{
    if(isset($_POST['your_name']))
       {
            $name=trim($_POST['your_name']);

       }
       else
       {
           $error[]="Name missing";
        }
   
    if(isset($_POST['your_class']))
       {   
           $class=trim($_POST['your_class']);
       }
        else
       {
           $error[]="class missing";
       }

    if(isset($_POST['AI_mark']))
       {   
            $AI=trim($_POST['AI_mark']);
       }
   
   
        else
           {
               $error[]="AI mark missing";
            }
            
    if(isset($_POST['wireless_mark']))
       {   
            $wireless=trim($_POST['wireless_mark']);
       }
     else
       {
           $error[]="wirelsess Mark missing";
       }

   if(isset($_POST['design_mark']))
       {   
            $design=trim($_POST['design_mark']);
       }
        else
       {
           $error[]="Design mark missing";
       }
   
    if(isset($_POST['cryptography_mark']))
       {   
         $cryptography=trim($_POST['cryptography_mark']);
       }
   
    else
       {
           $error[]="cryptography Mark missing";
       }
   
    if(isset($_POST['network_mark']))
       {
            $network=trim($_POST['network_mark']);
       }
   
        else
       {
           $error[]="network mark missing";
       }   
   /*
   if(count($error)>0)
       {
           header("location:index.php");
       }
        else
   {   */     
        $total=$AI+$wireless+$design+$cryptography+$network;

        if($AI>=24&&$wireless>=24&&$design>=24&&$cryptography>=24&&$network>=24)
            {
                $percentage=$total/5; 
                if($percentage>=80)
                    {
                        $result="Distinction";
                    }  
                elseif($percentage>=70)
                    {
                        $resullt="First Division";
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

}

//}


else

{
echo "Error .";
}
?>


