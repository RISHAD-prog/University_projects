<?php
require_once '../Model/Query.php';
if (isset($_POST['submit'])) {
    $grade = ($_POST["Grade"]);




    if (!empty($grade)) {
        $data['grade'] = $_POST['Grade'];


        if (update_studentgrade($_POST['id'], $data)) {

            echo '<script> alert("Data Added successfully"); </script>';
        } else {
            echo 'Data not inserted';
        }
    } else {
        echo 'You are not allowed to access this page.';
    }
}
