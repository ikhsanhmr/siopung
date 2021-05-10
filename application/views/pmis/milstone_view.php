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
				<li class="active">List Milstone</li>
			</ul><!-- /.breadcrumb -->


		</div>

		<!-- /section:basics/content.breadcrumbs -->
		<div class="page-content">
			<!-- #section:settings.box -->

			<!-- /section:settings.box -->
			<div class="page-header">
				<h1>
					List Milstone
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
						Daftar Milstone
					</div>
					<div>
						<!-- Proyek Semua  -->
						<table id="dynamic-table-milstone" class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<td rowspan="3" class="center">No</td>
									<td rowspan="3" class="center">Milstone</td>
									<?php
									$kali = $mesin['jumlah_mesin'];
									for ($kata = 1; $kata <= $kali && $kata <= 15; $kata++) {
										echo "<td  colspan='4' class='center' >Unit $kata</td>";
									}
									?>
									<?php
									//print_r($dapat_status['status']); exit;
									if ($dapat_status['status'] == 4) { ?>
									<?php } else { ?>
										<th rowspan="3">Actions</th>
									<?php } ?>
								<tr>
									<?php
									for ($kata = 1; $kata <= $kali && $kata <= 15; $kata++) {
										echo "<td  colspan='2' class='center' >Plan</td>";
										echo "<td  colspan='2' class='center' >Actual</td>";
									}
									?>
								</tr>
								</tr>
								<tr>
									<?php
									for ($kata = 1; $kata <= $kali && $kata <= 15; $kata++) {
										echo "<th class='center'>Start </th>";
										echo "<th class='center'>Finish </th>";
										echo "<th class='center'>Start </th>";
										echo "<th class='center'>Finish </th>";
									}
									?>
								</tr>

							</thead>
						</table>
						<!-- Proyek Semua  -->
						<div class="space"></div>
						<div class="row">
							<div id="default-buttons" class="col-sm-6">
								<a class="btn btn-primary" href="<?php echo site_url('pmis/milstone_add?id_project=' . $_GET['id_project']); ?>">Tambah Data</a>
							</div>
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
		console.log(id_project)
		//datatables
		var table = $('#dynamic-table-milstone').DataTable({

			"processing": true, //Feature control the processing indicator.
			"serverSide": true, //Feature control DataTables' server-side processing mode.
			"order": [], //Initial no order.
			"scrollX": true,

			// Load data for the table's content from an Ajax source
			"ajax": {
				"url": "<?php echo site_url('pmis/ajax_milstone?id_project=') ?>" + id_project,
				"type": "POST",
				"dataSrc": 'data'
			},

			"searching": true,

			//Set column definition initialisation properties.
			"columnDefs": [{
				"targets": [0], //first column / numbering column
				"orderable": false, //set not orderable
			}, ],

		});

	});
</script>