<?php
    require_once "../view/header.php";
?>

    <div class="col-lg-12 col-12">
        <div class="card bg-white rounded-0">
            <div class="card-body">
                <div class="card-title">Invoice List</div>
                <div id="datatables_filter" class="dataTables_filter mt-2 d-flex justify-content-end">
                    <label class="float-left d-flex justify-content-end pt-2 pr-2">Search:</label>
                    <input type="search" class="form-control input-sm" placeholder="" aria-controls="datatables">
                    <div class="btn-group btn-group-sm" role="group" >
                        <button type="button" class="btn btn-light fs-0 font-weight-light" id="btn-search">search</button>
                        <button type="button" class="btn btn-light fs-0 font-weight-light" id="btn-search">reset</button>
                    </div>
                </div>
                <div class="table-responsive mt-3">
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
                                <th scope="col 	d-sm-none d-md-block">Action</th>
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
                                <td class="text-center">
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
                                <td class="text-center 	d-sm-none d-md-block">
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
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-7 col-12 float-left">
                            <p class="text-uppercase h5 font-weight-light mb-3">PT. TIGA MANUNGGAL TEKNOLOGI INDONESIA</p>
                            <p class="text-capitalize h6">Bank Transfer :</p>
                            <p class="text-uppercase h6 font-weight-light"><span class="mr-1">bank :</span> bri</p>
                            <p class="text-capitalize h6 font-weight-light"><span class="float-left mr-1">No.Rek :</span> 665101023844535</p>
                            <p class="text-uppercase h6 font-weight-light"><span class="float-left mr-1">a/n :</span> Ahsan muhammad</p>
                            <p class="text-capitalize font-italic h6 font-weight-lighter"> *) Indonesia Only</p>
                        </div>
                        <div class="col-lg-5 col-12 float-sm-left float-right text-right">
                            <p class="h6 mb-3">order # INV19001056</p>
                            <p class="text-uppercase h5 font-weight-light mb-3">Febrian</p>
                            <p class="text-capitalize h6">adress :</p>
                            <p class="text-capitalize h6 font-weight-light">Tambak, Banyumas, Jawa Tengah</p>
                            <p class="text-capitalize h6">Order date :</p>
                            <p class="text-capitalize h6 font-weight-light">14 sep 2019</p>
                            <div class="status mt-3">
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
                                            <tr class="h5 text-capitalize">
                                                <th>package name</th>
                                                <th>period</th>
                                                <th>quantity</th>
                                                <th>price</th>
                                                <th>totals</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="fs-0">
                                                <td scope="row">Quota 1</td>
                                                <td>monthly</td>
                                                <td>1</td>
                                                <td>69.000</td>
                                                <td>69.099</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="row">
                                        <div class="col-lg-12 text-right mt-4">
                                            <table class="float-right">
                                                <tr>
                                                    <td class="py-2 h5">subtotal</td>
                                                    <td class="py-2 pl-5 fs-1">69.099</td>
                                                </tr>
                                                <tr>
                                                    <td class="py-2 h5">unix code</td>
                                                    <td class="py-2 pl-5 fs-1">Rp.99</td>
                                                </tr>
                                                <tr>
                                                    <td class="py-2 h5 font-wieght-normal">total transfer</td>
                                                    <td class="py-2 pl-5 fs-1 text-danger">Rp.69.099</td>
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