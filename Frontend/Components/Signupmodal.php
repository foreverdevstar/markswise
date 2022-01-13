<!-- Modal -->
<form method="POST" action="../Backend/Authentication/handlesignup.php">
    <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="signupModalLabel">Signup</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- form inside modal -->
                    <div class="mb-3">
                        <label for="schoolname" class="form-label">School Name</label>
                        <input type="text" class="form-control" id="schoolname" name="signupName">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="signupEmail">
                        <div id="emailHelp" class="form-text">We'll not spam to your e-mail.</div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="signupPassword">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label"> Confirm Password</label>
                        <input type="password" class="form-control" id="password" name="signupConfirmPassword">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Create Account</button>
                </div>
            </div>
        </div>
    </div>
</form>