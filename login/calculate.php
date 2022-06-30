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
<html lang="en">

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SGPA</title>
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

      <div class="body-wrap">
  <div class="block text-center" style="margin-top:1%;">
    <h4 class="sgpa">SGPA CALCULATOR</h4>
     <div class="text-center">

    <div class="row container-fluid md" style="color:white;margin-top:-2%;">
    <form id="my-form form-group" action="sgpa_store.php" method="post">
<div class="row">
  <div class="col col-lg-6">
      <p id="s1" class="col col-12"><span id="ct1">Subject 1</span> <input  class="form-control" style="background-color:#1D2026;color:white;" type="number" name="subject1" id="text1"
          onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="Enter Obtained Marks" ></p>
      <p id="s2" class="col col-12"><span id="ct2">Subject 2</span> <input class="form-control" style="background-color:#1D2026;color:white;" type="number" name="subject2" id="text2"
          onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="Enter Obtained Marks" ></p>
      <p id="s3" class="col col-12"><span id="ct3">Subject 3</span> <input class="form-control" style="background-color:#1D2026;color:white;" type="number" name="subject3" id="text3"
          onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="Enter Obtained Marks" ></p>
      <p id="s4" class="col col-12"><span id="ct4">Subject 4</span> <input class="form-control" style="background-color:#1D2026;color:white;" type="number" name="subject4" id="text4"
          onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="Enter Obtained Marks" ></p>
          </div>
          <div class="col col-lg-6">
      <p id="s5" class="col col-12"><span id="ct5">Subject 5</span> <input class="form-control" style="background-color:#1D2026;color:white;" type="number" name="subject5" id="text5"
          onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="Enter Obtained Marks" ></p>
      <p id="s6" class="col col-12"><span id="ct6">Subject 6</span> <input class="form-control" style="background-color:#1D2026;color:white;" type="number" name="subject6" id="text6"
          onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="Enter Obtained Marks" ></p>
      <p id="s7" class="col col-12"><span id="ct7">Subject 7</span> <input class="form-control" style="background-color:#1D2026;color:white;" type="number" name="subject7" id="text7"
          onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="Enter Obtained Marks" ></p>
      <p id="s8" class="col col-12"><span id="ct8">Subject 8</span> <input class="form-control" style="background-color:#1D2026;color:white;" type="number" name="subject8" id="text8"
          onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="Enter Obtained Marks" ></p>
            </div>
            </div>
            <div class="row">
      <p id="s9" class="col col-12"><span id="ct9">Subject 9</span> <input class="form-control" style="background-color:#1D2026;color:white;" type="number" name="subject9" id="text9"
          onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="Enter Obtained Marks" ></p>
          </div>
          
    </div>
          
    <div onclick="calc()" id="store" class="btn btn-md btn-success" style="margin-top:-5%;">Calculate</div>
    <button name="sgpa_data" type="submit" class="btn btn-md btn-info" style="margin-top:-5%;">Store</button>
    <p class="display trigger_popup_fricc" style="color:white;margin-top:-1.5%;">SGPA:&ensp;&ensp;
    <output id="SGPAresult" name="op" ></output></p>
    <input id="res" type="hidden" name="sgpaop" >
   
    </form>

  </div>
  </div>
    <script src="myscripts.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css"
      integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
  </div>
  
</body>

</html>
