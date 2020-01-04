<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Email List</title>
</head>
<body>
	<div class="container">
		<h2>Enter Your Best Email</h2>
		<form action="" method="post">
			<table>
				<tr>
					<td><label for="name">Name</label></td>
					<td><input type="text" name="user[name]" id="name" value="<?= old('name') ?>"></td>
				</tr>
				<tr>
					<td><label for="email">Email</label></td>
					<td><input type="text" name="user[email]" id="email" value="<?= old('email') ?>"></td>
				</tr>
				<tr>
					<td colspan="2" style="text-align: right;"><input type="submit" value="Subscribe"></td>
				</tr>
			</table>
			<?php if (isset($msg)): ?>
				<div class="<?= $msg['class'] ?>">
					<p><?= $msg['text'] ?></p>
				</div>
			<?php endif ?>
		</form>
	</div>
</body>
</html>