<?php
require_once '../Controller/Pull_data.php';
$nameErr = $emailErr = $usernameErr = $genderErr = $dateErr = "";
$name = $email = $username = $gender = $date = "";
if (!isset($_GET['id'])) {
    include "not_found.php";
    exit;
}

$ID = $_GET['id'];
$user = pass_to_getid($ID);



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Update User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script>
        function validateform() {
            var name = document.getElementById("fullname").value;
            var email = document.getElementById("email").value;
            var password = document.getElementById("username").value;
            var dob = document.getElementById("dob").value;

            //var confirmpassword = document.getElementById("confirmpassword").value;
            //var gender = document.getElementById("gender").value;
            //var dob = document.getElementById("dob").value;

            var pattern = /^([a-zA-Z0-9\._]+)@([a-zA-Z0-9])+.([a-z]+)(.[a-z]+)?$/;
            var username_pattern = /^[a-zA-Z-'_]*$/;
            // var password_pattern = /[@, #, $,%]/


            if (name == '') {
                alert("Name must be fill out");
                return false;
            }


            if (email == '') {
                alert("Email cannot be empty ");
                return false;
            }

            if (password == '') {
                alert("Password cannot be empty ");
                return false;
            }
            if (!email.match(pattern)) {
                alert("email is invalid");
                return false;
            }
            if (!email.match(username_pattern)) {
                alert("Username is invalid");
                return false;
            }
            if (dob == '') {
                alert("Date cannot be empty ");
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

    <div class="container" style="width:700px;">
        <h3>Update User</h3><br />
        <form action="../Controller/Update_data.php" method="POST">

            <br />
            <label>Name</label>
            <input type="text" name="fullname" id="fullname" class="form-control" value="<?php echo $user['Full_Name']; ?>" />

            </br>
            <label>E-mail</label>
            <input type="text" name="email" id="email" class="form-control" value="<?php echo $user['Email']; ?>" />

            </br>
            <label>User Name</label>
            <input type="text" name="username" id="username" class="form-control" value="<?php echo $user['Username']; ?>" />

            </br>

            <fieldset>

                <legend>Date of Birth:</legend>
                <input type="date" name="dob" id="dob" value="<?php echo $user['Date_of_Birth']; ?>">

                </br>
            </fieldset>
            <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
            <input type="submit" name="addData" value="Append" class="btn btn-info" /><br />

        </form>
    </div>
</body>

</html>