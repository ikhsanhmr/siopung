
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
							<li class="active">Add Progress Gallery</li>
						</ul><!-- /.breadcrumb -->

					
						<!-- /section:basics/content.searchbox -->
					</div>

					<!-- /section:basics/content.breadcrumbs -->
					<div class="page-content">
						<!-- #section:settings.box -->
						
						<!-- /section:settings.box -->
						<div class="page-header">
							<h1>
								Add Progress Gallery
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
Add Progress Gallery
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								
<div class="box-body">
                <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>pmis/aksi_progress_gallery_add?id_project=<?php echo $_GET['id_project'];?>" enctype="multipart/form-data">
				
				<input type="hidden" name="id_project" value="<?php echo $_GET['id_project']; ?>">
                    <div class="box-body">
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="nama_foto" class="col-sm-3 control-label">Nama Foto</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="nama_foto" name="nama_foto" required/>
                                </div>
                            </div>
                        </div>
						
                        <div class="col-lg-10">
                            <div class="form-group">
							<label for="upload_foto" class="col-sm-3 control-label">Upload Foto</label>
									 <div class="col-sm-5">
									 
									 <?php echo form_open_multipart('pmis/aksi_progress_gallery_add');?>
										<input class="form-control" type="file" id="upload_foto" name="upload_foto" />

									</div>
								</div>
                        </div>
                         
                        <div class="col-lg-10">
                            <div class="form-group" >
							<label for="tgl_foto" class="col-sm-3 control-label">Tanggal Foto </label>
                                <div class="col-sm-5">
															
															<div class="input-group">
															  
															  <input name="tgl_foto"  class="form-control date-picker" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy" />
															 
															 <span class="input-group-addon">
																<i class="fa fa-calendar-o"></i>
															  </span>
															</div>
														  </div>
							
								</div>
                        </div>
						
                       
                    </div>
                    <div class="box-footer">
                        <div class="pull-right">
                            <a href="<?php echo base_url(); ?>pmis/progress_gallery_view?id_project=<?php echo $_GET['id_project']; ?>" class="btn btn-danger">Kembali</a>
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
