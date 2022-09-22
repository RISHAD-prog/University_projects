<?php
require_once '../Controller/Pull_data.php';

if (!isset($_GET['id'])) {
    include "not_found.php";
    exit;
}

$ID = $_GET['id'];
$user = pass_to_getstudentid($ID);

echo "<h1>Updating " . $user['Name'] . " grade </h1>";
?>


<!DOCTYPE html>
<html>

<head>
    <title>Update Grade</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script>
        function validateform() {
            var Grade = document.getElementById("Grade").value;





            if (Grade == '') {
                alert("Grade must be fill out");
                return false;
            }







        }
    </script>
    <style type="text/css">
        .error {
            color: red;
        }
    </style>
</head>

<body>
    <br />

    <div class="container" style="width:500px;">

        <h3>Create class routine</h3><br />
        <form action="../Controller/Updating_Grade.php" method="post" onsubmit="return validateform()">
            <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
            <br />

            <label>Grade</label>
            <input type="text" id="Grade" name="Grade" class="form-control" value="" />

            </br>

            <label>Name</label>
            <p><?php echo $user['Name']; ?></p>

            </br>
            <label>Course</label>
            <p><?php echo $user['Course']; ?></p>

            <br>
            <label>Student_Id</label>
            <p><?php echo $user['Student_Id']; ?></p>

            <br>
            <label>Faculty</label>
            <p><?php echo $user['Faculty']; ?></p>

            <br>
            <br>


            <input type="submit" name="submit" value="Submit Grade" class="btn btn-info" /><br />
            <br>
            <a href="User_Dashboard.php" class="btn btn-primary">User Dashboard</a>

        </form>
    </div>
    <br />
</body>

</html>