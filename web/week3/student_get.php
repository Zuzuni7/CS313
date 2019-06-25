<!DOCTYPE HTML>
<html lang="en-us">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Nathan Birch">
		<title>Student GET</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="birch-week3.css">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script src="birch-week3.js"></script>
	</head>
	<body>
		<?php
			// input processing
			$name = htmlspecialchars($_POST["name"]);
			$email = htmlspecialchars($_POST["email"]);
			$major = htmlspecialchars($_POST["majorRadio"]);
			$places = $_POST["places"];
			$comments = htmlspecialchars($_POST["comments"]);
		?>
		<?php include '../shared/header.php';?><br><br>
		<div class="container">
			<p>Welcome <?=$name ?></p>
			<p><a href='mailto:<?=$email ?>'><?=$email ?></a></p>
			Your major is: <?=$major ?><br>
			Your have visited: <br>
				<?php
					foreach ($places as $place)
					{
						$place_clean = htmlspecialchars($place);
						echo "$place_clean<br>";
					}
				?>
				<br>
			Your comments: <?php echo $_POST["comments"]; ?>
		</div>
		<?php include '../shared/footer.php';?><br><br>
	</body>
</html>
