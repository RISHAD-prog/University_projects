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
    echo "<table><tr> <th>ID</th>   <th>Name</th> <th>Student_Id</th> <th>Course</th> <th>Grade</th> <th>Faculty</th> </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["ID"] . "</td><td>"  . $row["Name"] . "</td><td>" . $row["Student_Id"] . "</td><td> " . $row["Course"] . "</td><td>" . $row["Grade"] . "</td><td>" . $row["Faculty"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
