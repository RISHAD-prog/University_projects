<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard</title>

</head>

<body>
    <div class="container" style="margin-top:07%;margin-left:4%">
        <?php
        session_start();
        echo "<h2>welcome " . $_SESSION['username'] . "</h2>";
        ?>
        <form method="post">

            <ul>
                <li><a href="User_Dashboard.php">Dashboard</a></li>
                <li><a href="View_Profile.php">View_Profile</a></li>
                <li><a href="Edit_Profile.php">Edit Profile</a></li>
                <li><a href="Class_Routine.php">Class Schedule</a></li>
                <li><a href="Edit_classroutine.php">Edit Class Routine</a></li>
                <li><a href="Add_student.php">Add Student</a></li>

                <li><a href="Search_Student.php">Search Student</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </form>
    </div>
</body>

</html>