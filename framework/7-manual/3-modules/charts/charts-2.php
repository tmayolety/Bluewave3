
<script src="../../../prototype/js/lightning/lcjs.iife.js"></script>
<script language="JavaScript">
    const {
        GaugeChartTypes,
        lightningChart,
        AxisTickStrategies,
        DataPatterns,
        emptyFill,
        AxisScrollStrategies,
        AutoCursorModes,
        ColorHEX,
        SolidLine,
        SolidFill,
		ColorRGBA
    } = lcjs



</script>



<section>

	<article>

		<h2 class="ui h2 mg-med font-black">Gauge</h2>

		<div class="ui grid type1 pad-lg gap-med
					cols-xs-2 cols-sm-12 cols-tv-pt-2 cols-tv-ld-2 cols-tablet-ld-2 cols-tablet-pt-2">

			<div class="ui col
						xs-2 sm-6 tv-pt-1 tv-ld-1 tablet-ld-1 tablet-pt-1
						h-sm-300 h-xs-200 h-tv-pt-300 h-tv-ld-300 h-tablet-ld-280 h-tablet-ld-350">

				<div id="gauge-semi" class="ui chart-container color-success h-xs-300 h-med-400 h-tv-pt-500 h-tv-ld-450 h-tablet-ld-400 h-tablet-pt-430"></div>
			</div>
			<div class="ui col
						xs-2 sm-6 tv-pt-1 tv-ld-1 tablet-ld-1 tablet-pt-1
						h-sm-300 h-xs-200 h-tv-pt-300 h-tv-ld-300 h-tablet-ld-280 h-tablet-ld-350">

				<div id="gauge-semi2" class="ui chart-container color-success h-xs-300 h-med-400 h-tv-pt-500 h-tv-ld-450 h-tablet-ld-400 h-tablet-pt-430"></div>
			</div>
			<div class="ui col
						xs-2 sm-6 tv-pt-1 tv-ld-1 tablet-ld-1 tablet-pt-1
						h-sm-300 h-xs-200 h-tv-pt-300 h-tv-ld-300 h-tablet-ld-280 h-tablet-ld-350">

				<div id="gauge-semi3" class="ui chart-container color-success h-xs-300 h-med-400 h-tv-pt-500 h-tv-ld-450 h-tablet-ld-400 h-tablet-pt-430"></div>
			</div>
			<div class="ui col
						xs-2 sm-6 tv-pt-1 tv-ld-1 tablet-ld-1 tablet-pt-1
						h-sm-300 h-xs-200 h-tv-pt-300 h-tv-ld-300 h-tablet-ld-280 h-tablet-ld-350">

				<div id="gauge-semi4" class="ui chart-container color-success h-xs-300 h-med-400 h-tv-pt-500 h-tv-ld-450 h-tablet-ld-400 h-tablet-pt-430"></div>
			</div>
			<div class="ui col
						xs-2 sm-6 tv-pt-1 tv-ld-1 tablet-ld-1 tablet-pt-1
						h-sm-300 h-xs-200 h-tv-pt-300 h-tv-ld-300 h-tablet-ld-280 h-tablet-ld-350">

				<div id="gauge-semi5" class="ui chart-container color-success h-xs-300 h-med-400 h-tv-pt-500 h-tv-ld-450 h-tablet-ld-400 h-tablet-pt-430"></div>
			</div>
			
		</div>

	</article>
	

</section>
<script language="javascript">

// Initialize gauge
const gauge = lightningChart().Gauge({
	containerId: 'gauge-semi',
    type: GaugeChartTypes.Solid
})
    .setTitle('Annual sales goal')
    .setThickness(80)
    .setDataLabelFormatter(new Intl.NumberFormat('en-US', { style: 'currency', currency: 'USD' }))
    .setGaugeStrokeStyle(new SolidLine().setFillStyle(new SolidFill()).setThickness(1))
    .setAngleInterval(225, -45);

// Create slice
const slice = gauge
    .getDefaultSlice()
    .setInterval(0, 400000)
    .setValue(9000)
    .setFillStyle(new SolidFill({ color: ColorRGBA(12, 213, 87) }))
    .setName('2019 sales');



// Initialize gauge
const gauge2 = lightningChart().Gauge({
	containerId: 'gauge-semi2',
    type: GaugeChartTypes.Solid
})
    .setTitle('Annual sales goal')
    .setThickness(80)
    .setDataLabelFormatter(new Intl.NumberFormat('en-US', { style: 'currency', currency: 'USD' }))
    .setGaugeStrokeStyle(new SolidLine().setFillStyle(new SolidFill()).setThickness(1))
    .setAngleInterval(225, -45);

// Create slice
const slice2 = gauge2
    .getDefaultSlice()
    .setInterval(0, 400000)
    .setValue(9000)
    .setFillStyle(new SolidFill({ color: ColorRGBA(12, 213, 87) }))
    .setName('2019 sales');

// Initialize gauge
const gauge3 = lightningChart().Gauge({
	containerId: 'gauge-semi3',
    type: GaugeChartTypes.Solid
})
    .setTitle('Annual sales goal')
    .setThickness(80)
    .setDataLabelFormatter(new Intl.NumberFormat('en-US', { style: 'currency', currency: 'USD' }))
    .setGaugeStrokeStyle(new SolidLine().setFillStyle(new SolidFill()).setThickness(1))
    .setAngleInterval(225, -45);

// Create slice
const slice3 = gauge3
    .getDefaultSlice()
    .setInterval(0, 400000)
    .setValue(9000)
    .setFillStyle(new SolidFill({ color: ColorRGBA(12, 213, 87) }))
    .setName('2019 sales');

// Initialize gauge
const gauge4 = lightningChart().Gauge({
	containerId: 'gauge-semi4',
    type: GaugeChartTypes.Solid
})
    .setTitle('Annual sales goal')
    .setThickness(80)
    .setDataLabelFormatter(new Intl.NumberFormat('en-US', { style: 'currency', currency: 'USD' }))
    .setGaugeStrokeStyle(new SolidLine().setFillStyle(new SolidFill()).setThickness(1))
    .setAngleInterval(225, -45);

// Create slice
const slice4 = gauge4
    .getDefaultSlice()
    .setInterval(0, 400000)
    .setValue(9000)
    .setFillStyle(new SolidFill({ color: ColorRGBA(12, 213, 87) }))
    .setName('2019 sales');

// Initialize gauge
const gauge5 = lightningChart().Gauge({
	containerId: 'gauge-semi5',
    type: GaugeChartTypes.Solid
})
    .setTitle('Annual sales goal')
    .setThickness(80)
    .setDataLabelFormatter(new Intl.NumberFormat('en-US', { style: 'currency', currency: 'USD' }))
    .setGaugeStrokeStyle(new SolidLine().setFillStyle(new SolidFill()).setThickness(1))
    .setAngleInterval(225, -45);

// Create slice
const slice5 = gauge5
    .getDefaultSlice()
    .setInterval(0, 400000)
    .setValue(9000)
    .setFillStyle(new SolidFill({ color: ColorRGBA(12, 213, 87) }))
    .setName('2019 sales');


	setInterval(function(){ 
		slice.setValue(0 + Math.floor((400000 - 0) * Math.random())); 
		slice2.setValue(0 + Math.floor((400000 - 0) * Math.random())); 
		slice3.setValue(0 + Math.floor((400000 - 0) * Math.random())); 
		slice4.setValue(0 + Math.floor((400000 - 0) * Math.random())); 
		slice5.setValue(0 + Math.floor((400000 - 0) * Math.random())); 
		
	}, 300);



</script>