<?php
require_once '../Model/Query.php';
if (isset($_POST['submit'])) {
    $userdata['day'] = $_POST['Day'];
    $userdata['course'] = $_POST['Course'];
    $userdata['time'] = $_POST['Time'];
    
    if (update_routine($_POST['id'], $userdata)) {
        session_start();
        header('Location:../View/Edit_classroutine.php');
    } 
}