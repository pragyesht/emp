<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawAnnotations);

function drawAnnotations() {
      var data = google.visualization.arrayToDataTable([
        ['Department', 'Total Salary'],
        <?php foreach($chart_emps as $m){ 
            echo "['" . $m['me_dept_id'] . "', " . $m['me_salary'] . "],";
        } ?>

      ]);


      var options = {
        title: 'Salary Overview : Department Wise',
        chartArea: {width: '50%'},
        annotations: {
          alwaysOutside: true,
          textStyle: {
            fontSize: 12,
            auraColor: 'none',
            color: '#555'
          },
          boxStyle: {
            stroke: '#ccc',
            strokeWidth: 1,
            gradient: {
              color1: '#f3e5f5',
              color2: '#f3e5f5',
              x1: '0%', y1: '0%',
              x2: '100%', y2: '100%'
            }
          }
        },
        hAxis: {
          title: 'Total Salary',
          minValue: 0,
        },
        vAxis: {
          title: 'Department'
        }
      };
      var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    }
</script>
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Master Emps Chart</h3>
            </div>
            <div class="box-body">
                <div id="chart_div"></div>               
            </div>
        </div>
    </div>
</div>