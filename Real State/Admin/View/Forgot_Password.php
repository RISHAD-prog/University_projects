<?php
session_start();
include '../Controller/pull_data.php';
$emailerr = $emailaddress = "";

if (isset($_POST['submit'])) {

    if (empty($_POST["email"])) {
        $emailerr = "Email is required";
    } else {
        $emailaddress = $_POST["email"];
        $email['email'] = $emailaddress;

        if (pass_topull_email($email)) {

            if ($email['email'] === $emailaddress) {
                $_SESSION['email'] = $email['email'];
                session_start();
                header("location:OTP.php");
            } else {
                echo "no match";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Forgot Password</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
    <h1>Home Mavens</h1>

    <div class="container" style="margin-top:07%;height:100vh;width:400px;">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <fieldset>
                <legend> Forgot Password </legend>
                Enter Email: <input type="text" name="email" class="form-control">
                <span class="error">* <?php echo $emailerr; ?></span>
                <br><br>
                <input type="submit" name="submit" value="Submit" class="form-control">

                <h3>OTP sent to <?php echo $emailaddress; ?></h3>
            </fieldset>
        </form>
        <a href="Login.php">Go to Login</a>
    </div>
    <?php require 'footer.php'; ?>
</body>

</html>