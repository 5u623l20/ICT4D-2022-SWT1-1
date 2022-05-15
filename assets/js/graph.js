function showPieChart() {
{
    $.post("ajax-endpoint/get-chart-data.php?chart_type=pie",
        function(data) {
            var chartdata = {
                labels: [
                    'YES',
                    'NO'
                ],
                datasets: [
                {
                    label: 'Vote Counts',
                    backgroundColor: [
                        'rgb(255, 99, 132)',
                        'rgb(54, 162, 235)'
                    ],
                    data: data
                }
                ]
            };

            var graphTarget = $("#pie-chart");

            var graph = new Chart(graphTarget, {
                type: 'pie',
                data: chartdata
            });
        }
    );
}
}
