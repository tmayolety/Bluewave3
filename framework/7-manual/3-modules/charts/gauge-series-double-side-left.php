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
		startAngle: -130,
		endAngle: 0,
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
		//stops: [
		//  [0.1, 'var(--main-bg-color1)'], // green
		//  [0.5, 'var(--main-bg-color2)'], // yellow
		//  [0.9, 'var(--main-bg-color3)'] // red
		//],
		lineWidth: 0,
		
		tickAmount: 10,
		tickLength: 12,
		tickWidth: 2,
		tickPosition: "inside",
		tickColor: 'rgba(255,255,255,0.2)',
		distance: 15,
		
		minorTickPosition: 'inside',
		
		labels: {
		  distance: -45,
		  step: 1,
		},		
		
	      plotBands: [{
	        from: 225,
	        to: 150,
	        className: 'plotBands-red',
	        outerRadius: '100%',
	        innerRadius: '97%',
	      }, {
	        from: 225,
	        to: 150,
	        className: 'plotBands-red-bg',
	        outerRadius: '100%',
	        innerRadius: '85%',
	      }, {
	        from: 150,
	        to: 120,
	        className: 'plotBands-yellow',
	        outerRadius: '100%',
	        innerRadius: '97%',
	      }, {
	        from: 150,
	        to: 120,
	        className: 'plotBands-yellow-bg',
	        outerRadius: '100%',
	        innerRadius: '85%',
	      }, {
	        from: 120,
	        to: 0,
	        className: 'plotBands-gray',
	        outerRadius: '100%',
	        innerRadius: '85%',
	      }, {
	        from: 120,
	        to: 0,
	        className: 'plotBands-gray-bg',
	        outerRadius: '100%',
	        innerRadius: '97%',
	      }]
	  },

	  plotOptions: {
		solidgauge: {
		  innerRadius: '85%',      
		  dataLabels: {
			y: -85,
			borderWidth: 0,
			useHTML: true,
		  }
		}
	  }, 
	};

	// The speed gauge
	var chartSpeed = Highcharts.chart('gauge-series-double-side-left', Highcharts.merge(gaugeOptions, {
	  yAxis: {
		min: 0,
		max: 200,
		reversed: true,
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