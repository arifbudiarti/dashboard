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
            <div class="ibox-content" id="results"></div>
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
            <div class="ibox-content" id="results2"></div>
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
        getKunj();
        getPend();
        getTable();
    });

    function getKunj() {
        $.ajax({
            url: "<?php echo site_url('Data/getKunj'); ?>",
            beforeSend: function(res) {
                $('#results').html('Fetching ...');
            },
            success: function(data) {
                $('#results').html(data);
            }
        })
    }

    function getPend() {
        $.ajax({
            url: "<?php echo site_url('Data/getPend'); ?>",
            beforeSend: function(res) {
                $('#results2').html('Fetching ...');
            },
            success: function(data) {
                $('#results2').html(data);
            }
        })
    }

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