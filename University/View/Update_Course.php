<?php
require_once '../Controller/Pull_data.php';

if (!isset($_GET['id'])) {
    include "not_found.php";
    exit;
}

$ID = $_GET['id'];
$user = pass_to_getid($ID);



?>


<!DOCTYPE html>
<html>

<head>
    <title>Update Course</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script>
        function validateform() {
            var Day = document.getElementById("Day").value;
            var Course = document.getElementById("Course").value;
            var Time = document.getElementById("Time").value;

            //var confirmpassword = document.getElementById("confirmpassword").value;
            //var gender = document.getElementById("gender").value;
            //var dob = document.getElementById("dob").value;

            //var pattern = /^([a-zA-Z0-9\._]+)@([a-zA-Z0-9])+.([a-z]+)(.[a-z]+)?$/
            // var username_pattern = /^[a-zA-Z-'_]*$/
            // var password_pattern = /[@, #, $,%]/


            if (Day == '') {
                alert("Day must be fill out");
                return false;
            }


            if (Course == '') {
                alert("Course cannot be empty ");
                return false;
            }

            if (Time == '') {
                alert("Time cannot be empty ");
                return false;
            }








        }
    </script>

</head>

<body>
    <br />

    <div class="container" style="width:500px;">

        <h3>Update class routine</h3><br />
        <form action="../Controller/Update_Routine.php" method="post" onsubmit="return validateform()">

            <br />
            <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
            <label>Day</label>
            <input type="text" id="Day" name="Day" class="form-control" value="<?php echo $user['Day']; ?>" />

            </br>

            <label>Course</label>
            <input type="text" name="Course" id="Course" class="form-control" value="<?php echo $user['Course']; ?>" />

            </br>
            <label>Time</label>
            <input type="text" name="Time" id="Time" class="form-control" value="<?php echo $user['Time']; ?>" />

            <br><br>


            <input type="submit" name="submit" value="Update" class="btn btn-info" /><br />
            <br>
            <a href="User_Dashboard.php" class="btn btn-primary">User Dashboard</a>

        </form>
    </div>
    <br />
</body>

</html>