<?php 
include('server.php');
  $username=$_SESSION['username'];

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
  

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Grades</title>
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400,600" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="dist/css/style.css">
	<script src="https://unpkg.com/animejs@3.0.1/lib/anime.min.js"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"

    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" 
    crossorigin="anonymous"></script>
  <script src="index.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css"
    integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <script src="dist/js/main.min.js"></script>
</head>
<body>
 
<nav class="navbar navbar-expand-lg navbar-dark bg-dark nb">
        <a class="navbar-brand" href="index.php">KnowYourCgpa</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php#about-us">About</a>
            </li>
            <?php  if (isset($_SESSION['username'])) : ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i  class="fa fa-user" aria-hidden="true"></i>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <span class="dropdown-item" ><b><?php echo $_SESSION['username']; ?></b></span>
                <a class="dropdown-item" href="grades.php">Your Grades</a>
                <a class="dropdown-item" href="cgpa.php">Calculate Cgpa</a>
                <a class="dropdown-item" href="sgpa.php">Calculate Sgpa</a>
                <a class="dropdown-item" href="index.php?logout='1'" style="color: red;">Logout</a>
              </div>
            </li>
            

            <?php endif ?>
          </ul>
        </div>
      </nav>
      <?php

  $res=mysqli_query($db,"SELECT * FROM cgpa WHERE username='$username'");
  
  $row=mysqli_fetch_array($res);
  
  $s1=$row['semester1'];
  $s2=$row['semester2'];
  $s3=$row['semester3'];
  $s4=$row['semester4'];
  $s5=$row['semester5'];
  $s6=$row['semester6'];
  $s7=$row['semester7'];
  $s8=$row['semester8'];
  $credSum=1;
  if($s1>0)  

      {$credSum+=23;}
      else{$s1=0;}
      if($s2>0)
      {$credSum+=23;}
      else{$s2=0;}
      if($s3>0)
      {$credSum+=27;}
      else{$s3=0;}
      if($s4>0)
      {$credSum+=27;}
      else{$s4=0;}
      if($s5>0)
      {$credSum+=25;}
      else{$s5=0;}
      if($s6>0)
      {$credSum+=25;}
      else{$s6=0;}
      if($s7>0)
      {$credSum+=23;}
      else{$s7=0;}
      if($s8>0)
      {$credSum+=19;}
      else{$s8=0;}
      
       $r1=(24*$s1)+(24*$s2)+(28*$s3)+(28*$s4)+(26*$s5)+(26*$s6)+(22*$s7)+(21*$s8);
  
  $r2=($r1/$credSum);
  $r3=number_format((float)$r2, 2, '.', '');
  $q3="UPDATE  cgpa set cgpa='$r3' where username='$username' ";
  mysqli_query($db, $q3);

  ?>
      
   
      <div class="body-wrap">
      <ul class="nav nav-tabs mb-3" id="pills-tab" role="tablist" style="margin-top:3%;">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">cgpa grades</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">sgpa grades</button>
  </li>
  
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"><?php
$db = mysqli_connect('localhost', 'root', '', 'student_grade_db'); //The Blank string is the password
$query = "SELECT * FROM cgpa where username='$username'"; //You don't need a ; like you do in SQL
$result = mysqli_query($db,$query);




echo "<table id=\"sgpa\">";
?>

<tr>
    
    <th>semester 1</th>
    <th>semester 2</th>
    <th>semester 3</th>
    <th>semester 4</th>
    <th>semester 5</th>
    <th>semester 6</th>
    <th>semester 7</th>
    <th>semester 8</th>
    <th>cgpa</th>
  </tr>
  <?php
  

while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['semester1'] . "</td><td>" . $row['semester2'] . "</td><td>" . $row['semester3'] . "</td><td>" . $row['semester4'] . "</td><td>" . $row['semester5'] . "</td><td>" . $row['semester6'] . "</td>
<td>" . $row['semester7'] . "</td><td>" . $row['semester8'] . "</td><td>$r3</td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML
if(mysqli_num_rows($result) == 0){
  echo "<h3 class=\"text-center\" style=\"color:white;\">No data found</h3>";
  
}

?>
</form>

