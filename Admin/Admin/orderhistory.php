<?php
include '../../dbconnect.php';
include '../../link.php';

if(isset($_POST['insert']))
{	
$name=$_POST['catname'];
$sql ="INSERT INTO category (catname) VALUES ('$name')";
$db->exec($sql);
echo "<script>alert('Insert Successful');location.href='insertcat.php'</script>";
	
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Insert Categories
  </title>
  <!-- Favicon -->
  <link href="../assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="../assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="../assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="../assets/css/argon-dashboard.css?v=1.1.0" rel="stylesheet" />
</head>

<body class="bg-default">
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
      <div class="container px-4">
        <a class="navbar-brand" href="indexadmin.php">
          
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-collapse-main">
          <!-- Collapse header -->
          <div class="navbar-collapse-header d-md-none">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="indexadmin.php">
                  <img src="../assets/img/brand/index.jpg">
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
          <!-- Navbar items -->
                    <ul class="navbar-nav ml-auto">
          <li class="nav-item">
              <a class="nav-link nav-link-icon" href="indexadmin.php">
                
                <span class="ni ni-tv-2 ">Home</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="registeradmin.php">
             
                <span class="ni ni-circle-08">Register</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="loginadmin.php">
                
                <span class="ni ni-key-25">Login</span>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link nav-link-icon" href="insertcat.php">
                
                <span class="ni ni-palette">Insert Categories</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="insertitem.php">
               
                <span class="ni ni-ui-04">Insert Items</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="deleteitem.php">
               
                <span class="ni ni-ui-04">Delete Items</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="updateitem.php">
                
                <span class="ni ni-ui-04">Update Items</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6">
              <h1 class="text-white">Welcome!</h1>
              <p class="text-lead text-light">Use these awesome forms to login or create new account in your project for free.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <!-- Table -->
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
          <div class="card bg-secondary shadow border-0">
            <div class="card-body px-lg-5 py-lg-5">
              <form action="" method="post"  enctype="multipart/form-data">
		<div class="container">
			<div class="form-group">
          Categoires Name
           <input type="text" name="catname"  required placeholder="Enter Categories Name" class="form-control"><br>
  			</div>
            
             <!-- <input type="submit" name="send" value="Send"> -->
            <button class="btn btn-primary" name="insert" style="left">Insert</button>
            
            <!-- <input type="reset" name="cancel" value="cancel"> -->
            <button class="btn btn-primary" name="cancel" style="right">Cancel</button>
            
 			</form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer class="py-5">
    <div class="container">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6">
          <div class="copyright text-center text-xl-left text-muted">
            &copy; 2019 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Next-In</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  </div>
  <!--   Core   -->
  <script src="../assets/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="../assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Optional JS   -->
  <!--   Argon JS   -->
  <script src="../assets/js/argon-dashboard.min.js?v=1.1.0"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
  </script>
</body>

</html>