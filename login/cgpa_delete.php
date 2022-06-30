<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<?php
$username=$_SESSION['username'];
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'student_grade_db');

$queryy = "SELECT * FROM cgpa WHERE username='$username'"; 
$result =mysqli_query($db,$queryy);

if(mysqli_num_rows($result) > 0){
  $sem1=$_REQUEST['cgpa1'];
$sem2=$_REQUEST['cgpa2'];
$sem3=$_REQUEST['cgpa3'];
$sem4=$_REQUEST['cgpa4'];
$sem5=$_REQUEST['cgpa5'];
$sem6=$_REQUEST['cgpa6'];
$sem7=$_REQUEST['cgpa7'];
$sem8=$_REQUEST['cgpa8'];
$out=$_REQUEST['tot'];



  $query1 = "DELETE FROM cgpa
  WHERE username='$username'";
 if(mysqli_query($db, $query1)){

     header('location:grades.php');
   
 }
 else{
     echo "ERROR";
 }

    
}

?>