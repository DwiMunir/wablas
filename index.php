<?php
    require_once "header.php";
?>


<!-- <div class="card mb-3">
    <div class="card-body rounded-soft bg-gradient">
        <div class="row text-white align-items-center no-gutters">
            <div class="col">
                <h4 class="text-white mb-0">Today Sent 7.439</h4>
                <p class="fs--1 font-weight-semi-bold">Yesterday <span class="text-300">6.887</span></p>
            </div>
        </div>
        <canvas class="rounded" id="chart-line" width="1618" height="375" aria-label="Line chart" role="img"></canvas>
    </div>
</div> -->
<div class="card mb-3">
    <div class="card-body rounded-soft bg-gradient">
        <div class="row text-white align-items-center no-gutters">
        <div class="col">
            <h4 class="text-white mb-0">Today Sent 7.439</h4>
            <p class="fs--1 font-weight-semi-bold">Yesterday <span class="text-300">6.887</span></p>
        </div>
        </div>
        <canvas class="rounded" id="chart-line" width="1618" height="375" aria-label="Line chart" role="img"></canvas>
    </div>
</div>
<div class="card-deck">
<div class="card mb-3 overflow-hidden" style="min-width: 12rem">
    <div class="bg-holder bg-card" style="background-image:url(assets/img/illustrations/corner-1.png);">
    </div>
    <!--/.bg-holder-->

    <div class="card-body position-relative">
    <h6>Sent Success</h6>
    <div class="display-4 fs-4 mb-2 font-weight-normal text-sans-serif text-success" data-countup='{"count":583,"format":"comma"}'>0</div><a class="font-weight-semi-bold fs--1 text-nowrap" href="#!">See all<span class="fas fa-angle-right ml-1" data-fa-transform="down-1"></span></a>
    </div>
</div>
<div class="card mb-3 overflow-hidden" style="min-width: 12rem">
    <div class="bg-holder bg-card" style="background-image:url(assets/img/illustrations/corner-2.png);">
    </div>
    <!--/.bg-holder-->

    <div class="card-body position-relative">
    <h6>Sent Pending</h6>
    <div class="display-4 fs-4 mb-2 font-weight-normal text-sans-serif text-warning" data-countup='{"count":72,"format":"comma"}'>0</div><a class="font-weight-semi-bold fs--1 text-nowrap" href="#!">See all<span class="fas fa-angle-right ml-1" data-fa-transform="down-1"></span></a>
    </div>
</div>
<div class="card mb-3 overflow-hidden" style="min-width: 12rem">
    <div class="bg-holder bg-card" style="background-image:url(assets/img/illustrations/corner-3.png);">
    </div>
    <!--/.bg-holder-->

    <div class="card-body position-relative">
    <h6>Sent Failed</h6>
    <div class="display-4 fs-4 mb-2 font-weight-normal text-sans-serif text-danger" data-countup='{"count":94,"format":"comma"}'>0</div><a class="font-weight-semi-bold fs--1 text-nowrap" href="#!">See all<span class="fas fa-angle-right ml-1" data-fa-transform="down-1"></span></a>
    </div>
</div>
</div>
<div class="card mb-3">
<div class="card-header">
    <div class="row align-items-center justify-content-between">
    <div class="col-6 col-sm-auto d-flex align-items-center pr-0">
        <h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0">List Devices</h5>
    </div>
    <div class="col-6 col-sm-auto ml-auto text-right pl-0">
        <div class="d-none" id="purchases-actions">
        <div class="input-group input-group-sm">
            <select class="custom-select cus" aria-label="Bulk actions">
            <option selected="">Bulk actions</option>
            <option value="Refund"><span class="fas fa-redo-alt" data-fa-transform="shrink-3 down-2"></span> Restart Service</option>
            </select>
            <button class="btn btn-falcon-default btn-sm ml-2" type="button">Apply</button>
        </div>
        </div>
        <div id="dashboard-actions">
        <button class="btn  btn-sm btn-success" type="button" data-toggle="modal" data-target="#Modal"><span class="fas fa-plus" data-fa-transform="shrink-3 down-2"></span><span class="d-none d-sm-inline-block ml-1">New Device</span></button>
        </div>
    </div>
    </div>
