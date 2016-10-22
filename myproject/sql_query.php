<?php

$host = 'localhost';
$user = 'liubov';
$pass = 'Sheyda_1984';
$db = 'myproject';

$mysqli = new mysqli($host, $user, $pass, $db);
if (mysqli_connect_error($mysqli)) {
		echo "Failed". mysqli_connect_error();
	}
$sql = <<<SQL
		SELECT *
		FROM classics
SQL;
$res = $mysqli -> query($sql);
$row = [];
while ($row = $res -> fetch_assoc()) {
		$rows[] = var_export($row, true);
	}

$description = 'Simple example with mysql';
$inputData = '';
$result = implode('<br>', $rows);
echo $result;
echo '<br>------------------<br>';

try {
	$dsn = 'mysql:host=localhost;dbname=myproject';
	$user = 'liubov';
	$pass = 'Sheyda_1984';
	$db = new PDO ($dsn, $user, $pass);
	$sql = <<<SQL
		SELECT *
		FROM classics
SQL;
	$rows = $db -> query ($sql);
	$row = $rows -> fetchAll(PDO::FETCH_ASSOC);
	//var_dump($row);
	$result_r[] = var_export($row, true);
} catch (PDOException $exception) {
	echo 'Error! Message: '.$exception -> getMessage(). 'Code: '. $exception -> getCode();
}

$description = 'Simple example 2 with mysql';
$inputData = '';
$result = implode('<br>', $result_r);
echo $result;
