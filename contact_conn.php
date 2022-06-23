<?php

$cfirstname = $_POST['cfirstname'];
$cemail = $_POST['cemail'];
$cphone = $_POST['cphone'];
$cmsg = $_POST['cmsg'];

// Database connection
$conn = new mysqli('localhost', 'root', '', 'mydatabase');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into mycontactdata(cfirstname, cemail, cphone, cmsg)
    values(?, ?, ?, ?)");
    $stmt->bind_param("ssis", $cfirstname, $cemail, $cphone, $cmsg);
    $stmt->execute();
    
    echo "THANK YOU, We will contact you shortly...";

    $stmt->close();
    $conn->close();
}

?>