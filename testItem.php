<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Recipe Viewer</title>
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
	</head>
	<body>
			<header>
				<a href="index.php">
					<img class="logo" src="img/cookCheckLoogo_70px.png">
				</a>
			</header>
			<div class="container-fluid">
				<div class="miniNav">
					<nav class="buttonNav" aria-label="...">
					  <ul class="pager">
					    <li class="previous"><a href="recipes.php"><i style="font-size:20px; padding-left:5px;" class="fa fa-arrow-left" aria-hidden="true"></i></a></li>
						<li class="miniHeader">Breaded Zuchinni</li>
					    <li class="next"><a style="padding-left:19px; padding-right:19px;"href="testItem.php"><img src="img/timer_icon_21px.png" alt=""></a></li>
					  </ul>
					</nav>
					<div class="timer">
						<h2>12:50</h2>
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
	</body>
</html>