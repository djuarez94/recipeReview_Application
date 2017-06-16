<?php if ($conn = mysqli_connect('localhost', 'root', 'root', 'cookCheck')):

	$id = 1;
	if (isset($_GET['id'])) {$id = $_GET['id'];}
	//run the query
	 $salad_sql = "SELECT * FROM salads_recipes INNER JOIN Prep_Positions ON  salads_recipes.position_id = Prep_Positions.id WHERE position_id = " . $id;

	 $result = mysqli_query($conn, $salad_sql);

	 while ($row2 = mysqli_fetch_assoc($result)):
	  ?>

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
				<h1 class="positionName"><?php echo $row2['position_name']; ?> PrepCook</h1>
				<i style="font-size: 2em;" class="fa fa-search" aria-hidden="true"></i>
				<input class="searchPos" type="text" name="" value="">
			</div>

			<div class="itemGallery">
				<?php
				$id2 = 1;
				if (isset($_GET['id'])) {$id2 = $_GET['id'];}
				//run the query
				 $salad_sql2 = "SELECT * FROM salads_recipes WHERE position_id =". $id;

				 $result = mysqli_query($conn, $salad_sql2);
					//  $slide = mysqli_fetch_assoc($result);
					while ($row2 = mysqli_fetch_assoc($result)) {
					   echo "<div class=\"gallery\">
								   <a href=\"recipeProfile.php?id=".$row2['id']."\">
									   <img class=\"itemImg\" src=\"".$row2['img_url']."\">
								   </a>
									   <div class=\"desc\">
										   <a href=\"recipeProfile.php?id=".$row2['id']."\">
											   <p>".$row2['recipe_name']."</p>
										   </a>
									   </div>
							   </div>";
						$id2++;
					}
					 ?>

					<?php
					endwhile;
				endif;
				?>



			</div>
		</div>

	</body>
</html>