<?php
include 'partials/header.php';
?>

<br />
<br />
<br />

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load("current", { packages: ["corechart"] });
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Application', 'Submission per Year'],
            ['Students', 9],
            ['Vice-Chancellor Office', 4],
            ['Treasurer Office', 2],
            ['Dean Office', 2],
            ['Registrar Office', 8]
            // ['Central Library', 2]
            // ['Proctor Office', 4]
        ]);

        var options = {
            title: 'Statistical Overview',
            pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
    }
</script>

<div align="center" id="donutchart" style="width: auto; height: 500px;"></div>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', { 'packages': ['corechart', 'bar'] });
    google.charts.setOnLoadCallback(drawStuff);

    function drawStuff() {

        var button = document.getElementById('change-chart');
        var chartDiv = document.getElementById('chart_div');

        var data = google.visualization.arrayToDataTable([
            ['Total Submission', 'Solved', 'Unsolved'],
            ['Students', 45, 5],
            ['Vice-Chancellor Office', 35, 7],
            ['Treasurer Office', 17, 4],
            ['Dean Office', 18, 3],
            ['Registrar Office', 32, 25]
        ]);

        var materialOptions = {
            width: 900,
            chart: {
                title: 'Summery Report',
                // subtitle: 'distance on the left, brightness on the right'
            },
            series: {
                0: { axis: 'Solved' }, // Bind series 0 to an axis named 'distance'.
                1: { axis: 'Unsolved' } // Bind series 1 to an axis named 'brightness'.
            },
            axes: {
                y: {
                    distance: { label: 'parsecs' }, // Left y-axis.
                    brightness: { side: 'right', label: 'apparent magnitude' } // Right y-axis.
                }
            }
        };

        var classicOptions = {
            width: 900,
            series: {
                0: { targetAxisIndex: 0 },
                1: { targetAxisIndex: 1 }
            },
            title: 'Nearby galaxies - distance on the left, brightness on the right',
            vAxes: {
                // Adds titles to each axis.
                0: { title: 'parsecs' },
                1: { title: 'apparent magnitude' }
            }
        };

        function drawMaterialChart() {
            var materialChart = new google.charts.Bar(chartDiv);
            materialChart.draw(data, google.charts.Bar.convertOptions(materialOptions));
            button.innerText = 'Change to Classic';
            button.onclick = drawClassicChart;
        }

        function drawClassicChart() {
            var classicChart = new google.visualization.ColumnChart(chartDiv);
            classicChart.draw(data, classicOptions);
            button.innerText = 'Change to Material';
            button.onclick = drawMaterialChart;
        }

        drawMaterialChart();
    };
</script>

<!-- <button id="change-chart">Change to Classic</button> -->
    <br><br>
    <div align="center" id="chart_div" style="width: auto; height: 500px;"></div>

    <br />
    <br />
    <br />