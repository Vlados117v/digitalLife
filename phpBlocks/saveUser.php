<?php
require_once 'sqlFunctions.php';
require_once 'mysql_connect.php';

$name = trim(filter_var($_POST['name'], FILTER_SANITIZE_STRING));
$sex = trim(filter_var($_POST['sex'], FILTER_SANITIZE_STRING));
$characteristic = trim(filter_var($_POST['characteristic'], FILTER_SANITIZE_STRING));
$mood = trim(filter_var($_POST['mood'], FILTER_SANITIZE_STRING));

$error='';
if (mb_strlen($name)<=3 || mb_strlen($name)>11 || empty($name) || empty($characteristic) || empty($mood )) {
	$error='ошибка';
}

if ($error!='') {
	echo $error;
	exit();
}

$add = addUser($name,$sex,$mood,$characteristic,$pdo);

if ($add == 0) {
	echo "ошибка";
}

echo "<tr><td>".htmlspecialchars($name)."</td><td>".htmlspecialchars($sex)."</td><td>".htmlspecialchars($characteristic)."</td><td>".htmlspecialchars($mood)."</td></tr>"; 
?>