</div>
<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table table-sm mb-0 table-dashboard fs--1">
            <thead class="bg-200 text-900">
                <tr>
                    <th>
                        <div class="custom-control custom-checkbox ml-3">
                            <input class="custom-control-input checkbox-bulk-select" id="checkbox-bulk-purchases-select" type="checkbox" data-checkbox-body="#purchases" data-checkbox-actions="#purchases-actions" data-checkbox-replaced-element="#dashboard-actions" />
                            <label class="custom-control-label" for="checkbox-bulk-purchases-select"></label>
                        </div>
                    </th>
                    <th>Device ID</th>
                    <th>No WA</th>
                    <th>Expired</th>
                    <th class="text-center">Status</th>
                    <th class="text-right">Action</th>
                    <th></th>
                </tr>
            </thead>
            <tbody id="purchases">
                <tr class="btn-reveal-trigger">
                    <td class="align-middle">
                        <div class="custom-control custom-checkbox ml-3">
                            <input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-1" />
                            <label class="custom-control-label" for="checkbox-1"></label>
                        </div>
                    </td>
                    <th class="align-middle"><a href="pages/setting.html">XIAUI</a></th>
                    <td class="align-middle">62349573402</td>
                    <td class="align-middle">Agustus,15 2019</td>
                    <td class="align-middle text-center fs-0"><span class="badge badge rounded-capsule badge-soft-danger">disconnected<span class="ml-1 fas fa-times" data-fa-transform="shrink-2"></span></span>
                    </td>
                    <td class="align-middle white-space-nowrap">
                        <div class="dropdown text-sans-serif">
                            <button class="btn btn-info btn-sm" type="button"><span class="fas fa-redo-alt"></span></button>
                            <button class="btn btn-primary btn-sm" type="button"><span class="fas fa-qrcode"></span></button>
                            <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="dropdown1" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                            <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="dropdown1">
                                <div class="bg-white py-2">
                                    <a class="dropdown-item" href="#!"><span class="fas fa-lock"></span> Lock Private Message</a>
                                    <a class="dropdown-item" href="pages/setting.html"><span class="fas fa-cog"></span> Setting</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#!"><span class="fas fa-shopping-cart"></span> Extend</a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="btn-reveal-trigger">
                    <td class="align-middle">
                        <div class="custom-control custom-checkbox ml-3">
                            <input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-2" />
                            <label class="custom-control-label" for="checkbox-2"></label>
                        </div>
                    </td>
                    <th class="align-middle"><a href="pages/setting.html">KASUY</a></th>
                    <td class="align-middle">62834753044</td>
                    <td class="align-middle">Juli,23 2019</td>
                    <td class="align-middle text-center fs-0"><span class="badge badge rounded-capsule badge-soft-success">connected<span class="ml-1 fas fa-check" data-fa-transform="shrink-2"></span></span>
                    </td>
                    <td class="align-middle white-space-nowrap">
                        <div class="dropdown text-sans-serif">
                            <button class="btn btn-info btn-sm" type="button"><span class="fas fa-redo-alt"></span></button>
                            <button class="btn btn-primary btn-sm" type="button"><span class="fas fa-qrcode"></span></button>
                            <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="dropdown1" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                            <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="dropdown1">
                                <div class="bg-white py-2">
                                    <a class="dropdown-item" href="#!"><span class="fas fa-lock"></span> Lock Private Message</a>
                                    <a class="dropdown-item" href="pages/setting.html"><span class="fas fa-cog"></span> Setting</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#!"><span class="fas fa-shopping-cart"></span> Extend</a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="card-footer border-top">
    <div class="row align-items-center">
    
    </div>
</div>
</div>

<!--modal new device-->

<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="col-lg-4 mx-auto" role="document">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white">Add new number</h5>
                <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close"><span class="font-weight-light" aria-hidden="true">&times;</span></button>
            </div>
        <div class="modal-body">
            <form action="">
                <div class="form-group">
                    <label for="number">How many number?</label>
                    <select class="form-control" id="number">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5 (Discont ~ 24%)</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10 (Discont ~ 37%)</option>
                        <option>11</option>
                        <option>12</option>
                        <option>13</option>
                        <option>14</option>
                        <option>15 (Discont ~ 50%)</option>
                        <option>16</option>
                        <option>17</option>
                        <option>18</option>
                        <option>19</option>
                        <option>20</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Subscription Period</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>1 Month (30 days) - Rp197.000 ($17)</option>
                        <option>3 Month - Rp591.000 ($51)</option>
                        <option>6 Month - Rp1.182.000 ($102)</option>
                        <option class="text-danger">1 year - Rp1.197.000 ($170) (2 month free)</option>
                    </select>
                </div>
            </form>
            <div class="row border-bottom mt-5">
                <div class="col-lg-6">
                    <h6 class="fs-0 font-weight-normal">Subtotal</h6>
                    <h6 class="fs-0 font-weight-normal">Unix code</h6>
                </div>
                <div class="col-lg-6 text-right">
                    <h6 class="fs-0 font-weight-normal">Rp197.000</h6>
                    <h6 class="fs-0 font-weight-normal">Rp.26</h6>
                </div>
            </div>
            <div class="row mt-2 mb-8">
                <div class="col-lg-6">
                    <h6 class="fs-0 font-weight-bold">Total</h6>
                </div>
                <div class="col-lg-6 text-right">
                    <h6 class="fs-0 font-weight-bold">Rp197.026</h6>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-secondary btn-sm rounded-pill" type="button" data-dismiss="modal">Cancel</button>
            <button class="btn btn-primary btn-sm rounded-pill" type="button">Add</button>
        </div>
        </div>
    </div>
  </div>
</div>


<?php
    require_once "footer.php";
?>