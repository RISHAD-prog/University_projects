<!DOCTYPE html>
<html lang="en">

<head>

    <title>Routine</title>
</head>

<body>

    <?php

    include 'User_Dashboard.php';
    include '../Controller/Registration_Logic.php';


    $name = "";

    $user = UserRoutine($name);

    echo "<label>Day:</label>" . $user['Day1'];
    echo "<br>";
    echo "<label>Time:</label>" . $user['Time1'];
    echo "<br>";
    ?>

</body>

</html>