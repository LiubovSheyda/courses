<?php

function getTasksMap ()
{
	return [
	'loops' => [
		'title' => 'Loops',
		'tasks' => [
			1,
			2
		]
	],
	'arrays-1' => [
		'title' => 'Arrays-1',
		'tasks' => [
			1,
			2
		]
	],
	'arrays-2' => [
		'title' => 'Arrays-2',
		'tasks' => [
			1,
			2
		]
	],
	'mysql' => [
		'title' => 'Mysql',
		'tasks' => [
			1,
			2
		]
	]
];
}

function getTaskTitle ($section, $taskNumber)
{
	$tasksMap = getTasksMap();
	$sectionData = $tasksMap[$section];
	$titleChunks = [
		$sectionData['title'],
		$taskNumber
	];
	$pageTitle = implode(" -> ", $titleChunks);
}
function getTask($section, $taskNumber)
{
	$tasksMap = getTasksMap();
	$title = getTaskTitle($section, $taskNumber);

	require __DIR__ . '/../tasks/' . $section . '/' . $taskNumber . '.php';
	return [
		'title'=>$title,
		'description'=> $description,
		'inputData'=> $inputData,
		'result'=> $result,
		'listing'=> $listing
	];
}

