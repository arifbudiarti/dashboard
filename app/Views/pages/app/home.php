<?= $this->extend('theme/theme'); ?>
<?= $this->section('content'); ?>
<div class="row">
    <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-title">
                <h5>Transactions worldwide</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <div class="row">
                    <div class="col-lg-6">
                        <table class="table table-hover margin bottom">
                            <thead>
                                <tr>
                                    <th style="width: 1%" class="text-center">No.</th>
                                    <th>Transaction</th>
                                    <th class="text-center">Date</th>
                                    <th class="text-center">Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td> Security doors
                                    </td>
                                    <td class="text-center small">16 Jun 2014</td>
                                    <td class="text-center"><span class="label label-primary">$483.00</span></td>

                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td> Wardrobes
                                    </td>
                                    <td class="text-center small">10 Jun 2014</td>
                                    <td class="text-center"><span class="label label-primary">$327.00</span></td>

                                </tr>
                                <tr>
                                    <td class="text-center">3</td>
                                    <td> Set of tools
                                    </td>
                                    <td class="text-center small">12 Jun 2014</td>
                                    <td class="text-center"><span class="label label-warning">$125.00</span></td>

                                </tr>
                                <tr>
                                    <td class="text-center">4</td>
                                    <td> Panoramic pictures</td>
                                    <td class="text-center small">22 Jun 2013</td>
                                    <td class="text-center"><span class="label label-primary">$344.00</span></td>
                                </tr>
                                <tr>
                                    <td class="text-center">5</td>
                                    <td>Phones</td>
                                    <td class="text-center small">24 Jun 2013</td>
                                    <td class="text-center"><span class="label label-primary">$235.00</span></td>
                                </tr>
                                <tr>
                                    <td class="text-center">6</td>
                                    <td>Monitors</td>
                                    <td class="text-center small">26 Jun 2013</td>
                                    <td class="text-center"><span class="label label-primary">$100.00</span></td>
                                </tr>
                            </tbody>
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
<div class="row">
    <div class="col-md-3">
        <h2>Welcome Amelia</h2>
        <small>You have 42 messages and 6 notifications.</small>
        <ul class="list-group clear-list m-t">
            <li class="list-group-item fist-item">
                <span class="float-right">
                    09:00 pm
                </span>
                <span class="label label-success">1</span> Please contact me
            </li>
            <li class="list-group-item">
                <span class="float-right">
                    10:16 am
                </span>
                <span class="label label-info">2</span> Sign a contract
            </li>
            <li class="list-group-item">
                <span class="float-right">
                    08:22 pm
                </span>
                <span class="label label-primary">3</span> Open new shop
            </li>
            <li class="list-group-item">
                <span class="float-right">
                    11:06 pm
                </span>
                <span class="label label-default">4</span> Call back to Sylvia
            </li>
            <li class="list-group-item">
                <span class="float-right">
                    12:00 am
                </span>
                <span class="label label-primary">5</span> Write a letter to Sandra
            </li>
        </ul>
    </div>
</div>
<!-- Page-Level Scripts -->
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {

    });
</script>
<?= $this->endSection(); ?>