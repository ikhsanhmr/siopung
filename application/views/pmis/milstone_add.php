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
							<li class="active">Add Milstone</li>
						</ul><!-- /.breadcrumb -->

					
						<!-- /section:basics/content.searchbox -->
					</div>

					<!-- /section:basics/content.breadcrumbs -->
					<div class="page-content">
						<!-- #section:settings.box -->
						
						<!-- /section:settings.box -->
						<div class="page-header">
							<h1>
								Add Milstone
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Tambah Data Milstone
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
				
				
				<!-- Proyek Semua -->
				<div class="box-body">
                <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>pmis/aksi_milstone_add" enctype="multipart/form-data">
				
				<input type="hidden" name="id_project" value="<?php echo $_GET['id_project']; ?>">
                    <div class="box-body">
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="nama_milstone" class="col-sm-3 control-label">Nama Milstone</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="nama_milstone" name="nama_milstone" />
                                </div>
                            </div>
                        </div>
                        <!-- Jumlah Unit -->
						<?php	
						$kali = $mesin['jumlah_mesin'];
															for($kata=1;$kata<=$kali;$kata++)	 { 
                       echo' <div class="col-lg-10">
                            <div class="form-group" >
							<label for="start_plan_unit'.$kata.'" class="col-sm-3 control-label">Start Plan (Unit '.$kata.')</label>
                                <div class="col-sm-5">
															
															<div class="input-group">
															  
															  <input name="start_plan_unit'.$kata.'"  class="form-control date-picker" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy" />
															 
															 <span class="input-group-addon">
																<i class="fa fa-calendar-o"></i>
															  </span>
															</div>
														  </div>
							
								</div>
                        </div>
						<div class="col-lg-10">
                            <div class="form-group">
                                <label for="finish_plan_unit'.$kata.'" class="col-sm-3 control-label">Finish Plan (Unit '.$kata.')</label>
                                <div class="col-sm-5">
                                 									<div class="input-group">
																	<input class="form-control date-picker" name="finish_plan_unit'.$kata.'" id="finish_plan_unit'.$kata.'" type="text" data-date-format="dd-mm-yyyy" />
																	<span class="input-group-addon">
																		<i class="fa fa-calendar-o"></i>
																	</span>
																</div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="start_actual_unit'.$kata.'" class="col-sm-3 control-label">Start Actual (Unit '.$kata.')</label>
                                <div class="col-sm-5">
                               									<div class="input-group">
																	<input class="form-control date-picker" name="start_actual_unit'.$kata.'" id="start_actual_unit'.$kata.'" type="text" data-date-format="dd-mm-yyyy" />
																	<span class="input-group-addon">
																		<i class="fa fa-calendar bigger-110"></i>
																	</span>
																</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="finish_actual_unit'.$kata.'" class="col-sm-3 control-label">Finish Actual (Unit '.$kata.')</label>
                                <div class="col-sm-5">
                                   									<div class="input-group">
																	<input name="finish_actual_unit'.$kata.'" id="finish_actual_unit'.$kata.'" class="form-control date-picker" type="text" data-date-format="dd-mm-yyyy">
																	<span class="input-group-addon">
																		<i class="fa fa-calendar bigger-110"></i>
																	</span>
																</div>
                                </div>
                            </div>
                        </div>';
						
						}
						?>
                       <!-- Jumlah Unit -->
					   

														

														
                        
                       
                    </div>
                    <div class="box-footer">
                        <div class="pull-right">
                            <a href="<?php echo base_url(); ?>pmis/milstone_view?id_project=<?php echo $_GET['id_project']; ?>" class="btn btn-danger">Kembali</a>
                            <button type="reset" class="btn btn-warning">Ulangi</button>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
			<!-- Proyek Semua -->
					

								

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
