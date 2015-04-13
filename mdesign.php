
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
   <div class="marksheet">
       
           <div class="header">
           <table><tr>
                       <th colspan="5">
                           Tribhuvan University <br>
                            <h3>Balkhu, Kirtipur </h3><br> Mark sheet<br>                 
                                               
                       </th>
                    </tr>
           
                     <tr>  <td>Name: <?php echo $name;?></td>
                        <td> level: <?php echo $class;?> </td></tr>
                    </table>     
          </div>
           
           <div>
               <table>
                   <tr>
                       <th>Name of Subjects</th>
                       <th>Total Marks</th>
                       <th>Pass Marks</th>
                       <th>Marks Obtained</th>
                    </tr>   
                       <tr>
                           <td>Artificial Intelligence</td>
                           <td>60</td>
                           <td>24</td>
                           <td><?php echo $AI; ?></td>
                       </tr>
                       <tr>
                           <td>Wireless Marks</td>
                           <td>60</td>
                           <td>24</td>
                           <td><?php echo $wireless; ?></td>
                       </tr>
                       <tr>
                           <td>System Design</td>
                           <td>60</td>
                           <td>24</td>
                           <td><?php echo $design; ?></td>
                       </tr>
                       <tr>
                           <td>Cryptography</td>
                           <td>60</td>
                           <td>24</td>
                           <td><?php echo $cryptography; ?></td>
                         <tr>
                           <td>Computer Network</td>
                           <td>60</td>
                           <td>24</td>
                            <td><?php echo $network; ?></td>   
                     
                   </tr>
                   <tr>
                           <td>Simulation and modelling</td>
                           <td>60</td>
                           <td>24</td>
                            <td><?php echo $simulation; ?></td>   
                     
                   </tr>
               </table>
             <div class="result_div">
                 <table>
                     <tr>
                         <th>Total Marks</th>
                         <td><?php echo $total; ?></td>
                     </tr>
                     <tr>
                         <th>Percentage</th>
                         <td><?php echo $percentage; ?></td>
                     </tr>
                     <tr>
                         <th>Result</th>
                         <td><?php echo $result; ?></td>
                     </tr>
                 </table>
             </div>         
       </div>
    <p>Note: <em>The above result is only specification and cannot be used for official use. The final ledger will be considered if any errors has occured.</em></p>   
   </div>
</body>
</html>


