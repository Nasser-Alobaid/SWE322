<!DOCTYPE html>
<html>
<head>
    <title>PHP Basics </title>
    <meta charset="utf-8">
    <style>
    
        #bb
{
    background-image: url("CBB.jpg");
       background-repeat: no-repeat;
       background-attachment: fixed;
       background-size: cover;
    
}

/* here i uesed font-famliy and make it big size */
#h1
{
    color:black;
    font-family:sans-serif;
    font-size:250%;
    text-align:center;
   
}
/* in the paragraph i change the color and font size and add some style and font famliy */
#result
{
    color:black;
    font-family:monospace;
    font-style: italic;
    font-size:250%;
    text-align:center;
    text-decoration-style: solid;
    
}
/*I changed the button color and add a border*/
#button
{
    background-color:gray;
  border-color:black;
    border-width: thick;
  color: black;
  padding: 25px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 25px;
  margin: 4px 5px;
  cursor: pointer;
}
        
    </style>
    
    <script>
    
        function DD(){
        var  my_time = new Date();
        
            document.getElementById("result").innerHTML = my_time ;

            }
    
    </script>
    </head>
    <body id="bb">
    
        <h1 id="h1">Nasser M Alobaid</h1>
        <p id="result">
            
        ...
            
        </p>
        <center>
            
        <button id="button"  onclick= "DD()">Date</button> 
        
        </center>
        
        <?php
        
        class Student {
            
            public $name;
            
            public $id;
            
            public $course = array();
            
            function __construct($name,$id,) {
            $this->name = $name;  
            $this->id = $id;
           
            }
            
           function addcourse($courseName){
               
               array_push($this->course, $courseName);
           }
            
        }
        
        // Each student has $name and $id and addcours.
        $student_1 = new Student("Mishal",201911010,);
        $student_1 -> addcourse("CIS222");
        $student_2 = new Student("Nasser",201911000,);
        $student_2 -> addcourse("SWE322");
        $student_3 = new Student("Saleh",201911111,);
        $student_3 -> addcourse("MTH105");
        $student_4 = new Student("Ali",201819010,);
        $student_4 -> addcourse("SWE322");
        $student_5 = new Student("Mohhamed",201411000,);
        $student_5 -> addcourse("CIS222");
        $stu = array($student_1,$student_2,$student_3,$student_4,$student_5);
        
    // For loop for the student name and id and course.
        echo "<p style = font-size:30px;>( Student , id , course )</p>";
        for($x = 0; $x<= 4; $x++){
            
           echo "<p id='result'>"."<ul> "."<li>".$stu[$x]-> name."     ".$stu[$x]-> id."     ".$stu[$x]-> course[0] ."</li>"."</ul>"."</p>"; 
            
        }
        
        //For loop for the student who passed the SWE322 course.
        echo "<p style = font-size:30px;>Pass the course SWE322</p>";
        for($x = 0; $x<= 4; $x++){
                
                if($stu[$x]-> course[0] == "SWE322"){
                 
                    echo "<p id='result'>"."<ul>"."<li>"."This student ".$stu[$x]-> name."  is full stack developer!" ."</li>"."</ul>"."</p>"; 
                    
                }
            }
        
        

        ?>
    
    
    </body>
    
</html>