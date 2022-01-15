<?php
    include '../config.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $studentid = $_POST['studentid'];

    $sql = "Select * from `studentsmarks` where student_unique_id='$studentid'";
    $result = mysqli_query($connection, $sql);
    $numRows = mysqli_num_rows($result);

    if($numRows==1)
    {
        $row = mysqli_fetch_assoc($result);
            header("Location: /markswise/Frontend/viewmarks.php?loginsuccess=true&studentid=".$row['student_unique_id']."");
    }
    else
    {
        header("Location: /markswise/Frontend/studentaccess.php?loginsuccess=flase&error=studentidnotmatched");    
    }
}
?>