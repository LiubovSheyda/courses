<?php
header('Content-Type: text/html; charset=utf-8');
//$pathChunks = (!empty($_GET['path'])) ? explode('-', $_GET['path']):[];

// Map of tasks by section and task number
require_once __DIR__ . '/library/index.php';
//	var_dump($_GET);

$pageCode = 'index';
$pageParameters = [];
$urlChunks = [];
if (!empty($_GET['path'])) {
	$urlChunks = explode('/', $_GET['path']);
	if (!empty($urlChunks[0])){
		$pageCode = $urlChunks[0];
	}
	if (!empty($urlChunks[1])){
		$pageParameters = explode('-', $urlChunks[1]);
	}
}
//var_dump($urlChunks);
//print_r(sprintf('Page  code: %s', $pageCode));

switch ($pageCode) {
	case 'tasks':
		$section = (!empty($pageParameters[0])) ? $pageParameters[0] : '';
		$taskNumber = (!empty($pageParameters[1])) ? $pageParameters[1] : '0';
		$pageData = getTask($section, $taskNumber);
		break;
	default:
			$pageData = [];
		break;
}

$pathToView =  __DIR__ . '/blocks/pages/'. $pageCode . '.php';
if (!file_exists($pathToView)) {
	$pageCode = '404';
	$pathToView =  __DIR__ . '/blocks/pages/'. $pageCode . '.php';

}

//$pathChunks = explode('-', $urlChunks[1]);
//$section = $pageParameters[0];
//$task = $pageParameters[1];

?>
<!DOCTYPE html>
<html>
<head>
	<title>My tasks</title>
	<link rel="stylesheet" type="text/css" href="/css/style.css">
</head>

<body>
<div class="wrapper">
	<?php require('blocks/header.php'); ?>
	<div class="main">
		<?php require 'blocks/menu.php'; ?>
		<div class="content">
			<?php require __DIR__ . '/blocks/pages/'. $pageCode . '.php'; ?>	
		</div>
	</div>
	<?php require 'blocks/footer.php'; ?>
</div>

</body>
</html>
