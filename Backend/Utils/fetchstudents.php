<?php
session_start();
$schoolid = $_SESSION['school_id'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "markswise";
    
    $connection = mysqli_connect($servername, $username, $password, $database);
                         $sql = "SELECT * FROM `studentsmarks` where school_unique_id = '$schoolid'"; 
                         $result = mysqli_query($connection, $sql);
?>