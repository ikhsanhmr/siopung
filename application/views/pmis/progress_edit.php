
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
							<li class="active">Edit Data Progress</li>
						</ul><!-- /.breadcrumb -->

					
						<!-- /section:basics/content.searchbox -->
					</div>

					<!-- /section:basics/content.breadcrumbs -->
					<div class="page-content">
						<!-- #section:settings.box -->
						
						<!-- /section:settings.box -->
						<div class="page-header">
							<h1>
								Edit Data Progress
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Edit Data 
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								
				<div class="box-body">
                <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>pmis/aksi_progress_edit?id_project=<?php echo $progress['id_project']; ?>"  enctype="multipart/form-data">
				
				 <input type="hidden" name="id_project" value="<?php echo $progress['id_project']; ?>">
				 <input type="hidden" name="id_progress" value="<?php echo $progress['id_progress']; ?>">
                    
                        
                        <div class="box-body">
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="bulan" class="col-sm-3 control-label">Bulan</label>
                                <div class="col-sm-5">
								 <select class="form-control" id="bulan" name="bulan" required>	
									
									<option value="<?php echo $progress['bulan']; ?>"><?php echo $progress['bulan']; ?></option>
									
								</select>	
                                </div>
                            </div>
                        </div>
                       
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="tahun" class="col-sm-3 control-label">Tahun</label>
                                <div class="col-sm-5">
								 <select class="form-control" id="tahun" name="tahun" required>	
									
									<option value="<?php echo $progress['tahun']; ?>"><?php echo $progress['tahun']; ?></option>
									
								</select>	
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="nilai_e" class="col-sm-3 control-label">Nilai E</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="nilai_e" name="nilai_e" value="<?php echo $progress['individual_e']; ?>" required/>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="nilai_p" class="col-sm-3 control-label">Nilai P</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="nilai_p" name="nilai_p" value="<?php echo $progress['individual_p']; ?>" required/>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="nilai_c" class="col-sm-3 control-label">Nilai C</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="nilai_c" name="nilai_c" value="<?php echo $progress['individual_c']; ?>" required/>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="total_plan" class="col-sm-3 control-label">Total Plan</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="total_plan" name="total_plan" value="<?php echo $progress['total_plan']; ?>" />
                                </div>
                            </div>
                        </div>
                        
                       
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="total" class="col-sm-3 control-label">Total </label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="total" name="total" value="<?php echo $progress['total']; ?>" required/>
                                </div>
                            </div>
                        </div>
                        
                       
						

														

														
                        
                       
                    </div>
                    <div class="box-footer">
					<div  class="space"> </div>
                      <center> <div class="col-sm-10">
                            <a href="<?php echo base_url(); ?>pmis/progress_view?id_project=<?php echo $progress['id_project']; ?>" class="btn btn-danger">Kembali</a>
                            
                            <button type="submit" class="btn btn-success">Submit</button>
                      </div>
                    </div>
                </form>
            </div>

								

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
