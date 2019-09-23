<?php
    require_once "../view/header.php";
?>
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