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
<html lang="en" class="no-js">
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
<body class="text-light is-boxed has-animations">
  <!-- notification message -->
  <?php if (isset($_SESSION['success'])) : ?>
  <div class="error success" >
    <h3>
      <?php 
        echo $_SESSION['success']; 
        unset($_SESSION['success']);
      ?>
    </h3>
  </div>
<?php endif ?>


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
              <a class="nav-link" href="#about-us">About</a>
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
        <header class="site-header">
            <div class="container">
                <div class="site-header-inner">
                   
                </div>
            </div>
        </header>

        <main>
            <section class="hero">
                <div class="container">
                    <div class="hero-inner">
						<div class="hero-copy">
	                        <h1 class="hero-title mt-0">Know Your <span style="color: red;">Cgpa</span></h1>
	                        <p class="hero-paragraph">One place to calculate CGPA and SGPA of students under <i >VTU</i>.</p>
	                        <div class="hero-cta"><a class="button button-primary" href="cgpa.php">CGPA</a><a class="button" href="sgpa.php">SGPA</a></div>
						</div>
						<div class="hero-figure anime-element">
							<svg class="placeholder" width="528" height="396" viewBox="0 0 528 396">
								<rect width="528" height="396" style="fill:transparent;" />
							</svg>
							<div class="hero-figure-box hero-figure-box-01" data-rotation="45deg"></div>
							<div class="hero-figure-box hero-figure-box-02" data-rotation="-45deg"></div>
							<div class="hero-figure-box hero-figure-box-03" data-rotation="0deg"></div>
							<div class="hero-figure-box hero-figure-box-04" data-rotation="-135deg"></div>
							<div class="hero-figure-box hero-figure-box-05"></div>
							<div class="hero-figure-box hero-figure-box-06"></div>
							<div class="hero-figure-box hero-figure-box-07"></div>
							<div class="hero-figure-box hero-figure-box-08" data-rotation="-22deg"></div>
							<div class="hero-figure-box hero-figure-box-09" data-rotation="-52deg"></div>
							<div class="hero-figure-box hero-figure-box-10" data-rotation="-50deg"></div>
						</div>
                    </div>
                </div>
            </section>

            <section id="about-us" class="features section">
                <div class="container">
					<div class="features-inner section-inner has-bottom-divider">
                        <div class="row text-light">
                            <div class="col col-lg-4">
                              <h2>About Us</h2>
                              <p>Hey there, We are pair of students at VCET, Puttur. When we are not studying, you can find us creating sites like this. We hope that our  application is of use to you and don't forget to share with your friends to let them Know Their Sgpa as well.Thank You</p>
                            
                            </div>
                            
                          <div class="col-lg-4 text-center">
                            <div class="card bg-dark " style="width: 18rem;">
                              <img class="card-img-top" src="src/images/1.png" alt="Card image cap" style="padding: 6% 6%;">
                              <div class="card-body">
                                <h5 class="card-title">Varun Rai </h5>
                                
                                <div class="social-container">
                                         
                                          <a href="mailto:varunguthu@gmail.com" class="social"><i class="fab fa-google-plus-g"></i></a>
                                          <a href="https://www.linkedin.com/in/k-g-varun-rai-73b8aa220/" class="social"><i class="fab fa-linkedin-in"></i></a>
                                          <a href="https://github.com/kgrai" class="social"><i class="fab fa-github"></i></a>
                                      </div>
                              </div>
                            </div>
                            </div>
                            <div class="col-lg-4 text-center">
                            <div class="card bg-dark " style="width: 18rem;">
                              <img class="card-img-top" src="src/images/2.png" alt="Card image cap" style="padding: 6% 6%;">
                              <div class="card-body">
                                <h5 class="card-title">Sathwik Wagle </h5>
                               
                                <div class="social-container">
                                         
                                          <a href="mailto:kywagle@gmail.com" class="social"><i class="fab fa-google-plus-g"></i></a>
                                          <a href="https://www.linkedin.com/in/waglesathwik/" class="social"><i class="fab fa-linkedin-in"></i></a>
                                          <a href="https://github.com/sathwik-14" class="social"><i class="fab fa-github"></i></a>
                                      </div>
                              </div>
                            </div>
                          </div>
                          </div>
                    </div>
                </div>
            </section>

            

			<section class="cta section">
				<div class="container">
					<div class="cta-inner section-inner">
						<h3 class="section-title mt-0">Still not convinced on our service?</h3>
						<div class="cta-cta">
							<a class="button button-primary button-wide-mobile" href="mailto:kywagle@gmail.com">Get in touch</a>
						</div>
					</div>
				</div>
			</section>
        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="site-footer-inner">
                    <div class="brand footer-brand">
					
                    </div>
                   
                    
                    <div class="footer-copyright text-center"> 2022 KnowYourCgpa</div>
                </div>
            </div>
        </footer>
    </div>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css"
    integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <script src="dist/js/main.min.js"></script>
</body>
</html>
