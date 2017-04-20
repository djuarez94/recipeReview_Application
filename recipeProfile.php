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
					    <li class="previous"><a href="recipes.php"><i style="font-size:20px; padding-left:5px;" class="fa fa-arrow-left" aria-hidden="true"></i>
</a></li>
						<li class="miniHeader">Item Profile</li>
					    <li class="next"><a style="padding-left:19px; padding-right:19px;"href="testItem.php">Test</a></li>
					  </ul>
					</nav>
				</div>
				<div class="recipe">
					<img class ="profilePhoto" src="img/zuchini_PH.jpg" width="170px">
					<div class="recipeTable">
					    <div class="child">
					        <div class="ingredient">
					        	<i style="font-size:20px;" id="downArrow" class="fa fa-caret-down" aria-hidden="true"></i>
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
					<div id="procedure">
						This is the procedure text.
					</div>
					<div class="recipeTable">
					    <div class="child">
					        <div class="ingredient">
					        	<i style="font-size:20px;" id="downArrow" class="fa fa-caret-down" aria-hidden="true"></i>
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
					<div id="procedure">
						This is the procedure text.
					</div><div class="recipeTable">
					    <div class="child">
					        <div class="ingredient">
					        	<i style="font-size:20px;" id="downArrow" class="fa fa-caret-down" aria-hidden="true"></i>
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
					<div id="procedure">
						This is the procedure text.
					</div>
					<!-- <div class="ingredients">
						<i id="downArrow" class="fa fa-caret-down" aria-hidden="true"></i>
						<p id="ingredient">Breaded Zuchinni</p>
						<p id="measurement">10 Pieces</p>
					</div>
					<div id="procedure">
						This is the procedure text.
					</div> -->
				</div>




		</div>

	</body>
</html>