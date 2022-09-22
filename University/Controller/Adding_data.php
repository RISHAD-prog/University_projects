<?php
require_once '../Model/Query.php';
require_once 'Pull_data.php';
if (isset($_POST['submit'])) {
    $name = ($_POST["name"]);
    $email = ($_POST["email"]);
    $username = ($_POST["username"]);
    $conpass = $_POST["confirmpassword"];
    $gender = ($_POST["gender"]);
    $date = ($_POST["dob"]);
    if (!empty($name) and !empty($email) and !empty($username) and !empty($conpass) and !empty($gender) and !empty($date)) {

        $data['username'] = $_POST['username'];

        $data['password'] = $_POST['confirmpassword'];

        if (pass_topull($data)) {
            if ($data['username'] !== $_POST['username'] and $data['password'] !== $_POST['confirmpassword']) {
                $user['fullname'] = $_POST['name'];
                $user['username'] = $_POST['username'];
                $user['email'] = $_POST['email'];
                $user['password'] = $_POST['confirmpassword'];
                $user['gender'] = $_POST['gender'];
                $user['dateofbirth'] = $_POST['dob'];
                if (insert_data($user)) {

                    session_start();
                    header("location:../View/Registration.php");
                } else {
                }
            } else {

                echo '<script> alert("Duplicate username and password");  </script>';
            }
        } else {
            echo 'Data not inserted';
        }
    } else {
        echo 'You are not allowed to access this page.';
    }
}
