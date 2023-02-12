<?php
require("db_connection.php");
try{
    $queryGetAllAccounts = "SELECT * FROM students_tbl";
    $results = mysqli_query($connect, $queryGetAllAccounts);
} catch (\Throwable $th){
    echo $th;
}
?>