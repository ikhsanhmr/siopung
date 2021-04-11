
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
							<li class="active">List of General Information <?php echo $tampil_nama_project['nama_project']; ?> (<?php echo $tampil_nama_project['kode_project']; ?>)</li>
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
											General Information <?php echo $tampil_nama_project['nama_project']; ?> (<?php echo $tampil_nama_project['kode_project']; ?>)
										</div>

										<!-- div.table-responsive -->

										<!-- div.dataTables_borderWrap -->
											<!--	<div style ="overflow-x:scroll;overflow-y:hidden;"> -->
										<div>
											<table class="table table-condensed neutralize" >   
												<tbody>
													
													<?php foreach ($general_information->result_array() as $data) { ?>
													
													<tr>
														<tr>
														  <td width="141" height="21">Project Location</td>
														  <td width="274"><?php echo $data['lokasi_project']; ?></td>
														</tr>
														<?php if($tampil_nama_project['kode_project'] =='IPP'){ ?>
															<tr>
															  <td height="21">Developer</td>
															  <td><?php echo $data['developer']; ?></td>
															</tr>
															
															<tr>
																<td height="21">Date Sign PPA</td>
																<td><?php echo date('d M Y', strtotime($data['date_sign_ppa']));  ?></td>
															</tr>
														
															<tr>
																<td height="21">Financial Date Close</td>
																<td><?php echo date('d M Y', strtotime($data['financial_close_date']));  ?></td>
															</tr>
															<tr>
															  <td height="21">Tariff</td>
															  <td><?php echo $data['tariff']; ?></td>
															</tr>
															
														<?php } ?>
														<tr>
														  <td height="21">Plant Area</td>
														  <td><?php echo $data['luas_area']; ?></td>
														</tr>
														<tr>
														  <td height="22">Scope Of Work</td>
														  <td><?php echo $data['lingkup_pekerjaan']; ?></td>
														</tr>
														<tr>
														  <td height="21">Contract Number</td>
														  <td><?php echo $data['no_kontrak']; ?></td>
														</tr>
														<tr>
														  <td height="21">Contract Date</td>
														 <?php if($data['tgl_kontrak']=='1970-01-01'){ ?>
														<td><?php echo "Belum Terkontrak!"; ?></td>
													<?php 
													} else {
													?>
														<td><?php echo date('d M Y', strtotime($data['tgl_kontrak'])); ?></td>
														
														<?php
													}
													
													?>
														</tr>
														<tr>
														  <td height="21">Contract Value</td>
														  <td><?php echo $data['nilai_kontrak']; ?></td>
														</tr>
														<tr>
														  <td height="21">Sources of Funding</td>
														  <td><?php echo $data['sumber_pendanaan']; ?></td>
														</tr>
														<tr>
														  <td height="21">Effective Date</td>
														  <?php if($data['tanggal_efektif']=='1970-01-01'){ ?>
														<td><?php echo "Belum Efektif!"; ?></td>
													<?php 
													} else {
													?>
														<td><?php echo date('d M Y', strtotime($data['tanggal_efektif'])); ?></td>
														
														<?php
													}
													
													?>
														</tr>
														<tr>
														  <td height="21">Contractor</td>
														  <td><?php echo $data['kontraktor']; ?></td>
														</tr>
														<tr>
														  <td height="21">Design Consultant</td>
														  <td><?php echo $data['konsultan_desain']; ?></td>
														</tr>
														<tr>
														  <td height="21">Supervision Consultant</td>
														  <td><?php echo $data['konsultan_supervisi']; ?></td>
														</tr>
														
														<tr>
														  <td height="21">Transmision</td>
														  <td><?php echo $data['transmisi']; ?></td>
														</tr>
														
														<tr>
														  <td height="21">Target COD</td>
														 	<td><?php echo date('d M Y', strtotime($data['target_cod']));  ?></td>
														</tr>
														
													</tr>
													
														
																
															
														
														
													
													<tr>
														  <td height="28" colspan="6"><hr /></td>
														</tr>
														
													
														 
													
													
													</tbody>
													
													</table>
														
													
													<?php 
													
													//print_r($dapat_status['status']); exit;
													if($dapat_status['status'] == 4){ ?>
														<div id="default-buttons" class="col-sm-4">
															<a class="btn btn-primary" href="<?php echo site_url('pmis/milstone_view?id_project='.$_GET['id_project']); ?>">Milestone</a>
														</div>
														
														<div id="default-buttons" class="col-sm-4">
															<a class="btn btn-primary" href="<?php echo site_url('pmis/kontrak_utama_view?id_project='.$_GET['id_project']); ?>">Main Contract</a>
														</div>
														
														<div id="default-buttons" class="col-sm-4">
															<a class="btn btn-primary" href="<?php echo site_url('pmis/kontrak_engineering_view?id_project='.$_GET['id_project']); ?>">Engineering Contract</a>
														</div>
														
														<br>
														<br>
													<div class="space"></div>
														<div id="default-buttons" class="col-sm-4">
															<a class="btn btn-primary" href="<?php echo site_url('pmis/kontrak_supervisi_view?id_project='.$_GET['id_project']); ?>">Supervision Contract</a>
														</div>
														
														
														<div id="default-buttons" class="col-sm-4">
															<a class="btn btn-primary" href="<?php echo site_url('pmis/kontrak_lokal_view?id_project='.$_GET['id_project']); ?>">Local Contract</a>
														</div>
														
														<div id="default-buttons" class="col-sm-4">
															<a class="btn btn-primary" href="<?php echo site_url('pmis/gallery_view?id_project='.$_GET['id_project']); ?>">Gallery</a>
														</div>
														<br>
														<br>
													<div class="space"></div>
													
														<div id="default-buttons" class="col-sm-4">
															<a class="btn btn-primary" href="<?php echo site_url('pmis/progress_view?id_project='.$_GET['id_project']); ?>">Progress</a>
														</div>
														
														<div id="default-buttons" class="col-sm-4">
															<a class="btn btn-primary" href="<?php echo site_url('pmis/issue_view?id_project='.$_GET['id_project']); ?>">Issue</a>
														</div>
														
														<div id="default-buttons" class="col-sm-4">
															<a class="btn btn-primary" href="<?php echo site_url('pmis/daily_activity_view?id_project='.$_GET['id_project']); ?>">Daily Activity</a>
														</div>
														
													<?php } else if($dapat_status['status'] == 2 || $dapat_status['status'] == 3){ ?>
													<div class="row">
															
														<div id="default-buttons" class="col-sm-3">
														<a class="btn btn-warning" href="<?php echo base_url() . "pmis/general_information_edit?id_project=".$data['id_project'] ."&id_general_information=" . $data['id_general_information']; ?>" value="<?php echo $data['id_project']; ?>"><i class="fa fa-pencil-square-o"></i> Edit Data</a>
														</div>
														
														<div id="default-buttons" class="col-sm-3">
														<a class="btn btn-danger" value="<?php echo $data['id_project']; ?>" href="<?php echo base_url() . "pmis/general_information_delete?id_project=".$data['id_project'] ."&id_general_information=" . $data['id_general_information']; ?>" onclick="return confirm('Anda Yakin Menghapus Data Ini?');" ><i class="fa fa-close"></i> Hapus Data</a>
														</div>
													</div>
														
													<?php } ?>
													
												<?php } ?>	
													
													
														
														<br>
										<br>
										<div id="default-buttons" class="col-sm-3">
															<a class="btn btn-primary" href="<?php echo site_url('pmis/general_information_add?id_project='.$_GET['id_project']); ?>"><i class="fa fa-plus"></i> Tambah Data</a>
															</div>
											
											
											
											
											
															
												
										</div>
									
									</div>
								</div>
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
