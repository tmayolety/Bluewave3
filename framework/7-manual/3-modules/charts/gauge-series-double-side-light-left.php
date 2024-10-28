<script>

$(function () {

	var gaugeOptions = {  
	  chart: {
		type: 'solidgauge',
		backgroundColor: 'rgba(0,0,0,0)',
		margin: [0,0,0,0],
		styledMode: true
	  },
	  
	  title: null,

	  pane: {
		center: ['50%', '50%'],
		size: '100%',
		startAngle: 0,
		endAngle: -130,
		background: {
		  backgroundColor:
			Highcharts.defaultOptions.legend.backgroundColor || 'rgba(255,255,255,0.1)',
		  innerRadius: '97%',
		  outerRadius: '85%',
		  shape: 'arc',
		  borderWidth:0
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
		labels: {
			distance: -45,
			step: 0,
		},
	  },

	  plotOptions: {
		solidgauge: {
		  innerRadius: '85%',
		}
	  }, 
	};

	// The speed gauge
	var chartSpeed = Highcharts.chart('gauge-series-double-side-light-left', Highcharts.merge(gaugeOptions, {
	  yAxis: {
		min: 0,
		max: 200,
		//reversed: true,
	  },

	  credits: {
		enabled: false
	  },

	  series: [{
		name: 'Speed',
		radius: 97,
		data: [{
		  y: 80,
		  className : 'highcharts-point-active'
		}, {      
		  y: 225,
		  className : 'highcharts-point-bg'
		}],
		dataLabels: {
		  format: ''
		},
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

	}, 20000);

		
});

</script>