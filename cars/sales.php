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


$sql = 'select * from sales';
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
    <script src="echarts.min.js"></script>

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
                        <li class="active">销售管理</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <br/>
            <div style="width: 1300px;height:400px;" class="row">
            <div id="main" style="width: 600px;height:400px; " class="col-md-6"  ></div>
            <br />
            <div id='a'style="width: 600px;height:400px;" class="col-md-6"> </div>
            </div>
            <script type="text/javascript">
                // 基于准备好的dom，初始化echarts实例
                var myChart = echarts.init(document.getElementById('main'));

                // 指定图表的配置项和数据
                var option = {
                    title: {
                        text: '销售金额'
                    },
                    tooltip: {
                        
                    },
                    legend: {
                        data: ['万元']
                    },
                    xAxis: {
                        data: ["4.7", "4.8", "4.9", "4.10", "4.11", "4.12"]
                    },
                    yAxis: {},
                    series: [{
                        name: '营业额',
                        type: 'bar',
                        data: [28, 66, 64, 72, 55, 5]
                    }]
                };

                // 使用刚指定的配置项和数据显示图表。
                myChart.setOption(option);
            </script>
            
            <div id='a'style="width: 600px;height:400px;"> </div>
            <script type="text/javascript">
                                // 基于准备好的dom，初始化echarts实例
                    var myChartt = echarts.init(document.getElementById('a'));

                                // 指定图表的配置项和数据
                    var optionn = {
                    title: {
                        text: '汽车库存图'
                    },
                    tooltip: {},
                    legend: {
                        data: [ '全部车辆','实际销量']
                    },
                    radar: {
                        // shape: 'circle',
                        name: {
                            textStyle: {
                                color: '#fff',
                                backgroundColor: '#999',
                                borderRadius: 3,
                                padding: [3, 5]
                        }
                        },
                        indicator: [
                        { name: '奔驰（bens）', max: 5},
                        { name: '宝马 （BMW）', max: 5},
                        { name: '大众（volksvagon）', max: 5},
                        { name: '奥迪（audi）', max: 5},
                        { name: '奥拓（auto）', max: 5},
                       
                        ]
                    },
                    series: [{
                        name: '预算 vs 开销（Budget vs spending）',
                        type: 'radar',
                        // areaStyle: {normal: {}},
                        data : [
                            {
                                value : [4, 4, 2, 3, 2],
                                name : '全部车辆'
                            },
                            {
                                value : [2, 3, 2, 2, 1],
                                name : '实际销量'
                            }
                        ]
                    }]
                };
                // 使用刚指定的配置项和数据显示图表。
                myChartt.setOption(optionn);
            </script>
                <!-- /Page Body -->
           
        </div>

        <!--Basic Scripts-->
        <script src="style/jquery_002.js"></script>
        <script src="style/bootstrap.js"></script>
        <script src="style/jquery.js"></script>
        <!--Beyond Scripts-->
        <script src="style/beyond.js"></script>



</body>

</html>