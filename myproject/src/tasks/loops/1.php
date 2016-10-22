<?php
function sayHelloWorld($count = 1)
{
	$result = '';
	for ($i = 0; $i < $count; $i++) {
		$result .= 'Hello World!<br>';
	}
	return $result;
}

$description = 'first_task';
$inputData = 'a = 10, b = 20';
$result = sayHelloWorld(10);
$listing = '<?php
function sayHelloWorld($count = 1)
{
	$result = "";
	for ($i = 0; $i < $count; $i++) {
		$result .= "Hello World!<br>";
	}
	return $result;
}
?>';