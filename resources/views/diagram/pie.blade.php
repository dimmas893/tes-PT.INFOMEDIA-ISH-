<!--
 THIS EXAMPLE WAS DOWNLOADED FROM https://echarts.apache.org/examples/en/editor.html?c=pie-simple
-->
<!DOCTYPE html>
<html lang="en" style="height: 100%">

<head>
    <meta charset="utf-8">
</head>

<body style="height: 100%; margin: 0">
    <div id="container" style="height: 100%"></div>


    <script type="text/javascript" src="https://fastly.jsdelivr.net/npm/echarts@5.4.3/dist/echarts.min.js"></script>
    <!-- Uncomment this line if you want to dataTool extension
  <script type="text/javascript" src="https://fastly.jsdelivr.net/npm/echarts@5.4.3/dist/extension/dataTool.min.js">
  </script>
  -->
    <!-- Uncomment this line if you want to use gl extension
  <script type="text/javascript" src="https://fastly.jsdelivr.net/npm/echarts-gl@2/dist/echarts-gl.min.js"></script>
  -->
    <!-- Uncomment this line if you want to echarts-stat extension
  <script type="text/javascript" src="https://fastly.jsdelivr.net/npm/echarts-stat@latest/dist/ecStat.min.js"></script>
  -->
    <!-- Uncomment this line if you want to use map
  <script type="text/javascript" src="https://fastly.jsdelivr.net/npm/echarts@4.9.0/map/js/china.js"></script>
  <script type="text/javascript" src="https://fastly.jsdelivr.net/npm/echarts@4.9.0/map/js/world.js"></script>
  -->
    <!-- Uncomment these two lines if you want to use bmap extension
  <script type="text/javascript" src="https://api.map.baidu.com/api?v=3.0&ak=YOUR_API_KEY"></script>
  <script type="text/javascript" src="https://fastly.jsdelivr.net/npm/echarts@5.4.3/dist/extension/bmap.min.js"></script>
  -->

    <script type="text/javascript">
        var dom = document.getElementById('container');
        var myChart = echarts.init(dom, null, {
            renderer: 'canvas',
            useDirtyRect: false
        });
        var app = {};

        var option;

        option = {
            title: {
                text: 'Analisis',
                subtext: 'Data Task',
                left: 'center'
            },
            tooltip: {
                trigger: 'item'
            },
            legend: {
                orient: 'vertical',
                left: 'left'
            },
            series: [{
                name: 'Access From',
                type: 'pie',
                radius: '50%',
                data: [
                    <?php foreach ($data as $row) : ?> {
                        value: <?= $row['jumlahtask'] ?>,
                        name: '<?= $row['vendor'] ?>'
                    },
                    <?php endforeach; ?>
                ],
                emphasis: {
                    itemStyle: {
                        shadowBlur: 10,
                        shadowOffsetX: 0,
                        shadowColor: 'rgba(0, 0, 0, 0.5)'
                    }
                }
            }]
        };

        if (option && typeof option === 'object') {
            myChart.setOption(option);
        }

        window.addEventListener('resize', myChart.resize);
    </script>
</body>

</html>
