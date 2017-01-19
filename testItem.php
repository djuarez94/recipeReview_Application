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
				<label class ="question" for="answer"><?php echo $slide['itemRecipeQuestion1']; ?></label>
				</br>
				<input type="text" name="answer"  value="" placeholder="Answer question here" />
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
            if (isset($_POST['answer']) && trim($_POST['answer']) != "") {
                echo "Hello <br>";
                $userAnswer = $_POST['answer'];
                echo "User answer: " . $userAnswer;

             $sql ="SELECT * FROM mealRecipes WHERE id = 1";

             $result = mysqli_query($conn, $sql);

             $slide = mysqli_fetch_assoc($result);

             echo "<br> Answer from the table is: " . $slide['answer1'];

                if ($userAnswer != $slide['answer1']) {
                    die("<h4 style='color: red; padding-left: 1%; padding-right: 1%;' class='text-center'>Sorry $userAnswer is not the right answer...<h4>");
                } else {
                    echo "<br>That is correct!";
                }
            }
        }
    }

     ?>
</article>
<?php
endif;
?>
<?php include('footer.php'); ?>