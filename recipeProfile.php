<?php
include('header.php');
?>

<article>
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

</article>
<?php
endif;
?>
<?php include('footer.php'); ?>