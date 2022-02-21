<div class="row">
    <div class="col-lg-3">
        <div class="ibox ">
            <div class="ibox-title">
                <span class="label label-success float-right">SWASTA</span>
            </div>
            <div class="ibox-content">
                <h1 class="no-margins"><?= number_format($kunjungan['swasta']); ?></h1>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="ibox ">
            <div class="ibox-title">
                <span class="label label-info float-right">ASURANSI</span>
            </div>
            <div class="ibox-content">
                <h1 class="no-margins"><?= number_format($kunjungan['asuransi']); ?></h1>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="ibox ">
            <div class="ibox-title">
                <span class="label label-primary float-right">BPJS</span>
            </div>
            <div class="ibox-content">
                <h1 class="no-margins"><?= number_format($kunjungan['bpjs']); ?></h1>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="ibox ">
            <div class="ibox-title">
                <span class="label label-danger float-right">TOTAL</span>
            </div>
            <div class="ibox-content">
                <h1 class="no-margins"><?= number_format($kunjungan['swasta'] + $kunjungan['asuransi'] + $kunjungan['bpjs']); ?></h1>
            </div>
        </div>
    </div>
</div>