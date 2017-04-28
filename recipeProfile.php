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
						<li class="miniHeader">Item Profile</li>
					    <li class="next"><a style="padding-left:19px; padding-right:19px;"href="testItem.php">Test</a></li>
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
									 <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><i style="font-size:20px;" id="downArrow" class="fa fa-caret-down" aria-hidden="true"></i></a>
								</div>
							</div>
							<div class="child">
								<div class="ingredient">
									<p>Breaded Zuchinni</p>
								</div>
							</div>
							<div class="child">
								<div class="ingredient">
									<p id="measurement">10 Pieces</p>
								</div>
							</div>
						</div>
				      </div>
				      <div id="collapse1" class="panel-collapse collapse"><!--Add the "in" class here if you want accordion to stay open on page load-->
				        <div class="panel-body">
							Procedure text goes here
						</div>
						</div>
						<div class="panel-heading">
  						<div class="recipeTable">
  							<div class="child">
  								<div class="ingredient">
  									 <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><i style="font-size:20px;" id="downArrow" class="fa fa-caret-down" aria-hidden="true"></i></a>
  								</div>
  							</div>
  							<div class="child">
  								<div class="ingredient">
  									<p>Breaded Zuchinni</p>
  								</div>
  							</div>
  							<div class="child">
  								<div class="ingredient">
  									<p id="measurement">10 Pieces</p>
  								</div>
  							</div>
  						</div>
  				      </div>
  				      <div id="collapse2" class="panel-collapse collapse"><!--Add the "in" class here if you want accordion to stay open on page load-->
  				        <div class="panel-body">
  							Procedure text goes here
  						</div>
  						</div>
						<div class="panel-heading">
  						<div class="recipeTable">
  							<div class="child">
  								<div class="ingredient">
  									 <a data-toggle="collapse" data-parent="#accordion" href="#collapse3"><i style="font-size:20px;" id="downArrow" class="fa fa-caret-down" aria-hidden="true"></i></a>
  								</div>
  							</div>
  							<div class="child">
  								<div class="ingredient">
  									<p>Breaded Zuchinni</p>
  								</div>
  							</div>
  							<div class="child">
  								<div class="ingredient">
  									<p id="measurement">10 Pieces</p>
  								</div>
  							</div>
  						</div>
  				      </div>
  				      <div id="collapse3" class="panel-collapse collapse"><!--Add the "in" class here if you want accordion to stay open on page load-->
  				        <div class="panel-body">
  							Procedure text goes here
  						</div>
  						</div>
						<div class="panel-heading">
  						<div class="recipeTable">
  							<div class="child">
  								<div class="ingredient">
  									 <a data-toggle="collapse" data-parent="#accordion" href="#collapse4"><i style="font-size:20px;" id="downArrow" class="fa fa-caret-down" aria-hidden="true"></i></a>
  								</div>
  							</div>
  							<div class="child">
  								<div class="ingredient">
  									<p>Breaded Zuchinni</p>
  								</div>
  							</div>
  							<div class="child">
  								<div class="ingredient">
  									<p id="measurement">10 Pieces</p>
  								</div>
  							</div>
  						</div>
  				      </div>
  				      <div id="collapse4" class="panel-collapse collapse"><!--Add the "in" class here if you want accordion to stay open on page load-->
  				        <div class="panel-body">
  							Procedure text goes here
  						</div>
  						</div>
						<div class="panel-heading">
  						<div class="recipeTable">
  							<div class="child">
  								<div class="ingredient">
  									 <a data-toggle="collapse" data-parent="#accordion" href="#collapse5"><i style="font-size:20px;" id="downArrow" class="fa fa-caret-down" aria-hidden="true"></i></a>
  								</div>
  							</div>
  							<div class="child">
  								<div class="ingredient">
  									<p>Breaded Zuchinni</p>
  								</div>
  							</div>
  							<div class="child">
  								<div class="ingredient">
  									<p id="measurement">10 Pieces</p>
  								</div>
  							</div>
  						</div>
  				      </div>
  				      <div id="collapse5" class="panel-collapse collapse"><!--Add the "in" class here if you want accordion to stay open on page load-->
  				        <div class="panel-body">
  							Procedure text goes here
  						</div>
  						</div>
						<!--Start new panel here-->
					</div>
			    </div>

	</body>
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
</html>