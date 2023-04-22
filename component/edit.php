<?php
include("connect.php");
if (isset($_GET['submit'])) {
    $id=$_GET['id'];
    $title=$_GET['title'];
    $image=$_GET['image'];
    $desc=$_GET['desc'];
    $date=$_GET['date'];
    $author=$_GET['author'];
    $sql="UPDATE news_table SET title='$title',image='$image',description='$desc',date='$date',author='$author'";
    $result=$conn->query($sql);
    if ($result===true) {
        header('location:record.php');
        # code...
    }
}
?>