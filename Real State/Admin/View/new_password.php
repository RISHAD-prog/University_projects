<?php
session_start();
include '../Controller/Pull_Data.php';
$confirmationErr = "";
$passErr = "";
$passwordErr = "";
if (isset($_POST['submit'])) {

    if (empty($_POST["password"])) {
        $passErr = "password is required";
    }
    if (empty($_POST["confirm_password"])) {
       {
        $passwordErr = "confirmation is required";
        
       } 
    if(!empty($_POST["password"]) and !empty($_POST["confirm_password"]) )
    {
        if($_POST["password"] != $_POST["confirm_password"])
        {
            $confirmationErr="Password should be matched";
            $data['confirm_password']=$_POST['confirm_password'];
            if(update($data))
            {
                
            }
        }
        
        $file_data = dataloading();
        foreach ($file_data as $data) {
            if ($_POST['otp'] == $otp) {
                $_SESSION['username'] = $data['username'];
                header("location:User_Dashboard.php");
            } else {
                $otperr = "OTP doesn't match";
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
                <legend> New Password </legend>
                Enter password: <input type="text" name="password" class="form-control">
                <span class="error">* <?php echo $emailerr; ?></span>
                <br><br>
                Confirm password: <input type="text" name="confirm_password" class="form-control">
                <span class="error">* <?php echo $emailerr; ?></span>
                <br><br>
                <input type="submit" name="submit" value="Submit" class="form-control">


                <h3> <?php echo $otperr; ?> </h3>
            </fieldset>
        </form>
        <a href="Login.php">Go to Login</a>
    </div>
    <?php require 'footer.php'; ?>
</body>

</html>