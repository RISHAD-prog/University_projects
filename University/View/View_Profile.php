<?php
require_once '../Controller/Pull_data.php';
session_start();
$data['username'] = $_SESSION['username'];
if ($user = pass_to_show($data)) {

    if ($user['Username'] == $_SESSION['username']) {
        echo "<h1>welcome " . $user['Username'] . "</h1>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Update User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style type="text/css">
        .error {
            color: red;
        }
    </style>
</head>

<body>

    <div class="container" style="width:700px;">
        <h3>Update User</h3><br />
        <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST">

            <br />


            <label>Name</label>
            <p><?php echo $user['Full_Name']; ?></p>

            </br>
            <label>E-mail</label>
            <p><?php echo $user['Email']; ?> </p>

            </br>
            <label>User Name</label>
            <p><?php echo $user['Username']; ?> </p>

            </br>

            <fieldset>

                <legend>Date of Birth:</legend>
                <p><?php echo $user['Date_of_Birth']; ?></p>

                </br>
            </fieldset>

            <a href="User_Dashboard.php">Go to Dashboard</a>

            <br />

        </form>
    </div>
</body>

</html>