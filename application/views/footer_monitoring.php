<div class="footer">
				<div class="footer-inner">
					<!-- #section:basics/footer -->
					<div class="footer-content">
						<div class="pull-right hidden-xs">
						  <b>Version</b> 1.0.0
						</div>
							<div class="pull-left hidden-xs">
								<span class="bigger-120">
									
									Copyright &copy; PT PLN (Persero) Unit Pembangkit Sumatera
								</span>
							</div>
						
					</div>

					<!-- /section:basics/footer -->
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='<?php echo base_url(); ?>public/assets/js/jquery.js'>"+"<"+"/script>");
		</script>
		

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='../assets/js/jquery1x.js'>"+"<"+"/script>");
</script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url(); ?>/public/assets/js/jquery.mobile.custom.js'>"+"<"+"/script>");
		</script>
		<script src="<?php echo base_url(); ?>public/assets/js/bootstrap.js"></script>


		
		

		<!-- ace scripts -->
		<script src="<?php echo base_url(); ?>public/assets/js/ace/elements.scroller.js"></script>
		<script src="<?php echo base_url(); ?>public/assets/js/ace/elements.colorpicker.js"></script>
		<script src="<?php echo base_url(); ?>public/assets/js/ace/elements.fileinput.js"></script>
		<script src="<?php echo base_url(); ?>public/assets/js/ace/elements.typeahead.js"></script>
		<script src="<?php echo base_url(); ?>public/assets/js/ace/elements.wysiwyg.js"></script>
		<script src="<?php echo base_url(); ?>public/assets/js/ace/elements.spinner.js"></script>
		<script src="<?php echo base_url(); ?>public/assets/js/ace/elements.treeview.js"></script>
		<script src="<?php echo base_url(); ?>public/assets/js/ace/elements.wizard.js"></script>
		<script src="<?php echo base_url(); ?>public/assets/js/ace/elements.aside.js"></script>
		<script src="<?php echo base_url(); ?>public/assets/js/ace/ace.js"></script>
		<script src="<?php echo base_url(); ?>public/assets/js/ace/ace.ajax-content.js"></script>
		<script src="<?php echo base_url(); ?>public/assets/js/ace/ace.touch-drag.js"></script>
		<script src="<?php echo base_url(); ?>public/assets/js/ace/ace.sidebar.js"></script>
		<script src="<?php echo base_url(); ?>public/assets/js/ace/ace.sidebar-scroll-1.js"></script>
		<script src="<?php echo base_url(); ?>public/assets/js/ace/ace.submenu-hover.js"></script>
		<script src="<?php echo base_url(); ?>public/assets/js/ace/ace.widget-box.js"></script>
		<script src="<?php echo base_url(); ?>public/assets/js/ace/ace.settings.js"></script>
		<script src="<?php echo base_url(); ?>public/assets/js/ace/ace.settings-rtl.js"></script>
		<script src="<?php echo base_url(); ?>public/assets/js/ace/ace.settings-skin.js"></script>
		<script src="<?php echo base_url(); ?>public/assets/js/ace/ace.widget-on-reload.js"></script>
		<script src="<?php echo base_url(); ?>public/assets/js/ace/ace.searchbox-autocomplete.js"></script>

		
<!-- JAVASCRIPT FILES -->
<script type="text/javascript">var plugin_path = '<?php echo base_url(); ?>public_monitoring/assets/plugins/';</script>
<script type="text/javascript" src="<?php echo base_url(); ?>public_monitoring/assets/plugins/jquery/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public_monitoring/assets/js/app.js"></script>


                <script type="text/javascript">
                $(function () {
                    $('#angsurancop').highcharts({
                        chart: {
                            type: 'column'
                        },
                        title: {
                            text: 'JUMLAH KAPASITAS PEMBANGKIT'
                        },
                        xAxis: {
                            categories: ['JUMLAH KAPASITAS PEMBANGKIT','JUMLAH KAPASTIAS PEMBANGKIT']
                        },
                        yAxis: {
                            min: 0,
                            title: {
                                text: 'Jumlah Kapasitas Pembangkit (Megawatt)'
                            },
                            stackLabels: {
                                enabled: true,
                                style: {
                                    fontWeight: 'bold',
                                    color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
                                }
                            }
                        },
                        legend: {
                            align: 'right',
                            x: -30,
                            verticalAlign: 'top',
                            y: 28,
                            floating: true,
                            backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'white',
                            borderColor: '#CCC',
                            borderWidth: 1,
                            shadow: false
                        },
                        credits: {
                            enabled: false
                        },
                        tooltip: {
                            headerFormat: '<b>{series.name}</b><br> ',
                            pointFormat: ' {point.y} MW'
                        },

                        <?php //foreach ($angsuran->result_array() as $data) { ?>
                        series: [{name: 'PROYEK YANG SUDAH COD',
                            data: [<?php echo '10000'; ?>]
                        },{name: 'PROYEK YANG BELUM COD',
                            data: [<?php echo '20000'; ?>]
                        }]
                        <?php //} ?>
                    });
                });
		</script>
             
                <script type="text/javascript">
                $(function () {
                    $('#statusperizinan').highcharts({
                        chart: {
                            plotBackgroundColor: null,
                            plotBorderWidth: null,
                            plotShadow: false,
                            type: 'pie'
                        },
                        title: {
                            text: 'STATUS PERIZINAN  YANG SEDANG DI KERJAKAN '
                        },
                        tooltip: {
                            pointFormat: '{series.name}: <b>{point.y}</b> Perizinan'
                        },
                        plotOptions: {
                            pie: {
                                allowPointSelect: true,
                                cursor: 'pointer',
                                showInLegend: true,
                                dataLabels: {
                                    enabled: true,
                                    format: '<br>{point.y}</br> Perizinan',
                                    style: {
                                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                                    }
                                }
                            }
                        },
                        credits: {
                                            enabled: false
                                        },
                        series: [{
                            name: 'Jumlah',
                            colorByPoint: true,
                            data: [<?php //foreach ($status_cop->result_array() as $data) { ?>{
                                name: 'Izin Prinsip',
                                y: <?php echo '1'; ?>
                            }, {
                                name: 'Izin RTRW',
                                y: <?php echo '2'; ?>,
                                sliced: true,
                                selected: true
                            },{
                                name: 'Izin Lingkungan',
                                y: <?php echo '2'; ?>,
                                sliced: true,
                                selected: true
                            }, {
                                name: 'Izin Lokasi',
                                y: <?php echo '3'; ?>
                            }<?php //} ?>]
                        }]
                    });
                });
		</script>
		
              
                <script src="<?php echo base_url(); ?>public_monitoring/assets/plugins/highcharts/js/highcharts.js"></script>
                <script src="<?php echo base_url(); ?>public_monitoring/assets/plugins/highcharts/js/modules/exporting.js"></script>
                <script src="https://code.highcharts.com/highcharts-3d.js"></script>
</body>
</html>