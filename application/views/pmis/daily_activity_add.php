
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
							<li class="active">Add Daily Activity</li>
						</ul><!-- /.breadcrumb -->

					
						<!-- /section:basics/content.searchbox -->
					</div>

					<!-- /section:basics/content.breadcrumbs -->
					<div class="page-content">
						<!-- #section:settings.box -->
						
						<!-- /section:settings.box -->
						<div class="page-header">
							<h1>
								Add Daily Activity
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Tambah Data Daily Activity
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								
<div class="box-body">
                <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>pmis/aksi_daily_activity_add?id_project=<?php echo $_GET['id_project'];?>" enctype="multipart/form-data">
				
				<input type="hidden" name="id_project" value="<?php echo $_GET['id_project']; ?>">
                    <div class="box-body">
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="milstone" class="col-sm-3 control-label">Milestone</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="milstone" name="milstone" required/>
                                </div>
                            </div>
                        </div>
                        
						<div class="col-lg-10">
                            <div class="form-group">
                                <label for="pekerjaan" class="col-sm-3 control-label">Pekerjaan</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" required/>
                                </div>
                            </div>
                        </div>
                        
						<div class="col-lg-10">
                            <div class="form-group">
                                <label for="kendala" class="col-sm-3 control-label">Kendala</label>
                                <div class="col-sm-5">
								 <textarea style="white-space: pre-line" name="kendala" id="kendala" rows="6" cols="44" required/></textarea>
                                </div>
                            </div>
                        </div>
                        
						<div class="col-lg-10">
                            <div class="form-group">
                                <label for="tindak_lanjut" class="col-sm-3 control-label">Tindak Lanjut</label>
                                <div class="col-sm-5">
								 <textarea style="white-space: pre-line" name="tindak_lanjut" id="tindak_lanjut" rows="6" cols="44" required/></textarea>
                                </div>
                            </div>
                        </div>
						
						 <div class="col-lg-10">
                            <div class="form-group">
                                <label for="status" class="col-sm-3 control-label">Status</label>
                                <div class="col-sm-5">
								 	
							<select class="form-control" id="status" name="status" required>	
							<option>--Pilih Status--</option>
							<option value="1">On Progress</option>
							<option value="2">Selesai</option>
							
							</select>	
								 
								 
                                </div>
                            </div>
                        </div>
                        
                       
                    </div>
                    <div class="box-footer">
                        <div class="pull-right">
                            <a href="<?php echo base_url(); ?>pmis/daily_activity_view?id_project=<?php echo $_GET['id_project']; ?>" class="btn btn-danger">Kembali</a>
                            <button type="reset" class="btn btn-warning">Ulangi</button>
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