</div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"><div class="d-flex align-items-start">
  <div class="nav flex-column nav-pills me-3" style="margin-left:3%;" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-s1" type="button" role="tab" aria-controls="v-pills-s1" aria-selected="true">semester 1</button>
    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-s2" type="button" role="tab" aria-controls="v-pills-s2" aria-selected="false">semester 2</button>
    <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-s3" type="button" role="tab" aria-controls="v-pills-s3" aria-selected="false">semester 3</button>
    <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-s4" type="button" role="tab" aria-controls="v-pills-s4" aria-selected="false">semester 4</button>
    <button class="nav-link" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-s5" type="button" role="tab" aria-controls="v-pills-s5" aria-selected="true">semester 5</button>
    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-s6" type="button" role="tab" aria-controls="v-pills-s6" aria-selected="false">semester 6</button>
    <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-s7" type="button" role="tab" aria-controls="v-pills-s7" aria-selected="false">semester 7</button>
    <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-s8" type="button" role="tab" aria-controls="v-pills-s8" aria-selected="false">semester 8</button>
  </div>
  <div class="tab-content" style="color:white;" id="v-pills-tabContent">
    <div class="tab-pane fade show active" id="v-pills-s1" role="tabpanel" aria-labelledby="v-pills-s1-tab">

    <?php

$query = "SELECT * FROM sgpa where username='$username' and sem='1st Semester'"; //You don't need a ; like you do in SQL
$result1 = mysqli_query($db,$query);
echo "<table id=\"sgpa\">";
?>

<tr>
    <th>subject 1</th>
    <th>subject 2</th>
    <th>subject 3</th>
    <th>subject 4</th>
    <th>subject 5</th>
    <th>subject 6</th>
    <th>subject 7</th>
    <th>subject 8</th>
    <th>subject 9</th>
    <th>sgpa</th>
    <th>operation</th>
  </tr>
  <?php
