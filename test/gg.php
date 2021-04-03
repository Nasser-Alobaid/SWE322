<?php
$host_address = "127.0.0.1";
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

$query = "INSERT into s_phone_lists (col_02, col_03, col_04) VALUES (10, 'Nasser', 'Best student')";

if(mysqli_query($conn, $query)){

    echo "new record has been created";
} else {

    echo mysqli_error($conn);
}


	
$variable_01 = "value_01";
$variable_02 = "value_01";

$query = "SELECT * from s_phone_lists where col_01 = '$variable_01'";

if($result = mysqli_query($conn, $query)){
if(mysqli_num_rows($result) > 0){
$result_row = mysqli_fetch_row($result);
if($variable_02 == $result_row[3]){
echo $result_row[1]." welcome";
} else {
echo "Not Welcome!!";
}

} else {
echo "Not Welcome!! ";
}
} else {
echo "Error: " . $query . "<br>" . mysqli_error($conn);
}


?>
