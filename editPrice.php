<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="css/main.css">
  <script src="jquery/jquery-1.11.3.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="js/numberChange.js"></script>
</head>
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
  <!-- data-spy="affix" data-offset-top="0" -->
    <div class="container-fluid">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">主页</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="registration.php"><span class="glyphicon glyphicon-user"></span> 注册</a></li>
        <li><a href="#" data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in"></span> 登录</a></li>
      </ul>
    </div>
  </nav>

  <div class="container-fluid">
   <h3>Fixed Navbar</h3>
    <div class="row">
    <?php
      $editItemID = $_GET["targetItemId"];
      include("dbconnect.php");
      $sql = "SELECT * from ITEM WHERE ItemId='$editItemID'";
      $result = $conn->query($sql);
      while($row = $result->fetch_assoc()){
          echo '<div class="col-md-4">';
          echo '<img src="img/'.$row["ItemID"].'.jpg" alt="'.$row["ItemName"].'">';
          echo '</div>';
          echo '<div class="col-md-4"><br><br>';
          echo '<form role="form" action="updateData.php">';
          echo '<div class="form-group">';
          echo '<input type="hidden" name="targetItemId" value="'.$editItemID.'">';
          if($row["ItemBand"]!=""){
            echo '<input type="text" class="form-control" name="editedBand" value="'.$row["ItemBand"].'">';
          }else{
            echo '<input type="text" class="form-control" name="editedBand">';
          }
          echo '<input type="text" class="form-control" name="editedName" value="'.str_replace("_"," ",$row["ItemName"]).'">';
          echo '<input type="text" class="form-control" name="editedChnName" value="'.str_replace("_"," ",$row["ItemChnName"]).'">';
          echo '<label for="editedBuyPrice">进价：</label>';
          echo '<input type="text" class="form-control" name="editedBuyPrice" value="'.str_replace("_"," ",$row["ItemBuyPrice"]).'">';
          echo '<label for="editedSalePrice">售价：</label>';
          echo '<input type="text" class="form-control" name="editedSalesPrice" value="'.str_replace("_"," ",$row["ItemSalesPrice"]).'">';
          echo '</div>';
          echo '<button type="submit" class="btn btn-primary">确定</button>';
          echo '</form>';
          echo '</div>';
      }
    ?>
    </div>
  </div>
</body>
</html>
