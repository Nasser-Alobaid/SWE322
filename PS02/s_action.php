<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Result</title>
</head>
<body>
    <?php
       
       include('config/db_login.php');

        $Name = $_GET['Name'];
        $Mobile = $_GET['Mobile'];
        $Phone = $_GET['Phone'];

        echo "code is ".$Name;

        if($_GET['Name'] == null){
            if (($_GET['Mobile']) == null){
                if ($_GET['Phone'] == null){
                    exit ("No search word was provided");
                } else {
                    $search_word = $_GET['Phone'];
                    $query = "SELECT * From s_phone_lists where Phone = $search_word";
                }
            } else {
                $search_word = $_GET['Mobile'];
                $query = "SELECT * From s_phone_lists where Mobile = '$search_word'";
            }
        } else {
            $search_word = $_GET['Name'];
            $query = "SELECT * From s_phone_lists where Name = '$search_word'";
        }
        
      
        
        
        
        /*
        else {
            exit ("No search word was provided");
        }*/

        echo $query;

        $result = mysqli_query($conn, $query);

        if(!$result){
            exit ("An error has happened.");
        } else {
            if(mysqli_num_rows($result) > 0){
                echo "<table border='1px' width='60%'>";
                echo "<tr>";
                echo "<th>  ID </th>";
                echo "<th>  Name </th>";
                echo "<th>  Mobile </th>";
                echo "<th> Phone </th>";
                echo "</tr>";

                while($result_row = mysqli_fetch_row($result) ){
                    echo "<tr>";
                    echo "<td> $result_row[0] </td>";
                    echo "<td> $result_row[1] </td>";
                    echo "<td> $result_row[2] </td>";
                    echo "<td> $result_row[3] </td>";
                    echo "</tr>";
                }

                echo "</table>";
            } else {
                exit ("There are no result");
            }
        }


    ?>
</body>
</html>