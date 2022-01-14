<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "markswise";
$connection = mysqli_connect($servername, $username, $password, $database);
     $method = $_SERVER['REQUEST_METHOD'];
     if($method == 'POST'){
        $classid = $_GET['classid'];
        $schoolid = $_SESSION['school_id'];

        $studentname = $_POST['studentname'];
        $roll = $_POST['roll'];
        $section = $_POST['section'];
        $bangla = $_POST['bangla'];
        $english = $_POST['english'];
        $maths = $_POST['maths'];
        $history = $_POST['history'];
        $physicalscience = $_POST['physicalscience'];
        $lifescience = $_POST['lifescience'];
        $geography = $_POST['geography'];
        $optionalelective = $_POST['optionalelective'];   
        $student_unique_id = md5($studentname);
        $sql = "INSERT INTO `studentsmarks`(`student_name`, `student_roll`, `student_section`, `school_unique_id`, `class_id`, `bangla`, `english`, `maths`, `history`, `physical_science`, `life_science`, `geography`, `optional_elective`, `student_unique_id`) VALUES ('$studentname','$roll','$section','$schoolid','$classid','$bangla','$english','$maths','$history','$physicalscience','$lifescience','$geography','$optionalelective','$student_unique_id');";
        $result = mysqli_query($connection, $sql);
     }
?>