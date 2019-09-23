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
                <ul class="nav collapse" id="pages" data-parent="#navbarVerticalCollapse">
                  <li class="nav-item"><a class="nav-link" href="/wablas/pages/activity.php">Send Message</a>
                  </li>
                  <li class="nav-item"><a class="nav-link" href="/wablas/pages/schedule.php">Schedule</a>
                  </li>
                  <li class="nav-item"><a class="nav-link" href="pages/activity.html">Reminder</a>
                  </li>
                  <li class="nav-item"><a class="nav-link" href="/wablas/pages/sms.php">SMS</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item active"><a class="nav-link" href="/wablas/pages/billing.php" >
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
        <div class="col-lg-12 col-12">
            <div class="card bg-white rounded-0">
                <div class="card-body">
                    <div class="card-title">Invoice List</div>
                    <div id="datatables_filter" class="dataTables_filter mt-2 d-flex justify-content-lg-end justify-content-sm-start">
                        <label class="float-left d-flex justify-content-end pt-2 pr-2">Search:</label>
                        <input type="search" class="form-control input-lg vw-lg-25" placeholder="" style="max-width:40%; width:40%;">
                        <div class="btn-group btn-group-sm" role="group" >
                            <button type="button" class="btn btn-light fs-0 font-weight-light" id="btn-search">search</button>
                            <button type="button" class="btn btn-light fs-0 font-weight-light" id="btn-search">reset</button>
                        </div>
                    </div>
                    <div class="table-responsive mt-3 ">
                        <table class="table table-sm display responsive no-wrap mb-0 fs--1 w-100">
                            <thead>
                                <tr class="table-info">
                                    <th scope="col">No</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Invoice ID</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Device</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Status</th>
                                    <th scope="col" >Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>2019-09-15 19:45:24</td>
                                    <td>INV19001056</td>
                                    <td>New</td>
                                    <td>-</td>
                                    <td>69.089</td>
                                    <td>pending</td>
                                    <td class="text-center ">
                                        <a href="" id="data-icon" class="mr-2 text-primary" data-toggle="modal" data-target="#modelId" data-placement="bottom" title="overview"><img src="../assets/img/preview.png" alt=""></i></i></a>
                                        <a href="" id="data-icon"  class=" text-primary" data-toggle="tooltip" data-placement="bottom" title="download PDF"><img src="../assets/img/pdf.png" fill alt=""></a>
                                    </td>
                                </tr>
                                <tr>
                                <th scope="row">2</th>
                                    <td>2019-09-15 19:45:24</td>
                                    <td>INV19001056</td>
                                    <td>Extend</td>
                                    <td>RZ8B</td>
                                    <td>375.809</td>
                                    <td>cancel</td>
                                    <td class="text-center ">
                                        <a href="" id="data-icon" class="mr-2 text-primary" data-toggle="modal" data-target="#modelId" data-placement="bottom" title="overview"><img src="../assets/img/preview.png" alt=""></a>
                                        <a href="" id="data-icon"  class=" text-primary" data-toggle="tooltip" data-placement="bottom" title="download PDF"><img src="../assets/img/pdf.png" fill alt=""></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="en-sh">showing 1 to 2 of 2 entries</p>
                    <div class="pagination d-flex col-lg-12 justify-content-center">
                        <!-- <div class="btn-group mt-2" role="group">
                            <a href="#" class="btn btn-light btn-sm disabled border d-inline-block mr-3  rounded-circle rounded-lg-circle" tabindex="-1" role="button" aria-disabled="true"><i class="fas fa-chevron-left    "></i></a>
                            <a href="#" class="btn btn-secondary btn-sm disabled text-dark" tabindex="-1" role="button" aria-disabled="true">1</a>
                            <a href="#" class="btn btn-light btn-sm disabled border-left-0 border-secondary" tabindex="-1" role="button" aria-disabled="true">Next</a>
                        </div> -->
                        <ul class="pagination">
                            <li class="page-item mr-5">
                                <a class="page-link rounded-circle text-muted text-center" href="#" aria-label="Previous">
                                    <i class="fas fa-chevron-left    "></i>
                                </a>
                            </li>

                            <li class="page-item"><a class="rounded-circle page-link border-primary  rounded" href="#">1</a></li>
                            <li class="page-item ml-5">
                                <a class="page-link text-muted rounded-circle text-center" href="#" aria-label="Next">
                                    <i class="fas fa-chevron-right    "></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>     
        <!-- Modal -->
        <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog px-5 min-vw-100" id="content-modal" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-info text-white h5 text-uppercase">
                        <span>Billing Information</span>
                    </div>
                    <div class="modal-body">
                        
                        <div class="row px-1">
                            <div class="col-lg-7 col-12 my-3 border-sm-bottom border-lg-0 float-left">
                                <p class="text-uppercase h5 font-weight-light mb-3">PT. TIGA MANUNGGAL TEKNOLOGI INDONESIA</p>
                                <p class="text-capitalize h6">Bank Transfer :</p>
                                <p class="text-uppercase h6 font-weight-light"><span class="mr-1">bank :</span> bri</p>
                                <p class="text-capitalize h6 font-weight-light"><span class="float-left mr-1">No.Rek :</span> 665101023844535</p>
                                <p class="text-uppercase h6 font-weight-light"><span class="float-left mr-1">a/n :</span> Ahsan muhammad</p>
                                <p class="text-capitalize font-italic h6 font-weight-lighter"> *) Indonesia Only</p>
                            </div>
                            <div class="col-lg-5 col-12 float-sm-left float-right text-lg-right">
                                <p class="h6 mb-3">order # INV19001056</p>
                                <p class="text-uppercase h5 font-weight-light mb-3">Febrian</p>
                                <p class="text-capitalize h6">adress :</p>
                                <p class="text-capitalize h6 font-weight-light">Tambak, Banyumas, Jawa Tengah</p>
                                <p class="text-capitalize h6">Order date :</p>
                                <p class="text-capitalize h6 font-weight-light">14 sep 2019</p>
                                <div class="status mt-3 fs--1">
                                    <span class="h5 text-capitalize font-weight-normal">status :</span>
                                    <p class="float-right ml-3 h5 text-uppercase fs-1">pending</p>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-5">
                                <div class="card bg-200 shadow-none rounded-0 table-responsive">
                                    <div class="card-body">
                                        <h5 class="card-title font-weight-light mb-4">Order Summary</h5>
                                        <table class="table table-sm display responsive no-wrap mb-0 fs--1 w-100">
                                            <thead>
                                                <tr class="h5 text-capitalize fs-lg-0 fs--1">
                                                    <th>package name</th>
                                                    <th>period</th>
                                                    <th>quantity</th>
                                                    <th>price</th>
                                                    <th>totals</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="fs-lg-0 fs--1">
                                                    <td scope="row">Quota 1</td>
                                                    <td>monthly</td>
                                                    <td>1</td>
                                                    <td>69.000</td>
                                                    <td>69.099</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="row">
                                            <div class="col-lg-12 text-right mt-4 ">
                                                <table class="float-right">
                                                    <tr>
                                                        <td class="py-2 h5 fs--1 fs-lg-0">subtotal</td>
                                                        <td class="py-2 pl-5 fs--1 fs-lg-0">69.099</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-2 h5 fs--1 fs-lg-0">unix code</td>
                                                        <td class="py-2 pl-5 fs--1 fs-lg-0">Rp.99</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-2 h5 font-wieght-normal fs--1 fs-lg-0">total transfer</td>
                                                        <td class="py-2 pl-5 fs--1 fs-lg-0 text-danger">Rp.69.099</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="" class="btn btn-light mt-4">
                                    <i class="fa fa-print" aria-hidden="true"></i>
                                    Print PDF
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php
    require_once "../view/footer.php";
?>