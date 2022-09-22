<?php
require_once '../Model/Query.php';
if (isset($_POST['submit'])) {
    $day = ($_POST["Day"]);
    $course = ($_POST["Course"]);
    $time = ($_POST["Time"]);
   

    if (!empty($day) and !empty($course) and !empty($time) ) {
        $data['username']=$_POST['teacher'];
        $data['Day'] = $_POST['Day'];
        $data['Course'] = $_POST['Course'];
        $data['Time'] = $_POST['Time'];
        if (create_schedule($data)) {
           
            session_start();
            header("location:../View/Edit_classroutine.php");
            echo '<script> alert("Data Added successfully"); </script>';
        } else {
            echo 'Data not inserted';
        }
    } 
    else {
        echo 'You are not allowed to access this page.';
    }
}
?>
