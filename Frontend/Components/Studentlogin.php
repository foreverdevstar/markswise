<div class="container-float student-login-div">
    <div class="student-login-form">
        <div class="container-form">
            <h4 class="text-center">Student Portal</h4>
            <center>
            <img src="Images/student.svg" alt="" srcset="" class="student-img">
            </center>
            <form method="POST" action="../Backend/Authentication/handlestudentauth.php">
                <div class="mb-3 mt-4">
                    <input type="text" class="form-control" id="studentid" placeholder="Enter Student Unique ID..." name="studentid" required>
                </div>
                <button type="submit" class="btn btn-primary float-end login-btn-student">Login</button>
            </form>
        </div>
    </div>
</div>