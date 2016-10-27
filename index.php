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
  <div class="modal fade" id="loginModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">登录</h4>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label class="control-label" for="email">电子邮件地址:</label>

              <input type="email" class="form-control" id="loginemail">

            </div>
            <div class="form-group">
              <label class="control-label" for="password">密码:</label>

              <input type="password" class="form-control" id="loginpassword">

            </div>
            <div class="form-group">

              <div class="checkbox">
                <label><input type="checkbox"> 记住我</label>
                <div class="pull-right">
                  <a href="#">忘记密码？</a>
                </div>
              </div>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary center-block">登录</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
   <h3>Fixed Navbar</h3>
    <div class="row">
    <?php
      $count=0;
      include("dbconnect.php");
      $sql = "SELECT * from ITEM";
      $result = $conn->query($sql);
      while($row = $result->fetch_assoc()){
          echo '<div class="col-md-4">';
          echo '<img src="img/'.$row["ItemID"].'.jpg" alt="'.$row["ItemName"].'"><br>';
          if($row["ItemBand"]!=""){
            echo $row["ItemBand"]." ".str_replace("_"," ",$row["ItemName"])."<br>";
            echo $row["ItemBand"]." ".str_replace("_"," ",$row["ItemChnName"])."<br>";
          }else{
            echo str_replace("_"," ",$row["ItemName"])."<br>";
            echo str_replace("_"," ",$row["ItemChnName"])."<br>";
          }
          echo '<div class="col-md-4">进价：'.$row["ItemBuyPrice"].'</div>';
          echo '<div class="col-md-3">售价：'.$row["ItemSalesPrice"].'</div>';
          echo '<div class="col-md-3"><form action="editPrice.php"><input type="hidden" name="targetItemId" value="'.$row["ItemID"].'"><input type="submit" class="btn btn-default btn-xs" id="editPrice" value="修改"></form></div>';
          echo '<div class="col-md-4">售出数：<span id="SaleNum_'.$row["ItemID"].'">'.$row["ItemSalesNum"].'</span></div>';
          echo '<div class="col-md-1"><botton type="button" class="btn btn-primary btn-xs" id="add_'.$row["ItemID"].'" onclick="changeNum(this.id)">+ 1</botton></div>';
           echo '<div class="col-md-1"><botton type="button" class="btn btn-primary btn-xs" id="delete_'.$row["ItemID"].'" onclick="changeNum(this.id)"> - 1</botton></div>';
          echo '</div>';
        $count+=1;
        if($count>=3){
          echo '</div><div class="row">';
          $count=0;
        }
      }
    ?>
    </div>
  </div>
</body>
</html>
