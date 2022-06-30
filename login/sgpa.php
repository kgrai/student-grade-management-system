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
<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KNOWYOURCGPA</title>
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
</head>

<body class="sgpa-body">
  
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

      <div class="body-wrap">
       
       <div class="container-fluid mgup">
           <div class="text-center">
             <h1  style="color:white;margin-top:5%;margin-bottom:3%;">KNOW YOUR SGPA</h1>
             <div class="dropdowns">
               <form action="sgpa_detail.php" method="post">
       
               <select onchange="selectbranch()" name="branch" class="branch selection" id="branch">
                 <option class="dropdown-item" type="option" value="invalid">Select Branch</option>
                 <option class="dropdown-item" type="option" value="cs">Computer Science & Engineering</option>
                 <option class="dropdown-item" type="option" value="ec">Electronics & Communications</option>
                 <option class="dropdown-item" type="option" value="me">Mechanical Engineering</option>
                 <option class="dropdown-item" type="option" value="cv">Civil Engineering</option>
               </select>
       
       
               <select onchange="selectsem()" class="semesters selection" name="sem" id="sem">
                 <option class="dropdown-item" type="option"  >Select Semester</option>
                 <option class="dropdown-item" value="1st Semester">1st Semester</option>
                 <option class="dropdown-item" value="2nd Semester">2nd Semester</option>
                 <option class="dropdown-item" value="3rd Semester">3rd Semester</option>
                 <option class="dropdown-item" value="4th Semester">4th Semester</option>
                 <option class="dropdown-item" value="5th Semester">5th Semester</option>
                 <option class="dropdown-item" value="6th Semester">6th Semester</option>
                 <option class="dropdown-item" value="7th Semester">7th Semester</option>
                 <option class="dropdown-item" value="8th Semester">8th Semester</option>
               </select>
       
       
               <select onchange="selectscheme()" name="scheme" class="scheme selection" id="scheme">
                 <option class="dropdown-item" type="option" value="invalid">Select Scheme</option>
                 <option class="dropdown-item" type="option" value="17">2017 Scheme</option>
                 <option class="dropdown-item" type="option" value="18">2018 Scheme</option>
               </select>
              
             </div>
       
             <a href="calculate.php"> <button name="stu_data" type="submit" style="width:50%;" class="btn btn-primary btn-lg btn-block nxtbtn">Next</button></a>
             </form>
       
           </div>
         </div>
</div>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css"
integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
<script src="dist/js/main.min.js"></script>

</body>


</html>
