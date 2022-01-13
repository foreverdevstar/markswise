<?php
session_start();
include 'loginModal.php';
include 'signupModal.php';
include 'logoutModal.php';
echo
'<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="./Images/favicon.png" alt="" width="30" height="30" class="d-inline-block align-text-top">
            Markswise
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">';

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)
{

    echo
    '<button class="btn btn-outline-dark user-btn" disabled><i class="fas fa-school"></i>&nbsp;Welcome&nbsp;'.$_SESSION['school_name'].'</button>
    <button class="btn btn-primary logout-btn" data-bs-toggle="modal" data-bs-target="#logoutModal">Logout</button>';
}
else{
echo
'<button class="btn btn-primary login-btn" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
 <button class="btn btn-primary signup-btn" data-bs-toggle="modal" data-bs-target="#signupModal">Create Account</button>';
}
echo
'</div>
</div>
</div>
</nav>';
?>
