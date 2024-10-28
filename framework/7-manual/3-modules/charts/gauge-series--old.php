<script>

$(function () {

  Highcharts.chart('gauge-series--old', {

    chart: {
      type: 'gauge',
      styledMode: true,
      margin: [0,0,0,0],
    },

    title: null,

    credits: {
      enabled: false
    },
   
    exporting: {
       enabled: false
    },
    
    pane: {
      startAngle: -130,
      endAngle: 130,
       background: {
        outerRadius: '98%',
        innerRadius: '90%',
        shape: 'arc'
      }
    },

    // the value axis
    yAxis: [{
      min: 0,
      max: 200,
      
      tickPixelInterval: 30,    
      minorTickInterval: 'auto',
      
      labels: {
        distance: -30,
        step: 2,
        //rotation: 'auto'
      },
      
      title: 'null',
      
      plotBands: [{
        from: 0,
        to: 30,
        className: 'plotBands-red',
        outerRadius: '100%',
        innerRadius: '98%',
      }, {
        from: 0,
        to: 30,
        className: 'plotBands-red-bg',
        outerRadius: '100%',
        innerRadius: '90%',
      }, {
        from: 30,
        to: 60,
        className: 'plotBands-yellow',
        outerRadius: '100%',
        innerRadius: '98%',
      }, {
        from: 30,
        to: 60,
        className: 'plotBands-yellow-bg',
        outerRadius: '100%',
        innerRadius: '90%',
      }, {
        from: 140,
        to: 170,
        className: 'plotBands-yellow',
        outerRadius: '100%',
        innerRadius: '98%',
      }, {
        from: 140,
        to: 170,
        className: 'plotBands-yellow-bg',
        outerRadius: '100%',
        innerRadius: '90%',
      }, {
        from: 170,
        to: 200,
        className: 'plotBands-red',
        outerRadius: '100%',
        innerRadius: '98%',
      }, {
        from: 170,
        to: 200,
        className: 'plotBands-red-bg',
        outerRadius: '100%',
        innerRadius: '90%',
      }, {
        from: 60,
        to: 140,
        className: 'plotBands-gray-bg',
        outerRadius: '100%',
        innerRadius: '98%',
      }]
    }],

    series: [{
      name: 'Speed',
      data: [80],
      tooltip: {
        valueSuffix: ' km/h'
      }
    }],

      plotOptions: {
          gauge: {
              pivot: {
                  radius: 75,
              },
              dial: {
                  radius: '88',
                  baseWidth: 8,
                  topWidth: 2,
                  baseLength: '50%', // of radius
                  rearLength: '50%'
              }
          }
      },

  },
  // Add some life
  function (chart) {
    if (!chart.renderer.forExport) {
      setInterval(function () {
        var point = chart.series[0].points[0],
          newVal,
          inc = Math.round((Math.random() - 0.5) * 20);

        newVal = point.y + inc;
        if (newVal < 0 || newVal > 200) {
          newVal = point.y - inc;
        }

        point.update(newVal);

      }, 3000);
    }
  });

});

</script>