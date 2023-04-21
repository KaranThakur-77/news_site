<?php
include("connect.php");
if (isset($_GET['submit'])) {
    $title=$_GET['title'];
    $image=$_GET['image'];
    $desc=$_GET['desc'];
    $date=$_GET['date'];
    $author=$_GET['author'];
    $sql=("INSERT INTO news_table (id,title,image,description,date,author) VALUES(null,'$title','$image','$desc','$date','$author')");
    $result=$conn->query($sql);
    if ($result) {
        header('location:../dashboard/index.php');
    } else {
        
    }
    
    
}
?>