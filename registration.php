<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="jquery/jquery-1.11.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/registration.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBwBUx3MKqVcp8MkW_ozhnCrzZFGsss67E&signed_in=true&libraries=places&callback=initAutocomplete"
        async defer></script>
    <script src="js/addressSearch.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197">
    <div class="container-fluid">
      <ul class="nav navbar-nav">
        <li><a href="index.php">主页</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="registration.php"><span class="glyphicon glyphicon-user"></span> 注册</a></li>
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
<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-8">
<form role="form">
    <!--Email-->
    <div class="form-group">
        <label for="email">电子邮件地址:<br></label>
        <input type="email" class="form-control" id="email" placeholder="例如：xxx@xxx.com" required onblur="checkExistedEmail();">
        <span class="help-block" id="emailerror" style="color:red"></span>
    </div>
    <!--password-->
    <div class="form-group">
        <label for="password">密码:<br></label>
        <input type="password" class="form-control" id="password" placeholder="8-16位字母或数字 例如：12345abc" required onblur="checkPassword();">
        <span class="help-block" id="passworderror" style="color:red"></span>
    </div>
    <!--retype password-->
    <div class="form-group">
        <label for="repassword">密码确认:<br></label>
        <input type="password" class="form-control" id="repassword" required onblur="checkRePassword();">
        <span id="repassworderror" style="color:red"></span>
    </div>
    <!--fullname-->
    <div class="form-group">
        <label for="fullname">收件人姓名:<br></label>
        <input type="text" class="form-control" id="fullname" placeholder="例如：Jack Ma" required>
        <span id="fullnameerror" style="color:red"></span>
    </div>
    <!--address-->
    <div class="form-group">

        <label for="address">邮寄地址:<br></label>
        <input type="text" class="form-control" id="location" placeholder="例如：333 Swanston St, Melbourne, Victoria, Australia" onFocus="geolocate()" required>
    </div>
    <button type="submit" class="btn btn-primary center-block" id="submitbutton">注册 </button>
</form>
    </div>
    </div>
    </div>
</body>
</html>

