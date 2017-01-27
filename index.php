<?php
include('header.php');
?>
<form class="search-form">
    <input type="text" class="search" placeholder="Search Item Recipe">
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
<?php
include('footer.php');
?>