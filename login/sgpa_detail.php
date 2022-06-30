<?php
 
 session_start(); 

    $branch=$_REQUEST['branch'];
    $sem=$_REQUEST['sem'];
    $scheme=$_REQUEST['scheme'];
    $username=$_SESSION['username'];
    $_SESSION['semester'] = $sem;

    header('location:calculate.php');

?>