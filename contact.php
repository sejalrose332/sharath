<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['submit'])) {
    register();
}

function register() {
    // Remote database connection details
    $dbservername = 'srv1641.hstgr.io'; // Replace with the remote host or IP address
    $dbusername = 'su419624398_sharathtoursan';
    $dbpassword = 'Newyorkcity2334';
    $dbname = 'u419624398_sharathtours';

    // Create a new connection
    $conn =mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error . " (" . $conn->connect_errno . ")");
    }

    // Sanitize user input
    $YourName = $conn->real_escape_string($_POST['name']);
    $PhoneNo = $conn->real_escape_string($_POST['phone']);
    $EmailID = $conn->real_escape_string($_POST['email']);
    $Services = $conn->real_escape_string($_POST['fleets']);
    $TypeTravel = $conn->real_escape_string($_POST['typetravel']);
    $Dates = $conn->real_escape_string($_POST['date']);

    // Prepare and bind
    $query = $conn->prepare("INSERT INTO user (YourName, PhoneNo, EmailID, Services, TypeTravel, Dates) VALUES (?, ?, ?, ?, ?, ?)");
    if ($query === false) {
        die("Error preparing the query: " . $conn->error);
    }

    $query->bind_param("ssssss", $YourName, $PhoneNo, $EmailID, $Services, $TypeTravel, $Dates);

    // Execute the query
    if ($query->execute()) {
        header('Location: contact.html');
        exit(); // Make sure to call exit after a header redirect
    } else {
        echo "Error: " . $query->error;
    }

    // Close the statement and connection
    $query->close();
    $conn->close();
}
?>
