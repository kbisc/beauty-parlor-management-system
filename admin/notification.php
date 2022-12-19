
<?php 
include('config.php');
 ?>
     <?php
$sql ="SELECT *FROM appointments_table";
$result = $conn->query($sql);

echo "$result->num_rows";

/*
if($result->num_rows>0){
  while ($row = $result->fetch assoc()) {
    echo "id" . $row["id"] . "Name" . $row["Name"];
    }
  }else{
    echo "0 result";
  
}
*/
$conn->close();
?>