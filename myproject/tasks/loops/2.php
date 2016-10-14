<?php
function sayHelloWorld($count = 1)
{
	$result = '';
	for ($i = 0; $i < $count; $i++) {
		$result .= 'Hello World 2!<br>';
	}
	return $result;
}

$description = 'second_task';
$inputData = 'a = 1, b = 2';
$result = sayHelloWorld(5);

$listing = '<?php
function sayHelloWorld($count = 1)
{
	$result = "";
	for ($i = 0; $i < $count; $i++) {
		$result .= "Hello World 2!<br>";
	}
	return $result;
}
?>';

