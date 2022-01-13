<?php
    include '../config.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['signupName'];
    $email = $_POST['signupEmail'];
    $pass = $_POST['signupPassword'];
    $cpass = $_POST['signupConfirmPassword'];

    $existSql = "select * from `schools` where school_email = '$email'";
    $result = mysqli_query($connection, $existSql);
    $numRows = mysqli_num_rows($result);

    //checking for any other email existance
    if($numRows>0){
        header("Location: /markswise/Frontend/index.php?signupsuccess=false&error=usernameAlreadyExist");
    }
    else
    {
        if($pass == $cpass)
        {
            $hash = password_hash($pass, PASSWORD_DEFAULT);
            $uniqueid = md5($email);
            $sql = "INSERT INTO `schools`(`school_name`, `school_email`, `school_password`, `school_unique_id`, `timestamp`) VALUES ('$name','$email','$hash','$uniqueid',current_timestamp());";
            $result = mysqli_query($connection, $sql);
            header("Location: /markswise/Frontend/index.php?signupsuccess=true");
            exit();     
        }
        else
        {
            header("Location: /markswise/Frontend/index.php?signupsuccess=false&error=passwordsDoNotMatch");
        }
    }
}    
?>
