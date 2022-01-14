<?php
    include '../Backend/Utils/fetchstudent.php';
    while($row = mysqli_fetch_assoc($result))
    {
        $name = $row['student_name'];
        $roll = $row['student_roll'];
        $section = $row['student_section'];
        $class = $row['class_id'];
        $studentid = $row['student_unique_id'];

        $bangla = $row['bangla'];
        $english = $row['english'];
        $maths = $row['maths'];
        $history = $row['history'];
        $physical_science = $row['physical_science'];
        $life_science = $row['life_science'];
        $geography = $row['geography'];
        $optional_elective = $row['optional_elective'];
    }
?>