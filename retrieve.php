<?php
$servername = "localhost1";
$username = "root";
$password = "";
$database = "project_test";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT FName,LName,Email FROM register";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>FName</th><th>LName</th><th>Email</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["FName"]. "</td><td>" . $row["LName"]. " </td><td>" . $row["Email"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>