<?php
session_start();
if (isset($_SESSION['username'])) {
    session_destroy();
    header("location:Login.php");
} else {
    header("location:Login.php");
}
