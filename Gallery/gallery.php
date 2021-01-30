
<?php
session_start();
include "../include/dbcon.php";
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
    <!-- <link rel="stylesheet" href="donatestyle.css"> -->
    <link rel="stylesheet" href="../navbar/navstyles.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="../Gallery/galleryStyle.css">

    <title>Gallery</title>

    <!-- Bootstrap script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/732378760a.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Navbar -->
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
                    <a class="nav-links" href="../HomePage/index.php">home</a>
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

    <!-- Gallery -->
    <section class="gallery-links container">
        <div class="wrapper">
            <h1><span class="badge bg-info text-dark">Gallery</span></h1>

            <div class="gallery-container container">

            <?php
            include_once 'include/dbcon.php';

            $sql = "SELECT * FROM gallery ORDER BY orderGallery DESC";
           
                
                $result = mysqli_query($db,$sql);
                 while($row = mysqli_fetch_assoc($result)){

// $row = mysqli_fetch_array(mysqli_query($db,"select * from gallery where id  = '9'"));
                    echo '
                    <a href="#">
                        <div></div>
                        <div style = "background-image:url(uploads/'.$row["imgFullNameGallery"].');"></div>
                        <h3>This is title</h3>
                        <p>This is paragraph</p>
                    </a>
                    ';
                    
                 }


            
 
                ?>
            </div>
                <!-- <a href="#">
                    <div></div>
                    <h3>This is title</h3>
                    <p>This is paragraph</p>
                </a>
                <a href="#">
                    <div></div>
                    <h3>This is title</h3>
                    <p>This is paragraph</p>
                </a>
                <a href="#">
                    <div></div>
                    <h3>This is title</h3>
                    <p>This is paragraph</p>
                </a>
                <a href="#">
                    <div></div>
                    <h3>This is title</h3>
                    <p>This is paragraph</p>
                </a>
                <a href="#">
                    <div></div>
                    <h3>This is title</h3>
                    <p>This is paragraph</p>
                </a> -->
            <!-- </div> -->

            <div class="gallery-upload container">
                 
<?php
if(($check_admin == 1)){

    echo '
    
   
<form class = "row g-3" action="gallerysucess.php" method="POST" enctype="multipart/form-data">
<div class = "col-auto">
<input type="text" name="filename" required>
</div>
<div class = "col-auto">
<input type="file" name="file" required>
</div>
<div class = "col-auto">
<button type="submit" name = "submit" style = "color:blue">

    SUBMIT
</button>
</div>
</form>
    ';

}

?>
                   

            </div>
        </div>
    </section>
    <!--// gallery -->

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
                    <a href="#">Events</a>
                  </li>
                  <li>
                    <a href="#">Our Team</a>
                  </li>
                </ul>
                <ul>
                  <li>
                    <a href="#">Contact us</a>
                  </li>
                  <li>
                    <a href="#">Blog</a>
                  </li>
                  <li>
                    <a href="../Login/login.html" target="_blank">AdminLogin</a>
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