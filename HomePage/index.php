
<?php
include "../include/dbcon.php";
session_start();
$userid=$_SESSION['userid'];
$password=$_SESSION['password'];
$check_admin = mysqli_num_rows(mysqli_query($db,"select * from admin where userid = '$userid' and password = '$password'"));
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- styles -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital@1&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="../footer/footer.css">
  <link rel="stylesheet" href="../HomePage/donatestyle.css">
  <link rel="stylesheet" href="../navbar/navstyles.css">
  <link rel="stylesheet" href="style.css">

  <title>NGO</title>

  <!-- Bootstrap script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
    crossorigin="anonymous"></script>

  <script src="https://kit.fontawesome.com/732378760a.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="topSpace">
    <ul>
      <li><i class="fas fa-envelope-square"></i> email@gmail.com</li>
      <li><i class="fas fa-phone-square-alt"></i>542157899</li>
      <li><a href=" ../Donate/donate.html"><button class="btn-primary" >Donate</button></a></li>

    </ul>
  </div>
  <!-- ----NAVBAR------ -->
  <nav class="sticky-top">
    <div class="nav-center">
      <!-- nav header -->
      <div class="nav-header">
        <img src="../navbar/logo.svg" class="logo" alt="logo" />
        <button class="nav-toggle">
          <i class="fas fa-bars"></i>
        </button>
      </div>
      <!-- links -->
      <ul class="links">
        <li>
          <a class="nav-links activeNow" href="index.html">home</a>
        </li>
        <li>
          <a class="nav-links" href="../About/about.html">about</a>
        </li>
        <li>
          <a class="nav-links" href="../EventPage/event.php">Events</a>
        </li>
        <li>
          <a class="nav-links" href="../Gallery/gallery.php">Gallery</a>
        </li>
        
        <?php
                  if($check_admin==1){
                    echo '
                    <li>
                    <a class="nav-links" href="../Login/logout.php">Logout</a>
                    
                </li>
                    
                    ';
                  }
                ?>
      </ul>
      <!-- social media -->
      <ul class="social-icons">
        <li>
          <a href="https://www.twitter.com">
            <i class="fab fa-facebook"></i>
          </a>
        </li>
        <li>
          <a href="https://www.twitter.com">
            <i class="fab fa-twitter"></i>
          </a>
        </li>
        <li>
          <a href="">
            <i class="fab fa-instagram"></i>
          </a>
        </li>
        <!-- <li>
          <a href="https://www.twitter.com">
            <i class="fab fa-behance"></i>
          </a>
        </li> -->
        <!-- <li>
          <a href="https://www.twitter.com">
            <i class="fab fa-linkedin"></i>
          </a>
        </li> -->
        <!-- <li>
          <a href="https://www.twitter.com">
            <i class="fab fa-sketch"></i>
          </a>
        </li> -->
      </ul>
    </div>
  </nav>
  <!-- javascript -->
  <script src="../navbar/navScript.js"></script>
  <!-- carousel Starts here -->
  <div id="carouselExampleCaptions" class="carousel slide my-2" data-bs-ride="carousel">
    <ol class="carousel-indicators">
      <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
      <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
      <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="crousal1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1>A Non-Govermental Organization</h1>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="crousal2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1>Second slide label</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="crousal2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1>Third slide label</h1>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </a>
  </div>
  <!-- Carousel Ends -->

  <!-- About Section for Phone -->
  <div class="container about">
    <h1><span class="badge bg-info my-4">Aunghari Dham Trust</span></h1>
    <h2><span class="badge bg-light text-dark my-2">A trust by Aunghari</span></h2>
    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, blanditiis?</p> -->
  </div>

  <!-------- OUR MISSION SECTION STARTS HERE------ -->
  <div class="container-fluid missionSection my-4 row" id="missionSection">
    <div class="container col-lg-8 col-sm-12 ourmission">
      <h2><u>Our Mission</u></h2>

      <p>We started this journey to help the poors. By giving them foods an d clothes. We do this with donations of
        common people.</p>

    </div>
    <!-- image -->
    <div class="container col-lg-4 imgcontainer">
      <div class="ourmissionImage w-50">
        <img src="poor.jpg" alt="">
        <div class="missionImageOverlay">
          <h4>Help Us!!!</h4>
        </div>
      </div>
    </div>


  </div>
  <!-------OUR MISSION SECTION ENDS HERE-------  -->

  <!-- ----DONATE BUTTON ---------->
  <a href="../Donate/donate.html">
    <div class="container donateButton box btn">
      <div class="content">
      </div>
      <p><strong>Donate Us</strong></p>
    </div>
  </a>
  <!-- DONATE ENDS -->

  <!-- Gallery Starts here -->
  <div class="container my-4 gallery">
    <div class="row">
      <!-- <div class="galleryHeading col-12">
        <h1>Gallery</h1>
      </div> -->

      <div class="col-lg-4 col-sm-6 col-12 my-2 galleryItem">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://source.unsplash.com/1600x1000/?happy,animal" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              
              <img src="https://source.unsplash.com/1600x1000/?poor,man" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://source.unsplash.com/1600x1000/?happy,men" class="d-block w-100" alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </a>
        </div>

      </div>

      <div class="col-lg-4 col-sm-6 col-12 my-2">
        <div class="thumbnail galleryItem">
          <img src="../Images/tree.jpg" alt="" class="img-fluid">
        </div>

      </div>

      <div class="col-lg-4 col-sm-6 col-12 my-2 thirdImage">
        <div class="thumbnail galleryItem">
          <img src="../Images/mountain  poster.jpg" alt="" class="img-fluid">
        </div>
      </div>

    </div>

  </div>

  <!-- ----STATISTICS ------>
  <h1><hr></h1>
  <div class="container-fluid statistics">
    <div class="poverty">
      <p style="color: black; text-align: center;">About 60% of India's nearly 1.3 billion people live on less than
        $3.10 a day, the World Bank's median poverty
        line. And 21%, or more than 250 million people, survive on less than $2 a day.
      </p>
    </div>
  </div>
  <h1><hr></h1>
  <div class="container lastQuote my-4">
    <h2>Help Us to Help Others!!!</h2>
  </div>
  

  <!-- footer -->
  <footer id="dk-footer" class="dk-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-4 socialbox">
          <div class="dk-footer-box-info">

            <div class="footer-social-link">
              <h3>Follow us</h3>
              <ul>
                <li>
                  <a href="#">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-twitter"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-instagram"></i>
                  </a>
                </li>
              </ul>
            </div>
            <!-- End Social link -->
          </div>
          <!-- End Footer info -->
          <div class="footer-awarad">
            <img src="images/icon/best.png" alt="">

          </div>
        </div>
        <!-- End Col -->
        <div class="col-md-12 col-lg-8">
          <div class="row contactdetail">
            <div class="col-md-6 ">
              <div class="contact-us my-4 addressMap">
                <div class="contact-icon">
                  <i class="fa fa-map-o" aria-hidden="true"></i>
                </div>
                <!-- End contact Icon -->
                <div class="contact-info">
                  <h3>Bihar India</h3>
                  <p>Patna</p>
                </div>
                <!-- End Contact Info -->
              </div>
              <!-- End Contact Us -->
            </div>
            <!-- End Col -->
            <div class="col-md-6">
              <div class="contact-us contact-us-last my-4">
                <div class="contact-icon">
                  <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                </div>
                <!-- End contact Icon -->
                <div class="contact-info">
                  <h3>95 711 9 5353</h3>
                  <p>Give us a call</p>
                </div>
                <!-- End Contact Info -->
              </div>
              <!-- End Contact Us -->
            </div>
            <!-- End Col -->
          </div>
          <!-- End Contact Row -->
          <div class="row">
            <div class="col-md-12 col-lg-6">
              <div class="footer-widget footer-left-widget">
                <div class="section-heading">
                  <h3>Useful Links</h3>
                  <span class="animate-border border-black"></span>
                </div>
                <ul>
                  <li>
                    <a href="#">About us</a>
                  </li>
                  <!-- <li>
                    <a href="#">Services</a>
                  </li> -->
                  <li>
                    <a href="../EventPage/event.php">Events</a>
                  </li>
                  <li>
                    <a href="#">Our Team</a>
                  </li>
                </ul>
                <ul>
                  <li>
                    <a href="../Gallery/gallery.php">Gallery</a>
                  </li>
                  <li>
                    <a href="https://www.linkedin.com/in/swarnit-sinha-114b44198/" target="blank">Developers</a>
                  </li>
                  <li>
                    <a href="../Login/login.php" target="_blank">AdminLogin</a>
                  </li>
                  <!-- <li>
                    <a href="#">Faq</a>
                  </li> -->
                </ul>
              </div>
              <!-- End Footer Widget -->
            </div>
            <!-- End col -->
            <div class="col-md-12 col-lg-6">
              <div class="footer-widget">
                <div class="section-heading">
                  <h3>Subscribe</h3>
                  <span class="animate-border border-black"></span>
                </div>
                <p>
                  Don’t miss to subscribe to our new feeds, kindly fill the form below.
                </p>
                <form action="#">
                  <div class="form-row">
                    <div class="col dk-footer-form">
                      <input type="email" style="color: aliceblue;" class="form-control" placeholder="Email Address">
                      <button type="submit">
                        <i class="fa fa-send"></i>
                      </button>
                    </div>
                  </div>
                </form>
                <!-- End form -->
              </div>
              <!-- End footer widget -->
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>
        <!-- End Col -->
      </div>
      <!-- End Widget Row -->
    </div>
    <!-- End Contact Container -->


    <div class="copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <span>Copyright © 2019, All Right Reserved</span>
          </div>

          <!-- End Row -->
        </div>
        <!-- End Copyright Container -->
      </div>
      <!-- End Copyright -->
      <!-- Back to top -->
      <!-- <div id="back-to-top" class="back-to-top">
        <button class="btn btn-dark" title="Back to Top" style="display: block;">
          <i class="fa fa-angle-up"></i>
        </button>
      </div> -->
      <!-- End Back to top -->
  </footer>
</body>

</html>

<!-- https://source.unsplash.com/1600x600/?help,water -->