<script>
function setDivHeight() {
	var div = $('#container-speed');
	div.height(div.width() * 0.75);
}

$(function () {
	setDivHeight();
	
	$(window).on('load resize', function(){
			setDivHeight();        
	});

	var gaugeOptions = {
		chart: {
			type: 'solidgauge',
			backgroundColor: 'rgba(0,0,0,0)'
		},
		
		defs: {
			filter: {
				id: 'id1'
			},
		},

		title: null,

		pane: {
			center: ['50%', '50%'],
			size: '90%',
			startAngle: -90,
			endAngle: 90,
			background: {
				backgroundColor:
					Highcharts.defaultOptions.legend.backgroundColor || 'rgba(255,255,255,0.1)',
				innerRadius: '86%',
				outerRadius: '96%',
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
			stops: [
				[0.1, '#55BF3B'], // green
				[0.5, '#DDDF0D'], // yellow
				[0.9, '#DF5353'] // red
			],
			lineWidth: 0,
			
			tickAmount: 10,
			tickLength: 12,
			tickWidth:2,
			tickPosition: "outside",
			tickColor: 'rgba(255,255,255,0.2)',
			distance: 15,
			
			minorTickLength: 6,
			minorGridLineWidth: 0,
			minorTickInterval: 'auto',
			minorTickPosition: 'outside',
			minorTickWidth: 1,
			minorTickColor: 'rgba(255,255,255,0.15)',
			
			zIndex: 100,
		 
			labels: {
				distance: 25,
				step: 1,
				style: {
					color: 'rgba(255,255,255,0.2)',
					fontSize: 11,
				},
			},
			
			plotBands: [{
				from: 25,
				to: 65,
				color: '#FFFF00',
				innerRadius: '81%',
				outerRadius: '83%',
				zIndex: 200,
			},                
			{
				from: 165,
				to: 220,
				color: '#FF0000',
				innerRadius: '81%',
				outerRadius: '83%',
				zIndex: 200,
			 }]
		},

		plotOptions: {
			solidgauge: {
				outerRadius: '120%',
				innerRadius: '86%',
				
				dataLabels: {
					y: -72,
					borderWidth: 0,
					useHTML: true
				}
			}
		}
	};

	// The speed gauge
	var chartSpeed = Highcharts.chart('container-speed', Highcharts.merge(gaugeOptions, {
		yAxis: {
			min: 0,
			max: 200,
		},

		credits: {
			enabled: false
		},

		series: [{
			name: 'Speed',
			data: [80],
			dataLabels: {
				format:
					'<div class="info">' +
							'<h4 class="title1">{y}</h4>' +
							'<h6 class="title2">km/h</h6>' +
					'</div>'
			},
			tooltip: {
				valueSuffix: ' km/h'
			}
		}]

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

	}, 200000);

	
});
</script>