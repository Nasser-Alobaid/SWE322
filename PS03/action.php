<?php

$host_address = "127.0.0.1";
$user_host = "Nasser";
$password = "Nasser";
$db_name = "course";

$conn = mysqli_connect($host_address,$user_host,$password,$db_name);

if(!$conn){

    echo "Debugging error No: ".mysqli_connect_errno();
    echo "<br>";
    echo "Debugging error No: ".mysqli_connect_error();
    exit;
}

$c_code = $_GET['c_code'];
$c_name = $_GET['c_name'];
$description = $_GET['description'];
$year = $_GET['year'];

$query = "SELECT * FROM courses WHERE $c_code";

$result = mysqli_query($conn, $query);

 
    if($result) {
    echo "<table style = 'border: 12px solid silver ;'>";
    echo "<tr>";
    echo "<th> c_code </th>";
    echo "<th> c_name </th>";
    echo "<th> description </th>";
    echo "<th> year </th>";
    echo "</tr>";

    while($result_row = mysqli_fetch_row($result)){

        echo "<tr>";
        echo "<td> $result_row[0] </td>";
        echo "<td> $result_row[1] </td>";
        echo "<td> $result_row[2] </td>";
        echo "<td> $result_row[3] </td>";
        echo "</tr>";
        
        //break;
}
echo "</table>";
}


?>