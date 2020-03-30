<?php header("Location: http://localhost1/Care4Me2_v2/homepage.html");
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

$sql = "INSERT INTO report_incident (IncidentName, IncidentLocation, City, State, AnimalType,DateTime, Description)
VALUES ('$_POST[IncidentFormName]', '$_POST[IncidentFormLocation]','$_POST[IncidentFormCity]','$_POST[IncidentFormState]','$_POST[IncidentFormAType]','$_POST[IncidentFormTime]','$_POST[IncidentFormDescription]')";

if ($conn->query($sql) === TRUE) {
    echo "Incident created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

