<? php
  session_start();
  if(!isset($_SESSION["ukey"]))
  {
    header("location:login.php");
  }
  $userid=$_SESSION["ukey"];
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Web Portal - Production Tracking</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!--
Ramayana CSS Template
https://templatemo.com/tm-529-ramayana
-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

      <!-- Main -->
        <div id="main">
          <div class="inner">

            <!-- Header -->
            <header id="header">
              <div class="logo">
                <a href="userhomepage.php">Hi, User</a><a href="logout.php"> | LOGOUT</a>
              </div>
            </header>

            <!-- Banner -->
            <section class="main-banner">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <div class="banner-content">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="banner-caption">
                            <h4>Welcome, this is your <em>Home Page</em> for Production Tracking</h4>
                            <span>SMART PRODUCTION TRACKING SYSTEM</span>
                            <p><strong>Smart Production Tracking System</strong> is a </p>
                            <div class="primary-button">
                              <a href="#">Read More</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> 
              </div>
            </section>

            <section class="services">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-4">
                    <div class="service-item first-item">
                      <div class="icon"></div>
                      <h4>Production Progress Monitoring</h4>
                      <p>T</p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="service-item second-item">
                      <div class="icon"></div>
                      <h4>WIP Tracking</h4>
                      <p></p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="service-item third-item">
                      <div class="icon"></div>
                      <h4>Optimize Productivity</h4>
                      <p>xyz</p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="service-item fourth-item">
                      <div class="icon"></div>
                      <h4>Tracking Work Orders</h4>
                      <p>xyz</p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="service-item fivth-item">
                      <div class="icon"></div>
                      <h4>Real-Time Statistics</h4>
                      <p>xyz</p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="service-item sixth-item">
                      <div class="icon"></div>
                      <h4>Interactive Reports & Graphs</h4>
                      <p>xyz</p>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            <!-- Top Image -->
            <section class="top-image">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <img src="assets/images/top-image.jpg" alt="">
                    <div class="down-content">
                      <h4>Example</h4>
                      <p>Sample</p>
                      <div class="primary-button">
                        <a href="#">Read More</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            <!-- Left Image -->
            <section class="left-image">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/images/left-image.jpg" alt="">
                  </div>
                  <div class="col-md-6">
                    <div class="right-content">
                      <h4>Example</h4>
                      <p>Sample</p>
                      <div class="primary-button">
                        <a href="#">Read More</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            <!-- Right Image -->
            <section class="right-image">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6">
                    <div class="left-content">
                      <h4>Example</h4>
                      <p>Sample</p>
                      <div class="primary-button">
                        <a href="#">Read More</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <img src="assets/images/right-image.jpg" alt="">
                  </div>
                </div>
              </div>
            </section>

          </div>
        </div>

      <!-- Sidebar -->
        <div id="sidebar">

          <div class="inner">
            <!-- Menu -->
            <nav id="menu">
              <ul>
                <li><a href="dashboard.php">DashBoard</a></li>
                <li><a href="wostatus.php">WO Status</a></li>
                <li><a href="readytoload.php">Ready To Load</a></li>
                <li>
                  <span class="opener">Sewing - All Parts</span>
                  <ul>
                    <li><a href="allpartsinput.php">INPUT</a></li>
                    <li><a href="allpartsoutput.php">OUTPUT</a></li>
                  </ul>
                </li>
                <li>
                  <span class="opener">Sewing - Assembly</span>
                  <ul>
                    <li><a href="assemblyinput.php">INPUT</a></li>
                    <li><a href="assemblyoutput.php">OUTPUT</a></li>
                  </ul>
                </li>
                <li><a href="pastdata.php">Past Production Data</a></li>
              </ul>
            </nav>

            <!-- Featured Posts -->
            <div class="featured-posts">
              <div class="heading">
                <h2>Creators</h2>
              </div>
              <div class="owl-carousel owl-theme">
                <a href="#">
                  <div class="featured-item">
                    <img src="assets/images/featured_post_01.jpg" alt="featured one">
                    <p>xyz</p>
                  </div>
                </a>
                <a href="#">
                  <div class="featured-item">
                    <img src="assets/images/featured_post_01.jpg" alt="featured two">
                    <p>xyz</p>
                  </div>
                </a>
                <a href="#">
                  <div class="featured-item">
                    <img src="assets/images/featured_post_01.jpg" alt="featured three">
                    <p>xyz</p>
                  </div>
                </a>
              </div>
            </div>

            <!-- Footer -->
            <footer id="footer">
              <p class="copyright">ABFRL, Bhubaneswar
              <br> <a rel="nofollow" href="https://www.abfrl.com">Website</a></p>
            </footer>

          </div>
        </div>

    </div>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/transition.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/custom.js"></script>
</body>


  </body>

</html>