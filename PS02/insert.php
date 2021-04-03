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

$query = "INSERT into s_phone_lists (Name, Mobile, Phone) VALUES ('Mohammed', 'iphone', '0567943451')";

if(mysqli_query($conn, $query)){

    echo "new record has been created";
} else {

    echo mysqli_error($conn);
}

$query = "SELECT * FROM s_phone_lists";

$result = mysqli_query($conn, $query);

 
    if($result) {
    echo "<table style = 'border: 12px solid silver ;'>";
    echo "<tr>";
    echo "<th> ID </th>";
    echo "<th> Name </th>";
    echo "<th> Phone </th>";
    echo "<th> Mobile </th>";
    echo "</tr>";

    while($result_row = mysqli_fetch_row($result)){

        echo "<tr>";
        echo "<td> $result_row[0] </td>";
        echo "<td> $result_row[1] </td>";
        echo "<td> $result_row[2] </td>";
        echo "<td> $result_row[3] </td>";
        echo "</tr>";
        
}
echo "</table>";
}

echo "<br>"."<br>"."<br>";
echo "Why inserting a previously inserted value in namewill generate an error?";
echo "<br>"."<br>";
echo "<p><pre>Because Name is uniqe we cannot have duplicate. </pre></p>";
echo "<br>"."<br>";
echo "Why for phone we have used varchar and for mobile we have used char?";
echo "<br>"."<br>";
echo "<p style><pre>Because varchar is a variable leangth filed if we want to store string with a variable length such as phone we use varchar,
 but if the length id mainly the same like the mobile number we use char because
  it is slightly more size efficient and also slightly faster</pre><p> ";
  echo "<br>.<br>";
  echo "<a href = https://github.com/Nasser-Alobaid/SWE322/tree/main/PS02>GitHub Link</a>";


?>