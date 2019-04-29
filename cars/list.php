<?php 

$host = '127.0.0.1';
$root = 'root';
$pwd = 'root';
$dbname = 'cars_management';

$db = new mysqli($host,$root,$pwd,$dbname);
if($db->connect_errno <> 0){
    die('数据库连接失败');
}

$db ->query('SET NAMES UTF8');


$sql = 'select * from users';
$mysql_result = $db->query($sql);


$rows = [];

while($row =$mysql_result->fetch_array(MYSQLI_ASSOC)){
    $rows[] = $row;
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>登录管理</title>

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
                                        销售记录管理 </span>
                               
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- /Sidebar Menu -->
            </div>
            <!-- /Page Sidebar -->
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">系统</a>
                        </li>
                        <li class="active">用户管理</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12">
                            <div class="widget">
                                <div class="widget-body">
                                    <div class="flip-scroll">
                                        <table class="table table-bordered table-hover">
                                            <thead class="">
                                                <tr>
                                                    <th class="text-center">ID</th>
                                                    <th class="text-center">用户名称</th>
                                                    <th class="text-center">操作</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach($rows as $row){
                                            ?>
                                                <tr>
                                                    <td align="center"><?php echo($row["id"]) ?></td>
                                                    <td align="center"><?php echo($row["username"]) ?></td>
                                                    <td align="center">
                                                        <a href='list_alter.php?id=<?php echo($row["id"]) ?>' class="btn btn-primary btn-sm shiny">
                                                            <i class="fa fa-edit"></i> 编辑
                                                        </a>
                                                        
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

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