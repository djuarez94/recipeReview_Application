<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Recipe Viewer</title>
		<link rel="stylesheet" href="css/styles.css">
	</head>
	<body>
		<div class="container">
			<header>
				<a href="index.php">
					<img class="logo" src="img/cookCheckLoogo_175px.png">
				</a>
			</header>
				<div class="positions">
					<nav>
						<?php
						if ($conn = mysqli_connect('localhost', 'root', 'root', 'cookCheck')):

							$id = 1;
							if (isset($_GET['id'])) {$id = $_GET['id'];}
							//run the query
							 $sql ="SELECT * FROM Prep_Positions";

							 $result = mysqli_query($conn, $sql);

							//  $slide = mysqli_fetch_assoc($result);
							 while ($row = mysqli_fetch_assoc($result)) {
								 echo "<a href=\"recipes.php?id=".$row['id']."\">".$row['position_name']."</a>";
							 }
							 ?>
					</nav>
				</div>
				<div class="copyright">
					<p>	&copy; <?php echo date('Y'); ?> Recipe Viewer.<br> All rights reserved.</p>
				</div>
		</div>
		<?php
		// endwhile;
		endif;
		?>
	</body>
</html>