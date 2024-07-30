<?php
 $YourName =$_POST['Your Name'];
 $PhoneNo =$_POST['Phone No.'];
 $Emailid =$_POST['Email Id.'];
 $Service =$_POST['Service'];
 $TypeTravel =$_POST['Type Travel'];
 $Date =$_POST['Date'];

 //database connection
 $conn = mysqli_connect('localhost','root','',users);
 if($conn->connect_error) {
    die('connection Failed : ' .$conn->connect_error);
 }else{
    $stmt = $conn->prepare("INSERT INTO users(YourName, phoneNo, emailId, Service, TypeTravel, Date) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sisssi", $YourName, $phoneNo, $emailId, $Service, $TypeTravel, $Date);
    $stmt->execute();
    echo "Data inserted successfully";
    $stmt->close();
    $conn->close();
}
