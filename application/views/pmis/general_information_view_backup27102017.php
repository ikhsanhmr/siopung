
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
							<li class="active">List of General Information</li>
						</ul><!-- /.breadcrumb -->

					
					</div>

					<!-- /section:basics/content.breadcrumbs -->
					<div class="page-content">
						<!-- #section:settings.box -->
						
						<!-- /section:settings.box -->
						<div class="page-header">
							<h1>
								List of General Information
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									View List
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
									<div class="col-xs-12">
										
										
										<div class="table-header">
											General Information
										</div>

										<!-- div.table-responsive -->

										<!-- div.dataTables_borderWrap -->
											<!--	<div style ="overflow-x:scroll;overflow-y:hidden;"> -->
										<div>
											<table id="dynamic-table" class="table table-striped table-bordered table-hover " >
												<thead>
													<tr>
													<th >No</th>
													<th>Lokasi Project</th>
													<th >Luas Area</th>
													<th >Lingkup Pekerjaan</th>
													<th >No Kontrak</th>
													<th >Tanggal Kontrak</th>
													<th >Nilai Kontrak</th>
													<th >Sumber Pendanaan</th>
													<th >Tanggal Efektif</th>
													<th >Kontraktor</th>
													<th >Konsultan Desain</th>
													<th >Konsultan Supervisi</th>
													<th >Transmisi</th>
													<th >Target COD</th>
													
													<th>Actions</th>
													</tr>
												</thead>
												<?php 
												$no =1;
												?>
												<tbody>
													
													<?php foreach ($general_information->result_array() as $data) { ?>
													<tr>
														<td class="center"><?php echo $no; ?></td>
														<td><?php echo $data['lokasi_project']; ?></td>
														<td><?php echo $data['luas_area']; ?></td>
														<td><?php echo $data['lingkup_pekerjaan']; ?></td>
														<td><?php echo $data['no_kontrak']; ?></td>
															<?php if($data['tgl_kontrak']=='1970-01-01'){ ?>
														<td><?php echo "Belum Terkontrak!"; ?></td>
													<?php 
													} else {
													?>
														<td><?php echo date('d M Y', strtotime($data['tgl_kontrak'])); ?></td>
														
														<?php
													}
													
													?>
													<td><?php echo $data['nilai_kontrak']; ?></td>
														<td><?php echo $data['sumber_pendanaan']; ?></td>
														
													<?php if($data['tanggal_efektif']=='1970-01-01'){ ?>
														<td><?php echo "Belum Efektif!"; ?></td>
													<?php 
													} else {
													?>
														<td><?php echo date('d M Y', strtotime($data['tanggal_efektif'])); ?></td>
														
														<?php
													}
													
													?>
														
														<td><?php echo $data['kontraktor']; ?></td>
														<td><?php echo $data['konsultan_desain']; ?></td>
														<td><?php echo $data['konsultan_supervisi']; ?></td>
														<td><?php echo $data['transmisi']; ?></td>
														<td><?php echo date('d M Y', strtotime($data['target_cod']));  ?></td>
														
															
														
														
														<td>
														 <input type="hidden" name="id_project" value="<?php echo $data['id_project']; ?>">
															<div class="hidden-sm hidden-xs action-buttons">
																

																<a class="green" value="<?php echo $data['id_project']; ?>" href="<?php echo base_url() . "pmis/general_information_edit?id_project =".$data['id_project'] ."&id_general_information=" . $data['id_general_information']; ?>">
																	
																	<i class="ace-icon fa fa-pencil bigger-130"></i>
																</a>

																<a class="red" value="<?php echo $data['id_project']; ?>"  href="<?php echo base_url() . "pmis/general_information_delete?id_project =".$data['id_project'] ."&id_general_information=" . $data['id_general_information']; ?>" onclick="return confirm('Anda Yakin Menghapus Data Ini?');" >
																	
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
														<a class="btn btn-primary" href="<?php echo site_url('pmis/general_information_add?id_project='.$_GET['id_project']); ?>">Tambah Data</a>
														</div>
												</div>
												
										</div>
									</div>
								</div>
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
