<?php
$host = 'db';
$user = 'user';
$password = 'pass';
$db = 'test_db';

$conn = new mysqli($host, $user, $password, $db) or die("Connect failed: %s\n" . $conn->error);

$sql = "DROP TABLE users;";
$sql2 = "CREATE TABLE users(
			username varchar(50) PRIMARY KEY,
			passwd varchar(50) NOT NULL,
			fname varchar(50) NOT NULL,
			sname varchar(50) NOT NULL,
			email varchar(50) NOT NULL,
			address varchar(250) NOT NULL
		);";
$sql3 = "INSERT INTO users VALUES('admin', '12345678', 'f', 's', 'mail@mail.tr', 'TURKEY');";

$conn->query($sql);
$conn->query($sql2);
$conn->query($sql3);

?>
