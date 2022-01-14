<?php

$schoolid = $_SESSION['school_id'];
$classid = $_GET['classid'];
$sectionid = $_GET['sectionid'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "markswise";
    
    $connection = mysqli_connect($servername, $username, $password, $database);
                         $sql = "SELECT * FROM `studentsmarks` where school_unique_id = '$schoolid' and class_id = '$classid' and student_section = '$sectionid'"; 
                         $result = mysqli_query($connection, $sql);
?>