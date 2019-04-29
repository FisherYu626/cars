<?php

const HOST = 'localhost';
const USER = 'root';
const PASS = 'root';
const DBNAME = 'cars_management';
var_dump($_GET['a']);

switch ($_GET['a']) {
	case 'login':
		$name = $_POST['username'];
		$pwd = $_POST['pwd'];
		var_dump($name);
		var_dump($pwd);
//数据库连接
		$db = new mysqli(HOST, USER, PASS, DBNAME);
		if ($db->connect_errno <> 0) {
			die('数据库连接失败');
		}
		$db->query('SET NAMES UTF8');

		$sql = "select * from users where username = '{$name}'";
		$result = $db->query($sql);
		$rows = [];

        var_dump($rows);
	while($row =$result->fetch_array(MYSQLI_ASSOC)){
    $rows[] = $row;
	}

	var_dump($rows);
		if ($rows <> 0) {
			if ($rows[0]['pwd'] == $pwd) {
			header("Location:homepage.html");
			} else {
			
				header("index.php");
			}
		} else {

			header("index.php");
		}
		break;

	case 'logout':
		$aa=0;
		header('Location:login.php');
		break;
	case 'alter':
		$db = new mysqli(HOST, USER, PASS, DBNAME);
		if ($db->connect_errno <> 0) {
			die('数据库连接失败');
		}
		$db->query('SET NAMES UTF8');
		$id = (int)$_GET['id'];
		$pwd = $_POST['pwd'];
		var_dump($pwd);
		var_dump($id);
		$sql = "UPDATE users set pwd = '{$pwd}' where id = '{$id}'";
		$result = $db->query($sql);
		var_dump($result);
		header('location:index.php');
		break;
	case 'delete':
		$id = $_GET['id'];
		$db = new mysqli(HOST, USER, PASS, DBNAME);
		if ($db->connect_errno <> 0) {
			die('数据库连接失败');
		}
		$db->query('SET NAMES UTF8');

        var_dump($id);
		$sql = "delete from users where id='{$id}'";
		$result = $db->query($sql);
		var_dump($result);
		header('location:list.php');
		break;
}
 