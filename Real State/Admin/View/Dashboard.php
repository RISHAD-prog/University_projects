<?php
session_start();
echo "<h2>welcome " . $_SESSION['username'] . "</h2>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container mt-3" style="margin-top:2%;margin-left:0%;width:15%">

        <form method="post">

            <ul class="list-group">
                <li class="list-group-item"><a href="Dashboard.php">Dashboard</a></li>
                <li class="list-group-item"><a href="View_Profile.php">View Profiles</a></li>
                <li class="list-group-item"><a href="Search_Data.php">Search Property</a></li>
                <li class="list-group-item"><a href="logout.php">Logout</a></li>
            </ul>
        </form>
    </div>
</body>

</html>