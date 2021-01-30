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
    
        <link rel="stylesheet" href="footer.css">
        <link rel="stylesheet" href="donatestyle.css">
        <link rel="stylesheet" href="navstyles.css">
        <link rel="stylesheet" href="style.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  
      <link rel="stylesheet" href="../footer/footer.css">
      <!-- <link rel="stylesheet" href="../"> -->
      <link rel="stylesheet" href="../navbar/navstyles.css">
      <!-- <link rel="stylesheet" href=""> -->
      <link rel="stylesheet" href="../EventPage/stylesheet.css">
  
    <title>Events</title>
  
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
      <li><a href="../Donate/donate.html"><button class="btn-primary">Donate</button></a></li>
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
          <a href="../HomePage/index.php">home</a>
        </li>
        <li>
          <a href="../About/about.html">about</a>
        </li>
        <li>
          <a class="activeNow" href="../EventPage/event.php">Events</a>
        </li>
        <li>
          <a href="../Gallery/gallery.php">Gallery</a>
        </li>
        <?php
if($check_admin==1)
{
  echo '
  <li>
  <a href="../Login/logout.php">Logout</a>
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

  <div class="container eventImage my-4">
    <img src="3.jpeg" class="dark img-fluid" alt="Event Background" style="height: 200px; width: 100%;">
    <div class="centered">Events</div>

  </div>

  <!-- I have to do some changes here -->
  <!-- Container for UPCOMING events -->
  <div class="container firstEventContainer my-12 my-*-4">
  <?php

  $upcoming_rows_count =  mysqli_num_rows(mysqli_query($db,"select * from upcoming_event"));

  if($upcoming_rows_count==1){

         $photo_name = mysqli_fetch_array(mysqli_query($db,"select * from upcoming_event where counts= '1'"));
        $name = $photo_name['name'];
        $description = $photo_name['description'];
  }
  else{
    $name = "event.jpeg";
    $description = "No Upcoming Event";

  }
 
        
        ?>
    <h2>Upcoming Events</h2>

    <div class="row upcomingEvents">
      <div class="card image-position col-lg-12" style="width: 30rem;">
        <img src="upcoming_event/<?php echo $name?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Upcoming Event</h5>
          <p class="card-text"><?php echo $description;?></p>
          <a href="../Donate/donate.html" class="btn btn-primary">Donate</a>
        </div>
      </div>

    </div>
    


  </div>
 
<!-- 
<div class="col-auto">
     </div> -->



 
 <?php
if($check_admin == 1){

  
echo '
<form class="row g-3" action="event_sucess.php" method="POST" enctype="multipart/form-data">
<div class="col-auto">
<label for="formGroupExampleInput" class="form-label">Example label</label>
<input type="text" name = "description" placeholder="Description"class="form-control" id="formGroupExampleInput" required>
</div>

<div class="col-auto">
<label for="formGroupExampleInput" class="form-label">Example label</label>
<input type="date" name = "date" placeholder="Date of Event"class="form-control" id="formGroupExampleInput" required>
</div>

<div class="col-auto">
<label for="formFileMultiple" class="form-label">Multiple files input example</label>
<input type="file" name= "file" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
<button type="submit" name= "submit" class="btn btn-info mb-3">UPLOAD</button>
 
</div>



</div>

</form>



<form action ="" method="POST" >
<div class="col-auto">
<button type="submit" name= "delete" class="btn btn-info mb-3">DELETE</button>
</div>
</form> 
';

}

?>


<?php
if(isset($_POST['delete'])){

$num_rows =mysqli_num_rows(mysqli_query($db, "SELECT * FROM upcoming_event where counts = '1'")) ;
    if($num_rows==1){
        $query =mysqli_fetch_array(mysqli_query($db, "SELECT * FROM upcoming_event where counts = '1'")) ;

    $get_name = $query['name'];
    $get_description = $query ['description'];
    $get_date = $query ['date'];
$query = "select * from previous_event ";
    $result = mysqli_query($db,$query);
        $row_count = mysqli_num_rows($result);
        $setImageorder = $row_counts + 1;


    mysqli_query($db,"insert into previous_event(name,description,date,image_order) values ('$get_name','$get_description','$get_date','$setImageorder')");
mysqli_query($db,"delete from upcoming_event");
header("Location:event.php?deletesucess");
    
    }



}
?>
 

  <!-- End of Upcoming events -->

  <hr>
  <hr>
  <!-- Container for previous events -->
  <div class="container secondEventContainer my-4">

    <h2>Previous Events</h2>
    <?php
$check_count = 1;
$row_count = mysqli_num_rows(mysqli_query($db,"select * from previous_event "));

if($row_count>=$check_count){
      $photo_name = mysqli_fetch_array(mysqli_query($db,"select * from previous_event where id = '$row_count'"));
      $name = $photo_name['name'];
      $description = $photo_name['description'];
}
      
      ?>
    <div class="container row previousEvents ">
      <div class="card image-position col-lg-4 col-sm-12 mx-2 my-2">
        <img src="upcoming_event/<?php echo $name?>
        " class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Previous Event</h5>
          <p class="card-text"><?php echo $description?></p>
        </div>
      </div>
<?php
      if($row_count>=$check_count){
      $photo_name = mysqli_fetch_array(mysqli_query($db,"select * from previous_event where id = '$row_count'-'1'"));
      $name = $photo_name['name'];
      $description = $photo_name['description'];
}
?>

      <div class="card image-position col-lg-4 col-sm-12 mx-2 my-2">
        <img src="upcoming_event/<?php echo $name?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Cloths Distribution</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>

        </div>
      </div>
      <?php
      if($row_count>=$check_count){
      $photo_name = mysqli_fetch_array(mysqli_query($db,"select * from previous_event where id = '$row_count'-'2'"));
      $name = $photo_name['name'];
      $description = $photo_name['description'];
}
?>
      <div class="card image-position col-lg-4 col-sm-12 mx-2 my-2">
        <img src="upcoming_event/<?php echo $name?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Food Distribution</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>

        </div>
      </div>
    </div>

  </div>
  <!--
</div>
<div class="card w-25 image-position4" style="width: 18rem;">
  <img src="1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>


</div>
<div class="card w-25 image-position5" style="width: 18rem;">
  <img src="1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>


</div>
<div class="card w-25 image-position6" style="width: 18rem;">
  <img src="1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div> -->

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
                  <i class="fa fa-envelope-square" aria-hidden="true"></i>
                </div>
                <!-- End contact Icon -->
                <div class="contact-info">
                  <h3>aungaridhamtrust@gmail.com</h3>
                  <p>Give us a mail</p>
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
  </div>

</body>

</html>
