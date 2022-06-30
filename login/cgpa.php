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
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SGPA</title>
    <link rel="stylesheet" href="cgpa.css">
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
  <script src="myscripts.js"></script>
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
       <section class="ipsec" style="margin-top:1%;">
       <div class="text-center">
         <h4>CGPA CALCULATOR</h4>  
         <br>
         <form action="cgpa_store.php" methood="post" id="my-form">
                <div class="form-group row container-fluid">
                  <div class="col col-lg-6">
                      <p id="s1" class="col col-12"><input style="background-color:#1D2026;color:white;" class="form-control" step="any" max="10" type="number" name="cgpa1" id="text1"
                           placeholder="1st sem SGPA"></p>
                      <p id="s2" class="col col-12"> <input style="background-color:#1D2026;color:white;" class="form-control"  step="any" type="number" name="cgpa2" id="text2"
                           placeholder="2nd sem SGPA"></p>
                      <p id="s3" class="col col-12"> <input style="background-color:#1D2026;color:white;" class="form-control"  step="any" type="number" name="cgpa3" id="text3"
                           placeholder="3rd sem SGPA"></p>
                      <p id="s4" class="col col-12"> <input style="background-color:#1D2026;color:white;" class="form-control"  step="any" type="number" name="cgpa4" id="text4"
                           placeholder="4th sem SGPA"></p>
            </div>
            <div class="col col-lg-6">
                      <p id="s5" class="col col-12"> <input style="background-color:#1D2026;color:white;" class="form-control"  step="any" type="number" name="cgpa5" id="text5"
                           placeholder="5th sem SGPA"></p>
                      <p id="s6" class="col col-12"> <input style="background-color:#1D2026;color:white;" class="form-control"  step="any" type="number" name="cgpa6" id="text6"
                           placeholder="6th sem SGPA"></p>
                      <p id="s7" class="col col-12"> <input style="background-color:#1D2026;color:white;" class="form-control"  step="any" type="number" name="cgpa7" id="text7"
                           placeholder="7th sem SGPA"></p>
                      <p id="s8" class="col col-12"> <input style="background-color:#1D2026;color:white;" class="form-control"  step="any" type="number" name="cgpa8" id="text8"
                           placeholder="8th sem SGPA"></p>
            </div>
                           <input type="hidden" name="tot">
                           <input type="hidden" name="top">

                </div>
                <br>
                
                  
                    <p class="display">CGPA:&ensp;&ensp;&ensp;<output name="output" style="color:white;" id="result" ></output></p>
                    <!-- <p class="display">PERC:&ensp;&ensp;&ensp;<output name="pout" style="color:white;" id="result" ></output></p> -->
                    </div>

                    </form>
                
            </div>

       
       </section>
 

   
</div>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css"
    integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <script >
  var form = document.getElementById('my-form');
form.addEventListener('input', function() {


  var c =[],i,percentage;
   
    //pushing input to an array
    c[0]=(document.getElementById("text1").value);
    c[1]=(document.getElementById("text2").value);
    c[2]=(document.getElementById("text3").value);
    c[3]=(document.getElementById("text4").value);
    c[4]=(document.getElementById("text5").value);
    c[5]=(document.getElementById("text6").value);
    c[6]=(document.getElementById("text7").value);
    c[7]=(document.getElementById("text8").value);
    for(j=0;j<8;j++){
      if(c[j]>10){
        alert("Enter valid sgpa");
        exit;
      }
    
    }
    var credSum=0;
    if(c[0]>0)        
    {credSum+=24;}
    else{c[0]=0;}
    if(c[1]>0)
    {credSum+=24;}
    else{c[1]=0;}
    if(c[2]>0)
    {credSum+=28;}
    else{c[2]=0;}
    if(c[3]>0)
    {credSum+=28;}
    else{c[3]=0;}
    if(c[4]>0)
    {credSum+=26;}
    else{c[4]=0;}
    if(c[5]>0)
    {credSum+=26;}
    else{c[5]=0;}
    if(c[6]>0)
    {credSum+=24;}
    else{c[6]=0;}
    if(c[7]>0)
    {credSum+=20;}
    else{c[7]=0;}
    for(var i=0;i<8;i++){
        console.log(c[i]);
    }
    var r1=(24*c[0])+(24*c[1])+(28*c[2])+(28*c[3])+(26*c[4])+(26*c[5])+(22*c[6])+(21*c[7]);
    console.log(r1);
    console.log(credSum);
    var result=(r1/credSum);
    this.tot.value=this.output.value=result.toFixed(2);
  //  percentage=(r1-0.75)*10;
  // this.top.value = this.pout.value = percentage.toFixed(2);
  });
</script>
  </body>
</html>
