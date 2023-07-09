<!DOCTYPE html>
<html>
<head>
    <title>User Registration Form</title>
    <link rel="stylesheet" href="./css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/custom/registeration-form.css">
    <link rel="stylesheet" href="./css/custom/common.css">
    <script src="./js/student-registration.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="header-text">User Registration Form</h1>
            </div>
        </div>
        <div class="row form-row">
            <div class="col-md-2"></div>
            <div class="col-md-8 form-div">
                <form action="student-registration.php" method="post" onsubmit="return validateForm()">
                    <div class="user-name mb-2">
                        <label class="form-label" for="name">Name</label>
                        <input type="text" id="name" class="form-control" placeholder="Student name" name="name">
                        <span id="name-error" class="error text-danger"></span>
                    </div>
                    <div class="user-email mb-2">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" class="form-control" placeholder="Student email" name="email">
                        <span id="email-error" class="error text-danger"></span>
                    </div>
                    <div class="user-phone mb-2">
                        <label class="from-label" for="phone">Phone</label>
                        <input type="tel" id="phone" class="form-control" placeholder="Phone number" name="phone">
                        <span id="phone-error" class="error text-danger"></span>
                    </div>
                    <div class="user-address mb-2">
                        <label for="address" class="from-label">Address</label>
                        <input type="textarea" id="address" class="form-control" placeholder="Address" name="address">
                        <span id="address-error" class="error text-danger"></span>
                    </div>
                    <div class="user-password mb-2">
                        <label for="password" class="from-label">Password</label>
                        <input type="password" id="Password" class="form-control" placeholder="Password" name="password">
                        <span id="password-error" class="error text-danger"></span>
                    </div>
                    <div class="row text-center mt-3">
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-primary col-12">Submit</button>
                        </div>
                        <div class="col-md-4">
                            <button type="button" class="btn btn-default btn-reset col-12">Reset</button>
                        </div>
                    </div>
                    <span class="new_users">Already register?</span> <a href="student-login-form.php">Login</a>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</body>
</html>
