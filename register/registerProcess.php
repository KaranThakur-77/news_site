<?php
$conn=new mysqli('localhost','root','','news_site');
if (!$conn) {
    die("Connnection failed!!");
    # code...
} else {
    $username=$_GET['uname'];
    $password=$_GET['pass'];
    $mail=$_GET['mail'];
    $hashed_pass=md5($password);
    $sql="INSERT INTO authentication (id,username,password,mail) VALUES(null,'$username','$hashed_pass','$mail')";
    $result=$conn->query($sql);
        if ($result===TRUE) {
            header('location:../login/login.php');
        # code...
    }
    $conn->close();
    

    # code...
}
?>
hello
