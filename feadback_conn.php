<?php

$ffirstname = $_POST['ffirstname'];
$femail = $_POST['femail'];
$fmsg = $_POST['fmsg'];

//Database Connection
$conn = new mysqli('localhost', 'root', '', 'mydatabase');
if($conn->connect_error){
    die('Connection Failed '.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into myfeadbackdata(ffirstname, femail, fmsg)
    values(?, ?, ?)");
    $stmt->bind_param("sss", $ffirstname, $femail, $fmsg);
    $stmt->execute();

    echo "THANKS for your valuable feadback...";

    $stmt->close();
    $conn->close();
}
?>