<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/style.css">
		<title>Hobby Lobby</title>
	</head>
	<body>
		<header>
			<div class="banner"></div>
			<nav class="nav">
			</nav>
			</div>
		</header>

		<main>
			<div class="container">
                <?php if($_SESSION["logged"] == true): ?>
                <p>Logged in as</p>
                <?php echo $_SESSION["username"]; ?>
                <?php endif; ?>
				<?php echo $content; ?>
			</div>
		</main>

		<footer>
		</footer>
		<script src="js/script.js"></script>
	</body>
</html>