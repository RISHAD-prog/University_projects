<?php
function validation()
{
    if (!empty($_POST['remember'])) {
        setcookie("uname", $_POST['username'], time() + 10);
        setcookie("pass", $_POST['password'], time() + 10);
        echo "Cookie setup done";
    } else {
        setcookie("uname", "");
        setcookie("pass", "");
        echo "Cookie not set";
    }
}
function sessionvalidation()
{
    if (isset($_SESSION['username'])) {
        echo "<h1>Welcome to your dashborad " . $_SESSION['username'] . "</h1>";
    } else {
        header("location:Login.php");
    }
}
