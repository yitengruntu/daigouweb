<?php
include("dbconnect.php");

$q = $_REQUEST["q"];
$arr = explode("_",$q);
$sql = "SELECT ItemSalesNum FROM ITEM WHERE ItemID = '$arr[1]'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
  if ($arr[0] == "add"){
    $updatedData = $row["ItemSalesNum"] + 1;
  }else if ($arr[0] == "delete"){
    $updatedData = $row["ItemSalesNum"] - 1;
  }
  $querySql = "UPDATE ITEM SET ItemSalesNum='$updatedData' WHERE ItemID = '$arr[1]'";
  $conn->query($querySql);
  $conn->close();
  echo $updatedData;
}
?>
