<!DOCTYPE html>
<html>
<head>
<title>BIPVote by ICT4D</title>
<meta http-equiv="refresh" content="10">
<style type="text/css">
.chart-container {
    display: inline-block;
    width: 100%;
}

.pie-chart {
    margin: 40px 20px;
}
</style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
</head>
<body>
    <div class="chart-container pie-chart">
        <canvas id="pie-chart"></canvas>
    </div>
    <script src="./assets/js/graph.js"></script>
    <script>
$(document).ready(function () {
       showPieChart();
  });
</script>

</body>
</html>
