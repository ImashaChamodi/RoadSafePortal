<?php
include('nav.php');

?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
        function click_button()
        {
            google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'accident'],
          ['Car',     15],
          ['Bike',      12],
          ['Lorry',  2],
          ['ThreeWheelers', 2],
          ['Bus',   17]
        ]);

        var options = {
          title: 'Accident'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
        }
      
    </script>
  </head>
  <body>

  <button onclick="click_button()">Generate Graph</button>

  <select>
      <option>All</option>
      <option>2022</option>
      <option>2021</option>
      <option>2020</option>
  </select>

  <select>
      <option>All</option>
      <option>Accident</option>
  </select>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
    
  </body>
</html>
