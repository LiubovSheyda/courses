<?php
// Map of tasks by section and task number
$tasksMap = [
	'loops' => [
		'title' => 'Loops',
		'tasks' => [
			1,
			2
		]
	]
];
//	var_dump($_GET);
// We have one entry point of application, path GET variable should have #section#-#tasknumber# format
$pathChunks = (!empty($_GET['path'])) ? explode('-', $_GET['path']) : '';
// @todo Handle case when 0 and 1 keys don't exist in $pathChunks. For example, we should show 404 error code.
if(!$pathChunks) {	
	/*echo "<script>document.getElementById('content').innerHTML = '<p>Привет!!!</p>';</script>";*/
	$js_script = "document.getElementById('content').innerHTML = '<p>Привет!!!</p>';"; 
	exec_js($js_script);
}

/*$section = $pathChunks[0];
$task = $pathChunks[1];

$sectionData = $tasksMap[$section];
$tasksName = $task;
$titleChunks = [
	$sectionData['title'],
	$tasksName
];
$pageTitle = implode(" -> ", $titleChunks);

require __DIR__ . '/tasks/' . $section . '/' . $task . '.php';*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>My tasks</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
<div class="wrapper">
	<?php require('blocks/header.php'); ?>
	<div class="main">

	<?php require 'blocks/menu.php'; ?>
	<div class="content" id="content">
		<h1><?php echo $pageTitle; ?></h1>
		<div class="task-item">
			Task:<br>
			<?php echo $description; ?>
		</div>
		<div class="task-item">
			Input:<br>
			<?php echo $inputData; ?>
		</div>
		<div class="task-item">
			Output:<br>
			<?php echo $result; ?>
		</div>
		<div class="task-item">
			Code:<br>
			<?php highlight_string ($listing); ?>

		</div>
	</div>
</div>
<?php require 'blocks/footer.php'; ?>
</div>

</body>
</html>
