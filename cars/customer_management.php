<?php
const HOST = 'localhost';
const USER = 'root';
const PASS = 'root';
const DBNAME = 'cars_management';
var_dump($_GET['a']);
switch ($_GET['a']) {
	case 'delete':
		$id = $_GET['id'];
		$db = new mysqli(HOST, USER, PASS, DBNAME);
		if ($db->connect_errno <> 0) {
			die('数据库连接失败');
		}
		$db->query('SET NAMES UTF8');

        var_dump($id);
		$sql = "delete from customers where c_name='{$id}'";
		$result = $db->query($sql);
		var_dump($result);
		header('location:customer.php');
		break;

	case 'add':
		$db = new mysqli(HOST, USER, PASS, DBNAME);
		if ($db->connect_errno <> 0) {
			die('数据库连接失败');
		}
		$db->query('SET NAMES UTF8');
		$name = $_POST['car_name'];
		$id = $_POST['car_id'];
		$brand = $_POST['car_brand'];
        $color = $_POST['color'];
		$time = $_POST['time'];
		var_dump($time);
		var_dump($id,$num,$brand,$color);
		$sql = "INSERT INTO customers(c_name,c_id,c_addr,c_carid,c_buytime) VALUES ('{$name}','{$id}','{$brand}','{$color}','{$time}')";
		$result = $db->query($sql);
		var_dump($result);
		header('location:customer.php');
		break;

		case 'alter':
		$db = new mysqli(HOST, USER, PASS, DBNAME);
		if ($db->connect_errno <> 0) {
			die('数据库连接失败');
		}
		$db->query('SET NAMES UTF8');
		$id = $_GET['id'];
		$num = $_POST['car_num'];
		$brand = $_POST['car_brand'];
		$color = $_POST['color'];
		$time = $_POST['time'];
		echo ("<br>");
		var_dump($id,$num,$brand,$color);
		$sql = "UPDATE customers set c_id = '{$num}',c_addr = '{$brand}',c_carid = '{$color}',c_buytime ='{$time}' where c_name = '{$id}'";
		$result = $db->query($sql);
		var_dump($result);
		header('location:customer.php');
		break;

}
?>