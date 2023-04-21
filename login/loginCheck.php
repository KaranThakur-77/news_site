<?php
session_start();
if (isset($_SESSION['isLoggedIn'])!=TRUE) {
    header('location:../login.php');
}
?>