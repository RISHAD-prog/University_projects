<?php
require_once '../Controller/Pull_data.php';
$user = pass_to_showCourse();

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



    <h3>Edit class routine</h3><br />
    <div class='container' style="width:1150px;margin:0%">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>

                        <th>Faculty</th>
                        <th>Day</th>
                        <th>Course</th>
                        <th>Time</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($user as $i => $data) :
                    ?>
                        <tr>

                            <td><?php echo $data['Faculty'] ?></td>
                            <td><?php echo $data['Day'] ?></td>
                            <td><?php echo $data['Course'] ?></td>
                            <td><?php echo $data['Time'] ?></td>

                            <td>
                                <a href="Update_Course.php?id=<?php echo $data['ID'] ?>" class="btn btn-sm btn-outline-secondary">Update</a>
                                <a href="Student_data.php?id=<?php echo $data['ID'] ?>" class="btn btn-sm btn-outline-secondary">See all Student</a>
                                <a href="Delete_Course.php?id=<?php echo $data['ID'] ?>" class="btn btn-sm btn-outline-secondary">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>


            <a href="Class_Routine.php" class="btn btn-primary">Create routine</a>
            <a href="User_Dashboard.php" class="btn btn-primary">Dashboard</a>
        </div>
</body>

</html>