<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "markswise";

    $method = $_SERVER['REQUEST_METHOD'];
    if($method == 'POST'){

    $schoolid = $_GET['schoolid'];
    $classid = $_GET['classid'];
    $sectionid = $_GET['sectionid'];
    $studentid = $_GET['studentid'];
    $bangla = $_POST['bangla'];
    $english = $_POST['english'];
    $maths = $_POST['maths'];
    $history = $_POST['history'];
    $physicalscience = $_POST['physicalscience'];
    $lifescience = $_POST['lifescience'];
    $geography = $_POST['geography'];
    $optionalelective = $_POST['optionalelective'];  

    $connection = mysqli_connect($servername, $username, $password, $database);

    $sql = "UPDATE `studentsmarks` SET `bangla`='$bangla',`english`='$english',`maths`='$maths',`history`='$history',`physical_science`='$physicalscience',`life_science`='$lifescience',`geography`='$geography',`optional_elective`='$optionalelective' WHERE `student_unique_id`='$studentid'";
    $result = mysqli_query($connection, $sql);

        echo
        '<script>
        window.location.href = "/markswise/Frontend/class.php?classid='.$classid.'&sectionid='.$sectionid.'&schoolid='.$schoolid.'";
        </script>';

    }
?>