
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
							<li class="active">Edit Data Kronologis</li>
						</ul><!-- /.breadcrumb -->

					
						<!-- /section:basics/content.searchbox -->
					</div>

					<!-- /section:basics/content.breadcrumbs -->
					<div class="page-content">
						<!-- #section:settings.box -->
						
						<!-- /section:settings.box -->
						<div class="page-header">
							<h1>
								Edit Data Kronologis
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
                <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>pmis/aksi_kronologis_edit?id_project=<?php echo $kronologis['id_project']; ?>"  enctype="multipart/form-data">
				
				 <input type="hidden" name="id_project" value="<?php echo $kronologis['id_project']; ?>">
				 <input type="hidden" name="id_issue" value="<?php echo $kronologis['id_issue']; ?>">
				 <input type="hidden" name="id_kronologis" value="<?php echo $kronologis['id_kronologis']; ?>">
                    
                        
                        <div class="box-body">
                       
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="id_project" class="col-sm-3 control-label">ID Project</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="id_project" name="id_project" value="<?php echo $kronologis['id_project']; ?>"  readonly/>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="kronologis_tindak_lanjut" class="col-sm-3 control-label">Kronologis Tindak Lanjut</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="kronologis_tindak_lanjut" name="kronologis_tindak_lanjut" value="<?php echo $kronologis['kronologis_tindak_lanjut']; ?>"  required/>
                                </div>
                            </div>
                        </div>
                       
                        
                    
						

														

														
                        
                       
                    </div>
                    <div class="box-footer">
					<div  class="space"> </div>
                      <center> <div class="col-sm-10">
                            <a href="<?php echo base_url(); ?>pmis/kronologis_view?id_project=<?php echo $kronologis['id_project']; ?>" class="btn btn-danger">Kembali</a>
                            
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
