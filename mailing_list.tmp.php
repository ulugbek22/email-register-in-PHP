<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Mailing list</title>
</head>
<body>
	<div class="container">
		<h2>Registered Users</h2>
		<table class="text-left mailing-list">
		<?php foreach ($users as $user): ?>
			<?php list($name, $email) = $user ?>
			<tr>
				<td><strong><?= $name ?></strong></td>
				<td><a href="mailto:<?= $email ?>"><?= $email ?></a></td>
			</tr>
		<?php endforeach ?>
		</table>
	</div>
</body>
</html>