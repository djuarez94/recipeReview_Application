/*-------------------------------------
| index.html first version
-------------------------------------*/

<?php
include('header.php');
?>
<?php
if ($conn2 = mysqli_connect('localhost', 'root', 'root', 'cookCheck')) {

//checks to see if user clicks the submit button
	if (isset($_POST['search']) && trim($_POST['search']) != "") {
		echo "User clicked on search button <br>";
//if user clicks the submit button and the user did input something the following code runs


		if (isset($_POST['itemSearched']) && trim($_POST['itemSearched']) != "") {
			echo "Hello <br>";
			$userInput = $_POST['itemSearched'];
			echo "<h4 style='color: red; padding-left: 1%; padding-right: 1%;' class='text-center'>User input is: " . $userInput ."</h4>";

			$id = 3;
			if (isset($_GET['id'])) {$id = $_GET['id'];}
		 	$sql ="SELECT * FROM mealRecipes WHERE id =" . $id;

		 $result = mysqli_query($conn2, $sql);

		 $slide = mysqli_fetch_assoc($result);

		 $tableAnswer = $slide['recipeName'];
		 echo "tableAnswer is: $tableAnswer";

			if ($userInput != $slide['recipeName']) {
				echo "<h4 style='color: red; padding-left: 1%; padding-right: 1%;' class='text-center'>Sorry $userInput is not part of this list</h4>";
			} else {
				echo "<br>That is in the list!";
			}
		}
	}
}

 ?>
<form class="search-form" method="post" action="" id="">
    <input type="text" class="search" name ="itemSearched" placeholder="Search Item Recipe">
	<input type="submit" name="search" value="Search">
    <ul class="suggestions">
      <li>Filter for a city</li>
      <li>or a state</li>
    </ul>
  </form>
<div class="list">
	<?php
			if ($conn = mysqli_connect('localhost', 'root', 'root', 'cookCheck')):

				//run the query
				 $sql ="SELECT * FROM mealRecipes";

				 $result = mysqli_query($conn, $sql);

				 //loop the results
				 while ($row = mysqli_fetch_assoc($result)):

		 ?>
	<a href="recipeProfile.php?id=<?php echo $row['id']; ?>">
		<img src="<?php echo $row['imgUrl']; ?>">
	</a>
	<?php
	endwhile;
endif;
?>
</div>
<!-- <script>

const endpoint = 'https://gist.githubusercontent.com/Miserlou/c5cd8364bf9b2420bb29/raw/2bf258763cdddd704f8ffd3ea9a3e81d25e2c6f6/cities.json';

const cities = [];
fetch(endpoint)
  .then(blob => blob.json())
  .then(data => cities.push(...data))

  function findMatches (wordToMatch, cities) {
    return cities.filter(place => {
      //here we need to figure out if the city or state matches the user search input
      const regex = new RegExp(wordToMatch, 'gi');
      return place.city.match(regex) || place.state.match(regex)
    });
  }

function numberWithCommas(x) {
  return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
}

  function displayMatches () {
    const matchArray = findMatches(this.value, cities);
    const html = matchArray.map(place => {
      const regex = new RegExp(this.value, 'gi');
      const cityName = place.city.replace(regex, `<span class="hl">${this.value}</span>`);
      const stateName = place.state.replace(regex, `<span class="hl">${this.value}</span>`);
      return `
        <li>
          <span class="name">${cityName}, ${stateName}</span>
          <span class="population">${numberWithCommas(place.population)}</span>
        </li>
      `;
    }).join('');
    suggestions.innerHTML = html;
  }

  const searchInput = document.querySelector('.search');
  const suggestions = document.querySelector('.suggestions');

  searchInput.addEventListener('change', displayMatches);
  searchInput.addEventListener('keyup', displayMatches);

</script> -->
<?php
include('footer.php');
?>

/*-------------------------------------
| css
-------------------------------------*/
body {
	background-color: #c3e7e4;
}

.container {
	width: 80%;
	margin: auto;
	background-color: #fff;
	padding: 1em;
	 box-shadow: 0px 3px 3px #0c3737;
}

header {
	text-align: center;
	/*padding-top: .25em;*/
	padding-bottom: .25em;
	padding-top: .25em;
	font-size: 2em;
	font-family: sans-serif;
	background-color: #c3e7e4;
	color: #596d6c;
}

footer {
	text-align: center;
	padding-top: 15px;
}

img {
	width: 300px;
	padding: 10px;
	border-radius: 50%;
	border: solid 5px #7d9895;
}

img:hover {
	opacity: .75;
}

h2 {
	padding-left: 10px;
	font-family: sans-serif;
}

.list {
	padding: 10px;
	display: inline-block;
}

.text {
	padding-left: 10px;
}

.backButton {
	position: absolute;
	left: 1%;
	text-decoration: none;
	font-size: .8em;
}

.testButton {
	position: absolute;
	right: 1%;
	color: #fff;
	background-color: #7d9895;
	padding: 10px;
	border-radius: 10px;
	text-decoration: none;
	font-family: sans-serif;
}

.testButton:hover {
	color: #7d9895;
	background-color: #fff;
}

i {
	float: right;
	color: #fff;
	background-color: #7d9895;
	padding: 10px;
	border-radius: 10px;
	text-decoration: none;
	font-family: sans-serif;
}

i:hover {
	color: #7d9895;
	background-color: #fff;
}

nav {
	background-color: red;
	display: block;
}

.nav1 {
	position: relative;
}

table {
	padding: 10px;
}

tr.turqoise {
	background-color: #99b9b7;
}

th {
	text-align: left;
}

td {
	width: 500px;
}

.recipe {
	background-color: #bae2dd;
	padding: 2px;
	margin-top: 15px;
}

