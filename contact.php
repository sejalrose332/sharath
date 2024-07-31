<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['submit'])) {
    register();
}

function register(){
    $dbservername = 'localhost';
    $dbusername = 'root';
    $dbpassword = '';
    $dbname = 'enquiry';
    $conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        echo "Connected successfully<br>";
    }

    $YourName = mysqli_real_escape_string($conn, $_POST['name']);
    $PhoneNo = mysqli_real_escape_string($conn, $_POST['phone']);
    $EmailID = mysqli_real_escape_string($conn, $_POST['email']);
    $Services = mysqli_real_escape_string($conn, $_POST['fleets']);
    $TypeTravel = mysqli_real_escape_string($conn, $_POST['typetravel']);
    $Dates = mysqli_real_escape_string($conn, $_POST['date']);

    $query = "INSERT INTO user (YourName, PhoneNo, EmailID, Services, TypeTravel, Dates) VALUES ('$YourName', '$PhoneNo', '$EmailID', '$Services', '$TypeTravel', '$Dates')";

    if (mysqli_query($conn, $query)) {
        echo "New record created successfully";
        header('Location: contact.html');
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>