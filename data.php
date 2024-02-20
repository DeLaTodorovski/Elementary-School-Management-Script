<?php

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, 'test');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";


$teachers = $conn->query("SELECT * FROM `vraboteni`");

$data = array();
while($row = $teachers->fetch_assoc()){
    $a = array($row["id"], $row["v_ime"], $row["v_prezime"]);
    array_push($data, $a);
}

echo json_encode($data);
//echo "Connected successfully";
?>