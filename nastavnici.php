<?php

include "db.php";

echo "<h1>Листа на наставници</h1>";

if (isset($_GET['id']) && $_GET['id']) {

    if (is_numeric($_GET['id'])){

        $teachers_id = $conn->query("SELECT * FROM `vraboteni` WHERE `id` = ".$_GET['id']."");

        if ($teachers_id->num_rows > 0) {
            // output data of each row
            echo "<table> 
            <tr>
            <th>Основни податоци:</th>
            </tr>";
            while($row1 = $teachers_id->fetch_assoc()) {

                $group_id = $conn->query("SELECT * FROM `vraboteni_grupa` WHERE `id` = ".$row1['v_vraboteni_grupa']." ");
                $row2 = $group_id->fetch_assoc();
                $ime_na_grupa = $row2['opis'];

                echo "<tr><td>Id: " .$ime_na_grupa. "</td></tr><tr><td>Име: " .$row1["v_ime"]. "</td></tr><tr><td>Презиме: ".$row1["v_prezime"]."</td></tr>";
            }
            echo "</table><br>";
        } else {
            echo "Не се пронајдени никакви податоци.";
        }
   }else{
        echo "Не се пронајдени никакви податоци.";
   }

}


$teachers = $conn->query("SELECT * FROM `vraboteni`");

if ($teachers->num_rows > 0) {
  // output data of each row
  echo "<table>
  <tr>
  <th>Id:</th><th>Име</th><th>Презиме</th>
  </tr>";
  while($row = $teachers->fetch_assoc()) {
    echo "<tr><td>" .$row["id"]. "</td><td>" .$row["v_ime"]. "</td><td>".$row["v_prezime"]."</td><td><a href='?id=" .$row["id"]. "'>Промени</a></td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();

?>

<!-- <script type="text/javascript">
  //alert($row)

 const nArray = $teachers;
 for(let i=0; i < nArray.length; i++){
  alert($row[i])
 }

</script> -->