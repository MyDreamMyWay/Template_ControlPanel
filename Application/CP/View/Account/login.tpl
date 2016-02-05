{__NOLAYOUT__}
<!doctype html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>登陆</title>
    <!-- Bootstrap core CSS -->
    <link href="__CP__/css/bootstrap.css" rel="stylesheet">
    <link href="__CP__/css/login.css" rel="stylesheet">
</head>
<body class="login-body">
    <div class="panel panel-default login-main center-block">
      <div class="panel-heading">
        <h3 class="panel-title">登陆</h3>
      </div>
      <div class="panel-body">
        <form action="{$_SERVER['SCRIPT_NAME']}?c=Account&a=verify" method="post">
          <div class="form-group">
            <p class="text-center">{$tx}</p>
          </div>
          <div class="form-group">
            <label for="exampleInputUser1">用户名：</label>
            <input type="text" name="user" class="form-control" id="exampleInputUser1" placeholder="请输入用户名" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">密码：</label>
            <input type="password" name="login-password" class="form-control" id="exampleInputPassword1" placeholder="请输入密码" required>
          </div>
          <button type="submit" class="btn btn-default">登陆</button>
        </form>
      </div>
    </div>
    <!-- JavaScript -->
    <script src="__CP__/js/jquery-1.10.2.js"></script>
    <script src="__CP__/js/bootstrap.js"></script>
</body>
</html>