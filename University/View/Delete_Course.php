<?php
include '../Controller/Pull_data.php';

if (!isset($_GET['id'])) {
    include "Not_found.php";
    exit;
}
$id = $_GET['id'];
pass_to_deletedata($id);

header("Location: Edit_classroutine.php");
