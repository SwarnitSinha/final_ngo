<?php
include("include/login_check.php");
include("include/dbcon.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard | Sidhartha Nursery</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-0">
          <i class="fas fa-user"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Siddharth Agro <br>User Panel</div>
        
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>



  <!-- Teams -->
  <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseasdf" aria-expanded="true" aria-controls="collapseasdf">
          <i class="fa fa-user-plus"></i>
          <span>Team Network</span>
        </a>
        <div id="collapseasdf" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">My Team:</h6>
            <a class="collapse-item" href="directteam.php">My Direct</a>
            <a class="collapse-item" href="tree.php">Team Tree View</a>
           <!--- <a class="collapse-item" href="userlist.php">User List</a>---->
          </div>
        </div>
      </li>




   <!-- E-Pin Section -->
   <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseshiva" aria-expanded="true" aria-controls="collapseshiva">
          <i class="fas fa-key"></i>
          <span>E-Pin</span>
        </a>
        <div id="collapseshiva" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">E-Pin Management:</h6>
            <a class="collapse-item" href="pinlist.php">E-Pin List</a>
            
          </div>
        </div>
      </li>





 <!-- Income Report -->
 <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseshiv" aria-expanded="true" aria-controls="collapseshiv">
          <i class="fas fa-dollar-sign"></i>
          <span>Income Report</span>
        </a>
        <div id="collapseshiv" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Income Management:</h6>
            <a class="collapse-item" href="statement.php">Statement</a>
            
          </div>
        </div>
      </li>





      <!-- Refferal -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-share"></i>
          <span>Refer</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Refer:</h6>
            <a class="collapse-item" href="joininglink.php">Refer to friends</a>
           
          </div>
        </div>
      </li>


       <!-- downline -->
       <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseone" aria-expanded="true" aria-controls="collapseone">
        <i class="fa fa-arrow-circle-down"></i>
          <span>My Downline</span>
        </a>
        <div id="collapseone" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">My Downline:</h6>
            <a class="collapse-item" href="tree.php">Tree View</a>
           
          </div>
        </div>
      </li> -->




      <!-- Nav Item - Utilities Collapse Menu -->
      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="utilities-color.html">Colors</a>
            <a class="collapse-item" href="utilities-border.html">Borders</a>
            <a class="collapse-item" href="utilities-animation.html">Animations</a>
            <a class="collapse-item" href="utilities-other.html">Other</a>
          </div>
        </div>
      </li> -->

      <!-- Divider -->
      <!-- <hr class="sidebar-divider"> -->

      <!-- Heading -->
      <!-- <div class="sidebar-heading">
        Addons -->
      <!-- </div> -->


<!-- Add New User-->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseonea" aria-expanded="true" aria-controls="collapseonea">
        <i class="fa fa-plus-square"></i>
          <span>Add Members</span>
        </a>
        <div id="collapseonea" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Add Members:</h6>
            <a class="collapse-item" href="newregister.php">New Registration</a>
           
          </div>
        </div>
      </li>



       
       <!-- KYC-->
       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseones" aria-expanded="true" aria-controls="collapseones">
        <i class="fa fa-link"></i>
          <span>KYC </span>
        </a>
        <div id="collapseones" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">KYC Update:</h6>
            <?php
       
           $sql="SELECT * FROM kyc where userid='$_SESSION[userid]'";
           
           $run=mysqli_query($db,$sql);
           $num=mysqli_num_rows($run);
           if($num==1){
          
                      }
                      else{
          ?>

             <a class="collapse-item" href="kyc.php">KYC!</a>
          <?php 
                           }
    
          ?>
         
          </div>
        </div>
      </li>  






        <!-- Repurches Store-->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-store"></i>
          <span>Store</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Store:</h6>
            <a class="collapse-item" href="ecomm/index.php">Go to Stroe</a>
         
          </div> 
        </div>
      </li> 


     
     <!--Contact-->
     <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseoneaz" aria-expanded="true" aria-controls="collapseoneaz">
        <i class="fa fa-envelope"></i>
          <span>Help</span>
        </a>
        <div id="collapseoneaz" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Help:</h6>
            <a class="collapse-item" href="contact.php">Help</a>
           
          </div>
        </div>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-light topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

        

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            
              

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="contact.php" id="alertsDropdown" >
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">
                    <?php
                      $usercount="SELECT COUNT(*) FROM notification";
                      $run=mysqli_query($db,$usercount);
                      $count=mysqli_fetch_assoc($run)['COUNT(*)'];
                      echo "$count+";
                    ?>
                </span>
              </a>
           
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="contact.php" id="messagesDropdown" >
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">
                    <?php
                      $usercount="SELECT COUNT(*) FROM reply where userid='$_SESSION[userid]'";
                      $run=mysqli_query($db,$usercount);
                      $count=mysqli_fetch_assoc($run)['COUNT(*)'];
                      echo "$count";
                    ?>
                </span>
              </a>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                               
                <?php
                  
                  if($_SESSION['userid'] ){

                 echo $_SESSION['userid'];

                  }
              ?>
                             
                </span>
                <img class="img-profile" src="pro4.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
               
                <a class="dropdown-item" href= "profile1.php" name="profile">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                
                
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="login.php" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->