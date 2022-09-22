<!DOCTYPE html>
<html lang="en">

<head>

    <title>Profile</title>
</head>

<body>

    <?php

    include 'User_Dashboard.php';
    


    $name = "";

    $user = UserInfo($name);

    echo "<label>Name:</label>" . $user['name'];
    echo "<br>";
    echo "<label>Email:</label>" . $user['e-mail'];
    echo "<br>";
    echo "<label>Username:</label>" . $user['username'];
    echo "<br>";
    echo "<label>Gender:</label>" . $user['gender'];
    echo "<br>";
    echo "<label>Date of Birth:</label>" . $user['dob'];
    echo "<br>";
    ?>

</body>

</html>