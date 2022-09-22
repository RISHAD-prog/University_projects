<?php
include 'User_Dashboard.php';
include '../Controller/Registration_Logic.php';
if (!isset($_SESSION['username'])) {
    include "not_found.php";
    exit;
}

$username = $_SESSION['username'];
$user = GetUserInfo($username);
$msg = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $user = updateINFO($_POST, $username);
    $msg = "Value updated successfully";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Profile editing</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container" style="width:700px;">
        <form method="post">
            Name:
            <input type="text" name="name" class="form-control" value="<?php echo $user['name']; ?>">
            <br><br>
            E-mail:
            <input type="text" name="e-mail" class="form-control" value="<?php echo $user['e-mail']; ?>">
            <br><br>
            <fieldset>

                <legend>Date of Birth:</legend>
                <input type="date" name="dob" class="form-control" value="<?php echo $user['dob']; ?>">
                <br><br>
            </fieldset>
            <br><br>
            <input type="submit" value="Update" class="btn btn-info" /><br />
            <?php
            echo $msg;
            ?>
        </form>
    </div>
</body>

</html>