<script>

$(function () {

	var gaugeOptions = {  
	  chart: {
		type: 'solidgauge',
		backgroundColor: 'rgba(0,0,0,0)',
		margin: [15,15,15,15],
		styledMode: true
	  },
	  
	  title: null,

	  pane: {
		center: ['75%', '100%'],
		size: '200%',
		startAngle: -90,
		endAngle: 0,
		background: {
		  backgroundColor:
			Highcharts.defaultOptions.legend.backgroundColor || 'rgba(255,255,255,0.1)',
		  innerRadius: '88%',
		  outerRadius: '92%',
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
		
		tickAmount: 5,
		tickLength: 12,
		tickWidth:2,
		tickPosition: "inside",
		tickColor: 'rgba(255,255,255,0.2)',
		distance: 15,
		
		minorTickLength: 5,
		minorGridLineWidth: 0,
		minorTickInterval: 'auto',
		minorTickPosition: 'inside',
		minorTickWidth: 1,
		minorTickColor: 'rgba(255,255,255,0.15)',
		
		labels: {
		  distance: 0,
		  step: 1,
		  style: {
			color: 'rgba(255,255,255,0.2)',
			fontSize: 11,
		  },
		},
		
		plotBands: [{
		  from: 10,
		  to: 45,
		  className : 'plotBands-yellow',
		  innerRadius: '70%',
		  outerRadius: '72%',
		  zIndex: 200,
		},                
		{
		  from: 175,
		  to: 220,
		  className : 'plotBands-red',
		  innerRadius: '70%',
		  outerRadius: '72%',
		  zIndex: 200,
		 }]
	  },

	  plotOptions: {
		solidgauge: {
		  innerRadius: '75%',      
		  dataLabels: {
			y: -82,
			borderWidth: 0,
			useHTML: true,
		  }
		}
	  }, 
	};

	// The speed gauge
	var chartSpeed = Highcharts.chart('gauge-quarter', Highcharts.merge(gaugeOptions, {
	  yAxis: {
		min: 0,
		max: 200,
	  },

	  credits: {
		enabled: false
	  },

	  series: [{
		name: 'Speed',
		radius: 83,
		data: [{
		  y: 80,
		  className : 'highcharts-point-active'
		}, {      
		  y: 225,
		  className : 'highcharts-point-bg'
		}],    
		dataLabels: {
		  format:
			'<div class="info">' +
				'<h4 class="title1">{y}</h4>' +
				'<h6 class="title2">km/h</h6>' +
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