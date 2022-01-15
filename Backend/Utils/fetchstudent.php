<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "markswise";
    $connection = mysqli_connect($servername, $username, $password, $database);

    if(isset($_GET['studentid'])){
        $studentid = $_GET['studentid'];

        $sql = "SELECT * FROM `studentsmarks` where student_unique_id= '$studentid'"; 
        $result = mysqli_query($connection, $sql);
    }
?>