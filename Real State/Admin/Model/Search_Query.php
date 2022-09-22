<?php



$data = "c";
if (isset($_GET['q'])) {
    $data = $_GET['q'];
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "property_db";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM properties WHERE House_Type LIKE '%$data%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $hint = "";

    while ($row = $result->fetch_assoc()) {
        echo " " . $row["House_Type"] . " ";
    }
}

$conn->close();
