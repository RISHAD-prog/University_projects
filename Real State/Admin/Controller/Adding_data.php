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

        $data['fullname'] = $_POST['name'];
        $data['username'] = $_POST['username'];
        $data['email'] = $_POST['email'];
        $data['password'] = $_POST['confirmpassword'];
        $data['gender'] = $_POST['gender'];
        $data['dateofbirth'] = $_POST['dob'];
        if (pass_topull($data)) {
            if ($data['username'] !== $_POST['username'] and $data['password'] !== $_POST['confirmpassword']) {
                if (insert_data($data)) {

                    session_start();
                    header("location:../View/Registration.php");
                } else {
                }
            } else {

                echo '<script> alert("Duplicate username and password"); </script>';
            }
        } else {
            echo 'Data not inserted';
        }
    } else {
        echo 'You are not allowed to access this page.';
    }
}
