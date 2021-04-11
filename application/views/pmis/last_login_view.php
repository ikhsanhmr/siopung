
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
							<li class="active">Last Login</li>
						</ul><!-- /.breadcrumb -->

					
					</div>

					<!-- /section:basics/content.breadcrumbs -->
					<div class="page-content">
						<!-- #section:settings.box -->
						
						<!-- /section:settings.box -->
						<div class="page-header">
							<h1>
								List User Last Login
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
											Last Login 
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
														<th>UPP </th>
														<th>Nama User </th>
														<th>Last Login</th>
														<th>IP Address</th>
														<th>Browser</th>
														
														
													</tr>
												</thead>

												<?php 
												$no =1;
												?>
												<tbody>
													
													<?php foreach ($last_login->result_array() as $data) { ?>
													<tr>
														<td class="center">
															<?php echo $no; ?>
														</td>
														<td>
																<?php echo $data['nama_upp']; ?>
														</td>
														<td>
														
														<?php echo $data['nama_admin']; ?>
														</td>
														
														<td><?php echo date('d-M-Y H:i:s' , strtotime($data['last_login'])); ?></td>
														<td>
														<?php echo $data['ip_last_login']; ?>
														</td>
														<td>
														<?php echo $data['browser']; ?>
														</td>
														
														
													</tr>

													


													

													<?php 
													$no++;
													}
												
												?>
												
												</tbody>
											</table>
											
										
										</div>
									

								

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
