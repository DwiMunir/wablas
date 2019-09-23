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
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/Icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/Icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/Icon.png">
    <link rel="manifest" href="../assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../assets/img/favicons/mstile-150x150.png">
    <link rel="stylesheet" href="../view/style.css">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="../assets/css/theme.css" rel="stylesheet">
    <link href="../assets/lib/datatables-bs4/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="../assets/lib/datatables.net-responsive-bs4/responsive.bootstrap4.css" rel="stylesheet">

  </head>


  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <div class="container-fluid">
        <nav class="navbar navbar-vertical navbar-expand-xl navbar-light navbar-glass"><a class="navbar-brand text-left" href="/wablas">
            <div class="d-flex align-items-center py-3"><img class="mr-2" src="../assets/img/washiapp-blue.png" alt="" width="200" style="-webkit-filter: drop-shadow(5px 5px 5px #222222);
    filter: drop-shadow(3px 3px 2px #222222);" />
            </div>
          </a>
          <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
            <ul class="navbar-nav flex-column">
              <li class="nav-item"><a class="nav-link" href="/wablas/" aria-controls="home">
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
                <ul class="nav collapse show" id="pages" data-parent="#navbarVerticalCollapse">
                  <li class="nav-item active"><a class="nav-link" href="/wablas/pages/activity.php">Send Message</a>
                  </li>
                  <li class="nav-item"><a class="nav-link" href="/wablas/pages/schedule.php">Schedule</a>
                  </li>
                  <li class="nav-item"><a class="nav-link" href="pages/activity.html">Reminder</a>
                  </li>
                  <li class="nav-item"><a class="nav-link" href="/wablas/pages/sms.php">SMS</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item"><a class="nav-link" href="/wablas/pages/billing.php" >
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
              <div class="d-flex align-items-center"><img class="mr-2" src="../assets/img/illustrations/falcon.png" alt="" width="40" /><span class="text-sans-serif">falcon</span>
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
        <div class="row mt-1">
            <div class="col-lg-12">
                <a href="https://wablas.com/tiket/create" class="btn btn-inf btn-success btn-labeled" data-toggle="modal" data-target="#modelId">
                    <span class="btn-label mr-2"><i class="fas fa-info-circle    "></i></span>
                    New Message
                </a>
            </div>
            <div class="col-lg-12 mt-4 ">
                <div class="col-lg-12 py-3 bg-dark text-white rounded-top">
                    <span class="font-weight-bold"><i class="fas fa-comments fs-2 mr-2"></i>Messages</span>
                </div>
                <div class="col-lg-12 bg-white max-vh-75 chat-content-scroll-area" data-scrollbar="true" tabindex="-1">
                    <div class="scroll-content">
                        <div class="col-lg-12 border-bottom py-3">
                            <div class="row">
                                <div class="col-lg-1 col-2">
                                    <span class="fs-8"><i class="fas fa-user-alt    "></i></span>
                                </div>
                                <div class="col-lg-11 col-10 py-2">
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-lg-12 ">
                                                <div class="text-left fs--1 font-weight-bold">
                                                    <span>Device ID : <span>RZ8B</span> | </span>
                                                    <span>Name : <span>Febrian</span></span>
                                                </div>
                                                <div class="text-left text-weight-light fs--2">
                                                <span>15 August 2019 - 11:03:00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="bg-300 vw-75 p-2 rounded-soft my-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident quo possimus veritatis eius incidunt illum nesciunt molestiae rem ex labore hic iste odit totam laudantium cumque similique est, itaque autem.</div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <span>
                                                    <img src="https://img.icons8.com/ios-filled/17/000000/whatsapp.png">
                                                    <span class="fs--1 h6">Phone:</span>
                                                </span>
                                                <span class="h6 fs--1">085713855903</span>
                                            </div>
                                            <div class="col-lg-7 text-right pt-3">
                                                <a href="" class="btn btn-success">
                                                    <i class="fa fa-reply fs--2" aria-hidden="true"></i>
                                                    <span class="fs--1">reply</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 border-bottom py-3">
                            <div class="row">
                                <div class="col-lg-1 col-2">
                                    <span class="fs-8"><i class="fas fa-user-alt    "></i></span>
                                </div>
                                <div class="col-lg-11 col-10 py-2">
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-lg-12 ">
                                                <div class="text-left fs--1 font-weight-bold">
                                                    <span>Device ID : <span>RZ8B</span> | </span>
                                                    <span>Name : <span>Febrian</span></span>
                                                </div>
                                                <div class="text-left text-weight-light fs--2">
                                                <span>15 August 2019 - 11:03:00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="bg-300 vw-75 p-2 rounded-soft my-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident quo possimus veritatis eius incidunt illum nesciunt molestiae rem ex labore hic iste odit totam laudantium cumque similique est, itaque autem.</div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <span>
                                                    <img src="https://img.icons8.com/ios-filled/17/000000/whatsapp.png">
                                                    <span class="fs--1 h6">Phone:</span>
                                                </span>
                                                <span class="h6 fs--1">085713855903</span>
                                            </div>
                                            <div class="col-lg-7 text-right pt-3">
                                                <a href="" class="btn btn-success">
                                                    <i class="fa fa-reply fs--2" aria-hidden="true"></i>
                                                    <span class="fs--1">reply</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 border-bottom py-3">
                            <div class="row">
                                <div class="col-lg-1 col-2">
                                    <span class="fs-8"><i class="fas fa-user-alt    "></i></span>
                                </div>
                                <div class="col-lg-11 col-10 py-2">
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-lg-12 ">
                                                <div class="text-left fs--1 font-weight-bold">
                                                    <span>Device ID : <span>RZ8B</span> | </span>
                                                    <span>Name : <span>Febrian</span></span>
                                                </div>
                                                <div class="text-left text-weight-light fs--2">
                                                <span>15 August 2019 - 11:03:00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="bg-300 vw-75 p-2 rounded-soft my-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident quo possimus veritatis eius incidunt illum nesciunt molestiae rem ex labore hic iste odit totam laudantium cumque similique est, itaque autem.</div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <span>
                                                    <img src="https://img.icons8.com/ios-filled/17/000000/whatsapp.png">
                                                    <span class="fs--1 h6">Phone:</span>
                                                </span>
                                                <span class="h6 fs--1">085713855903</span>
                                            </div>
                                            <div class="col-lg-7 text-right pt-3">
                                                <a href="" class="btn btn-success">
                                                    <i class="fa fa-reply fs--2" aria-hidden="true"></i>
                                                    <span class="fs--1">reply</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 border-bottom py-3">
                            <div class="row">
                                <div class="col-lg-1 col-2">
                                    <span class="fs-8"><i class="fas fa-user-alt    "></i></span>
                                </div>
                                <div class="col-lg-11 col-10 py-2">
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-lg-12 ">
                                                <div class="text-left fs--1 font-weight-bold">
                                                    <span>Device ID : <span>RZ8B</span> | </span>
                                                    <span>Name : <span>Febrian</span></span>
                                                </div>
                                                <div class="text-left text-weight-light fs--2">
                                                <span>15 August 2019 - 11:03:00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="bg-300 vw-75 p-2 rounded-soft my-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident quo possimus veritatis eius incidunt illum nesciunt molestiae rem ex labore hic iste odit totam laudantium cumque similique est, itaque autem.</div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <span>
                                                    <img src="https://img.icons8.com/ios-filled/17/000000/whatsapp.png">
                                                    <span class="fs--1 h6">Phone:</span>
                                                </span>
                                                <span class="h6 fs--1">085713855903</span>
                                            </div>
                                            <div class="col-lg-7 text-right pt-3">
                                                <a href="" class="btn btn-success">
                                                    <i class="fa fa-reply fs--2" aria-hidden="true"></i>
                                                    <span class="fs--1">reply</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>            
                </div>
            </div>
            <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                <div class="modal-dialog " id="content-modal" role="document">
                    <div class="modal-content">
                        <div class="modal-header border-0 text-600">
                            <span><i class="fas fa-edit mr-2"></i>Create New Message</span>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span class="font-weight-light" aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="col-lg-12 bg-success text-white p-3 fs--1">
                                <span>Create New Message</span>
                            </div>
                            <form action="" class="my-4">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Select Device</label>
                                    <select class="form-control text-600 fs--1" id="exampleFormControlSelect1">
                                        <option>WOOWA</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="name">No.Whatsapp:</label>
                                    <input class="form-control text-600 fs--1" id="name" type="text" placeholder="No.Whatsapp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Message:</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer d-inline-block">
                            <button class="btn btn-warning btn-sm font-weight-light" type="button" data-dismiss="modal">Cancel</button>
                            <button class="btn btn-success btn-sm float-right font-weight-light" type="button">sent</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    


<?php
    require_once "../view/footer.php";
?>