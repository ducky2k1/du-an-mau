<div class="" style="width:100%; display:flex; justify-content:center">
    <div id="piechart"></div>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
        // Load google charts
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        // Draw the chart and set the chart values
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Tên loại', 'Số lượng sản phẩm'],

                <?php
                $sum = count($tk);
                $i = 1;
                foreach ($tk as $tkm) {
                    ($i==$sum)? $dau="": $dau=",";
                    echo "['",$tkm['tl'],"',",$tkm['sl'],"]",$dau;
                    $i+=1;
                } ?>
            ]);

            // Optional; add a title and set the width and height of the chart
            var options = {
                'title': 'Biểu đồ loại hàng',
                'width': 550,
                'height': 400
            };

            // Display the chart inside the <div> element with id="piechart"
            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);
        }
    </script>
</div>