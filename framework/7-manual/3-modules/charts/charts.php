

<?php include('7-manual/3-modules/charts/glow.php') ?>

<section>

	<?php include('7-manual/3-modules/charts/header.php'); ?>

	<article>

		<h2 class="ui h2 mg-med font-bold">Gauge</h2>

		<div class="ui grid type1 pad-lg gap-med
					cols-xs-2 cols-sm-12 cols-tv-pt-2 cols-tv-ld-2 cols-tablet-ld-2 cols-tablet-pt-2">


			<!-- GAUGE SERIE MULTI x4 -->
			<div class="ui col
						xs-2 sm-6 tv-pt-1 tv-ld-1 tablet-ld-1 tablet-pt-1
						h-xs-360 h-sm-360 h-tv-pt-360 h-tv-ld-360 h-tv-pt-360 h-tablet-ld-360">
				<h5 class="ui h5">Gauge Series Multi</h5>
				<?php include('7-manual/3-modules/charts/gauge-series-double-side-light-left.php') ?>
				<?php include('7-manual/3-modules/charts/gauge-series-double-side-light-right.php') ?>
				<?php include('7-manual/3-modules/charts/gauge-series-left.php') ?>
				<?php include('7-manual/3-modules/charts/gauge-series-right.php') ?>
				<div class="chart-container outside-highchart color-success
							info-tv-ld-xl info-tv-pt-xl mg-top-tv-ld-80-negative mg-top-tv-pt-80-negative">
					<div class="info">
						<?php echo file_get_contents('3-modules/icons/turbo.svg'); ?>
						<h5 class="ui h5 font-regular mg-sm">lorem ipsum</h5>
						<h4 class="title1">180</h4>
						<h6 class="title2 mg-lg">km/h</h6>
					</div>
				</div>
				<div id="gauge-series-double-side-light-left" class="ui chart-container color-danger
																	h-xs-220 h-sm-220 h-med-340 h-tv-pt-300 h-tv-ld-300 h-tablet-ld-300 h-tablet-pt-200"></div>
				<div id="gauge-series-double-side-light-right" class="ui chart-container color-success highcharts-point-bg-no
																	info-desktop-sm-xl info-tv-ld-xl info-tv-pt-xl info-top-tv-ld-100 info-top-tv-pt-100
																	h-xs-220 h-sm-220 h-med-340 h-tv-pt-300 h-tv-ld-300 h-tablet-ld-300 h-tablet-pt-200"></div>
				<div id="gauge-series-left" class="	ui chart-container color-danger
													h-xs-400 h-med-500 h-tv-pt-460 h-tv-ld-460 h-tablet-ld-460 h-tablet-pt-460"></div>
				<div id="gauge-series-right" class="ui chart-container color-warning
													h-xs-400 h-med-500 h-tv-pt-460 h-tv-ld-460 h-tablet-ld-460 h-tablet-pt-460"></div>
			</div>

			<!-- GAUGE SEMI DOUBLE SIDE LIGHT
			<div class="ui col d-none
						xs-2 sm-6 tv-pt-1 tv-ld-1 tablet-ld-1 tablet-pt-1
						h-xs-360 h-sm-360 h-tv-ld-360 h-tv-pt-360 h-tablet-ld-360">
				<h5 class="ui h5">Gauge Series Double Side Light</h5>
				<?php include('7-manual/3-modules/charts/gauge-series-double-side-light-left.php') ?>
				<?php include('7-manual/3-modules/charts/gauge-series-double-side-light-right.php') ?>
				<div class="chart-container outside-highchart color-success
							info-tv-ld-xl info-tv-pt-xl mg-top-tv-ld-60-negative mg-top-tv-pt-60-negative">
					<div class="info">
						<h4 class="title1">180</h4>
						<h6 class="title2 mg-lg">km/h</h6>
						<h6 class="title2">lorem ipsum</h6>
					</div>
				</div>
				<div id="gauge-series-double-side-light-left" class="ui chart-container color-danger
																	h-xs-220 h-sm-220 h-med-340 h-tv-pt-300 h-tv-ld-300 h-tablet-ld-300 h-tablet-pt-200"></div>
				<div id="gauge-series-double-side-light-right" class="ui chart-container color-success highcharts-point-bg-no
																	info-desktop-sm-xl info-tv-ld-xl info-tv-pt-xl info-top-tv-ld-100 info-top-tv-pt-100
																	h-xs-220 h-sm-220 h-med-340 h-tv-pt-300 h-tv-ld-300 h-tablet-ld-300 h-tablet-pt-200"></div>
			</div> -->

			<!-- GAUGE SEMI DOUBLE SIDE -->
			<div class="ui col
						xs-2 sm-6 tv-pt-1 tv-ld-1 tablet-ld-1 tablet-pt-1
						h-xs-360 h-sm-360 h-tv-ld-360 h-tv-pt-360 h-tablet-ld-360">
				<h5 class="ui h5">Gauge Series Double Side (Not working)</h5>
				<?php include('7-manual/3-modules/charts/gauge-series-double-side-left.php') ?>
				<?php include('7-manual/3-modules/charts/gauge-series-double-side-right.php') ?>
				<div class="chart-container outside-highchart color-success
							info-tv-ld-xl info-tv-pt-xl mg-top-tv-ld-50-negative mg-top-tv-pt-50-negative">
					<div class="info">
						<h4 class="title1">180</h4>
						<h6 class="title2 mg-lg">km/h</h6>
						<h6 class="title2">lorem ipsum</h6>
					</div>
				</div>
				<div id="gauge-series-double-side-left" class="ui chart-container color-danger
																h-xs-220 h-sm-220 h-med-340 h-tv-pt-300 h-tv-ld-300 h-tablet-ld-300 h-tablet-pt-200"></div>
				<div id="gauge-series-double-side-right" class="ui chart-container color-success highcharts-point-bg-no
																info-desktop-sm-xl info-tv-ld-xl info-tv-pt-xl info-top-tv-ld-100 info-top-tv-pt-100
																h-xs-220 h-sm-220 h-med-340 h-tv-pt-300 h-tv-ld-300 h-tablet-ld-300 h-tablet-pt-200"></div>
			</div>

			<!-- GAUGE SEMI -->
			<div class="ui col
						xs-2 sm-6 tv-pt-1 tv-ld-1 tablet-ld-1 tablet-pt-1
						h-sm-300 h-xs-200 h-tv-pt-300 h-tv-ld-300 h-tablet-ld-280 h-tablet-ld-350">						
				<h5 class="ui h5">Gauge Semi</h5>
				<?php include('7-manual/3-modules/charts/gauge-semi.php') ?>
				<div id="gauge-semi" class="ui chart-container color-success
											info-desktop-sm-xl info-tv-ld-xl info-tv-pt-xl info-top-tv-ld-210 info-top-tv-pt-240
											h-xs-300 h-med-400 h-tv-pt-500 h-tv-ld-450 h-tablet-ld-400 h-tablet-pt-430"></div>
			</div>

			<!-- GAUGE SEMI 2 -->
			<div class="ui col
						xs-2 sm-6 tv-pt-1 tv-ld-1 tablet-ld-1 tablet-pt-1
						h-sm-300 h-xs-200 h-tv-pt-300 h-tv-ld-300 h-tablet-ld-280 h-tablet-ld-350">
				<h5 class="ui h5">Gauge Semi 2</h5>
				<?php include('7-manual/3-modules/charts/gauge-semi-2.php') ?>
				<div id="gauge-semi-2" class="ui chart-container color-success
											info-desktop-sm-xl info-tv-ld-xl info-tv-pt-xl info-top-tv-ld-210 info-top-tv-pt-240
											h-xs-300 h-med-400 h-tv-pt-500 h-tv-ld-450 h-tablet-ld-400 h-tablet-pt-430"></div>
			</div>

			<!-- GAUGE SEMI LINES -->
			<div class="ui col
						xs-2 sm-6 tv-pt-1 tv-ld-1 tablet-ld-1 tablet-pt-1
						h-sm-300 h-xs-200 h-tv-pt-400 h-tv-ld-400 h-tablet-ld-280 h-tablet-ld-350">
				<h5 class="ui h5">Gauge Semi Lines</h5>
				<?php include('7-manual/3-modules/charts/gauge-semi-lines.php') ?>
				<div id="gauge-semi-lines" class="ui chart-container color-success
											info-desktop-sm-xl info-tv-ld-xl info-tv-pt-xl info-top-tv-ld-210 info-top-tv-pt-240
											h-xs-300 h-med-400 h-tv-pt-500 h-tv-ld-450 h-tablet-ld-400 h-tablet-pt-430"></div>
			</div>

			<!-- GAUGE FULL -->
			<div class="ui col
						xs-2 sm-6 tv-pt-1 tv-ld-1 tablet-ld-1 tablet-pt-1
						h-xs-360 h-sm-400 h-tv-pt-400 h-tv-ld-400 h-tablet-ld-400">
				<h5 class="ui h5">Gauge Full</h5>
				<?php include('7-manual/3-modules/charts/gauge-full.php') ?>
				<div id="gauge-full" class="ui chart-container color-danger
											info-desktop-sm-xl info-tv-ld-xl info-tv-pt-xl info-top-tv-ld-110 info-top-tv-pt-110
											h-xs-400 h-med-400 h-tv-pt-400 h-tv-ld-400 h-tablet-ld-400 h-tablet-pt-400"></div>
			</div>

			<!-- GAUGE FULL 2 -->
			<div class="ui col
						xs-2 sm-6 tv-pt-1 tv-ld-1 tablet-ld-1 tablet-pt-1
						h-xs-360 h-sm-400 h-tv-pt-400 h-tv-ld-400 h-tablet-ld-400">
				<h5 class="ui h5">Gauge Full 2</h5>
				<?php include('7-manual/3-modules/charts/gauge-full-2.php') ?>
				<div id="gauge-full-2" class="ui chart-container color-danger
												info-desktop-sm-xl info-tv-ld-xl info-tv-pt-xl info-top-tv-ld-100 info-top-tv-pt-100
												h-xs-400 h-med-400 h-tv-pt-400 h-tv-ld-400 h-tablet-ld-400 h-tablet-pt-400"></div>
			</div>

			<!-- GAUGE SERIE MULTI x4 -->
			<div class="ui col
						xs-2 sm-6 tv-pt-1 tv-ld-1 tablet-ld-1 tablet-pt-1
						h-xs-360 h-sm-400 h-tv-pt-400 h-tv-ld-400 h-tv-pt-400 h-tablet-ld-400">
				<h5 class="ui h5">Gauge Series Multi</h5>
				<?php include('7-manual/3-modules/charts/gauge-series.php') ?>
				<?php include('7-manual/3-modules/charts/gauge-series-left.php') ?>
				<?php include('7-manual/3-modules/charts/gauge-series-right.php') ?>
				<?php include('7-manual/3-modules/charts/gauge-series-bottom.php') ?>
				<div id="gauge-series" class="ui chart-container color-danger
												info-desktop-sm-xl info-tv-ld-xl info-tv-pt-xl info-top-tv-ld-90 info-top-tv-pt-90
												h-xs-220 h-sm-220 h-med-340 h-tv-pt-300 h-tv-ld-300 h-tablet-ld-300 h-tablet-pt-200"></div>
				<div id="gauge-series-left" class="	ui chart-container color-danger
													h-xs-400 h-med-500 h-tv-pt-460 h-tv-ld-460 h-tablet-ld-460 h-tablet-pt-460"></div>
				<div id="gauge-series-right" class="ui chart-container color-warning
													h-xs-400 h-med-500 h-tv-pt-460 h-tv-ld-460 h-tablet-ld-460 h-tablet-pt-460"></div>
				<div id="gauge-series-bottom" class="	ui chart-container color-success
														h-xs-400 h-sm-350 h-med-380 h-tv-pt-400 h-tv-ld-400 h-tablet-ld-400 h-tablet-pt-400"></div>
			</div>

			<!-- GAUGE SERIE -->
			<div class="ui col
						xs-2 sm-6 tv-pt-1 tv-ld-1 tablet-ld-1 tablet-pt-1
						h-xs-360 h-sm-400 h-tv-pt-400 h-tv-ld-400 h-tv-pt-400 h-tablet-ld-400">
				<h5 class="ui h5">Gauge Series 2</h5>
				<?php include('7-manual/3-modules/charts/gauge-series-2.php') ?>
				<div id="gauge-series-2" class="ui chart-container color-danger
												info-desktop-sm-xl info-tv-ld-xl info-tv-pt-xl info-top-tv-ld-85 info-top-tv-pt-85
												h-xs-220 h-sm-220 h-med-340 h-tv-pt-300 h-tv-ld-300 h-tablet-ld-300 h-tablet-pt-200"></div>
			</div>

			<!-- GAUGE SEMI DOUBLE -->
			<div class="ui col
						xs-2 sm-6 tv-pt-1 tv-ld-1 tablet-ld-1 tablet-pt-1
						h-xs-360 h-sm-400 h-tv-pt-400 h-tv-ld-400 h-tv-pt-400 h-tablet-ld-400">
				<h5 class="ui h5">Gauge Semi Double</h5>
				<?php include('7-manual/3-modules/charts/gauge-semi-double.php') ?>
				<div id="gauge-semi-double" class="	ui chart-container color-warning
													info-desktop-sm-xl info-tv-ld-xl info-tv-pt-xl info-top-tv-ld-260 info-top-tv-pt-75
													h-xs-300 h-med-400 h-tv-pt-500 h-tv-ld-450 h-tablet-ld-400 h-tablet-pt-430"></div>
			</div>

			<!-- GAUGE QUARTER -->
			<div class="ui col
						xs-2 sm-3 tv-pt-1 tv-ld-1 tablet-ld-1 tablet-pt-1
						h-xs-360 h-sm-400 h-tv-pt-400 h-tv-ld-400 h-tv-pt-400 h-tablet-ld-400">
				<h5 class="ui h5">Gauge Quarter (not working)</h5>
				<?php include('7-manual/3-modules/charts/gauge-quarter.php') ?>
				<div id="gauge-quarter" class="	ui chart-container color-success
												info-desktop-sm-lg info-tv-ld-lg info-tv-pt-lg info-top-tv-ld-90 info-top-tv-pt-90
												h-xs-200 h-sm-200 h-tv-pt-200 h-tv-ld-200 h-tablet-ld-200 h-tablet-pt-200"></div>
			</div>

			<!-- GAUGE QUARTER -->
			<div class="ui col
						xs-2 sm-3 tv-pt-1 tv-ld-1 tablet-ld-1 tablet-pt-1
						h-xs-360 h-sm-400 h-tv-pt-400 h-tv-ld-400 h-tv-pt-400 h-tablet-ld-400">
				<h5 class="ui h5">Gauge Series (old)</h5>
				<?php include('7-manual/3-modules/charts/gauge-series--old.php') ?>
				<div id="gauge-series--old" class="ui chart-container color-danger h-phone-260 h-xs-260 h-sm-300 h-med-300 h-tv-pt-400 h-tv-ld-400 h-tablet-ld-400 h-tablet-pt-400"></div>
			</div>

		</div>

	</article>
	

</section>
