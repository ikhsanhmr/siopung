
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
							<li class="active">Daily Activity</li>
						</ul><!-- /.breadcrumb -->

					
					</div>

					<!-- /section:basics/content.breadcrumbs -->
					<div class="page-content">
						<!-- #section:settings.box -->
						
						<!-- /section:settings.box -->
						<div class="page-header">
							<h1>
								Daily Activity
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
											Daily Activity
										</div>

										<!-- div.table-responsive -->

										<!-- div.dataTables_borderWrap -->
										<div>
										
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th class="center">
															No.
														</th>
														<th>Tanggal Pekerjaan </th>
														<th>Milestone </th>
														<th>Pekerjaan</th>
														<th>Kendala</th>
														<th>Tindak Lanjut</th>
														<th>Status</th>
														<?php 
																//print_r($dapat_status['status']); exit;
																if($dapat_status['status'] == 4){ ?>
																
																<?php } else { ?>
																<th>Actions</th>
																	<?php } ?>
													</tr>
												</thead>

												<?php 
												$no =1;
												?>
												<tbody>
													
													<?php foreach ($daily_activity->result_array() as $data) { ?>
													<tr>
														<td class="center">
															<?php echo $no; ?>
														</td>
														<td><?php echo date('d M Y' , strtotime($data['date_activity'])); ?></td>
														<td>
																<?php echo $data['milstone']; ?>
														</td>
														<td>
																<?php echo $data['pekerjaan']; ?>
														</td>
														<td>
																<?php echo $data['kendala']; ?>
														</td>
														<td>
																<?php echo $data['tindak_lanjut']; ?>
														</td>
															<?php
															if ($data['status'] == 1) {
																	$jelas = "On Progress";
																} else {
																	$jelas = "Selesai";
																}
															?>	
														<td>
																<?php echo $jelas; ?>
														</td>
														
														<?php if($dapat_status['status'] == 4){
														
														//kosong
														
														} else { ?>
														<td>
														 <input type="hidden" name="id_project" value="<?php echo $data['id_project']; ?>">
															<div class="hidden-sm hidden-xs action-buttons">
																

																<a class="green" value="<?php echo $data['id_project']; ?>" href="<?php echo base_url() . "pmis/daily_activity_edit?id_project =".$data['id_project'] ."&id_daily_activity=" . $data['id_daily_activity']; ?>">
																	
																	<i class="ace-icon fa fa-pencil bigger-130"></i>
																</a>

																<a class="red" value="<?php echo $data['id_project']; ?>"  href="<?php echo base_url() . "pmis/daily_activity_delete?id_project =".$data['id_project'] ."&id_daily_activity=" . $data['id_daily_activity']; ?>" onclick="return confirm('Anda Yakin Menghapus Data Ini?');" >
																	
																	<i class="ace-icon fa fa-trash-o bigger-130"></i>
																</a>
															</div>

															<div class="hidden-md hidden-lg">
																<div class="inline pos-rel">
																	<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
																		<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																		

																		<li>
																			<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																				<span class="green">
																					<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																				<span class="red">
																					<i class="ace-icon fa fa-trash-o bigger-120"></i>
																				</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</td>
																<?php } ?>
													</tr>


													

													<?php 
													$no++;
													}
												
												?>
												
												</tbody>
											</table>
											
											<div class="space"></div>
												<div class="row">
														<div id="default-buttons" class="col-sm-6">
														<a class="btn btn-primary" href="<?php echo site_url('pmis/daily_activity_add?id_project='.$_GET['id_project']); ?>">Add Daily Activity</a>
														</div>
												</div>
										</div>
									

								

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
