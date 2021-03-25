<?php
     $host_address = "127.0.0.1:3307";
     $user_host = "Nasser";
     $password = "Nasser";
     $db_name = "db_phonebook";
     
     $conn = mysqli_connect($host_address,$user_host,$password,$db_name);
     
     if(!$conn){
     
         echo "Debugging error No: ".mysqli_connect_errno();
         echo "<br>";
         echo "Debugging error No: ".mysqli_connect_error();
         exit;
     }
?>