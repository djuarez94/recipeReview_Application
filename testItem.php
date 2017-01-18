<?php
include('header.php');
?>

<article>
    <h1>Test Item</h1>

    <?php
        if ($conn = mysqli_connect('localhost', 'root', 'root', 'cookCheck')):

            $id = 1;
            if (isset($_GET['id'])) {$id = $_GET['id'];}
            //run the query
             $sql ="SELECT * FROM mealRecipes WHERE id = " . $id;

             $result = mysqli_query($conn, $sql);

             $slide = mysqli_fetch_assoc($result);

     ?>

    <a href="recipeProfile.php?id=<?php echo $slide['id']; ?>"><i class="fa fa-arrow-left fa-2x" aria-hidden="true"></i></a>



    <img src="<?php echo $slide['imgUrl']; ?>">
    <h2><?php echo $slide['recipeName']; ?></h2>

    <form method="post" action="" id="">
		<ul>
			<li>
				<label for="question"><?php echo $slide['itemRecipeQuestion']; ?></label>
				</br>
				<input type="text" name="question"  value="" placeholder="Answer question here" />
			</li>
				</br>
				<input type="submit" name="submit" value="Submit Answers">

		</ul>
	</form>

    <?php
    if ($conn2 = mysqli_connect('localhost', 'root', 'root', 'cookCheck')):

        if (isset($_POST['submit']) && trim($_POST['submit']) != ""):
    	if (isset($_POST['question']) != $userArray['itemRecipeQuestion']):

    		$question = $_POST['question'];

    		$recipeQuestions = "SELECT * FROM mealRecipes WHERE itemRecipeQuestion = ".  $question;
             $result = mysqli_query($conn2, $recipeQuestions);

    		//Get the first instance of the user and store it into an array
    		$userArray = mysqli_fetch_assoc($result);


    		if ($userArray != $question):
    			die("<h4 style='color: red; padding-top: 2%; padding-left: 1%; padding-right: 1%;' class='text-center'>That is not the right answer to $question.");


     ?>
</article>
<?php
endif;
?>
<?php include('footer.php'); ?>