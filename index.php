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
echo "Connected successfully";


$teachers = $conn->query("SELECT * FROM `vraboteni`");

if ($teachers->num_rows > 0) {
  // output data of each row
  while($row = $teachers->fetch_assoc()) {
    //echo "id: " . $row["id"]. " - Name: " . $row["v_ime"]. " " . $row["v_prezime"]. "<br>";
   //echo $row;
  }
} else {
  echo "0 results";
}
$conn->close();

?>

<script type="text/javascript">
  //alert($row)

 const nArray = $teachers;
 for(let i=0; i < nArray.length; i++){
  alert($row[i])
 }

</script>