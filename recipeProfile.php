<?php
	if ($conn = mysqli_connect('localhost', 'root', 'root', 'cookCheck')):

		$id = 1;

		if (isset($_GET['id'])) {$id = $_GET['id'];}
		//run the query
		//  $sql ="SELECT * FROM Recipes WHERE id = " . $id;
		 $sql = "SELECT * FROM Items INNER JOIN Recipes ON Recipes.id = Items.recipe_id  WHERE recipe_id = " . $id;

		//  $sql2 ="SELECT Recipes.id, Recipes.name, Items.img_url, Items.prep_instructions, Items.measurements, Items.materials FROM Items INNER JOIN Recipes ON Recipes.id = Items.recipe_id";

		$i=0; // this refer every row..now its 0
		while ($row = mysqli_fetch_array($sql))
		{
		    echo "<p> " . $row['name'] . " </p>";
		    $i++;
		}

		//  $result = mysqli_query($conn, $sql);
		 //
		 //
		 //
		//  $slide = mysqli_fetch_assoc($result);
		// while($slide = mysqli_fetch_assoc($result));

 ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Recipe Viewer</title>
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
	</head>
	<body>
			<header>
				<a href="index.php">
					<img class="logo" src="img/cookCheckLoogo_175px.png">
				</a>
			</header>
			<div class="container-fluid">
				<div class="miniNav">
					<nav class="buttonNav" aria-label="...">
					  <ul class="pager">
					    <li class="previous"><a href="recipes.php"><i style="font-size:20px; padding-left:5px;" class="fa fa-arrow-left" aria-hidden="true"></i>
						</a></li>
						<li class="miniHeader"><?php echo $slide['name']; ?></li>
					    <li class="next"><a style="padding-left:19px; padding-right:19px;"href="testItem.php?id=<?php echo $slide['id']; ?>">Test</a></li>
					  </ul>
					</nav>
			</div>
				<div class="recipe">
					<img class ="profilePhoto" src="img/zuchini_PH.jpg" width="170px">

				<div class="panel-group" id="accordion">
					<div class="panel panel-default">
				    	<div class="panel-heading">
							<div class="recipeTable">
								<div class="child">
									<div class="ingredient">
										 <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $slide['recipe_id'];?>"><i style="font-size:20px;" id="downArrow" class="fa fa-caret-down" aria-hidden="true"></i></a>
									</div>
								</div>
								<div class="child">
									<div class="ingredient">
										<p><?php echo $slide['materials'];?></p>
									</div>
								</div>
								<div class="child">
									<div class="ingredient">
										<p id="measurement"><?php echo $slide['measurements'];?></p>
									</div>
								</div>
							</div>
	      				</div>
						    <div id="collapse<?php echo $slide['recipe_id'];?>" class="panel-collapse collapse">
								<!--Add the "in" class here if you want accordion to stay open on page load-->

									<?php echo $slide['prep_instructions'];?>

							</div>

				<!-- Panel Starts here -->

			<!-- Panel Ends here -->

				</div>

				<?php
				// endwhile;
				endif;
				?>
	</body>
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
</html>