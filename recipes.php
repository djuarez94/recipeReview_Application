<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Recipe Viewer</title>
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<div class="container">
			<header>
				<a href="index.php">
					<img class="logo" src="img/cookCheckLoogo_175px.png">
				</a>
			</header>
			<div class="search">
				<h1 class="positionName">Salad PrepCook</h1>
				<i style="font-size: 2em;" class="fa fa-search" aria-hidden="true"></i>
				<input class="searchPos" type="text" name="" value="">
			</div>

			<div class="itemGallery">

					<?php
							if ($conn = mysqli_connect('localhost', 'root', 'root', 'cookCheck')):

								//run the query
								 $sql ="SELECT * FROM mealRecipes";

								 $result = mysqli_query($conn, $sql);

								 //loop the results
								 while ($row = mysqli_fetch_assoc($result)):

						 ?>

						
						<div class="gallery">
							<a href="recipeProfile.php?id=<?php echo $row['id']; ?>">
						    	<img class="itemImg" src="img/zuchini_PH.jpg">
							</a>
							<div class="desc">
								<a href="recipeProfile.php?id=<?php echo $row['id']; ?>">
									<p><?php echo $row['recipeName'] ?></p>
								</a></div>
						</div>

					<?php
					endwhile;
				endif;
				?>



			</div>
		</div>

	</body>
</html>