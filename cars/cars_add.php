<?php

$host = '127.0.0.1';
$root = 'root';
$pwd = 'root';
$dbname = 'cars_management';

$db = new mysqli($host, $root, $pwd, $dbname);
if ($db->connect_errno <> 0) {
    die('数据库连接失败');
}

$db->query('SET NAMES UTF8');


$sql = 'select * from cars';
$mysql_result = $db->query($sql);


$rows = [];

while ($row = $mysql_result->fetch_array(MYSQLI_ASSOC)) {
    $rows[] = $row;
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>fisher626的车辆管理系统</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="style/bootstrap.css" rel="stylesheet">
    <link href="style/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="style/beyond.css" rel="stylesheet" type="text/css">
    <link href="style/demo.css" rel="stylesheet">
    <link href="style/typicons.css" rel="stylesheet">
    <link href="style/animate.css" rel="stylesheet">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="layui/dist/css/layui.css" media="all">

</head>

<body>
    <!-- 头部 -->
    <div class="navbar">
        <div class="navbar-inner">
            <div class="navbar-container">
                <!-- Navbar Barnd -->
                <div class="navbar-header pull-left">
                    <a href="#" class="navbar-brand">
                        <small>
                            <img src="images/logo.png" alt="">
                        </small>
                    </a>
                </div>
                <!-- /Navbar Barnd -->
                <!-- Sidebar Collapse -->
                <div class="sidebar-collapse" id="sidebar-collapse">
                    <i class="collapse-icon fa fa-bars"></i>
                </div>
                <!-- /Sidebar Collapse -->
                <!-- Account Area and Settings -->
                <div class="navbar-header pull-right">
                    <div class="navbar-account">
                        <ul class="account-area">
                            <li>
                                <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                    <div class="avatar" title="View your public profile">
                                        <img src="images/adam-jansen.jpg">
                                    </div>
                                    <section>
                                        <h2><span class="profile"><span>admin</span></span>
                                        </h2>
                                    </section>
                                </a>
                                <!--Login Area Dropdown-->
                                <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                    <li class="username"><a>David Stevenson</a></li>
                                    <li class="dropdown-footer">
                                        <a href="index.php">
                                            退出登录
                                        </a>
                                    </li>
                                   
                                </ul>
                                <!--/Login Area Dropdown-->
                            </li>
                            <!-- /Account Area -->
                            <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                            <!-- Settings -->
                        </ul>
                    </div>
                </div>
                <!-- /Account Area and Settings -->
            </div>
        </div>
    </div>

    <!-- /头部 -->

    <div class="main-container container-fluid">
        <div class="page-container">
            <!-- Page Sidebar -->
            <div class="page-sidebar" id="sidebar">
                <!-- Page Sidebar Header-->
                <div class="sidebar-header-wrapper">
                    <input class="searchinput" type="text">
                    <i class="searchicon fa fa-search"></i>
                    <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
                </div>
                <!-- /Page Sidebar Header -->
                <!-- Sidebar Menu -->
                <ul class="nav sidebar-menu">
                    <!--Dashboard-->
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-user"></i>
                            <span class="menu-text">账号管理</span>
                           
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="list.php">
                                    <span class="menu-text">
                                        用户管理 </span>
                 
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-file-text"></i>
                            <span class="menu-text">信息管理</span>
                        
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="cars.php">
                                    <span class="menu-text">
                                        汽车信息管理 </span>
                          
                                </a>
                            </li>
                        </ul>
                        <ul class="submenu">
                            <li>
                                <a href="customer.php">
                                    <span class="menu-text">
                                        客户信息管理 </span>
               
                                </a>
                            </li>
                        </ul>
                        <ul class="submenu">
                            <li>
                                <a href="sales.php">
                                    <span class="menu-text">
                                        销售管理 </span>
      
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /Sidebar Menu -->
            </div>
            <!-- /Page Sidebar -->
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                        <li class="active">汽车销售管理</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body row">
                    <form action="cars_management.php?a=add" method='POST'>
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon" id="sizing-addon1">汽车编号</span>
                            <input type="txt" class="form-control" placeholder="0000" aria-describedby="sizing-addon1" name="car_id"/>
                        </div>
                        <br />
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon" id="sizing-addon1">汽车品牌</span>
                            <input type="txt" class="form-control" placeholder="audi" aria-describedby="sizing-addon1" name="car_num"/>
                        </div>
                        <br />
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon" id="sizing-addon1">销售日期</span>
                            <input type="txt" class="form-control" placeholder="2019-04-16" aria-describedby="sizing-addon1" name="car_brand"/>
                        </div>
                        <br />
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon" id="sizing-addon1">购买顾客</span>
                            <input type="txt" class="form-control" placeholder="张三" aria-describedby="sizing-addon1" name="color"/>
                        </div>
                        <br />
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon" id="sizing-addon1">销售状况</span>
                            <input type="txt" class="form-control" placeholder="未售/已售" aria-describedby="sizing-addon1" name="sale"/>
                        </div>
                        <br />
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon" id="sizing-addon1">销售价格</span>
                            <input type="txt" class="form-control" placeholder="1000000" aria-describedby="sizing-addon1" name="price"/>
                        </div>
                        <br/>
                        <div class="input-group input-group-lg">
                        <button type="submit" class="btn btn-primary">添加</button>
                        </div>
                    </form>
                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
        </div>
    </div>

    <!--Basic Scripts-->
    <script src="style/jquery_002.js"></script>
    <script src="style/bootstrap.js"></script>
    <script src="style/jquery.js"></script>
    <!--Beyond Scripts-->
    <script src="style/beyond.js"></script>



</body>

</html>