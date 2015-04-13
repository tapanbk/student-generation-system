<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="student-form" >
        <h2>Please fill up the form to get the marksheet.</h2>
        <form method="post" action="marks_input_process.php">
            <p>
               <label for="your_name">Name</label> 
               <input type="text" name="your_name" placeholder="Eg. Abhash Adhikari" id ="your_name" >
            </p>
                
                 <p>
                <label for="your class">Class</label>
                <input type="text" id="your class" placeholder="Eg. Bachelor" name="your_class" >
            </p>

                <p>
               <label for="your_rollno">Roll NO</label> 
               <input type="number" name="your_rollno" placeholder="Eg. 1076" id ="your_name" >
            </p>
          <p>
               <label for="your_dob">DOB</label> 
               <input type="text" name="your_dob" placeholder="Eg. 2049-06-12" id ="your_dob" >
            </p>
                
          
            <h3>Subjects</h3>
            
            
            <p>
                <label for="AI marks">Artificial Intelligence</label>
                <input type="text" name="AI_mark" id="AI marks" placeholder="Eg. 80">
            </p>
            
            
            <p>
                <label for="Wireless marks">Wireless</label>
                <input type="text" id="Wireless marks" placeholder="Eg. 78" name="wireless_mark">
                </p>
                
                
            <p>
                <label for="system design marks">System Design</label>
                <input type="text" id="system design marks" placeholder="Eg. 89" name="design_mark" >
                </p> 
    
         
                <p>
                <label for="cryptography marks">Crytpography</label>
                <input type="text" id="cryptography marks" placeholder="Eg. 89" name="cryptography_mark">
                </p> 
                
            
            <p>
                <label for="computer marks">Computer Network</label>
                <input type="text" id="computer marks" placeholder="Eg. 89" name="cnetwork_mark">
            </p>
             
            <p>
                <label for="simulation marks">SImulation</label>
                <input type="text" id="simulation marks" placeholder="Eg. 89" name="simulation_mark">
            </p> 
            
            <p>
                <input type="submit" value="Get Result" name="get_result"> 
                <input type="reset" value="Reset form"> 
                
            </p>     
              
        </form>
        
    </div>
</body>
</html>