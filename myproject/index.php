<?php
	header('Content-type: text/html; charset=utf-8');
	
	if (isset($_GET["id_task"])) {
		$id_task=$_GET["id_task"];		
	}
	
	include('TaskFactory.php');
	include('Task.php');

	TaskFactory::pushTask(new Task($id_task));
	print_r(TaskFactory::getTask($id_task)->getId());

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
			<div class="menu">
				<ul>
					<li>Loops</li>
						<ul>
							<li><a href="index.php?id_task=1">task1</a></li>
							<li><a href="index.php?id_task=2">task2</a></li>
							<li>task3</li>
							<li>task4</li>
						</ul>
					<li>Arrays-1</li>
						<ul>
							<li>task1</li>
							<li>task2</li>
							<li>task3</li>
							<li>task4</li>
						</ul>					
					<li>Arrays-2</li>
						<ul>
							<li>task1</li>
							<li>task2</li>
							<li>task3</li>
							<li>task4</li>
						</ul>
				</ul>
			</div>
			<div class="content">
				<p>Selection name (Loops) / Page name (2)</p>
				<form>					
					<textarea name="description">Описание задачи</textarea><br>
					<textarea name="input_data">Входные данные</textarea><br>
					<textarea name="result">Результат</textarea><br>
					<textarea name="parent_code">Исходный код функции</textarea><br>
				</form>
			</div>
		</div>
		<?php require('blocks/footer.php'); ?>
	</div>
</body>
</html>
