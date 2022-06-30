<?php
include ('server.php');

if (isset($_GET['sem'] ) == "1st Semester") {

  	$username=$_SESSION['username'];
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'student_grade_db');

$queryy = "SELECT * FROM sgpa WHERE username='$username' AND sem='1st Semester'"; 
$result =mysqli_query($db,$queryy);

if(mysqli_num_rows($result) > 0){
  $query1 = "DELETE FROM sgpa
  WHERE  username='$username' AND sem='1st Semester'";
  $q2 = "DELETE FROM cgpa
  WHERE  username='$username'";
 
 if(mysqli_query($db, $query1)){

     header('location:grades.php');
   
 }
 else{
     echo "ERROR";
 }
 mysqli_query($db, $q2);
  }
}

 if (isset($_GET['sem'] ) == "2nd Semester") {

    $username=$_SESSION['username'];
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'student_grade_db');

$queryy = "SELECT * FROM sgpa WHERE username='$username' AND sem='2nd Semester'"; 
$result =mysqli_query($db,$queryy);

if(mysqli_num_rows($result) > 0){
$query1 = "DELETE FROM sgpa
WHERE  username='$username' AND sem='2nd Semester'";
 $q2 = "DELETE FROM cgpa
 WHERE  username='$username'";
if(mysqli_query($db, $query1)){

   header('location:grades.php');
 
}
else{
   echo "ERROR";
}
mysqli_query($db, $q2);
}
}


if (isset($_GET['sem'] ) == "3rd Semester") {

    $username=$_SESSION['username'];
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'student_grade_db');

$queryy = "SELECT * FROM sgpa WHERE username='$username' AND sem='3rd Semester'"; 
$result =mysqli_query($db,$queryy);

if(mysqli_num_rows($result) > 0){
$query1 = "DELETE FROM sgpa
WHERE  username='$username' AND sem='3rd Semester'";
 $q2 = "DELETE FROM cgpa
 WHERE  username='$username'";
if(mysqli_query($db, $query1)){

   header('location:grades.php');
 
}
else{
   echo "ERROR";
}
mysqli_query($db, $q2);
}
}


if (isset($_GET['sem'] ) == "4th Semester") {

    $username=$_SESSION['username'];
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'student_grade_db');

$queryy = "SELECT * FROM sgpa WHERE username='$username' AND sem='4th Semester'"; 
$result =mysqli_query($db,$queryy);

if(mysqli_num_rows($result) > 0){
$query1 = "DELETE FROM sgpa
WHERE  username='$username' AND sem='4th Semester'";
 $q2 = "DELETE FROM cgpa
 WHERE  username='$username'";
if(mysqli_query($db, $query1)){

   header('location:grades.php');
 
}
else{
   echo "ERROR";
}
mysqli_query($db, $q2);
}
}



if (isset($_GET['sem'] ) == "5th Semester") {

    $username=$_SESSION['username'];
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'student_grade_db');

$queryy = "SELECT * FROM sgpa WHERE username='$username' AND sem='5th Semester'"; 
$result =mysqli_query($db,$queryy);

if(mysqli_num_rows($result) > 0){
$query1 = "DELETE FROM sgpa
WHERE  username='$username' AND sem='5th Semester'";
 $q2 = "DELETE FROM cgpa
 WHERE  username='$username'";
if(mysqli_query($db, $query1)){

   header('location:grades.php');
 
}
else{
   echo "ERROR";
}
mysqli_query($db, $q2);
}
}



if (isset($_GET['sem'] ) == "6th Semester") {

    $username=$_SESSION['username'];
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'student_grade_db');

$queryy = "SELECT * FROM sgpa WHERE username='$username' AND sem='6th Semester'"; 
$result =mysqli_query($db,$queryy);

if(mysqli_num_rows($result) > 0){
$query1 = "DELETE FROM sgpa
WHERE  username='$username' AND sem='6th Semester'";
 $q2 = "DELETE FROM cgpa
 WHERE  username='$username'";
if(mysqli_query($db, $query1)){

   header('location:grades.php');
 
}
else{
   echo "ERROR";
}
mysqli_query($db, $q2);
}
}



if (isset($_GET['sem'] ) == "7th Semester") {

    $username=$_SESSION['username'];
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'student_grade_db');

$queryy = "SELECT * FROM sgpa WHERE username='$username' AND sem='7th Semester'"; 
$result =mysqli_query($db,$queryy);

if(mysqli_num_rows($result) > 0){
$query1 = "DELETE FROM sgpa
WHERE  username='$username' AND sem='7th Semester'";
 $q2 = "DELETE FROM cgpa
 WHERE  username='$username'";
if(mysqli_query($db, $query1)){

   header('location:grades.php');
 
}
else{
   echo "ERROR";
}
mysqli_query($db, $q2);
}
}



if (isset($_GET['sem'] ) == "8th Semester") {

    $username=$_SESSION['username'];
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'student_grade_db');

$queryy = "SELECT * FROM sgpa WHERE username='$username' AND sem='8th Semester'"; 
$result =mysqli_query($db,$queryy);

if(mysqli_num_rows($result) > 0){
$query1 = "DELETE FROM sgpa
WHERE  username='$username' AND sem='8th Semester'";
 $q2 = "DELETE FROM cgpa
 WHERE  username='$username'";
if(mysqli_query($db, $query1)){

   header('location:grades.php');
 
}
else{
   echo "ERROR";
}
mysqli_query($db, $q2);
}
}



  ?>