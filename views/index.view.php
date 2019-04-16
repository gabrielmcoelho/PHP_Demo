<?php require 'views/partials/header.php'; ?>

<ul>
	<?php foreach ($users as $user) : ?>
		<li><?= $user->name ?></li>
	<?php endforeach; ?>
</ul>

<h1>Submit your name</h1>

<form method="POST" action="/names">
	<input name="name"></input>
	<button type="submit"/>Submit</button>
</form>

<?php require 'views/partials/footer.php'; ?>