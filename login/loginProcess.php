<?php
$conn=new mysqli('localhost','root','','news_site');
if (!$conn) {
    die("Connnection failed!!");
    # code...
} else {
    $username=$_POST['uname'];
    $password=$_POST['pass'];
    $hashed_pass=md5($password);
    $sql=("SELECT * FROM authorization WHERE username='$username' && password='$hashed_pass' LIMIT 1 ");

    $result=$conn->query($sql);
    if ($result->num_rows>0) {
        session_start();
        $_SESSION['isLoggedIn']=true;
        header('location:../dashboard/index.php');
    }
    else {
       echo("User does not exits in our database.");
    }
    $conn->close();

    # code...
}

?>