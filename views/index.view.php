<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Document</title>
	<style type="text/css">
		header {
			background: #e3e3e3;
			text-align: center;
			padding: 2em;
		}
	</style>
</head>

<body>

	<header>
		<h1>Today's Tasks</h1>
	</header>

	<ul>
		<?php foreach ($tasks as $task) : ?>
		<li>
			<strong>
				<?php if ($task->completed) : ?>
				<strike> <?= $task->description ?> </strike>
				<?php else : ?>
				<?= $task->description ?>
				<?php endif; ?>
			</strong>
		</li>
		<?php endforeach; ?>
	</ul>

</body>

</html>