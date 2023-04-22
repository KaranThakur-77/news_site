<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="edit.css">
    <title>Document</title>
</head>
<body>
    <div class="background"></div>
    <div class="container">
        <h1>EDIT NEWS.</h1>
        <form action="edit.php" method="get">
            <label for="title">Title:</label>
            <input type="text" name="title" placeholder="News Title." value="<?php echo($_GET['title']);?>">

            <label for="image">Image URL:</label>
            <input type="text" name="image" placeholder="Image URL." value="<?php echo($_GET['image']);?>">

            <label for="description" class="desc">Description:</label>
            <textarea name="desc"  cols="30" rows="10" placeholder="News Summary.">
              <?php echo($_GET['desc']);?>
            </textarea>

            <label for="title">Date</label>
            <input type="date" name="date" placeholder="Date." value="<?php echo($_GET['date']);?>">

            <label for="author">Author</label>
            <input type="text" name="author" placeholder="News Author." value="<?php echo($_GET['author']);?>">
            
            <button type="submit" class="btn1" name="submit" value="submit">EDIT</button>
        </form>
    </div>
    
</body>
</html>