.search-form {

	text-align: right;
}

.search {
	width: 25%;
	padding: 10px;
	font-size: 1em;
	border: 3px solid #7d9895;
	text-align: center;
}

.suggestions {
  margin: 0;
  padding: 0;
  position: relative;
  left: 72.6%;
  /*perspective:20px;*/
}
.suggestions li {
  background:white;
  list-style: none;
  border-bottom: 1px solid #D8D8D8;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.14);
  margin:0;
  padding: 10px;
  transition:background 0.2s;
  width: 25%;
  justify-content:space-between;
  text-transform: capitalize;
}

/*-------------------------------------
| recipeProfile.php original version
-------------------------------------*/
<?php
include('header.php');
?>

<div class="recipeProfile">
<?php
    if ($conn = mysqli_connect('localhost', 'root', 'root', 'cookCheck')):

        $id = 1;
        if (isset($_GET['id'])) {$id = $_GET['id'];}
        //run the query
         $sql ="SELECT * FROM mealRecipes WHERE id = " . $id;

         $result = mysqli_query($conn, $sql);

         $slide = mysqli_fetch_assoc($result);
 ?>
		<nav>
		    <a class = "backButton" href="index.php"><i class="fa fa-arrow-left fa-2x" aria-hidden="true"></i></a>
		    <a class = "testButton" href="testItem.php?id=<?php echo $slide['id']; ?>">Take Test</a>
		</nav>

		    <img src="<?php echo $slide['imgUrl']; ?>">
		    <h2><?php echo $slide['recipeName']; ?></h2>
		    <div class="text"><?php echo $slide['recipeDescr']; ?></div>
</div>
<div class="recipe">
	<table>
		<h2>Recipe</h2>
		<tbody>
			<tr>
				<th>Ingredient</th>
				<th>Measurement</th>
			</tr>
			<tr class="turqoise">
				<td>Salt</td>
				<td>1 Tbls</td>
			</tr>
			<tr class="">
				<td>Black Pepper</td>
				<td>1 Tsp</td>
			</tr>
			<tr class="turqoise">
				<td>Salt</td>
				<td>1 Tbls</td>
			</tr>
			<tr class="">
				<td>Black Pepper</td>
				<td>1 Tsp</td>
			</tr>
		</tbody>
	</table>
</div>

<?php
endif;
?>
<?php include('footer.php'); ?>

/*-------------------------------------
| textItem.php original version
-------------------------------------*/
<?php
include('header.php');
?>

    <?php
        if ($conn = mysqli_connect('localhost', 'root', 'root', 'cookCheck')):

            $id = 1;
            if (isset($_GET['id'])) {$id = $_GET['id'];}
            //run the query
             $sql ="SELECT * FROM mealRecipes WHERE id = " . $id;

             $result = mysqli_query($conn, $sql);

             $slide = mysqli_fetch_assoc($result);

     ?>

    <a class = "backButton" href="recipeProfile.php?id=<?php echo $slide['id']; ?>"><i class="fa fa-arrow-left fa-2x" aria-hidden="true"></i></a>



    <img src="<?php echo $slide['imgUrl']; ?>">
    <h2><?php echo $slide['recipeName']; ?></h2>

    <form class="recipe" method="post" action="" id="">
        <h2>Test</h2>
		<ul>
			<li>
				<label class ="question" for="answer"><?php echo $slide['itemRecipeQuestion1']; ?></label>
				</br>
				<input type="text" name="answer"  value="" placeholder="Answer question here" />
			</li>
            <li>
				<label class ="question" for="answer2"><?php echo $slide['itemRecipeQuestion2']; ?></label>
				</br>
				<input type="text" name="answer2"  value="" placeholder="Answer question here" />
			</li>
				</br>
				<input type="submit" name="submit" value="Submit Answers">

		</ul>
	</form>

    <?php
    if ($conn2 = mysqli_connect('localhost', 'root', 'root', 'cookCheck')) {
//checks to see if user clicks the submit button
        if (isset($_POST['submit']) && trim($_POST['submit']) != "") {
            echo "User clicked on submit button <br>";
//if user clicks the submit button and the user did input something the following code runs


            if (isset($_POST['answer']) && isset($_POST['answer2']) && trim($_POST['answer']) != "" && trim($_POST['answer2']) != "") {
                echo "Hello <br>";
                $userAnswer = $_POST['answer'];
                $userAnswer2 = $_POST['answer2'];
                echo "<h4 style='color: red; padding-left: 1%; padding-right: 1%;' class='text-center'>Question 1 user answer: </h4>" . $userAnswer;
                echo "<h4 style='color: red; padding-left: 1%; padding-right: 1%;' class='text-center'>Question 2 user answer: </h4>" . $userAnswer2;

             $sql ="SELECT * FROM mealRecipes WHERE id =" . $id;

             $result = mysqli_query($conn, $sql);

             $slide = mysqli_fetch_assoc($result);

             echo "<br>Question 1 answer from the table is: " . $slide['answer1'];
             echo "<br>Question 2 answer from the table is: " . $slide['answer2'];

                if ($userAnswer != $slide['answer1']) {
                    echo "<h4 style='color: red; padding-left: 1%; padding-right: 1%;' class='text-center'>Sorry $userAnswer is not the right answer for question 1...</h4>";
                } else {
                    echo "<br>That is correct!";
                }

                if ($userAnswer2 != $slide['answer2']) {
                    echo "<h4 style='color: red; padding-left: 1%; padding-right: 1%;' class='text-center'>Sorry $userAnswer2 is not the right answer for question 2...</h4>";
                } else {
                    echo "<br>That is correct!";
                }

            }
        }
    }

     ?>
<?php
endif;
?>
<?php include('footer.php'); ?>





