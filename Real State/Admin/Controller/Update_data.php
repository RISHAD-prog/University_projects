<?php
require_once '../Model/Query.php';
if (isset($_POST['addData'])) {
    $userdata['fullname'] = $_POST['fullname'];
    $userdata['email'] = $_POST['email'];
    $userdata['username'] = $_POST['username'];
    $userdata['dob'] = $_POST['dob'];
    if (updateData($_POST['id'], $userdata)) {
        session_start();
        header('Location:../View/View_Profile.php');
    } else {
        echo 'You are not allowed to access this page.';
    }
} else {
    echo 'You are not allowed to access this page.';
}
