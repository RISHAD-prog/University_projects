<?php
require_once '../Controller/Pull_data.php';
$users = pass_to_show();
include 'Dashboard.php';

if ($_SESSION['username'] != "Admin") {
    header("location:Login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>View Profile</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script>

    </script>
</head>

<body>
    <div class='container' style="width:1150px;margin:0%">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Gender</th>
                        <th>Dob</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($users as $i => $data) :
                    ?>
                        <tr>

                            <td><?php echo $data['Full_Name'] ?></td>
                            <td><?php echo $data['Email'] ?></td>
                            <td><?php echo $data['Username'] ?></td>
                            <td><?php echo $data['Gender'] ?></td>
                            <td><?php echo $data['Date_of_Birth'] ?></td>
                            <td>
                                <a href="Update.php?id=<?php echo $data['ID'] ?>" class="btn btn-sm btn-outline-secondary">Update</a>
                                <a href="Delete_User.php?id=<?php echo $data['ID'] ?>" class="btn btn-sm btn-outline-secondary">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
        <a href="Registration.php" class="btn btn-primary">Add User</a>
        <a href="Dashboard.php" class="btn btn-primary">Dashboard</a>
    </div>
</body>

</html>