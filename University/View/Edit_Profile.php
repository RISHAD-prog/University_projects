<?php


require_once '../Model/Query.php';
session_start();
$data['username'] = $_SESSION['username'];
$user = showAlldata($data);
if ($user) {

    if ($user['Username'] == $_SESSION['username']) {
        echo "<h1>welcome " . $user['Username'] . "</h1>";
    }
}
if (isset($_POST['submit'])) {

    if (!empty($_POST['fullname']) and !empty($_POST['email']) and !empty($_POST['password']) and !empty($_POST['dob'])) {
        $userdata['fullname'] = $_POST['fullname'];
        $userdata['email'] = $_POST['email'];
        $userdata['password'] = $_POST['password'];
        $userdata['dob'] = $_POST['dob'];
        if (updateData($_POST['username'], $userdata)) {
            session_start();
            header('Location:../View/View_Profile.php');
        }
    }
}





?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Profile editing</title>
    <script>
        function validateform() {
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
            var dob = document.getElementById("dob").value;

            //var confirmpassword = document.getElementById("confirmpassword").value;
            //var gender = document.getElementById("gender").value;
            //var dob = document.getElementById("dob").value;

            var pattern = /^([a-zA-Z0-9\._]+)@([a-zA-Z0-9])+.([a-z]+)(.[a-z]+)?$/;
            // var username_pattern = /^[a-zA-Z-'_]*$/
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
            if (dob == '') {
                alert("Date cannot be empty ");
                return false;
            }








        }
    </script>
</head>

<body>

    <form method="post" action="<?php $_SERVER["PHP_SELF"]; ?>" onsubmit="return validateform()">
        Name:
        <input type="text" name="fullname" id='fullname' value="<?php echo $user['Full_Name']; ?>">
        <br><br>
        E-mail:
        <input type="text" name="email" id='email' value="<?php echo $user['Email']; ?>">
        <br><br>

        <label>Password</label>
        <input type="password" name="password" id='password' value="<?php echo $user['Password'];  ?>">
        <br><br>

        <fieldset>

            <legend>Date of Birth:</legend>
            <input type="date" name="dob" id='dob' value="<?php echo $user['Date_of_Birth']; ?>">
            <br><br>
        </fieldset>
        <br>
        <input type="hidden" name="username" id='username' value="<?php echo $user['Username']; ?>">
        <input type="submit" name="submit" value="Update" class="btn btn-info" /><br />
        <a href="User_Dashboard.php" class="btn btn-primary">User Dashboard</a>
    </form>
    </div>
</body>

</html>