<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "markswise";
    
    $connection = mysqli_connect($servername, $username, $password, $database);
                         $sql = "SELECT * FROM `classes`"; 
                         $result = mysqli_query($connection, $sql);
?>