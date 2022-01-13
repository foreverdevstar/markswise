<?php
    include '../config.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST['loginEmail'];
    $password = $_POST['loginPassword'];

    $sql = "Select * from `schools` where school_email='$email'";
    $result = mysqli_query($connection, $sql);
    $numRows = mysqli_num_rows($result);

    if($numRows==1)
    {
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row['school_password']))
        {
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['sno'] = $row['school_unique_id'];

            header("Location: /markswise/Frontend/index.php?loginsuccess=true&school=".$row['school_unique_id']."");
        }
        else
        {
            header("Location: /markswise/Frontend/index.php?loginsuccess=flase&error=usernameorpasswordsDoNotMatch");
        }
    }
    else
    {
        header("Location: /markswise/Frontend/index.php?loginsuccess=flase&error=usernameorpasswordsDoNotMatch");    
    }

}
?>