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
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
                    <table class="table">
                        <caption>cars
                            <div class='col-md-offset-10'>
                                <a class=" btn btn-primary  btn-xs btn-rounded " type='button' href='cars_add.php'>增加</a>
                            </div>
                            <div class='col-md-offset-1'>
                                <form class="form-inline" name="searchForm" id="searchForm" action="test.php" method="GET">
                                    <div class="form-group">
                                        <select name="file_type" id="file_type" class="form-control input-sm">
                                            <option value="0">汽车编号</option>
                                            <option value="1">汽车品牌</option>
                                            <option value="2">销售日期</option>
                                            <option value="3">顾客姓名</option>
                                            <option value="4">销售状况</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input  name="keywords" id="keywords" class="form-control input-sm" placeholder="输入关键词查询">
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-sm btn-primary" type="submit"><i class="fa fa-search"></i> 查询
                                        </button>
                                    </div>

                                   
                                </form>
                            </div>
                        </caption>
                        <thead>
                            <tr>
                                <th scope="col">汽车编号</th>
                                <th scope="col">汽车品牌</th>
                                <th scope="col">销售日期</th>
                                <th scope="col">购买顾客</th>
                                <th scope="col">销售状况</th>
                                <th scope="col">销售价格</th>
                                <th scope="col">操作</th>
                            </tr>
                        </thead>
                        <?php foreach ($rows as $row) { ?>
                            <tbody>
                                <tr>
                                    <th scope="row"><?php echo ($row['car_id']) ?></th>
                                    <td><?php echo ($row['car_num']) ?></td>
                                    <td><?php echo ($row['car_brand']) ?></td>
                                    <td><?php echo ($row['color']) ?></td>
                                    <td><?php echo ($row['sale']) ?></td>
                                    <td><?php echo ($row['price']) ?></td>
                                    <td><a class="btn btn-warning  btn-xs btn-rounded" type='button' href='cars_alter.php?id=<?php echo ($row['car_id']) ?>'>修改</a>
                                    <a class="btn btn-danger  btn-xs btn-rounded" type='button' href="javascript:if(confirm('确认删除这条汽车信息么？'))location='cars_management.php?a=delete&id=<?php echo ($row['car_id']) ?>'">删除</a>
                                    <button type="button" class="btn btn-primary  btn-xs btn-rounded" data-toggle="modal" data-target="#myModal<?php echo($row['car_id']) ?>">查看</button>
                                    </td>


                                    <!-- Modal -->
                                    <div class="modal fade" id="myModal<?php echo($row['car_id']) ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">汽车信息</h4>
                                        </div>
                                        <div class="modal-body ">
                                            <div class="row">
                                            <div class="col-md-6"><img src="<?php echo($row['pic']) ?>" class="img-thumbnail" ></div>
                                            <div class="col-md-6">
                                            汽车编号：   <?php echo($row['car_id']) ?>  汽车品牌：   <?php echo($row['car_num']) ?>
                                            <br/><br/><br/>
                                            销售状况：   <?php echo($row['sale']) ?>  销售价格：   <?php echo($row['price']) ?>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </tr>
                               
                            </tbody>
                        <?php } ?>
                    </table>
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
    <script>  </script>
    <!--Beyond Scripts-->
    <script src="style/beyond.js"></script>



</body>

</html>