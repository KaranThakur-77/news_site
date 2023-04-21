<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="add.css">
    <title>Document</title>
</head>
<body>
    <div class="background"></div>
    <div class="container">
        <h1>ADD NEWS.</h1>
        <form action="add.php" method="get">
            <label for="title">Title:</label>
            <input type="text" name="title" placeholder="News Title.">
            <label for="image">Image URL:</label>
            <input type="text" name="image" placeholder="Image URL.">
            <label for="description" class="desc">Description:</label>
            <textarea name="desc"  cols="30" rows="10" placeholder="News Summary."></textarea>
            <label for="title">Date</label>
            <input type="date" name="date" placeholder="Date.">
            <label for="author">Author</label>
            <input type="text" name="author" placeholder="News Author.">
            <button type="submit" class="btn1" name="submit" value="submit">Add</button>
        </form>
    </div>
    
</body>
</html>