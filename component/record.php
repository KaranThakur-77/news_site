 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="record.css">
    <script src="https://kit.fontawesome.com/3283cfe58e.js" crossorigin="anonymous"></script>


 </head>
 <body>
    <h1>records.</h1>
    <div class="container">
        <table>
            <tr>
                <th>ID</th>
                <th>TITLE</th>
                <th>DESCRIPTION</th>
                <th>IMAGE</th>
                <th>AUTHOR</th>
                <th>DATE</th>
                <th>ACTIONS</th>
            </tr>
            <?php
            include('connect.php');
            $sql=("SELECT * FROM news_table");
            $result=$conn->query($sql);
            if ($result->num_rows>0) {
                while ($row=$result->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?php echo($row['id']);?></td>
                        <td><?php echo($row['title']);?></td>
                        <td><?php echo($row['description']);?></td>
                        <td><?php echo($row['image']);?></td>
                        <td><?php echo($row['author']);?></td>
                        <td><?php echo($row['date']);?></td>
                        <td>
                            <a href="edit_news.php?id=<?php echo($row['id']);?>&title=<?php echo($row['title']);?>&image=<?php echo($row['image']);?>&desc=<?php echo($row['description']);?>&date=<?php echo($row['date']);?>&author=<?php echo($row['author']);?>"><i class="fa-solid fa-file-pen fa-xl"></i></a>
                            <a href="delete.php?id=<?php echo($row['id']);?>"><i class="fa-solid fa-trash-can-arrow-up fa-xl"></i></a>
                        </td>
                    </tr>


                    <?php

                }
                    }
            ?>
        </table>
        <br><br><br>
    </div>
    
    <div class="back" style="margin-left:2rem;">
    <a href="../admin/operation.php"><i class="fa-solid fa-arrow-left fa-4x"></i>Go Back.</a>
    </div>
 </body>
 </html>