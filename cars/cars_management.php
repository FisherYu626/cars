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

		$sql = "delete from cars where car_id='{$id}'";
		$result = $db->query($sql);
		var_dump($result);
		header('location:cars.php');
		break;

	case 'add':
		$db = new mysqli(HOST, USER, PASS, DBNAME);
		if ($db->connect_errno <> 0) {
			die('数据库连接失败');
		}
		$db->query('SET NAMES UTF8');
		$id = $_POST['car_id'];
		$num = $_POST['car_num'];
		$brand = $_POST['car_brand'];
		$color = $_POST['color'];
		$sale = $_POST['sale'];
		$price = $_POST['price'];
		var_dump($id,$num,$brand,$color);
		$sql = "INSERT INTO cars(car_id,car_num,car_brand,color,sale,price) VALUES ('{$id}','{$num}','{$brand}','{$color}','{$sale}','{$price}')";
		$result = $db->query($sql);
		var_dump($result);
		header('location:cars.php');
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
		echo ("<br>");
		var_dump($id,$num,$brand,$color);
		$sql = "UPDATE cars set car_num = '{$num}',car_brand = '{$brand}',color = '{$color}',sale = '{$sale}',price='{$price}' where car_id = '{$id}'";
		$result = $db->query($sql);
		var_dump($result);
		header('location:cars.php');
		break;

		case 'sales_add':
		$db = new mysqli(HOST, USER, PASS, DBNAME);
		if ($db->connect_errno <> 0) {
			die('数据库连接失败');
		}
		$db->query('SET NAMES UTF8');
		$name = $_POST['car_name'];
		$id = $_POST['car_id'];
		$num = $_POST['car_num'];
		$brand = $_POST['car_brand'];
		$color = $_POST['color'];
		var_dump($id,$num,$brand,$color);
		$sql = "INSERT INTO sales(car_id,car_brand,car_salesprice,car_salesday,car_customer) VALUES ('{$name}','{$id}','{$num}','{$brand}','{$color}')";
		$result = $db->query($sql);
		var_dump($result);
		header('location:sales.php');
		break;
}
?>