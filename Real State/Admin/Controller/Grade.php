<?php
require_once '../Controller/Pull_data.php';

if (!isset($_GET['id'])) {
    include "not_found.php";
    exit;
}

$ID = $_GET['id'];
$user = pass_to_getid($ID);
