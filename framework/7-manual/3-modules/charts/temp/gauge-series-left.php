<script>

$(function () {

  var gaugeOptions = {  
    chart: {
      type: 'solidgauge',
      margin: [20,20,20,20],
      styledMode: true
    },
    
    title: null,

    pane: {
      center: ['50%', '50%'],
      size: '100%',
      startAngle: -125,
      endAngle: -55,
      background: {
        innerRadius: '92%',
        outerRadius: '98%',
        shape: 'arc',
      }
    },

    exporting: {
      enabled: false
    },

    tooltip: {
      enabled: false
    },

    // the value axis
    yAxis: {
      lineWidth: 0,
      
      tickAmount: 10,
      tickLength: 12,
      tickWidth:2,
      tickPosition: "outside",
      distance: 15,
      
      minorTickLength: 5,
      minorGridLineWidth: 0,
      minorTickInterval: 'auto',
      minorTickPosition: 'outside',
      minorTickWidth: 1,
      
      labels: {
        distance: -32,
        step: 2,
      },
      
      plotBands: [{
        from: 0,
        to: 45,
        className : 'plotBands-yellow',
        innerRadius: '98%',
        outerRadius: '100%',
        zIndex: 200,
      }, {
        from: 0,
        to: 45,
        className : 'plotBands-yellow-bg',
        innerRadius: '92%',
        outerRadius: '98%',
       }, {
        from: 175,
        to: 225,
        className : 'plotBands-red',
        innerRadius: '98%',
        outerRadius: '100%',
        zIndex: 200,
       }, {
        from: 175,
        to: 225,
        className : 'plotBands-red-bg',
        innerRadius: '92%',
        outerRadius: '98%',
       }, {
        from: 45,
        to: 175,
        className : 'plotBands-gray-bg',
        innerRadius: '98%',
        outerRadius: '100%',
       }]
    },

    plotOptions: {
      solidgauge: {
        innerRadius: '98%',  
        dataLabels: {
          enabled: false,
        },   
      },
    }, 
  };

  // The speed gauge
  var chartSpeed = Highcharts.chart('gauge-series-left', Highcharts.merge(gaugeOptions, {
    yAxis: {
      min: 0,
      max: 200,
    },

    credits: {
      enabled: false
    },

    series: [{
      name: 'Speed',
      radius: 92,
      data: [{
        y: 80,
        className : 'highcharts-point-active'
      }, {      
        y: 225,
        className : 'highcharts-point-bg'
      }],    
    }],

  }));

  // Bring life to the dials
  setInterval(function () {
    // Speed
    var point,
      newVal,
      inc;

    if (chartSpeed) {
      point = chartSpeed.series[0].points[0];
      inc = Math.round((Math.random() - 0.5) * 200);
      newVal = point.y + inc;

      if (newVal < 0 || newVal > 200) {
        newVal = point.y - inc;
      }

      point.update(newVal);
    }

  }, 2000);

});
</script>