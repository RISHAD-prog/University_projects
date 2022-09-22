<?php
require_once '../Model/Query.php';
if (isset($_POST['addData'])) {
    $userdata['fullname'] = $_POST['fullname'];
    $userdata['email'] = $_POST['email'];
    $userdata['password'] = $_POST['password'];
    $userdata['dob'] = $_POST['dob'];
    if (updateData($_POST['username'], $userdata) ) {
        session_start();
        header('Location:../View/View_Profile.php');
    } else {
        echo 'You are not allowed to access this page.';
    }
} else {
    echo 'You are not allowed to access this page.';
}
