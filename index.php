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