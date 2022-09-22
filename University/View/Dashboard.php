<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
    
        <?php
        session_start();
        echo "<h2>welcome " . $_SESSION['username'] . "</h2>";
        ?>
        <form method="post">
            <ul>
                <li><a href="Dashboard.php">Dashboard</a></li>
                <li><a href="View_Profile.php">View Profiles</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </form>
    </div>
</body>

</html>