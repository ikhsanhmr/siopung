
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
							<form name="form1" method="post" action="<?php echo base_url(); ?>pmis/project_view">
	<div class="col-sm-3">
    Ownership : <select class="form-control" id="kode_project" name="kode_project" >	
							<option value="">--List of Ownership--</option>
							<option value="PLN">PLN</option>
							<option value="IPP">IPP</option>
							<option value="UNALLOCATED">UNALLOCATED</option>
							</select>	
    </div>
	
	<div class="col-sm-3">
    RUPTL : <select class="form-control" id="ruptl" name="ruptl" >	
							<option value="">--List of RUPTL--</option>
							<option value="2016">2016</option>
							<option value="2017">2017</option>
							<option value="2018">2018</option>
							<option value="2019">2019</option>
							<option value="2020">2020</option>
							</select>	
    </div>
	
	<div class="col-sm-3">
    Program : <select class="form-control" id="program_project" name="program_project" >	
							<option value="">--List of Program--</option>
							<option value="1">Regular</option>
							<option value="2">FTP I</option>
							<option value="3">FTP II</option>
							<option value="4">35.000 MW</option>
							<option value="5">-</option>
							</select>	
	</div>
	<div class="col-sm-3">
    Province : <select class="form-control" id="provinsi" name="provinsi" >	
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
    <br/>
	
	<div class="col-sm-3">
	<br>
		<button type="submit" class="btn btn-sm btn-primary no-radius"><i class="ace-icon fa fa-search nav-search-icon"> </i>Submit</button>
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
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
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
													
													<?php 
													if ($projectnya == '') {
														foreach ($proj->result_array() as $data) { 
														if($data['fase_project'] == 1) {
																$fase = 'Inisiasi';
															} else if($data['fase_project'] == 2) {
																$fase = 'Perencanaan';
															} else if($data['fase_project'] == 3) {
																$fase = 'Pra Pelaksanaan';
															}  else if($data['fase_project'] == 4) {
																$fase = 'Pelaksanaan';
															} else if($data['fase_project'] == 5) {
																$fase = 'Penyelesaian';
															} else {
																$fase = 'Data Belum Di isi!';
															}
															
															if($data['program_project'] == 1) {
																$program = 'Regular';
															} else if($data['program_project'] == 2) {
																$program = 'FTP I';
															} else if($data['program_project'] == 3) {
																$program = 'FTP II';
															}  else if($data['program_project'] == 4) {
																$program = '35.000 MW';
															} else if($data['program_project'] == 5) {
																$program = '-';
															} else {
																$program = 'Data Belum Di isi!';
															}
															
															
															if($data['provinsi'] == 1) {
																$provinsi = 'Aceh';
															} else if($data['provinsi'] == 2) {
																$provinsi = 'Sumatera Utara';
															} else if($data['provinsi'] == 3) {
																$provinsi = 'Riau';
															}  else if($data['provinsi'] == 4) {
																$provinsi = 'Sumatera Barat';
															} else if($data['provinsi'] == 5) {
																$provinsi = 'Kepulauan Riau';
															} else if($data['provinsi'] == 6) {
																$provinsi = 'Jambi';
															} else if($data['provinsi'] == 7) {
																$provinsi = 'Sumatera Selatan';
															}  else if($data['provinsi'] == 8) {
																$provinsi = 'Bengkulu';
															} else if($data['provinsi'] == 9) {
																$provinsi = 'Bangka Belitung';
															}else if($data['provinsi'] == 10) {
																$provinsi = 'Lampung';
															} else {
																$provinsi = 'Data Belum Di isi!';
															}
															
															
															
													?>
													<tr>
														<td class="center">
															<?php echo $no; 
															
															?>
														</td>
														<td><?php echo $data['kode_project']; ?></td>
														<td>
														<a href="<?php echo base_url() . "pmis/general_information_view?id_project=" . $data['id_project']; ?>"><?php echo $data['nama_project']; ?></a>
														</td>
														<td><?php echo $program; ?></td>
														<td><?php echo $ruptl; ?></td>
														<td><?php echo $provinsi; ?></td>
														<td><?php echo $fase; ?></td>
														<!-- <td><a href="<?php //echo base_url() . "pmis/project_map_view?lokasi_project=" . $data['lokasi_project']; ?>"><?php //echo $data['lokasi_project']; ?></a></td> -->
														<td><?php echo $data['lokasi_project']; ?></td>
														<td><?php echo $data['jumlah_mesin']; ?> Unit</td>
														<?php if($dapat_status['status'] == 4){
														
														//kosong
														
														} else { ?>
														<td>
															<div class="hidden-sm hidden-xs action-buttons">
																
															
																<a class="green" href="<?php echo base_url() . "pmis/project_edit?id_project=" . $data['id_project']; ?>">
																	<i class="ace-icon fa fa-pencil bigger-130"></i>
																</a>

																<a class="red" href="<?php echo base_url() . "pmis/project_delete?id_project=" . $data['id_project']; ?>" onclick="return confirm('Anda Yakin Menghapus Data Ini?');" >
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
													} 
													  else {
														foreach ($projectnya->result_array() as $data) {
														if($data['fase_project'] == 1) {
																$fase = 'Inisiasi';
															} else if($data['fase_project'] == 2) {
																$fase = 'Perencanaan';
															} else if($data['fase_project'] == 3) {
																$fase = 'Pra Pelaksanaan';
															}  else if($data['fase_project'] == 4) {
																$fase = 'Pelaksanaan';
															} else if($data['fase_project'] == 5) {
																$fase = 'Penyelesaian';
															} else {
																$fase = 'Data Belum Di isi!';
															}
															
															if($data['program_project'] == 1) {
																$program = 'Regular';
															} else if($data['program_project'] == 2) {
																$program = 'FTP I';
															} else if($data['program_project'] == 3) {
																$program = 'FTP II';
															}  else if($data['program_project'] == 4) {
																$program = '35.000 MW';
															} else if($data['program_project'] == 5) {
																$program = '-';
															} else {
																$program = 'Data Belum Di isi!';
															}
															
															if($data['ruptl'] == 2016) {
																$ruptl = '2016';
															} else if($data['ruptl'] == 2017) {
																$ruptl = '2017';
															} else if($data['ruptl'] == 2018) {
																$ruptl = '2018';
															}  else if($data['ruptl'] == 2019) {
																$ruptl = '2019';
															} else if($data['ruptl'] == 2020) {
																$ruptl = '2020';
															} else {
																$ruptl = 'Data Belum Di isi!';
															}
															
															
															if($data['provinsi'] == 1) {
																$provinsi = 'Aceh';
															} else if($data['provinsi'] == 2) {
																$provinsi = 'Sumatera Utara';
															} else if($data['provinsi'] == 3) {
																$provinsi = 'Riau';
															}  else if($data['provinsi'] == 4) {
																$provinsi = 'Sumatera Barat';
															} else if($data['provinsi'] == 5) {
																$provinsi = 'Kepulauan Riau';
															} else if($data['provinsi'] == 6) {
																$provinsi = 'Jambi';
															} else if($data['provinsi'] == 7) {
																$provinsi = 'Sumatera Selatan';
															}  else if($data['provinsi'] == 8) {
																$provinsi = 'Bengkulu';
															} else if($data['provinsi'] == 9) {
																$provinsi = 'Bangka Belitung';
															}else if($data['provinsi'] == 10) {
																$provinsi = 'Lampung';
															} else {
																$provinsi = 'Data Belum Di isi!';
															}
															
															
															
													?>
													<tr>
														<td class="center">
															<?php echo $no; 
															
															?>
														</td>
														<td><?php echo $data['kode_project']; ?></td>
														<td>
														<a href="<?php echo base_url() . "pmis/general_information_view?id_project=" . $data['id_project']; ?>"><?php echo $data['nama_project']; ?></a>
														</td>
														<td><?php echo $program; ?></td>
														<td><?php echo $ruptl; ?></td>
														<td><?php echo $provinsi; ?></td>
														<td><?php echo $fase; ?></td>
														<!-- <td><a href="<?php //echo base_url() . "pmis/project_map_view?lokasi_project=" . $data['lokasi_project']; ?>"><?php //echo $data['lokasi_project']; ?></a></td> -->
														<td><?php echo $data['lokasi_project']; ?></td>
														<td><?php echo $data['jumlah_mesin']; ?> Unit</td>
														<?php if($dapat_status['status'] == 4){
														
														//kosong
														
														} else { ?>
														<td>
															<div class="hidden-sm hidden-xs action-buttons">
																
															
																<a class="green" href="<?php echo base_url() . "pmis/project_edit?id_project=" . $data['id_project']; ?>">
																	<i class="ace-icon fa fa-pencil bigger-130"></i>
																</a>

																<a class="red" href="<?php echo base_url() . "pmis/project_delete?id_project=" . $data['id_project']; ?>" onclick="return confirm('Anda Yakin Menghapus Data Ini?');" >
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
													}
												?>
													
													
													
													
													
												</tbody>
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
			
