<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">一个Topsts - 管理系统</a>
  </div>

  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
      <!-- navbar -->
      {:W('Top/Navbar')}
    </ul>
    <ul class="nav navbar-nav navbar-right navbar-user">
      <!-- messages -->
      <li class="dropdown messages-dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> 消息 <span class="badge">{:W('Top/messages_num')}</span> <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li class="dropdown-header">{:W('Top/messages_num')} 新消息</li>
          {:W('Top/messages')}
          <li><a href="#">查看所有 <span class="badge">{:W('Top/messages_num')}</span></a></li>
        </ul>
      </li>
      <!-- alerts -->
      <li class="dropdown alerts-dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> 提醒 <span class="badge">{:W('Top/Alerts_num')}</span> <b class="caret"></b></a>
        <ul class="dropdown-menu">
          {:W('Top/Alerts')}
          <li class="divider"></li>
          <li><a href="#">查看所有</a></li>
        </ul>
      </li>
      <!-- user -->
      <li class="dropdown user-dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {:W('Top/Username')} <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#"><i class="fa fa-user"></i> 用户信息</a></li>
          <li><a href="#"><i class="fa fa-gear"></i> 设置</a></li>
          <li class="divider"></li>
          <li><a href="{:U('Account/logout')}"><i class="fa fa-power-off"></i> 注销</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>