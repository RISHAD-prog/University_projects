<?php
require_once '../Controller/Pull_data.php';
require_once '../Controller/Validation.php';
$nameErr = $passErr = "";
$username = $pass = "";

if (isset($_POST['submit'])) {

    session_start();
    if (empty($_POST["username"])) {
        $nameErr = "Name is required";
    } else if (empty($_POST["password"])) {
        $passErr = "pass is required";
    } else {
        $username = $_POST['username'];
        $data['username'] = $_POST['username'];
        $data['password'] = $_POST['password'];

        if (pass_topull($data)) {
            if ($data['username'] === $_POST['username'] and $data['password'] === $_POST['password']) {
                $_SESSION['username'] = $username;
                header("location:../View/User_Dashboard.php");
            }
        } else {

            echo " no data matched";
        }
        if (!empty($_POST['remember'])) {
            validation();
        } else {

            echo " no data matched";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script>
        function validation() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            if (username == '') {
                document.getElementById("span1").innerHTML = "username cannot be empty";
                return false;
            }
            if (password == '') {
                document.getElementById("span2").innerHTML = "password cannot be empty";
                return false;
            }

        }
    </script>

</head>

<body>
    <h1>Teacher Login</h1>
    <div class="container" style="margin-top:07%;height:100vh;width:400px;">
        <?php
        require_once 'Navbar.php';
        ?>
        <form action=" <?php echo $_SERVER["PHP_SELF"] ?> " method="POST">
            <fieldset>
                <legend>LOGIN</legend>
                User Name <input type="text" name="username" class="form-control" value="<?php if (isset($_COOKIE['uname'])) {
                                                                                                echo $_COOKIE['uname'];
                                                                                            } ?>">
                <span>* <?php echo $nameErr; ?></span>
                <br><br>
                Password <input type="password" name="password" class="form-control" value="<?php if (isset($_COOKIE['pass'])) {
                                                                                                echo $_COOKIE['pass'];
                                                                                            } ?>">
                <span>* <?php echo $passErr; ?></span>
                <br><br>
                <input type="checkbox" name="remember"> Remember me
                <br><br>
                <input type="submit" name="submit" value="Login">
                <a href="Forgot_Password.php">Forgot Password?</a>
                <a href="Home_Page.html">Home page</a>

            </fieldset>
        </form>



    </div>

</body>

</html>