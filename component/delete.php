<?php
include("connect.php");
$id=$_GET['id'];
$sql="DELETE FROM news_table WHERE ID=$id";
    $res=$conn->query($sql);
    if ($res===TRUE) {
        # code...
        echo("Deleted successfully");
        header("location:record.php");
    }
?>