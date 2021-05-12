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
				<li class="active">List Kontrak Supervisi</li>
			</ul><!-- /.breadcrumb -->


		</div>

		<!-- /section:basics/content.breadcrumbs -->
		<div class="page-content">
			<!-- #section:settings.box -->

			<!-- /section:settings.box -->
			<div class="page-header">
				<h1>
					List Kontrak Supervisi
					<small>
						<i class="ace-icon fa fa-angle-double-right"></i>
						View List
					</small>
				</h1>
			</div><!-- /.page-header -->

			<div class="row">
				<div class="col-xs-12">
					<!-- PAGE CONTENT BEGINS -->


					<div class="table-header">
						Daftar Kontrak Supervisi
					</div>

					<!-- div.table-responsive -->

					<!-- div.dataTables_borderWrap -->
					<div>

						<table id="dynamic-table-kontrak-supervisi" class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<th class="center">
										No.
									</th>
									<th>Kontrak </th>
									<th>Pelaksana</th>
									<th>Nomor Kontrak</th>
									<th>Tanggal TTD</th>
									<th>Nilai Kontrak</th>
									<th>Tanggal Berakhir</th>
									<th>Status</th>

									<?php
									//print_r($dapat_status['status']); exit;
									if ($dapat_status['status'] == 4) { ?>

									<?php } else { ?>
										<th>Actions</th>
									<?php } ?>
								</tr>
							</thead>
						</table>

						<div class="space"></div>
						<div class="row">
							<div id="default-buttons" class="col-sm-6">
								<a class="btn btn-primary" href="<?php echo site_url('pmis/kontrak_supervisi_add?id_project=' . $_GET['id_project']); ?>">Tambah Data</a>
							</div>
						</div>
						<!-- PAGE CONTENT ENDS -->
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.page-content -->
		</div>
	</div><!-- /.main-content -->


	<script>
		$(document).ready(function() {
			const params = new URLSearchParams(window.location.search);
			const id_project = params.get("id_project");
			// console.log(id_project)
			//datatables
			var table = $('#dynamic-table-kontrak-supervisi').DataTable({

				"processing": true, //Feature control the processing indicator.
				"serverSide": true, //Feature control DataTables' server-side processing mode.
				"order": [], //Initial no order.
				"scrollX": true,

				// Load data for the table's content from an Ajax source
				"ajax": {
					"url": "<?php echo site_url('pmis/ajax_kontrak_supervisi?id_project=') ?>" + id_project,
					"type": "POST",
				},

				"searching": false,

				//Set column definition initialisation properties.
				"columnDefs": [{
						"targets": [0], //first column / numbering column
						"orderable": false, //set not orderable
					},
					{
						"targets": [8], //first column / numbering column
						"orderable": false, //set not orderable
					}
				],
			});
		});
	</script>