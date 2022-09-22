<!DOCTYPE html>
<html>

<head>
    <title>User Class routine</title>
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
            if (Time != '' && Course != '' && Day != '') {
                alert("Data Added successfully");
                return true;
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
        <?php


        ?>
        <h3>Create class routine</h3><br />
        <form action="../Controller/Adding_routine.php" method="post" onsubmit="return validateform()">

            <br />
            <input type="hidden" name="teacher" class="form-control" value="<?php session_start();
                                                                            echo $_SESSION['username']; ?>" />
            <label>Day</label>
            <input type="text" id="Day" name="Day" class="form-control" value="" />

            </br>

            <label>Course</label>
            <input type="text" name="Course" id="Course" class="form-control" value="" />

            </br>
            <label>Time</label>
            <input type="text" name="Time" id="Time" class="form-control" value="" />

            <br><br>


            <input type="submit" name="submit" value="Create" class="btn btn-info" /><br />
            <br>
            <a href="User_Dashboard.php" class="btn btn-primary">User Dashboard</a>
            <?php
            if (isset($message)) {
                echo $message;
            }
            ?>
        </form>
    </div>
    <br />
</body>

</html>