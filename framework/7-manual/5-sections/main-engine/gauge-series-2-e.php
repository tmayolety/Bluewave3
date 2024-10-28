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
		margin: [0,0,0,0],
		styledMode: true
	  },
	  
	  title: null,

	  pane: {
		center: ['50%', '50%'],
		size: '100%',
		startAngle: -130,
		endAngle: 130,
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
		  distance: -28,
		  step: 1,
		},
		
	      plotBands: [{
	        from: 0,
	        to: 30,
	        className: 'plotBands-red',
	        outerRadius: '100%',
	        innerRadius: '97%',
	      }, {
	        from: 0,
	        to: 30,
	        className: 'plotBands-red-bg',
	        outerRadius: '100%',
	        innerRadius: '85%',
	      }, {
	        from: 30,
	        to: 60,
	        className: 'plotBands-yellow',
	        outerRadius: '100%',
	        innerRadius: '97%',
	      }, {
	        from: 30,
	        to: 60,
	        className: 'plotBands-yellow-bg',
	        outerRadius: '100%',
	        innerRadius: '85%',
	      }, {
	        from: 140,
	        to: 170,
	        className: 'plotBands-yellow',
	        outerRadius: '100%',
	        innerRadius: '97%',
	      }, {
	        from: 140,
	        to: 170,
	        className: 'plotBands-yellow-bg',
	        outerRadius: '100%',
	        innerRadius: '85%',
	      }, {
	        from: 170,
	        to: 225,
	        className: 'plotBands-red',
	        outerRadius: '100%',
	        innerRadius: '97%',
	      }, {
	        from: 170,
	        to: 225,
	        className: 'plotBands-red-bg',
	        outerRadius: '100%',
	        innerRadius: '85%',
	      }, {
	        from: 60,
	        to: 140,
	        className: 'plotBands-gray-bg',
	        outerRadius: '100%',
	        innerRadius: '97%',
	      }]
	  },

	  plotOptions: {
		solidgauge: {
		  innerRadius: '85%',      
		  dataLabels: {
			y: -40,
			borderWidth: 0,
			useHTML: true,
		  }
		}
	  }, 
	};

	// The speed gauge
	var chartSpeed = Highcharts.chart('gauge-series-2-e', Highcharts.merge(gaugeOptions, {
	  yAxis: {
		min: 0,
		max: 200,
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
		  format:
			'<div class="info">' +
				'<h4 class="title1">{y}</h4>' +
				'<h6 class="title2" style="margin-bottom:10px;">km/h</h6>' +
				'<?php echo file_get_contents('../3-modules/icons/batteries.svg'); ?>' +
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