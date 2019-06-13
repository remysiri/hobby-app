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
        <nav id="nav" class="<?php if($_GET["page"] !== "home") { echo "colornav"; } ?>">
            <li><a class="<?php if($_GET["page"] == "home") { echo "active"; } ?>" href="index.php">About</a></li>
            <li><a class="<?php if($_GET["page"] == "calendar") { echo "active"; } ?>" href="index.php?page=calendar">Calendar</a></li>
            <li><a class="<?php if($_GET["page"] == "contact") { echo "active"; } ?>" href="index.php?page=contact">Contact</a></li>
            <li><a class="<?php if($_GET["page"] == "store") { echo "active"; } ?>" href="index.php?page=store">Store</a></li>
            <?php if(!empty($_SESSION["logged"]) == false): ?>
                <li><a href="index.php?page=login">Login</a></li>
            <?php elseif($_SESSION["logged"] == true): ?>
                <li><a href="index.php?page=logout">Logout</a></li>
            <?php endif; ?>
        </nav>
        <?php echo $content; ?>
		<footer>
            <div class="socialmedia"></div>
            <div class="contact">
                <h1>Inquiries</h1>
                <p class="info">Troubled with questions? <br>No worries we'll answer them for you</p>
                <p><span>Phone: </span> +32 (0) 56 30 85 78</p>
                <p><span>Email: </span> unionname@contact.me</p>
            </div>
		</footer>

        <p class="copy-footer">2019 UnionName  -  Privacy Policy  |  Cookie Policy  |  Terms & Conditions</p>
		<script src="js/script.js"></script>
	</body>
</html>