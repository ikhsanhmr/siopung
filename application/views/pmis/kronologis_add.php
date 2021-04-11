
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
							<li class="active">Add Kronologis</li>
						</ul><!-- /.breadcrumb -->

					
						<!-- /section:basics/content.searchbox -->
					</div>

					<!-- /section:basics/content.breadcrumbs -->
					<div class="page-content">
						<!-- #section:settings.box -->
						
						<!-- /section:settings.box -->
						<div class="page-header">
							<h1>
								Add Kronologis
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Tambah Data Kronologis
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								
<div class="box-body">
                <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>pmis/aksi_kronologis_add?id_project=<?php echo $_GET['id_project'];?>" enctype="multipart/form-data">
				
				<input type="hidden" name="id_project" value="<?php echo $_GET['id_project']; ?>">
                    <div class="box-body">
                         <div class="col-lg-10">
                            <div class="form-group">
                                <label for="id_issue" class="col-sm-3 control-label">Issue</label>
                                <div class="col-sm-5">
								
							<select class="form-control" id="id_issue" name="id_issue" required>	
							<option>--Pilih Issue--</option>
							<?php foreach ($issue->result_array() as $data) { ?>
							
							<option value="<?php echo $data['id_issue']; ?>"><?php echo $data['issue_description']; ?></option>
							
							<?php } ?>
							</select>	
                                    
                                </div>
                            </div>
                        </div>
						
						<div class="col-lg-10">
                            <div class="form-group">
                                <label for="kronologis_tindak_lanjut" class="col-sm-3 control-label">Kronologis Tindak Lanjut</label>
                                <div class="col-sm-5">
								 
								 <textarea name='kronologis_tindak_lanjut' id="kronologis_tindak_lanjut" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        
                       
                    </div>
                    <div class="box-footer">
                        <div class="pull-right">
                            <a href="<?php echo base_url(); ?>pmis/kronologis_view?id_project=<?php echo $_GET['id_project']; ?>" class="btn btn-danger">Kembali</a>
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
