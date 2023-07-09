<!DOCTYPE html>
<html>
<head>
    <title>User Login Form</title>
    <link rel="stylesheet" href="./css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/custom/registeration-form.css">
    <link rel="stylesheet" href="./css/custom/student-login-form.css">
    <link rel="stylesheet" href="./css/custom/common.css">
    <script src="./js/student-login.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="header-text">User Login Form</h1>
            </div>
        </div>
        <div class="row form-row">
            <div class="col-md-2"></div>
            <div class="col-md-8 form-div">
                <form action="student-login.php" method="post" onsubmit="return validateForm()">
                    <div class="user-email mb-2">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" class="form-control" placeholder="Student email" name="email">
                        <span id="email-error" class="error text-danger"></span>
                    </div>
                    <div class="user-password mb-2">
                        <label for="password" class="from-label">Password</label>
                        <input type="password" id="Password" class="form-control" placeholder="Password" name="password">
                        <span id="password-error" class="error text-danger"></span>
                    </div>
                    <div class="row text-center mt-3">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary col-12">Login</button>
                        </div>
                        <?php
                            if (isset($_GET['error']) && $_GET['error'] === 'invalid') {
                                echo "<p class='text-danger'>Email or password is invalid</p>";
                            }
                            ?>
                    </div>
                    <span class="new_users">Are you new?</span> <a href="student-registration-form.php">Register</a>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</body>
</html>
