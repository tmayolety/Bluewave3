<script>

$(function () {

	// DEFINE GLOW EFFECT //
	Highcharts.setOptions({
		defs: {
			glow: {
				tagName: 'filter',
				id: 'glow',
				opacity: 0.1,
				children: [{
					tagName: 'feGaussianBlur',
					result: 'coloredBlur',
					stdDeviation: 5
			  	}, {
					tagName: 'feMerge',
					children: [{
						tagName: 'feMergeNode',
						in: 'coloredBlur'
					}, {
						tagName: 'feMergeNode',
						in: 'SourceGraphic'
					}]
				}]
			}
		},
	});



	var gaugeOptions = {  
	  chart: {
		type: 'solidgauge',
		backgroundColor: 'rgba(0,0,0,0)',
		margin: [0,15,0,15],
		styledMode: true
	  },
	  
	  title: null,

	  pane: {
		center: ['50%', '75%'],
		size: '100%',
		startAngle: -90,
		endAngle: 90,
		background: {
		  backgroundColor:
			Highcharts.defaultOptions.legend.backgroundColor || 'rgba(255,255,255,0.1)',
		  innerRadius: '80%',
		  outerRadius: '80%',
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
		lineWidth: 0,
		
		tickAmount: 10,
		tickLength: 12,
		tickWidth: 2,
		tickPosition: "outside",
		tickColor: 'rgba(255,255,255,0.2)',
		distance: -55,
		
		minorTickLength: 5,
		minorGridLineWidth: 0,
		minorTickInterval: 'auto',
		minorTickPosition: 'inside',
		minorTickWidth: 1,
		minorTickColor: 'rgba(255,255,255,0.15)',
		
		labels: {
		  distance: -5000,
		  step: 4.5,
		  style: {
			color: 'rgba(255,255,255,0.2)',
			fontSize: 11,
		  },
		},
	  },

	  plotOptions: {
		solidgauge: {
		  innerRadius: '100%',      
		  dataLabels: {
			y: -30,
			borderWidth: 0,
			useHTML: true,
		  }
		}
	  }, 
	};

	// The speed gauge
	var chartSpeed = Highcharts.chart('gauge-semi-singleline-header', Highcharts.merge(gaugeOptions, {
	  yAxis: {
		min: 0,
		max: 200,
	  },

	  credits: {
		enabled: false
	  },

	  series: [{
		name: 'Speed',
		radius: 85,
		data: [{
		  y: 80,
		  className : 'highcharts-point-active'
		}, {      
		  y: 225,
		  className : 'highcharts-point-bg'
		}],    
		dataLabels: {
		  format:
			'<div class="info" style="display:none">' +
				'<h4 class="title1">{y}</h4>' +
				'<h6 class="title2">Amps</h6>' +
			'</div>'
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

	}, 2000);

		
});

</script>