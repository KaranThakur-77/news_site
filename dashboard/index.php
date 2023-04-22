<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
      </head>
<body>
    <?php include_once("navbar.php");?>
    <div class="background"></div>
    <div class="grid-container">
<!-- PHP CODE HERE TO DISPLAY DATA -->
    <?php
    include("../component/connect.php");
    $sql=("SELECT * FROM news_table");
    $result=$conn->query($sql);
    if ($result->num_rows>0) {
        while ($row=$result->fetch_assoc()) {
            ?>
   <div class="container">
      <div class="card">
        <div class="imgBox"><img src="<?php echo($row['image']);?>" alt="" /></div>
        <div class="title"><h3><?php echo($row['title']);?></h3></div>
        <div class="desc">
          <p>
            
          <?php echo($row['description']);?>
          </p>
        </div>
        <div class="author">
          <h4>Author:<?php echo($row['author']);?></h4>
          <h4>Date:<?php echo($row['date']);?></h4>
        </div>
      </div>
    </div>
  </body>
      <?php    
    }
    # code...
} else {
    # code...
}


?>
<!-- PHP CODE ENDS HERE  -->
</div>
<h3 class="footer">&copy;All rights reserved@Karan Thakur <?php echo(date('Y-M-D'));?></h4>

</body>
</html>