<div class="row">
    <div class="col-lg-3">
        <div class="ibox ">
            <div class="ibox-title">
                <span class="label label-success float-right">SWASTA</span>
            </div>
            <div class="ibox-content">
                <h1 class="no-margins"><?= number_format($pendapatan['swasta']); ?></h1>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="ibox ">
            <div class="ibox-title">
                <span class="label label-info float-right">ASURANSI</span>
            </div>
            <div class="ibox-content">
                <h1 class="no-margins"><?= number_format($pendapatan['asuransi']); ?></h1>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="ibox ">
            <div class="ibox-title">
                <span class="label label-primary float-right">BPJS</span>
            </div>
            <div class="ibox-content">
                <h1 class="no-margins"><?= number_format($pendapatan['bpjs']); ?></h1>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="ibox ">
            <div class="ibox-title">
                <span class="label label-danger float-right">TOTAL</span>
            </div>
            <div class="ibox-content">
                <h1 class="no-margins"><?= number_format($pendapatan['swasta'] + $pendapatan['asuransi'] + $pendapatan['bpjs']); ?></h1>
            </div>
        </div>
    </div>
</div>