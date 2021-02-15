<?php

function addUser ($name,$sex,$mood,$characteristic,$pdo) {
	if (empty($name) || empty($sex) || empty($mood) || empty($characteristic)) {
		return 0;
	}
	$sql='INSERT INTO users(name,sex,mood,characteristic) VALUES(?,?,?,?)';
	$query=$pdo->prepare($sql);
	$query->execute([$name,$sex,$mood,$characteristic]);
}

function tableOutput ($pdo) {
	$sql = 'SELECT * FROM `users`';
	$query = $pdo->query($sql);
	while ($row=$query->fetch(PDO::FETCH_OBJ)){
		echo "<tr><td>".htmlspecialchars($row->name)."</td><td>".htmlspecialchars($row->sex)."</td><td>".htmlspecialchars($row->characteristic)."</td><td>".htmlspecialchars($row->mood)."</td></tr>"; 	
	}
}


?>