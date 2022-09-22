<?php



$data = "";
if (isset($_GET['q'])) {
    $data = $_GET['q'];
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "teacher";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM student WHERE Student_Id LIKE '%$data%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $hint = "";

    while ($row = $result->fetch_assoc()) {
        echo " " . $row["Student_Id"] . " ";
    }
}

$conn->close();
