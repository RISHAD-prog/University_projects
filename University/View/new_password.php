<?php

require_once '../Controller/Pull_data.php';

session_start();
$data['email']=$_SESSION['email'];

$user=pass_topull_email($data);

if($user)
{
   echo "welcome";
  
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
        <form action="../Controller/Update_Password.php" method="POST">
            <fieldset>
                <legend> New Password </legend>
                 <input type="text" name="username"  value="<?php echo $user['Username']; ?>" >
             
                Enter password: <input type="text" name="password" class="form-control" value="<?php echo $user['Password']; ?>">
                
                <br><br>
                Confirm password: <input type="text" name="confirm_password" class="form-control">
               
                <br><br>
                <input type="submit" name="submit" value="Submit" class="form-control">

            </fieldset>
        </form>
        <a href="Login.php">Go to Login</a>
    </div>
    <?php require 'footer.php'; ?>
</body>

</html>