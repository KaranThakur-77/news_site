<?php
$conn=new mysqli('localhost','root','','news_site');
if (!$conn) {
    die("connection failed");
    # code...
}else{
    // echo("success");
    // $conn->close();
}
?>