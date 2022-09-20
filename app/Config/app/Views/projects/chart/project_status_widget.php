<a href="<?php echo get_uri('projects/index'); ?>" class="black-link">
<div class="card bg-white">
    <div class="card-header">
        <i data-feather="list" class="icon-16"></i> Proyek Statistik Chart 
    </div>
    <div class="card-body rounded-bottom">
        <canvas id="my-task-status-pai" style="width: 100%; height: 300px;"></canvas>
    </div>
</div>
</a>
<?php
$task_title = array();
// $task_data = array();
// $task_status_color = array();
foreach ($project_statuses as $status) {
    // $task_title[] = $status->statuses;
    $task_data[] = $status->total;
    // $task_status_color[] = $status->color;
}
?>
<script type="text/javascript">
    //for task status chart
    // var labels = <?php echo json_encode($task_title) ?>;
    var taskData = <?php echo json_encode($task_data) ?>;
  
    var myTaskStatusPie = document.getElementById("my-task-status-pai");

    new Chart(myTaskStatusPie, {
        type: 'doughnut',
        data: {
            labels: ['Open', 'Complete', 'Hold', 'Canceled'],
            datasets: [
                {
                    data: taskData,
                     backgroundColor: ["#00B393","#1672B9","#808080", "#FF0000"],
                    borderWidth: 0
                }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            tooltips: {
                callbacks: {
                    afterLabel: function (tooltipItem, data) {
                        var dataset = data['datasets'][0];
                        var percent = Math.round((dataset['data'][tooltipItem['index']] / dataset["_meta"][Object.keys(dataset["_meta"])[0]]['total']) * 100);
                        return '(' + percent + '%)';
                    }
                }
            },
            legend: {
                display: true,
                position: 'bottom',
                labels: {
                    fontColor: "#898fa9"
                }
            },
            animation: {
                animateScale: true
            }
        }
    });
</script>
<?php
// echo $task_data;