<?php



$data = "";
if (isset($_GET['q'])) {
    $data = $_GET['q'];
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "property_db";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    exit("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM properties WHERE House_Type LIKE '%$data%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>House_Type</th> <th>Buying_Price</th> <th>Selling_Price</th> </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["ID"] . "</td><td>" . $row["House_Type"] . "</td><td> " . $row["Buying_Price"] . "</td><td>" . $row["Selling_Price"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
