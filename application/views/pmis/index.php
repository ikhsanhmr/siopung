


			<!-- /section:basics/sidebar -->
			<div class="main-content">
				<div class="main-content-inner">
					<!-- #section:basics/content.breadcrumbs -->
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li class="active">Dashboard</li>
						</ul><!-- /.breadcrumb -->

						
					</div>

					<!-- /section:basics/content.breadcrumbs -->
					<div class="page-content">
						<!-- #section:settings.box -->
						
						<!-- /section:settings.box -->
						<div class="page-header">
							<h1>
								Dashboard
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									overview &amp; stats
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="alert alert-block alert-success">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>

									<i class="ace-icon fa fa-check green"></i>

									Welcome to
									<strong class="green">
										Dashboard - Sistem Informasi mOnitoring Proyek UNGgul (SI OPUNG)  KITSUM
										<small>(version 1.0.0)</small>
									</strong>,
	the lightweight, feature-rich and easy to use.
								</div>

								<!-- /section:custom/extra.hr -->
						<div class="row">
							<div class="col-xs-12">
<!-- buka slideshow --><div class="slideshow">		
					<div class="card mb-3">
						<div class="card-header">
						  <i class="fa fa-area-chart"></i> <?php echo "Progress Proyek PLTA Peusangan 1 & 2 Tahun 2019"; ?></div>
							<div class="card-body">
							  <canvas id="myAreaChart" width="150%" height="30"></canvas>
							</div>
						<div class="card-footer small text-muted"></div>
					</div>
		
							<div class="card mb-3">
							<div class="card-header">
							  <i class="fa fa-area-chart"></i> <?php echo "Progress Proyek PLTU Pangkalan Susu 3 dan 4 Tahun 2019"; ?></div>
							<div class="card-body">
							  <canvas id="myAreaChart2" width="150%" height="30"></canvas>
							</div>
							<div class="card-footer small text-muted"></div>
							</div>
							
							<div class="card mb-3">
							<div class="card-header">
							  <i class="fa fa-area-chart"></i> <?php echo "Progress Proyek PLTU Tenayan Tahun 2019"; ?></div>
							<div class="card-body">
							  <canvas id="myAreaChart3" width="150%" height="30"></canvas>
							</div>
							<div class="card-footer small text-muted"></div>
							</div>
							
							<div class="card mb-3">
							<div class="card-header">
							  <i class="fa fa-area-chart"></i> <?php echo "Progress Proyek PLTMG Arun Tahun 2019"; ?></div>
							<div class="card-body">
							  <canvas id="myAreaChart4" width="150%" height="30"></canvas>
							</div>
							<div class="card-footer small text-muted"></div>
							</div>
							
							<div class="card mb-3">
							<div class="card-header">
							  <i class="fa fa-area-chart"></i> <?php echo "Progress Proyek PLTU Babel 3 Tahun 2019"; ?></div>
							<div class="card-body">
							  <canvas id="myAreaChart5" width="170%" height="30"></canvas>
							</div>
							<div class="card-footer small text-muted"></div>
							</div>
</div><!-- tutup slideshow -->
								

								
								</div>
						  </div>
						  <br>
						  <div class="row">
									<div class="col-sm-12">
										<div class="widget-box transparent">
											<div class="widget-header widget-header-flat">
												<h4 class="widget-title lighter">
													<i class="ace-icon fa fa-star orange"></i>
													Daftar Proyek COD Dalam Waktu Dekat
												</h4>

												<div class="widget-toolbar">
													<a href="#" data-action="collapse">
														<i class="ace-icon fa fa-chevron-up"></i>
													</a>
												</div>
											</div>

											<div class="widget-body">
												<div class="widget-main no-padding">
													<table class="table table-bordered table-striped">
														<thead class="thin-border-bottom">
															<tr>
																<th>
																	<i class="ace-icon fa fa-caret-right blue"></i>Nama Proyek
																</th>

																<th width='10%'>
																	<i class="ace-icon fa fa-caret-right blue"></i>COD (Unit I)
																</th>

												
																<th width='10%'>
																	<i class="ace-icon fa fa-caret-right blue"></i>COD (Unit II)
																</th>

														
																<th class="hidden-480">
																	<i class="ace-icon fa fa-caret-right blue"></i>Deviasi
																</th>
																
																<th class="hidden-480">
																	<i class="ace-icon fa fa-caret-right blue"></i>Kontraktor
																</th>
															</tr>
														</thead>

														<tbody>
														<?php foreach ($cod->result_array() as $data) { ?>
															<tr>
																
																<td><?php echo $data['nama_proyek']; ?></td>

																
																	<td><span class="berkedip" style="color: red"><?php echo date('d M Y',strtotime($data['tanggal_berakhir1'])); ?></span></td>
																	<td><span class="berkedip" style="color: red"><?php echo date('d M Y',strtotime($data['tanggal_berakhir2'])); ?></span></td>
																	
																	
																	<td><span class="berkedip" style="color: red"><?php echo $data['deviasi']; ?></span></td>
																	
																	<td><?php echo $data['kontraktor']; ?></td>
																

																
															</tr>
													<?php
													}
													
													?>
															
														</tbody>
														
													</table>
													<br>
													<tr>
															*Deviasi adalah Selisih Rencana Progress Terhadap Aktual Progress	
															</tr>
												</div><!-- /.widget-main -->
											</div><!-- /.widget-body -->
										</div><!-- /.widget-box -->
									</div><!-- /.col -->

									
								</div><!-- /.row -->

						   

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			
