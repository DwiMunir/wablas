<?php
    require_once "../view/header.php";
?>

    <div class="container my-4">
        <h3 class="font-weight-normal">Schedule</h3>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 bg-white py-3 shadow-sm">
                <p class="fs--1">Schedule Message</p>
                <h5 class="font-weight-normal text-secondary text-800 fs-1 mt-4">set the date when the message will be sent</h5>
                <div class="new-schedule">
                    <button class="btn  btn-sm btn-success fs--1 mt-3" type="button" data-toggle="modal" data-target="#Modal"><span class="fas fa-plus" data-fa-transform="shrink-3 down-2"></span><span class="d-none d-sm-inline-block ml-1">New schedule</span></button>
                </div>
                <table class=" mt-3 table table-borderless table-lg display responsive no-wrap mb-0 fs--1 w-100">
                    <thead>
                        <tr class="text-uppercase">
                            <th scope="col">no.</th>
                            <th scope="col">date/time</th>
                            <th scope="col">message</th>
                            <th scope="col">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"></th>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        
                    </tbody>
                    </table>
            </div>
        </div>
    </div>

<?php
    require_once "../view/footer.php";
?>