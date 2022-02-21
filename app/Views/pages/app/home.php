<?= $this->extend('theme/theme'); ?>
<?= $this->section('content'); ?>
<div class="row">
    <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-title">
                <h5>KUNJUNGAN PASIEN</h5>
                <div class="ibox-tools">
                </div>
            </div>
            <div class="ibox-content">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <span class="label label-success float-right">SWASTA</span>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">40 886,200</h1>
                                <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                                <small>Total income</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <span class="label label-info float-right">ASURANSI</span>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">275,800</h1>
                                <div class="stat-percent font-bold text-info">20% <i class="fa fa-level-up"></i></div>
                                <small>New orders</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <span class="label label-primary float-right">BPJS</span>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">106,120</h1>
                                <div class="stat-percent font-bold text-navy">44% <i class="fa fa-level-up"></i></div>
                                <small>New visits</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <span class="label label-danger float-right">TOTAL</span>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">80,600</h1>
                                <div class="stat-percent font-bold text-danger">38% <i class="fa fa-level-down"></i></div>
                                <small>In first month</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-title">
                <h5>PENDAPATAN</h5>
                <div class="ibox-tools">
                </div>
            </div>
            <div class="ibox-content">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <span class="label label-success float-right">SWASTA</span>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">40 886,200</h1>
                                <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                                <small>Total income</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <span class="label label-info float-right">ASURANSI</span>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">275,800</h1>
                                <div class="stat-percent font-bold text-info">20% <i class="fa fa-level-up"></i></div>
                                <small>New orders</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <span class="label label-primary float-right">BPJS</span>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">106,120</h1>
                                <div class="stat-percent font-bold text-navy">44% <i class="fa fa-level-up"></i></div>
                                <small>New visits</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <span class="label label-danger float-right">TOTAL</span>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">80,600</h1>
                                <div class="stat-percent font-bold text-danger">38% <i class="fa fa-level-down"></i></div>
                                <small>In first month</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-title">
                <h5>Detail Transaksi Unit</h5>
                <div class="ibox-tools">
                </div>
            </div>
            <div class="ibox-content">
                <div class="row">
                    <div class="col-lg-12">
                        <table class="table table-striped table-bordered table-hover" id="tabel_serverside">
                            <thead>
                                <tr>
                                    <th width="3%" rowspan="2">No</th>
                                    <th rowspan="2">Unit</th>
                                    <th width="40%" colspan="4">Kunjungan</th>
                                    <th width="40%" colspan="4">Pendapatan</th>
                                </tr>
                                <tr>
                                    <th width="10%">Swasta</th>
                                    <th width="10%">Asuransi</th>
                                    <th width="10%">BPJS</th>
                                    <th width="10%">Total</th>
                                    <th width="10%">Swasta</th>
                                    <th width="10%">Asuransi</th>
                                    <th width="10%">BPJS</th>
                                    <th width="10%">Total</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="col-lg-6">
                        <div id="world-map" style="height: 300px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page-Level Scripts -->
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
        getTable();
    });

    function getTable() {
        tablexx = $('#tabel_serverside').DataTable();
        tablexx.destroy();
        //datatables
        tablexx = $('#tabel_serverside').DataTable({
            "processing": true,
            "pageLength": 10,
            "responsive": true,
            "dom": '<"html5buttons"B>lTfgitp',
            "order": [],
            "ajax": {
                url: "<?php echo base_url("Data/console"); ?>", // json datasource
                type: "post", // method  , by default get
                error: function() { // error handling
                    $(".tabel_serverside-error").html("");
                    $("#tabel_serverside").append('<tbody class="tabel_serverside-error"><tr><th colspan="3">Data Tidak Ditemukan di Server</th></tr></tbody>');
                    $("#tabel_serverside_processing").css("display", "none");

                }
            },
            "columnDefs": [{
                "targets": [0],
                "orderable": false,
            }, ],
            "ordering": true,
            "info": true,
            "serverSide": true,
            "stateSave": true,
            "scrollX": true,
            buttons: [{
                    extend: 'copy'
                },
                {
                    extend: 'csv'
                },
                {
                    extend: 'excel',
                    title: 'ExampleFile'
                },
                {
                    extend: 'pdf',
                    title: 'ExampleFile'
                },

                {
                    extend: 'print',
                    customize: function(win) {
                        $(win.document.body).addClass('white-bg');
                        $(win.document.body).css('font-size', '10px');
                        $(win.document.body).find('table')
                            .addClass('compact')
                            .css('font-size', 'inherit');
                    }
                }
            ],
        });
    }
</script>
<?= $this->endSection(); ?>