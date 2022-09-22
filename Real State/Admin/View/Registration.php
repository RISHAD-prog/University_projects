<!DOCTYPE html>
<html>

<head>
    <title>User Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style>
        @media screen and (min-width:500px) {
            body {
                background-color: beige;
            }
        }
    </style>
    <script>
        function validateform() {
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            var confirmpassword = document.getElementById("confirmpassword").value;
            var gender = document.getElementById("gender").value;
            var dob = document.getElementById("dob").value;

            var pattern = /^([a-zA-Z0-9\._]+)@([a-zA-Z0-9])+.([a-z]+)(.[a-z]+)?$/
            var username_pattern = /^[a-zA-Z-'_]*$/
            var password_pattern = /[@, #, $,%]/


            if (name == '') {
                alert("Name must be fill out");
                return false;
            }

            if (!isNaN(name)) {
                alert(" Name can have only letters and white space ");
                return false;
            }
            if (name.length < 2) {
                alert("Name contains at least two  words");
                return false;
            }

            if (email == '') {
                alert("email cannot be empty ");
                return false;
            }
            if (!email.match(pattern)) {
                alert("email is invalid");
                return false;
            }

            if (username == '') {
                alert("username cannot be empty");
                return false;
            }
            if (username.length < 3) {
                alert("Username contains at least three  words");
                return false;
            }
            if (!username.match(username_pattern)) {
                alert("username must have letters and underscore ");
                return false;
            }

            if (password == '') {
                alert("password cannot be empty");
                return false;
            }
            if (username.length < 8) {
                alert("username must not be less than eight (8) characters");
                return false;
            }
            if (!password.match(password_pattern)) {
                alert("password must contain at least one of the special characters (@, #, $,%)");
                return false;
            }
            if (confirmpassword == '') {
                alert("confirmpassword cannot be empty");
                return false;
            }
            if (password != confirmpassword) {
                alert("password does not match to the new password");
                return false;
            }
            if (gender == '') {
                alert("gender cannot be empty");
                return false;
            }
            if (dob == '') {
                alert("date of birth cannot be empty");
                return false;
            }


        }
    </script>
    <style type="text/css">
        .error {
            color: red;
        }
    </style>
</head>

<body>
    <br />

    <div class="container" style="width:500px;">
        <?php
        require 'Navbar.php';
        ?>
        <h3>Add User</h3><br />
        <form action="../Controller/Adding_data.php" method="post" onsubmit="return validateform()">
            <?php
            if (isset($error)) {
                echo $error;
            }
            ?>
            <br />
            <label>Full Name</label>
            <input type="text" id="name" name="name" class="form-control" value="" />

            </br>
            <label>E-mail</label>
            <input type="text" name="email" id="email" class="form-control" value="" />

            </br>
            <label>User Name</label>
            <input type="text" name="username" id="username" class="form-control" value="" />

            </br>
            <label>Password</label>
            <input type="password" name="password" id="password" class="form-control" />

            </br>
            <label>Confirm Password</label>
            <input type="password" name="confirmpassword" id="confirmpassword" class="form-control" />

            <br>

            <fieldset>
                <legend>Gender</legend>
                <input type="radio" id="gender" name="gender" value="male">
                <label for="male">Male</label>
                <input type="radio" id="gender" name="gender" value="female">
                <label for="female">Female</label>
                <input type="radio" id="gender" name="gender" value="other">
                <label for="other">Other</label>

                </br>
                <legend>Date of Birth:</legend>
                <input type="date" name="dob" id="dob">

                </br>
            </fieldset>

            <input type="submit" name="submit" value="Register" class="btn btn-info" /><br />

            <?php
            if (isset($message)) {
                echo $message;
            }
            ?>
        </form>
    </div>
    <br />
</body>

</html>