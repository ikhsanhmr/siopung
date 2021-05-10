<!-- /section:basics/sidebar -->
<div class="main-content">
	<div class="main-content-inner">
		<!-- #section:basics/content.breadcrumbs -->
		<div class="breadcrumbs" id="breadcrumbs">
			<script type="text/javascript">
				try {
					ace.settings.check('breadcrumbs', 'fixed')
				} catch (e) {}
			</script>

			<ul class="breadcrumb">
				<li>
					<i class="ace-icon fa fa-home home-icon"></i>
					<a href="#">Home</a>
				</li>
				<li class="active">List of Project</li>
			</ul><!-- /.breadcrumb -->


		</div>

		<!-- /section:basics/content.breadcrumbs -->
		<div class="page-content">
			<!-- #section:settings.box -->

			<!-- /section:settings.box -->
			<div class="page-header">
				<h1>
					List of Project
					<small>
						<i class="ace-icon fa fa-angle-double-right"></i>
						View List
					</small>
				</h1>
			</div><!-- /.page-header -->
			<!-- START SEARCHING -->
			<div class="row">
				<div class="col-xs-12">
					<form name="form1" method="post" action="">
						<div class="col-sm-3">
							Ownership : <select class="form-control" id="kode_project" name="kode_project">
								<option value="">--List of Ownership--</option>
								<option value="PLN">PLN</option>
								<option value="IPP">IPP</option>
								<option value="UNALLOCATED">UNALLOCATED</option>
							</select>
						</div>

						<div class="col-sm-3">
							RUPTL : <select class="form-control" id="ruptl" name="ruptl">
								<option value="">--List of RUPTL--</option>
								<option value="2016">2016</option>
								<option value="2017">2017</option>
								<option value="2018">2018</option>
								<option value="2019">2019</option>
								<option value="2020">2020</option>
							</select>
						</div>

						<div class="col-sm-3">
							Program : <select class="form-control" id="program_project" name="program_project">
								<option value="">--List of Program--</option>
								<option value="1">Regular</option>
								<option value="2">FTP I</option>
								<option value="3">FTP II</option>
								<option value="4">35.000 MW</option>
								<option value="5">-</option>
							</select>
						</div>
						<div class="col-sm-3">
							Province : <select class="form-control" id="provinsi" name="provinsi">
								<option value="">--List of Province--</option>
								<option value="1">Aceh</option>
								<option value="2">Sumatera Utara</option>
								<option value="3">Riau</option>
								<option value="4">Sumatera Barat</option>
								<option value="5">Kepulauan Riau</option>
								<option value="6">Jambi</option>
								<option value="7">Sumatera Selatan</option>
								<option value="8">Bengkulu</option>
								<option value="9">Bangka Belitung</option>
								<option value="10">Lampung</option>


							</select>
						</div>
						<br />

						<div class="col-sm-3">
							<br>
							<button type="submit" id="submit_search" class="btn btn-sm btn-primary no-radius"><i class="ace-icon fa fa-search nav-search-icon"> </i>Submit</button>
						</div>
					</form>

				</div>
			</div>
			<!-- FINISH SEARCHING -->
			<br>

			<div class="row">
				<div class="col-xs-12">
					<!-- PAGE CONTENT BEGINS -->


					<div class="table-header">
						Project List
					</div>

					<!-- div.table-responsive -->

					<!-- div.dataTables_borderWrap -->
					<div>
						<table id="dynamic-table-project" class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<th class="center">
										No.
									</th>
									<th>Ownership</th>
									<th>Project Name</th>
									<th>Program</th>
									<th>RUPTL</th>
									<th>Provinsi</th>
									<th>Phase</th>
									<th>Location</th>
									<th>Unit of Engine</th>
									<?php
									//print_r($dapat_status['status']); exit;
									if ($dapat_status['status'] == 4) { ?>
									<?php } else { ?>
										<th class="center">Actions</th>
									<?php } ?>

								</tr>
							</thead>

						</table>

						<div class="space"></div>
						<div class="row">
							<div id="default-buttons" class="col-sm-6">
								<a class="btn btn-primary" href="<?php echo base_url(); ?>pmis/project_add">Add Data</a>
							</div>
						</div>
					</div>
					<!-- PAGE CONTENT ENDS -->
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.page-content -->
	</div>
</div><!-- /.main-content -->


<script type="text/javascript">
	var table;

	$(document).ready(function() {
		//datatables
		table = $('#dynamic-table-project').DataTable({

			"processing": true, //Feature control the processing indicator.
			"serverSide": true, //Feature control DataTables' server-side processing mode.
			"order": [], //Initial no order.
			"scrollX": true,

			// Load data for the table's content from an Ajax source
			"ajax": {
				"url": "<?php echo site_url('pmis/ajax_list_project') ?>",
				"type": "POST",
			},
			"searching": true,

			//Set column definition initialisation properties.
			"columnDefs": [{
				"targets": [0], //first column / numbering column
				"orderable": false, //set not orderable
			}, {
				"targets": [9], //first column / numbering column
				"orderable": false, //set not orderable
			}],

		});

		$('#submit_search').on('click', function() {
			event.preventDefault();
			var tableNew = $('#dynamic-table-project')
			$.ajax({
				url: "<?= site_url('pmis/ajax_list_filter_search') ?>",
				dataType: 'JSON',
				method: 'POST',
				data: {
					'kode_project': $('#kode_project').val(),
					'ruptl': $('#ruptl').val(),
					'program_project': $('#program_project').val(),
					'provinsi': $('#provinsi').val()
				},
				success: function(data_return) {
					console.log(data_return);

					// destroy the DataTable
					tableNew.dataTable().fnDestroy();
					// clear the table body
					tableNew.find('tbody').empty();
					tableNew.DataTable({
						data: data_return,
						columns: [{
							"data": 'no'
						}, {
							"data": "kode_project"
						}, {
							"data": "nama_project"
						}, {
							"data": "program_project"
						}, {
							"data": "ruptl"
						}, {
							"data": "provinsi"
						}, {
							"data": "fase_project"
						}, {
							"data": "lokasi_project"
						}, {
							"data": "jumlah_mesin"
						}, {
							"data": "actions"
						}],
						columnDefs: [{
								"targets": [0],
								"orderable": false
							},
							{
								"targets": [9], //first column / numbering column
								"orderable": false, //set not orderable
							}
						]
					})

				}
			})
		})

	});
</script>