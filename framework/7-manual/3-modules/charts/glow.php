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
					stdDeviation: 0.5
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
});

</script>