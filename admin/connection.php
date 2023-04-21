<?php
$conn=new mysqli('localhost','root','','news_site');
if (!$conn) {
    die('Connection failed!');
    # code...
} else {
    # code...
    // echo("success");
    $conn->close();
}

?>