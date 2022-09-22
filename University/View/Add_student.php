<?php
require_once '../Controller/Pull_data.php';
session_start();
$data['username']=$_SESSION['username'];

if(pass_to_showfaculty($data))
{
    $user=pass_to_showfaculty($data);
        
}
$users = pass_to_showCourse();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Add Student</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script>
        function validateform() {
            var name = document.getElementById("name").value;
            var id = document.getElementById("student_id").value;
           
            //var confirmpassword = document.getElementById("confirmpassword").value;
            //var gender = document.getElementById("gender").value;
            //var dob = document.getElementById("dob").value;

            //var pattern = /^([a-zA-Z0-9\._]+)@([a-zA-Z0-9])+.([a-z]+)(.[a-z]+)?$/
           // var username_pattern = /^[a-zA-Z-'_]*$/
           // var password_pattern = /[@, #, $,%]/


            if (name == '') {
                alert("name must be fill out");
                return false;
            }


            if (id == '') {
                alert("id cannot be empty ");
                return false;
            }
            
           
            if(name!='' && id!= '' )
            {
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
    
        <h3>Add Student</h3><br />
        <form action="../Controller/Add_Student.php" method="post" onsubmit="return validateform()">
          
            <br />
           
            <label>Student Name</label> 
            <input type="text" id="name" name="name" class="form-control" value="" />

            </br>
            
            <label>Student Id</label>
            <input type="text" name="student_id" id="student_id" class="form-control" value="" />

            </br>
            <label>Course</label>
           <br>
          
           <select name="course" id="course">
           <?php
                    foreach ($users as $i => $data) :
                    ?> 
            <option value="<?php echo $data['Course'] ?>"><?php echo $data['Course'] ?></option>
            <?php endforeach; ?>
            </select>

           <br><br>
           <label>Faculty</label> 
            <input type="text" id="faculty" name="faculty" class="form-control" value="<?php echo $user['Faculty'] ?>"  />

            </br>
            

            <input type="submit" name="submit" value="ADD" class="btn btn-info" /><br />
            <br>
            <a href="User_Dashboard.php" class="btn btn-primary">User Dashboard</a>
           
        </form>
    </div>
    <br />
</body>

</html>