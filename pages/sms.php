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
    <style>
        tr th{
            white-space:nowrap;
        }
        @media only screen and (max-width:760px){
            .table th, .table td{
                white-space:nowrap;
            }   
        }
    </style>

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
                  <li class="nav-item"><a class="nav-link" href="/wablas/pages/activity.php">Send Message</a>
                  </li>
                  <li class="nav-item"><a class="nav-link" href="/wablas/pages/schedule.php">Schedule</a>
                  </li>
                  <li class="nav-item"><a class="nav-link" href="pages/activity.html">Reminder</a>
                  </li>
                  <li class="nav-item active"><a class="nav-link" href="/wablas/pages/sms.php">SMS</a>
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
        <div class="col-lg-12 py-4">
            <span  class="h2 font-weight-normal">SMS</span>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="crad-title my-3">
                                <span class="fs-0">SMS Subscription</span>
                                <h3 class="mt-4 font-weight-normal fs-2 text-700 mb-4">Select packages according to your needs</h3>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <!-- <th class="vertical-middle width-60"><div class="checkbox checkbox-theme no-margin"><input type="checkbox" id="checkbox"><label for="checkbox" class="no-padding"></label></div></th> -->
                                            <th class="vertical-middle border-0">Package Name</th>
                                            <th class="vertical-middle border-0">Price IDR</th>
                                            <th class="vertical-middle border-0">Price USD</th>
                                            <th class="vertical-middle border-0">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="fs--1">
                                        <tr>
                                            <!-- <td class="vertical-middle"><div class="checkbox checkbox-theme no-margin"><input type="checkbox" id="checkbox1"><label for="checkbox1" class="no-padding"></label></div></td> -->
                                            <td class="vertical-middle">
                                                <h5>SMS 1.000</h5>
                                                <p>Package 1.000 SMS</p>
                                            </td>
                                            <td class="vertical-middle">Rp.90.000</td>
                                            <td class="vertical-middle">$7.00</td>
                                            <td class="vertical-middle">
                                                <a href="" class="btn btn btn-info  text-white fs--1 font-weight-normal" data-toggle="modal" data-target="#modelId">
                                                    <i class="fa fa-shopping-cart"></i> purchase sms
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <!-- <td class="vertical-middle"><div class="checkbox checkbox-theme no-margin"><input type="checkbox" id="checkbox1"><label for="checkbox1" class="no-padding"></label></div></td> -->
                                            <td class="vertical-middle">
                                                <h5>SMS 2.000</h5>
                                                <p>
                                                    Package 2.000 SMS
                                                </p>
                                            </td>
                                            <td class="vertical-middle">Rp.170.000</td>
                                            <td class="vertical-middle">$13.00</td>
                                            <td class="vertical-middle">
                                                <a href="" class="btn btn btn-info text-white fs--1 font-weight-normal" data-toggle="modal" data-target="#modelId"> 
                                                    <i class="fa fa-shopping-cart"></i>
                                                    purchase sms
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <!-- <td class="vertical-middle"><div class="checkbox checkbox-theme no-margin"><input type="checkbox" id="checkbox1"><label for="checkbox1" class="no-padding"></label></div></td> -->
                                            <td class="vertical-middle">
                                                <h5>SMS Center</h5>
                                                <p>
                                                    Package SMS with 2 way
                                                </p>
                                            </td>
                                            <td class="vertical-middle">Rp.459.000</td>
                                            <td class="vertical-middle">$33.00</td>
                                            <td class="vertical-middle">
                                                <a href="" class="btn btn btn-info text-white fs--1 font-weight-normal" data-toggle="modal" data-target="#modelId"> 
                                                    <i class="fa fa-shopping-cart"></i> 
                                                    purchase sms
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            
            <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                <div class="modal-dialog px-lg-11 px-4 min-vw-100" id="content-modal" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-info">
                            <div class="modal-title"></div>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span class="font-weight-light" aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-title fs--0 text-1000 border-bottom pb-3 font-weight-normal">Info Package SMS</div>
                                            <div class="table-responsive">
                                                <table class=" table table-border table-sm fs--1">
                                                    <thead>
                                                        <tr>
                                                            <td class="pt-3 h5 fs-0 border-0 font-weight-normal">INFO</td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="py-2">Package Name</td>
                                                            <td class="py-2">SMS 1.000</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="py-2">Description</td>
                                                            <td class="py-2">Package 1.000 SMS</td>
                                                        </tr>
                                                        <tr class="fs-1">
                                                            <td class="py-2">Price IDR</td>
                                                            <td class="py-2">Rp.90.000</td>
                                                        </tr>
                                                        <tr class="fs-1">
                                                            <td class="py-2">Price USD</td>
                                                            <td class="py-2">$ 7.00</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-title fs--0 text-1000 border-bottom pb-3 font-weight-normal">Form Purchase </div>
                                            <span class="fs--2">Completed this form</span>
                                            <form action="" class="my-3">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Select Device</label>
                                                    <select class="form-control text-600 fs--1 bg-100" id="exampleFormControlSelect1">
                                                        <option>WOOWA</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Select Periode</label>
                                                    <select class="form-control text-600 fs--1 bg-100" id="exampleFormControlSelect1">
                                                        <option>monthly</option>
                                                        <option>quarterly</option>
                                                        <option>yearly</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Payment Transfer</label>
                                                    <select class="form-control text-600 fs--1 bg-100" id="exampleFormControlSelect1">
                                                        <option>BCA</option>
                                                        <option>BRI</option>
                                                        <option>PAYPAL</option>
                                                        <option>BNI</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="readonly">Total</label>
                                                    <input class="form-control text-800 font-weight-bold fs--1 text-right" id="readonly" type="text" placeholder="190.026" readonly="Rp.190.026">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer d-inline-block">
                            <button class="btn btn-info px-5 btn-sm float-right font-weight-light" type="button">Proccess Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php
    require_once "../view/footer.php";
?>