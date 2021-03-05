<?php
$name = $_POST['name'];
$password = $_POST['password'];

//dabase connection
$conn = new mysqli('localhost','root','','db');
if($conn->connect_error){
    die('connection failed : '.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into login(name,password) values(?,?)");
    $stmt->bind_param("ss", $name, $password);
    $stmt->execute();
    echo "registeration successfull...";
    $stmt->close();
    $conn->close();
}

?>