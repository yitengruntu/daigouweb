<?php
include("dbconnect.php");
$targetID= $_GET["targetItemId"];
$editedBand = str_replace(" ", "_", $_GET["editedBand"]);
$editedName = str_replace(" ", "_", $_GET["editedName"]);
$editedChnName = str_replace(" ", "_", $_GET["editedChnName"]);
$editedBuyPrice = $_GET["editedBuyPrice"];
$editedSalesPrice = $_GET["editedSalesPrice"];
$querySql = "UPDATE ITEM SET ItemBand='$editedBand',ItemName='$editedName',ItemChnName='$editedChnName',ItemBuyPrice='$editedBuyPrice',ItemSalesPrice='$editedSalesPrice' WHERE ItemID = '$targetID'";
  $conn->query($querySql);
  $conn->close();
  header("Location:editPrice.php?targetItemId=$targetID");



?>

