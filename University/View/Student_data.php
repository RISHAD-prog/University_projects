<?php
require_once '../Controller/Pull_data.php';

if (!isset($_GET['id'])) {
    include "not_found.php";
    exit;
}

$ID = $_GET['id'];
$user = pass_to_getid($ID);
$student = pass_to_showCoursedata();

echo "<h1>welcome " . $user['Course'] . " Course </h1>";
?>

<!DOCTYPE html>
<html>

<head>
    <title>User Class routine</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>

<body>
    <br />



    <h3>Show all student</h3><br />
    <div class='container' style="width:1150px;margin:0%">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Student Id</th>
                        <th>Course</th>
                        <th>Grade</th>
                        <th>Faculty</th>

                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($student as $i => $allstudent) : ?>
                        <?php if ($allstudent['Course'] == $user['Course']) : ?>

                            <tr>

                                <td><?php echo $allstudent['Name'] ?></td>
                                <td><?php echo $allstudent['Student_Id'] ?></td>
                                <td><?php echo $allstudent['Course'] ?></td>
                                <td><?php echo $allstudent['Grade'] ?></td>
                                <td><?php echo $allstudent['Faculty'] ?></td>

                                <td>

                                    <a href="Grade.php?id=<?php echo $allstudent['ID'] ?>" class="btn btn-sm btn-outline-secondary">Update Grade</a>

                                </td>
                            </tr>

                        <?php endif; ?>
                    <?php endforeach; ?>

                </tbody>
            </table>



            <a href="User_Dashboard.php" class="btn btn-primary">Dashboard</a>
        </div>
</body>

</html>