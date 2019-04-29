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



</head>

<body>

        <ul class="list-group">
            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Morbi leo risus</li>
            <li class="list-group-item">Porta ac consectetur ac</li>
            <li class="list-group-item">Vestibulum at eros</li>
        </ul>
</body>

</html>