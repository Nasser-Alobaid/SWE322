<html>
    <head>
    <title> PHP 01 </title>
    <meta charset="utf-8">
        
        
    </head>
    <body>
    
    <h1>My First PHP assignment</h1>
    <h2> Name: Nasser M Alobaid ID: 201911010 </h2>
    
        </body>
    <?php
    
    echo "Today's date".date("Y/m/d")."<br>";
    
    $n = 1;
    $s = "1";
    $n1 = $n + $s;
    $n2 = $n1 + "10 little penguins";
    $n3 = "hello";
    $n4 = "world";
    //$n5 = $n3 + $n4;
    $n6 = $n3.$n4;
    
    
    
    
    echo "$n";
    echo "<br>";
    echo $s;
    echo "<br>";
    echo $n1;
    echo "<br>";
    echo $n2;
    echo "<br>";
    echo $n3;
    echo "<br>";
    echo $n4;
    echo "<br>";
   // echo $n5;
    echo "<br>";
    echo $n6;
    
    $BestGames = array("Challenger","Camaro","mustang","C63");
    
    $a = count ($BestGames);
    
    echo "<br>";
    echo "<br>";
    echo "the first element  ".$BestGames[0];
    echo "<br>";
    echo "<br>";
    echo "The count of the elements  ".$a;
    echo "<br>";
    
    for($i = 0; $i < $a; $i++){
        
        if($BestGames[$i] == "Challenger"){
            
            echo "<ul>"."<il>"."This is the greatest car ever   ".$BestGames[$i]."</il>"."</ul>";
            echo "<br>";
        }
        
        else {
            
        echo "<ul>"."<il>"."I love  ".$BestGames[$i]."</il>"."</ul>";
        echo "<br>";
            
            }
    }
    
    ?>
    
</html>