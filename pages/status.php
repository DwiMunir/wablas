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
                <div class="card-title"><span>Message Status</span></div>
            </div>
            <div class="card-body">
                <a href="" class="btn btn-danger text-white fs--1">Cancel all pending</a>
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
                            <tr>
                                <td>1</td>
                                <td>21 August 2019 00:00:09	</td>
                                <td>RZ8B</td>
                                <td>6285642184</td>
                                <td>Hooree ! Orderan ysf di psikologimarketing.com dengan Order Id #4141 telah selesai, Selamat atas investasi leher ke atasnya, semoga bertambah ilmunya, meningkat derajatnya, aamiin 😍 Silahkan cek email atau langsung login ke member.psikologimarketing.com di pojok kanan atas. Jangan lupa juga ysf telah *otomatis menjadi affiliate*, silahkan ambil link affiliate di member.psikologimarketing.com/affiliate Jika ada pertanyaan jangan sungkan langsung hubungi dengan klik wa.me/6285974568372 Terima kasih 🎊🎉</td>
                                <td>
                                    <a href="" class="btn btn-danger btn-sm fs--1 text-white">not registered</a>
                                </td>
                                <td>text</td>
                                <td>
                                    <a href="" class="btn bg-700 text-white fs--1">remove</a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>21 August 2019 00:00:09	</td>
                                <td>RZ8B</td>
                                <td>6285642184</td>
                                <td>Hooree ! Orderan ysf di psikologimarketing.com dengan Order Id #4141 telah selesai, Selamat atas investasi leher ke atasnya, semoga bertambah ilmunya, meningkat derajatnya, aamiin 😍 Silahkan cek email atau langsung login ke member.psikologimarketing.com di pojok kanan atas. Jangan lupa juga ysf telah *otomatis menjadi affiliate*, silahkan ambil link affiliate di member.psikologimarketing.com/affiliate Jika ada pertanyaan jangan sungkan langsung hubungi dengan klik wa.me/6285974568372 Terima kasih 🎊🎉</td>
                                <td>
                                    <a href="" class="btn btn-danger btn-sm fs--1 text-white">not registered</a>
                                </td>
                                <td>text</td>
                                <td>
                                    <a href="" class="btn bg-700 text-white fs--1">remove</a>
                                </td>
                            </tr>
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