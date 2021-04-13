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
				<li class="active">Activity Log</li>
			</ul><!-- /.breadcrumb -->


		</div>

		<!-- /section:basics/content.breadcrumbs -->
		<div class="page-content">
			<!-- #section:settings.box -->

			<!-- /section:settings.box -->
			<div class="page-header">
				<h1>
					Activity Log
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
						Activity Log
					</div>

					<!-- div.table-responsive -->

					<!-- div.dataTables_borderWrap -->
					<div>

						<table id="table-activity" class="display" style="width:100%">
							<thead>
								<tr>
									<th>No</th>
									<th>Activity</th>
									<th>Time</th>

								</tr>
							</thead>


						</table>


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
		table = $('#table-activity').DataTable({

			"processing": true, //Feature control the processing indicator.
			"serverSide": true, //Feature control DataTables' server-side processing mode.
			"order": [], //Initial no order.

			// Load data for the table's content from an Ajax source
			"ajax": {
				"url": "<?php echo site_url('pmis/ajax_list') ?>",
				"type": "POST",
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