<?php require 'views/partials/header.php'; ?>

<h1>Today's Tasks</h1>

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

<?php require 'views/partials/footer.php'; ?>