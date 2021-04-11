


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
										Sistem Informasi Monitoring Proyek Unggul (SI OPUNG)
										<small>(version 1.0.0)</small>
									</strong>,
	the lightweight, feature-rich and easy to use.
								</div>

								<!-- /section:custom/extra.hr -->
								<div class="row">
									<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								
										
										<div class="table-header">
											Daftar Milstone
										</div>

										<!-- div.table-responsive -->

										<!-- div.dataTables_borderWrap -->
										<div>
										
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
													<td  rowspan="3" class="center" >No</td>
													<td  rowspan="3" class="center" >Nama Project</td>
													<td  rowspan="3" class="center" >Milstone</td>
													<td  colspan="4" class="center" >Unit 1</td>
													<td  colspan="4" class="center" >Unit 2</td>
													
													<tr>
														<td  colspan="2" class="center" >Plan</td>
														<td  colspan="2" class="center" >Actual</td>
												
														<td  colspan="2" class="center" >Plan</td>
														<td  colspan="2" class="center" >Actual</td>
														
														
													</tr>
													</tr>
													<tr>
													<th class="center">Start </th>
													<th class="center">Finish </th>
													<th  class="center">Start </td>
													<th  class="center">Finish </th>
													
													<th  class="center">Start </th>
													<th  class="center">Finish </th>
													<th  class="center">Start </td>
													<th  class="center">Finish </th>
														
													</tr>

												</thead>

												<?php 
												$no =1;
												?>
												<tbody>
													
													<?php foreach ($mils->result_array() as $data) { ?>
													<tr>
														<td class="center">
															<?php echo $no; ?>
														</td>

														<td>
														<?php echo $data['nama_project']; ?>
														</td>
														<td>
														<?php echo $data['nama_milstone']; ?>
														</td>
														<td class="center"><?php echo '-'; ?></td>
														<td class="center"><?php echo '-'; ?></td>
															<?php
																if ($data['start_actual_unit1']=='0000-00-00' || $data['start_actual_unit1']=='1970-01-01'){
															echo '<td class="center"> - </td>';
																} else {
															?>
															<td class="center"><?php echo date('d/m/y',strtotime($data['start_actual_unit1'])); ?></td>
															<?php
																}
															?>															
														
														<?php
																if ($data['finish_actual_unit1']=='0000-00-00' || $data['finish_actual_unit1']=='1970-01-01'){
															echo '<td class="center"> - </td>';
																} else {
															?>
															<td class="center"><?php echo date('d/m/y',strtotime($data['finish_actual_unit1'])); ?></td>
															<?php
																}
															?>	
														
														
														<td class="center"><?php echo '-'; ?></td>
														<td class="center"><?php echo '-'; ?></td>
														
															<?php
																if ($data['start_actual_unit2']=='0000-00-00' || $data['start_actual_unit2']=='1970-01-01'){
															echo '<td class="center"> - </td>';
																} else {
															?>
															<td class="center"><?php echo date('d/m/y',strtotime($data['start_actual_unit2'])); ?></td>
															<?php
																}
															?>															
														
														<?php
																if ($data['finish_actual_unit2']=='0000-00-00' || $data['finish_actual_unit2']=='1970-01-01'){
															echo '<td class="center"> - </td>';
																} else {
															?>
															<td class="center"><?php echo date('d/m/y',strtotime($data['finish_actual_unit2'])); ?></td>
															<?php
																}
															?>															
														
													</tr>

													


													

													<?php 
													$no++;
													}
												
												?>
												
												</tbody>
											</table>
											
											<div class="space"></div>
												
										</div>
									

								

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->

									
									<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								
										
										<div class="table-header">
											Daftar Progress
										</div>

										<!-- div.table-responsive -->

										<!-- div.dataTables_borderWrap -->
										<div>
										
											<table id="dynamic-table-progress" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th class="center">
															No.
														</th>
														<th>Nama Project </th>
														<th>Periode </th>
														<th>Nilai E</th>
														<th>Nilai P</th>
														<th>Nilai C</th>
														<th>Total </th>
													</tr>
												</thead>

												<?php 
												$no =1;
												?>
												<tbody>
													
													<?php foreach ($progress->result_array() as $data) { ?>
													<tr>
														<td class="center">
															<?php echo $no; ?>
														</td>

														<td>
														<?php echo $data['nama_project']; ?>
														</td>
														<td>
														<?php echo $data['bulan'].' '.$data['tahun']; ?>
														</td>
														
														<td><?php echo $data['individual_e']; ?></td>
														<td><?php echo $data['individual_p']; ?></td>
														<td><?php echo $data['individual_c']; ?></td>
														<td><?php echo $data['total']; ?></td>
													</tr>

													<?php 
													$no++;
													}
												
												?>
												
												</tbody>
											</table>
											
											<div class="space"></div>
												
										</div>
									

								

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
									
									<div class="col-sm-12">
										<div class="widget-box transparent">
											<div class="widget-header widget-header-flat">
												<h4 class="widget-title lighter">
													<i class="ace-icon fa fa-rss orange"></i>
													Gallery
												</h4>

												<div class="widget-toolbar">
													<a href="#" data-action="collapse">
														<i class="ace-icon fa fa-chevron-up"></i>
													</a>
												</div>
											</div>

											
											<div class="widget-body">
												<div class="widget-main no-padding">
													<ul class="ace-thumbnails clearfix">
										<!-- #section:pages/gallery -->
										
								<?php foreach ($gallery->result_array() as $data) { ?>
										<li>
											<a href="<?php echo base_url(); ?>public/assets/images/gallery/<?php echo $data['id_project']; ?>/<?php echo $data['upload_foto']; ?>" data-rel="colorbox">
												<img width="150" height="150" alt="150x150" src="<?php echo base_url(); ?>public/assets/images/gallery/<?php echo $data['id_project']; ?>/<?php echo $data['upload_foto']; ?>" />
												<div class="text">
													<div class="inner"><?php echo $data['nama_foto']; ?></div>
												</div>
											</a>
											<div class="tools tools-bottom">
												<a href="<?php echo base_url(); ?>public/assets/images/gallery/<?php echo $data['id_project']; ?>/<?php echo $data['upload_foto']; ?>" data-rel="colorbox">
														<i class="ace-icon fa fa-search-plus"></i>
														</a>

												
											</div>
										</li>

										<?php 
													
													}
												
												?>
									</ul>
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

			
