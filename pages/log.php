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
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header fs--1 text-white bg-info">
                <div class="card-title"><span>Log</span></div>
            </div>
            <div class="card-body">
                
                <div class="table-responsive my-4">
                    <table class="table table-sm fs--1">
                        <thead>
                            <tr class="text-uppercase">
                                <th>no</th>
                                <th>date</th>
                                <th>Device id</th>
                                <th>sender phone</th>
                                <th>message</th>
                                <th>status</th>
                                <th>category</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    require_once "../view/footer.php";
?>