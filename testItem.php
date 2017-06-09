<?php
	if ($conn = mysqli_connect('localhost', 'root', 'root', 'cookCheck')):

		$id = 1;
		if (isset($_GET['id'])) {$id = $_GET['id'];}
		//run the query
		 $sql ="SELECT * FROM Recipe WHERE id = " . $id;
		 $sql2 ="SELECT * FROM item WHERE recipe_id = " . $id;

		 $result = mysqli_query($conn, $sql);
		 $result2 = mysqli_query($conn, $sql2);

		 $slide = mysqli_fetch_assoc($result);
		 $slide2 = mysqli_fetch_assoc($result2);
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
					    <li class="previous"><a href="recipes.php"><i style="font-size:20px; padding-left:5px;" class="fa fa-arrow-left" aria-hidden="true"></i></a></li>
						<li class="miniHeader"><?php echo $slide['name']; ?></li>
					    <li class="next"><a class="timeButton" style="padding-left:19px; padding-right:19px;"href="#"><img src="img/timer_icon_21px.png" alt=""></a></li>
					  </ul>
					</nav>
					<div class="timer">
				      <div class="timer__controls">
				        <button data-time="600" class="timer_button">Quick 10</button>
				        <button data-time="1200" class="timer_button">Study 20</button>
				        <button data-time="1800" class="timer_button">Lunch Break</button>
				        <form name="customForm" id="custom">
				          <input type="text" name="minutes" placeholder="Enter Minutes">
				        </form>
				      </div>
				      <div class="display">
				        <h1 class="display__time-left"></h1>
				        <p class="display__end-time"></p>
				      </div>
				    </div>
				</div>
				<div class="recipe">
					<img class ="profilePhoto" src="img/zuchini_PH.jpg" width="170px">
				</div>
				<div class="test">
					<form class="" action="index.html" method="post">
						<ol>
							<li class="questionBlock">
								<p id="question">How many cups of buttermilk do you use?</p>
								<input class="userAnswer" type="text" name="" value="">
							</li>
							<li class="questionBlock">
								<p id="question">How many cups of buttermilk do you use?</p>
								<input class="userAnswer" type="text" name="" value="">
							</li>
							<li class="questionBlock">
								<p id="question">How many cups of buttermilk do you use?</p>
								<input class="userAnswer" type="text" name="" value="">
							</li>
							<li class="questionBlock">
								<p id="question">How many cups of buttermilk do you use?</p>
								<input class="userAnswer" type="text" name="" value="">
							</li>
						</ol>
						<input id="submit" type="submit" name="submit" value="Submit">
					</form>
				</div>
			</div>
			<?php
			// endwhile;
			endif;
			?>
	</body>
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script src="js/script.js"></script>
</html>