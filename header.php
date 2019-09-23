<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Washiapp</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/Icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/Icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/Icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/Icon.png">
    <link rel="manifest" href="assets/img/Icon.png">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="assets/css/theme.css" rel="stylesheet">
    <link href="assets/lib/remodal/remodal.css" rel="stylesheet">
    <link href="assets/lib/remodal/remodal-default-theme.css" rel="stylesheet">

  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <div class="container">
        <nav class="navbar navbar-vertical navbar-expand-xl navbar-light navbar-glass"><a class="navbar-brand text-left" href="/wablas">
            <div class="d-flex align-items-center py-3"><img class="mr-2" src="assets/img/washiapp-blue.png" alt="" width="200" style="-webkit-filter: drop-shadow(5px 5px 5px #222222);
    filter: drop-shadow(3px 3px 2px #222222);" />
            </div>
          </a>
          <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
            <ul class="navbar-nav flex-column">
              <li class="nav-item"><a class="nav-link" href="/wablas/index.php" aria-controls="home">
                  <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-mobile-alt"></span></span><span>Device</span>
                  </div>
                </a>
              </li>
              <li class="nav-item"><a class="nav-link dropdown-indicator" href="#email" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="email">
                  <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-clipboard-list"></span></span><span>History</span><span class="badge badge-pill ml-2 badge-soft-success"></span>
                  </div>
                </a>
                <ul class="nav collapse" id="email" data-parent="#navbarVerticalCollapse">
                  <li class="nav-item"><a class="nav-link" href="/wablas/pages/status.php">Message Status</a>
                  </li>
                  <li class="nav-item"><a class="nav-link" href="/wablas/pages/log.php">Log</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item"><a class="nav-link dropdown-indicator" href="#pages" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="pages">
                  <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-handshake"></span></span><span>Services</span>
                  </div>
                </a>
                <ul class="nav collapse" id="pages" data-parent="#navbarVerticalCollapse">
                  <li class="nav-item"><a class="nav-link" href="/wablas/pages/activity.php">Send Message</a>
                  </li>
                  <li class="nav-item"><a class="nav-link" href="pages/schedule.php">Schedule</a>
                  </li>
                  <li class="nav-item"><a class="nav-link" href="pages/activity.html">Reminder</a>
                  </li>
                  <li class="nav-item"><a class="nav-link" href="/wablas/pages/sms.php">SMS</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item"><a class="nav-link" href="pages/billing.php" >
                  <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-credit-card"></span></span><span>Billing</span>
                  </div>
                </a>
              </li>
              <li class="nav-item"><a class="nav-link" href="/wablas/pages/account.php">
                  <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-user"></span></span><span>Account</span>
                  </div>
                </a></li>
            </ul>
            <hr class="border-300 my-2" />
            <ul class="navbar-nav flex-column">
              <li class="nav-item"><a class="nav-link" href="#documentation" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="documentation">
                  <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-book"></span></span><span>API Documentation</span>
                  </div>
                </a>
              </li> 
            </ul>

          </div>
        </nav>
        <div class="content">
          <nav class="navbar navbar-light navbar-glass fs--1 font-weight-semi-bold row navbar-top sticky-kit navbar-expand">
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button><a class="navbar-brand text-left ml-3" href="/wablas">
              <div class="d-flex align-items-center"><img class="mr-2" src="assets/img/illustrations/falcon.png" alt="" width="40" /><span class="text-sans-serif">falcon</span>
              </div>
            </a>
            <div class="collapse navbar-collapse" id="navbarNavDropdown1">
              <ul class="navbar-nav align-items-center d-none d-lg-block">
                <li class="nav-item">
                  <h3></h3>
                </li>
              </ul>
              <ul class="navbar-nav align-items-center ml-auto">
                <li class="nav-item dropdown"><a class="nav-link px-0" href="e-commerce/shopping-cart.html"><span class="fas fa-sign-out-alt fs-4" data-fa-transform="shrink-7"></span></a></li>
                
                
              </ul>
            </div>
          </nav>