while($row = mysqli_fetch_array($result1)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['sub1'] . "</td><td>" . $row['sub2'] . "</td><td>" . $row['sub3'] . "</td><td>" . $row['sub4'] . "</td><td>" . $row['sub5'] . "</td><td>" . $row['sub6'] . "</td>
<td>" . $row['sub7'] . "</td><td>" . $row['sub8'] . "</td><td>" . $row['sub9'] . "</td><td>"  . $row['sgpa'] . "</td><td><a href=\"sgpa.php\" class=\"btn btn-sm btn-info\">update</a></td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML
if(mysqli_num_rows($result1) == 0){
  echo "<h3 class=\"text-center\" style=\"color:white;\">No data found</h3>";
  
}
?>

    </div>
    <div class="tab-pane fade" id="v-pills-s2" role="tabpanel" aria-labelledby="v-pills-s2-tab">
      
    <?php

$query = "SELECT * FROM sgpa where username='$username' and sem='2nd Semester'"; //You don't need a ; like you do in SQL
$result1 = mysqli_query($db,$query);
echo "<table id=\"sgpa\">";
?>

<tr>
    <th>subject 1</th>
    <th>subject 2</th>
    <th>subject 3</th>
    <th>subject 4</th>
    <th>subject 5</th>
    <th>subject 6</th>
    <th>subject 7</th>
    <th>subject 8</th>
    <th>subject 9</th>
    <th>sgpa</th>
    <th>operation</th>
  </tr>
  <?php
while($row = mysqli_fetch_array($result1)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['sub1'] . "</td><td>" . $row['sub2'] . "</td><td>" . $row['sub3'] . "</td><td>" . $row['sub4'] . "</td><td>" . $row['sub5'] . "</td><td>" . $row['sub6'] . "</td>
<td>" . $row['sub7'] . "</td><td>" . $row['sub8'] . "</td><td>" . $row['sub9'] . "</td><td>"  . $row['sgpa'] . "</td><td><a href=\"sgpa.php\" class=\"btn btn-sm btn-info\">update</a></td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML
if(mysqli_num_rows($result1) == 0){
  echo "<h3 class=\"text-center\" style=\"color:white;\">No data found</h3>";
  
}
?>

    </div>
    <div class="tab-pane fade" id="v-pills-s3" role="tabpanel" aria-labelledby="v-pills-s3-tab">
      
    <?php

$query = "SELECT * FROM sgpa where username='$username' and sem='3rd Semester'"; //You don't need a ; like you do in SQL
$result1 = mysqli_query($db,$query);
echo "<table id=\"sgpa\">";
?>

<tr>
    <th>subject 1</th>
    <th>subject 2</th>
    <th>subject 3</th>
    <th>subject 4</th>
    <th>subject 5</th>
    <th>subject 6</th>
    <th>subject 7</th>
    <th>subject 8</th>
    <th>subject 9</th>
    <th>sgpa</th>
    <th>operation</th>
  </tr>
  <?php
while($row = mysqli_fetch_array($result1)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['sub1'] . "</td><td>" . $row['sub2'] . "</td><td>" . $row['sub3'] . "</td><td>" . $row['sub4'] . "</td><td>" . $row['sub5'] . "</td><td>" . $row['sub6'] . "</td>
<td>" . $row['sub7'] . "</td><td>" . $row['sub8'] . "</td><td>" . $row['sub9'] . "</td><td>"  . $row['sgpa'] . "</td><td><a href=\"sgpa.php\" class=\"btn btn-sm btn-info\">update</a></td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML
if(mysqli_num_rows($result1) == 0){
  echo "<h3 class=\"text-center\" style=\"color:white;\">No data found</h3>";
  
}
?>

    </div>
    <div class="tab-pane fade" id="v-pills-s4" role="tabpanel" aria-labelledby="v-pills-s4-tab">
    <?php

$query = "SELECT * FROM sgpa where username='$username' and sem='4th Semester'"; //You don't need a ; like you do in SQL
$result1 = mysqli_query($db,$query);
echo "<table id=\"sgpa\">";
?>

<tr>
    <th>subject 1</th>
    <th>subject 2</th>
    <th>subject 3</th>
    <th>subject 4</th>
    <th>subject 5</th>
    <th>subject 6</th>
    <th>subject 7</th>
    <th>subject 8</th>
    <th>subject 9</th>
    <th>sgpa</th>
    <th>operation</th>
  </tr>
  <?php
while($row = mysqli_fetch_array($result1)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['sub1'] . "</td><td>" . $row['sub2'] . "</td><td>" . $row['sub3'] . "</td><td>" . $row['sub4'] . "</td><td>" . $row['sub5'] . "</td><td>" . $row['sub6'] . "</td>
<td>" . $row['sub7'] . "</td><td>" . $row['sub8'] . "</td><td>" . $row['sub9'] . "</td><td>"  . $row['sgpa'] . "</td><td><a href=\"sgpa.php\" class=\"btn btn-sm btn-info\">update</a></td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML
if(mysqli_num_rows($result1) == 0){
  echo "<h3 class=\"text-center\" style=\"color:white;\">No data found</h3>";
  
}
?>
    </div>
    <div class="tab-pane fade" id="v-pills-s5" role="tabpanel" aria-labelledby="v-pills-s5-tab">
    <?php

$query = "SELECT * FROM sgpa where username='$username' and sem='5th Semester'"; //You don't need a ; like you do in SQL
$result1 = mysqli_query($db,$query);
echo "<table id=\"sgpa\">";
?>

<tr>
    <th>subject 1</th>
    <th>subject 2</th>
    <th>subject 3</th>
    <th>subject 4</th>
    <th>subject 5</th>
    <th>subject 6</th>
    <th>subject 7</th>
    <th>subject 8</th>
    <th>subject 9</th>
    <th>sgpa</th>
    <th>operation</th>
  </tr>
  <?php
while($row = mysqli_fetch_array($result1)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['sub1'] . "</td><td>" . $row['sub2'] . "</td><td>" . $row['sub3'] . "</td><td>" . $row['sub4'] . "</td><td>" . $row['sub5'] . "</td><td>" . $row['sub6'] . "</td>
<td>" . $row['sub7'] . "</td><td>" . $row['sub8'] . "</td><td>" . $row['sub9'] . "</td><td>"  . $row['sgpa'] . "</td><td><a href=\"sgpa.php\" class=\"btn btn-sm btn-info\">update</a></td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML
if(mysqli_num_rows($result1) == 0){
  echo "<h3 class=\"text-center\" style=\"color:white;\">No data found</h3>";
  
}
?>
    </div>
    <div class="tab-pane fade" id="v-pills-s6" role="tabpanel" aria-labelledby="v-pills-s6-tab">
    <?php

$query = "SELECT * FROM sgpa where username='$username' and sem='6th Semester'"; //You don't need a ; like you do in SQL
$result1 = mysqli_query($db,$query);
echo "<table id=\"sgpa\">";
?>

<tr>
    <th>subject 1</th>
    <th>subject 2</th>
    <th>subject 3</th>
    <th>subject 4</th>
    <th>subject 5</th>
    <th>subject 6</th>
    <th>subject 7</th>
    <th>subject 8</th>
    <th>subject 9</th>
    <th>sgpa</th>
    <th>operation</th>
  </tr>
  <?php
while($row = mysqli_fetch_array($result1)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['sub1'] . "</td><td>" . $row['sub2'] . "</td><td>" . $row['sub3'] . "</td><td>" . $row['sub4'] . "</td><td>" . $row['sub5'] . "</td><td>" . $row['sub6'] . "</td>
<td>" . $row['sub7'] . "</td><td>" . $row['sub8'] . "</td><td>" . $row['sub9'] . "</td><td>"  . $row['sgpa'] . "</td><td><a href=\"sgpa.php\" class=\"btn btn-sm btn-info\">update</a></td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML
if(mysqli_num_rows($result1) == 0){
  echo "<h3 class=\"text-center\" style=\"color:white;\">No data found</h3>";
  
}
?>
    </div>
    <div class="tab-pane fade" id="v-pills-s7" role="tabpanel" aria-labelledby="v-pills-s7-tab">
    <?php

$query = "SELECT * FROM sgpa where username='$username' and sem='7th Semester'"; //You don't need a ; like you do in SQL
$result1 = mysqli_query($db,$query);
echo "<table id=\"sgpa\">";
?>

<tr>
    <th>subject 1</th>
    <th>subject 2</th>
    <th>subject 3</th>
    <th>subject 4</th>
    <th>subject 5</th>
    <th>subject 6</th>
    <th>subject 7</th>
    <th>subject 8</th>
    <th>subject 9</th>
    <th>sgpa</th>
    <th>operation</th>
  </tr>
  <?php
while($row = mysqli_fetch_array($result1)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['sub1'] . "</td><td>" . $row['sub2'] . "</td><td>" . $row['sub3'] . "</td><td>" . $row['sub4'] . "</td><td>" . $row['sub5'] . "</td><td>" . $row['sub6'] . "</td>
<td>" . $row['sub7'] . "</td><td>" . $row['sub8'] . "</td><td>" . $row['sub9'] . "</td><td>"  . $row['sgpa'] . "</td><td><a href=\"sgpa.php\" class=\"btn btn-sm btn-info\">update</a></td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML
if(mysqli_num_rows($result1) == 0){
  echo "<h3 class=\"text-center\" style=\"color:white;\">No data found</h3>";
  
}
?>
    </div>
    <div class="tab-pane fade" id="v-pills-s8" role="tabpanel" aria-labelledby="v-pills-s8-tab">
    <?php

$query = "SELECT * FROM sgpa where username='$username' and sem='8th Semester'"; //You don't need a ; like you do in SQL
$result1 = mysqli_query($db,$query);
echo "<table id=\"sgpa\">";
?>

<tr>
    <th>subject 1</th>
    <th>subject 2</th>
    <th>subject 3</th>
    <th>subject 4</th>
    <th>subject 5</th>
    <th>subject 6</th>
    <th>subject 7</th>
    <th>subject 8</th>
    <th>subject 9</th>
    <th>sgpa</th>
    <th>operation</th>
  </tr>
  <?php
while($row = mysqli_fetch_array($result1)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['sub1'] . "</td><td>" . $row['sub2'] . "</td><td>" . $row['sub3'] . "</td><td>" . $row['sub4'] . "</td><td>" . $row['sub5'] . "</td><td>" . $row['sub6'] . "</td>
<td>" . $row['sub7'] . "</td><td>" . $row['sub8'] . "</td><td>" . $row['sub9'] . "</td><td>"  . $row['sgpa'] . "</td><td><a href=\"sgpa.php\" class=\"btn btn-sm btn-info\">update</a></td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML
if(mysqli_num_rows($result1) == 0){
  echo "<h3 class=\"text-center\" style=\"color:white;\">No data found</h3>";
  
}
?>
    </div>
  </div>
</div>
</div>
 
</div>
  
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<style>


#sgpa {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  position: relative;
 
 
}

#sgpa td, #sgpa th {
  border: 1px solid #ddd;
  padding: 8px;
  color:black;
}

#sgpa tr:nth-child(even){background-color: #f2f2f2;}


#sgpa th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color:#04AA6D;
  color: white;
  font-size: 0.95rem;
}

</style>
</html>
