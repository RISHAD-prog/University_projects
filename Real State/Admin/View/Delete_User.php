<?php
include '../Controller/Pull_data.php';

if (!isset($_GET['id'])) {
    include "Not_found.php";
    exit;
}
$id = $_GET['id'];
deleteData($id);

header("Location: View_Profile.php");
