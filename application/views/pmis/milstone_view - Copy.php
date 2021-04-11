
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

										<!-- div.table-responsive -->

										<!-- div.dataTables_borderWrap -->
										<div>
										
										<?php 
										if ($_GET['id_project']=='61'){ ?>
											<!-- Proyek MPP NIAS  -->
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
													<td  rowspan="3" class="center" >No</td>
													<td  rowspan="3" class="center" >Milstone</td>
													<td  colspan="4" class="center" >Unit 1</td>
													<td  colspan="4" class="center" >Unit 2</td>
													<td  colspan="4" class="center" >Unit 3</td>
													<td  colspan="4" class="center" >Unit 4</td>
													<td  colspan="4" class="center" >Unit 5</td>
													<td  rowspan="3" class="center" >Actions</td>
													<tr>
														<td  colspan="2" class="center" >Plan</td>
														<td  colspan="2" class="center" >Actual</td>
												
														<td  colspan="2" class="center" >Plan</td>
														<td  colspan="2" class="center" >Actual</td>
														
														<td  colspan="2" class="center" >Plan</td>
														<td  colspan="2" class="center" >Actual</td>
												
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
														
													<th class="center">Start </th>
													<th class="center">Finish </th>
													<th  class="center">Start </td>
													<th  class="center">Finish </th>
													
													<th  class="center">Start </th>
													<th  class="center">Finish </th>
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
														<a href="#"><?php echo $data['nama_milstone']; ?></a>
														</td>
														
														<!-- Start Unit 1 -->
															<?php
																if ($data['start_plan_unit1']=='0000-00-00' || $data['start_plan_unit1']=='1970-01-01'){
															echo '<td class="center"> - </td>';
																} else {
															?>
															<td class="center"><?php echo date('d/m/y',strtotime($data['start_plan_unit1'])); ?></td>
															<?php
																}
															?>			
														<?php
																if ($data['finish_plan_unit1']=='0000-00-00' || $data['finish_plan_unit1']=='1970-01-01'){
															echo '<td class="center"> - </td>';
																} else {
															?>
															<td class="center"><?php echo date('d/m/y',strtotime($data['finish_plan_unit1'])); ?></td>
															<?php
																}
															?>			
															
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
														<!-- Finsih Unit 1 -->
														
														<!-- Start Unit 2 -->
															<?php
																if ($data['start_plan_unit2']=='0000-00-00' || $data['start_plan_unit2']=='1970-01-01'){
															echo '<td class="center"> - </td>';
																} else {
															?>
															<td class="center"><?php echo date('d/m/y',strtotime($data['start_plan_unit2'])); ?></td>
															<?php
																}
															?>															
														
															<?php
																if ($data['finish_plan_unit2']=='0000-00-00' || $data['finish_plan_unit2']=='1970-01-01'){
															echo '<td class="center"> - </td>';
																} else {
															?>
															<td class="center"><?php echo date('d/m/y',strtotime($data['finish_plan_unit2'])); ?></td>
															<?php
																}
															?>															
														
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
														<!-- Finsih Unit 2 -->
														
														<!-- Start Unit 3 -->
															<?php
																if ($data['start_plan_unit3']=='0000-00-00' || $data['start_plan_unit3']=='1970-01-01'){
															echo '<td class="center"> - </td>';
																} else {
															?>
															<td class="center"><?php echo date('d/m/y',strtotime($data['start_plan_unit3'])); ?></td>
															<?php
																}
															?>															
														
															<?php
																if ($data['finish_plan_unit3']=='0000-00-00' || $data['finish_plan_unit3']=='1970-01-01'){
															echo '<td class="center"> - </td>';
																} else {
															?>
															<td class="center"><?php echo date('d/m/y',strtotime($data['finish_plan_unit3'])); ?></td>
															<?php
																}
															?>															
														
															<?php
																if ($data['start_actual_unit3']=='0000-00-00' || $data['start_actual_unit3']=='1970-01-01'){
															echo '<td class="center"> - </td>';
																} else {
															?>
															<td class="center"><?php echo date('d/m/y',strtotime($data['start_actual_unit3'])); ?></td>
															<?php
																}
															?>															
														
														<?php
																if ($data['finish_actual_unit3']=='0000-00-00' || $data['finish_actual_unit3']=='1970-01-01'){
															echo '<td class="center"> - </td>';
																} else {
															?>
															<td class="center"><?php echo date('d/m/y',strtotime($data['finish_actual_unit3'])); ?></td>
															<?php
																}
															?>															
														<!-- Finsih Unit 3 -->
														
														<!-- Start Unit 4 -->
															<?php
																if ($data['start_plan_unit4']=='0000-00-00' || $data['start_plan_unit4']=='1970-01-01'){
															echo '<td class="center"> - </td>';
																} else {
															?>
															<td class="center"><?php echo date('d/m/y',strtotime($data['start_plan_unit4'])); ?></td>
															<?php
																}
															?>															
														
															<?php
																if ($data['finish_plan_unit4']=='0000-00-00' || $data['finish_plan_unit4']=='1970-01-01'){
															echo '<td class="center"> - </td>';
																} else {
															?>
															<td class="center"><?php echo date('d/m/y',strtotime($data['finish_plan_unit4'])); ?></td>
															<?php
																}
															?>															
														
															<?php
																if ($data['start_actual_unit4']=='0000-00-00' || $data['start_actual_unit4']=='1970-01-01'){
															echo '<td class="center"> - </td>';
																} else {
															?>
															<td class="center"><?php echo date('d/m/y',strtotime($data['start_actual_unit4'])); ?></td>
															<?php
																}
															?>															
														
														<?php
																if ($data['finish_actual_unit4']=='0000-00-00' || $data['finish_actual_unit4']=='1970-01-01'){
															echo '<td class="center"> - </td>';
																} else {
															?>
															<td class="center"><?php echo date('d/m/y',strtotime($data['finish_actual_unit4'])); ?></td>
															<?php
																}
															?>															
														<!-- Finsih Unit 4 -->
														
														<!-- Start Unit 5 -->
															<?php
																if ($data['start_plan_unit5']=='0000-00-00' || $data['start_plan_unit5']=='1970-01-01'){
															echo '<td class="center"> - </td>';
																} else {
															?>
															<td class="center"><?php echo date('d/m/y',strtotime($data['start_plan_unit5'])); ?></td>
															<?php
																}
															?>															
														
															<?php
																if ($data['finish_plan_unit5']=='0000-00-00' || $data['finish_plan_unit5']=='1970-01-01'){
															echo '<td class="center"> - </td>';
																} else {
															?>
															<td class="center"><?php echo date('d/m/y',strtotime($data['finish_plan_unit5'])); ?></td>
															<?php
																}
															?>															
														
															<?php
																if ($data['start_actual_unit5']=='0000-00-00' || $data['start_actual_unit5']=='1970-01-01'){
															echo '<td class="center"> - </td>';
																} else {
															?>
															<td class="center"><?php echo date('d/m/y',strtotime($data['start_actual_unit5'])); ?></td>
															<?php
																}
															?>															
														
														<?php
																if ($data['finish_actual_unit5']=='0000-00-00' || $data['finish_actual_unit5']=='1970-01-01'){
															echo '<td class="center"> - </td>';
																} else {
															?>
															<td class="center"><?php echo date('d/m/y',strtotime($data['finish_actual_unit5'])); ?></td>
															<?php
																}
															?>															
														<!-- Finsih Unit 5 -->
														
														
														
														<td>
														 <input type="hidden" name="id_project" value="<?php echo $data['id_project']; ?>">
															<div class="hidden-sm hidden-xs action-buttons">
																

																<a class="green" value="<?php echo $data['id_project']; ?>" href="<?php echo base_url() . "pmis/milstone_edit?id_project =".$data['id_project'] ."&id_milstone=" . $data['id_milstone']; ?>">
																	
																	<i class="ace-icon fa fa-pencil bigger-130"></i>
																</a>

																<a class="red" value="<?php echo $data['id_project']; ?>"  href="<?php echo base_url() . "pmis/milstone_delete?id_project =".$data['id_project'] ."&id_milstone=" . $data['id_milstone']; ?>" onclick="return confirm('Anda Yakin Menghapus Data Ini?');" >
																	
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
											<!-- Proyek MPP NIAS  -->
											
											<?php } else {	?>
										<!-- Proyek biasa -->
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
													<td  rowspan="3" class="center" >No</td>
													<td  rowspan="3" class="center" >Milstone</td>
													<td  colspan="4" class="center" >Unit 1</td>
													<td  colspan="4" class="center" >Unit 2</td>
													<td  rowspan="3" class="center" >Actions</td>
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
														<a href="#"><?php echo $data['nama_milstone']; ?></a>
														</td>
															<?php
																if ($data['start_plan_unit1']=='0000-00-00' || $data['start_plan_unit1']=='1970-01-01'){
															echo '<td class="center"> - </td>';
																} else {
															?>
															<td class="center"><?php echo date('d/m/y',strtotime($data['start_plan_unit1'])); ?></td>
															<?php
																}
															?>			
														<?php
																if ($data['finish_plan_unit1']=='0000-00-00' || $data['finish_plan_unit1']=='1970-01-01'){
															echo '<td class="center"> - </td>';
																} else {
															?>
															<td class="center"><?php echo date('d/m/y',strtotime($data['finish_plan_unit1'])); ?></td>
															<?php
																}
															?>			
															
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
														
														
														
															<?php
																if ($data['start_plan_unit2']=='0000-00-00' || $data['start_plan_unit2']=='1970-01-01'){
															echo '<td class="center"> - </td>';
																} else {
															?>
															<td class="center"><?php echo date('d/m/y',strtotime($data['start_plan_unit2'])); ?></td>
															<?php
																}
															?>															
														
															<?php
																if ($data['finish_plan_unit2']=='0000-00-00' || $data['finish_plan_unit2']=='1970-01-01'){
															echo '<td class="center"> - </td>';
																} else {
															?>
															<td class="center"><?php echo date('d/m/y',strtotime($data['finish_plan_unit2'])); ?></td>
															<?php
																}
															?>															
														
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
														
														
														
														
														<td>
														 <input type="hidden" name="id_project" value="<?php echo $data['id_project']; ?>">
															<div class="hidden-sm hidden-xs action-buttons">
																

																<a class="green" value="<?php echo $data['id_project']; ?>" href="<?php echo base_url() . "pmis/milstone_edit?id_project =".$data['id_project'] ."&id_milstone=" . $data['id_milstone']; ?>">
																	
																	<i class="ace-icon fa fa-pencil bigger-130"></i>
																</a>

																<a class="red" value="<?php echo $data['id_project']; ?>"  href="<?php echo base_url() . "pmis/milstone_delete?id_project =".$data['id_project'] ."&id_milstone=" . $data['id_milstone']; ?>" onclick="return confirm('Anda Yakin Menghapus Data Ini?');" >
																	
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
											<!-- Proyek biasa -->
											<?php } ?>
											
											<div class="space"></div>
												<div class="row">
														<div id="default-buttons" class="col-sm-6">
														<a class="btn btn-primary" href="<?php echo site_url('pmis/milstone_add?id_project='.$_GET['id_project']); ?>">Tambah Data</a>
														</div>
												</div>
										</div>
									

								

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
