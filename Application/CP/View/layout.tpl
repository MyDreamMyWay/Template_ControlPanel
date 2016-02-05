<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>一个Topsts - 管理系统</title>
    <!-- Bootstrap core CSS -->
    <link href="__CP__/css/bootstrap.css" rel="stylesheet">
    <!-- Add custom CSS here -->
    <link href="__CP__/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="__CP__/font-awesome/css/font-awesome.min.css">
  </head>

  <body>
    <div id="wrapper">
      <include file="Public:nav" />
      <div id="page-wrapper">
        <div class="row">
          <div class="col-lg-12">
            <!-- breadcrumb -->
            {:W('Top/Breadcrumb')}
            <!-- alertblock -->
            {:W('Top/Alertblock')}
          </div>
        </div>
        <!-- 主要开始 -->
        {__CONTENT__}
        <!-- 主要结束 -->
      </div>
    </div>
    <script src="__CP__/js/jquery-1.10.2.js"></script>
    <script src="__CP__/js/bootstrap.js"></script>

  </body>
</html>