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