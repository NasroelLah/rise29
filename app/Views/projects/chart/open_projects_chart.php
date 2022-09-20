<div id="invoice-payment-statistics-container">

<div class="card bg-white">
    <div class="card-header clearfix">
    <i data-feather="file-text" class="icon-16"></i>&nbsp; <?php echo app_lang("open_projects"); ?>
    </div>
    <div class="card-body rounded-bottom">
        <canvas id="invoice-payment-statistics-chart" style="width: 100%; height: 300px;"></canvas>
    </div>

</div>

<script type="text/javascript">
    $(document).ready(function () {
        var invoicePaymentChart = document.getElementById("invoice-payment-statistics-chart");
        new Chart(invoicePaymentChart, {
            type: 'line',
            data: {
                labels: ["<?php echo app_lang('short_january'); ?>", "<?php echo app_lang('short_february'); ?>", "<?php echo app_lang('short_march'); ?>", "<?php echo app_lang('short_april'); ?>", "<?php echo app_lang('short_may'); ?>", "<?php echo app_lang('short_june'); ?>", "<?php echo app_lang('short_july'); ?>", "<?php echo app_lang('short_august'); ?>", "<?php echo app_lang('short_september'); ?>", "<?php echo app_lang('short_october'); ?>", "<?php echo app_lang('short_november'); ?>", "<?php echo app_lang('short_december'); ?>"],
                datasets: [{
                        label: "<?php echo app_lang('open_projects'); ?>",
                        borderColor: 'rgba(0, 179, 147, 1)',
                        backgroundColor: 'rgba(0, 179, 147, 0.2)',
                        borderWidth: 2,
                        fill: true,
                        data: <?php echo $project_open; ?>
                    }]
            },
            options: {
                responsive: true,
                tooltips: {
                    enabled: true,
                    mode: 'single',
          
                },
                legend: {
                    display: true,
                    position: 'bottom',
                    labels: {
                        fontColor: "#898fa9"
                    }
                },
                scales: {
                    xAxes: [{
                            gridLines: {
                                color: 'rgba(107, 115, 148, 0.1)'
                            },
                            ticks: {
                                fontColor: "#898fa9"
                            }
                        }],
                    yAxes: [{
                            gridLines: {
                                color: 'rgba(107, 115, 148, 0.1)'
                            },
                            ticks: {
                                fontColor: "#898fa9",
                                beginAtZero: true
                            }
                        }]
                }
            }
        });
    });
</script>
</div>



