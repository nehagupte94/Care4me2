<?php header("Location: http://localhost1/Care4Me2_v2/signin.html");
$servername = "localhost1";
$username = "root";
$password = "";
$dbname = "project_test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO register (FName, LName, Email, Phone,Password)
VALUES ('$_POST[RegisterFormFName]', '$_POST[RegisterFormLName]','$_POST[RegisterFormEmail]','$_POST[RegisterFormPhone]','$_POST[RegisterFormPassword]')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
