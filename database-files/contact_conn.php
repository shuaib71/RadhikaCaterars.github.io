<?php

$cfirstname = $_POST['cfirstname'];
$cemail = $_POST['cemail'];
$cphone = $_POST['cphone'];
$cmsg = $_POST['cmsg'];

// Database connection
$conn = new mysqli('localhost', 'root', 'root@localhost', 'mydatabase');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into mycontactdata(cfirstname, cemail, cphone, cmsg)
    values(?, ?, ?, ?)");
    $stmt->bind_param("ssis", $cfirstname, $cemail, $cphone, $cmsg);
    $stmt->execute();
    
    echo "THANK YOU, We will contact you shortly...";

    // showing data 
    // $sql = "select * from contact_data";
    // $result = $conn->query($sql);

    // if(!empty($result) && $result->num_rows > 0){

    //     while($row = $result->fetch_assoc()){
    //         echo "id: " . $row["id"], " Name: " .$row["cname"], " Email: " .$row["cemail"], " Mobile No.: " .$row["cphone"], " Message: " .$row["cmsg"], "<br>";
    //     }
    // } else{
    //     echo "0 results";
    // }
    //

    $stmt->close();
    $conn->close();
}

?>