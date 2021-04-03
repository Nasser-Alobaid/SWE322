<?php

$host_address = "127.0.0.1";
$user_host = "Nasser";
$password = "Nasser";
$db_name = "db_nasser";

$conn = mysqli_connect($host_address,$user_host,$password,$db_name);

if(!$conn){

    echo "Debugging error No: ".mysqli_connect_errno();
    echo "<br>";
    echo "Debugging error No: ".mysqli_connect_error();
    exit;
}

$query = "INSERT into nasser (col_02, col_03, col_04) VALUES (10, 'Nasser', 'Best student')";

if(mysqli_query($conn, $query)){

    echo "new record has been created";
} else {

    echo mysqli_error($conn);
}


?>