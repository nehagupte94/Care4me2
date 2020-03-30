<?php
$servername = "localhost1";
$username = "root";
$password = "";
$dbname = "project_test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Login function

if(isset($_POST['btn_submit'])){

    $uname = $_POST['LoginFormEmail'];
    $password = $_POST['LoginFormPassword'];

    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from register where Email='".$uname."' and Password='".$password."'";
        $result = mysqli_query($conn,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
			//echo "Welcome '$uname'!";
            header('Location: http://localhost1/Care4Me2_v2/homepage1.php');
        }else{
            echo "Invalid username and password";
        }

    }

}

?>