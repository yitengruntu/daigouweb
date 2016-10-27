<?php
  include("dbconnect.php");
  $email = $_GET["email"];
  $sql = "SELECT * from USER where UserEmail='$email'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0){
    echo '"电子邮件地址已被注册"';
  }
  $conn->close();
?>
