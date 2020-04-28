<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>
<?php
$host = 'db';
$user = 'user';
$password = 'pass';
$db = 'test_db';

$conn = new mysqli($host, $user, $password, $db) or die("Connect failed: %s\n" . $conn->error);

$username = $_POST['username'];
$passwd = $_POST['passwd'];

$sql = "SELECT * FROM users WHERE username='" . $username . "' and passwd='" . $passwd . "';";

$result = $conn->query($sql);
      
if ($result->num_rows > 0) {
	echo "FLAG!";
}else{
		echo "TRY AGAIN!!!";
}

$conn->close();

?>
