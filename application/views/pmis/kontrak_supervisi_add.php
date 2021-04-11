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
							<li class="active">Add Kontrak Supervisi</li>
						</ul><!-- /.breadcrumb -->

					
						<!-- /section:basics/content.searchbox -->
					</div>

					<!-- /section:basics/content.breadcrumbs -->
					<div class="page-content">
						<!-- #section:settings.box -->
						
						<!-- /section:settings.box -->
						<div class="page-header">
							<h1>
								Add Kontrak Supervisi
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Tambah Data Kontrak Supervisi
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								
<div class="box-body">
                <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>pmis/aksi_kontrak_supervisi_add?id_project=<?php echo $_GET['id_project'];?>" enctype="multipart/form-data">
				
				<input type="hidden" name="id_project" value="<?php echo $_GET['id_project']; ?>">
                    <div class="box-body">
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="nama_kontrak_supervisi" class="col-sm-3 control-label">Nama Kontrak</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="nama_kontrak_supervisi" name="nama_kontrak_supervisi" required/>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="pelaksana" class="col-sm-3 control-label">Pelaksana</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="pelaksana" name="pelaksana" required/>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="nomor" class="col-sm-3 control-label">Nomor</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="nomor" name="nomor" required/>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-10">
                            <div class="form-group" >
							<label for="tanggal_ttd" class="col-sm-3 control-label">Tanggal TTD</label>
                                <div class="col-sm-5">
															
															<div class="input-group">
															  
															  <input name="tanggal_ttd"  class="form-control date-picker" id="id-date-picker-1" type="text"  data-date-format="dd-mm-yyyy" />
															  <span class="input-group-addon">
																<i class="fa fa-calendar-o"></i>
															  </span>
															</div>
														  </div>
							
								</div>
                        </div>
						
                       
                        
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="nilai_kontrak" class="col-sm-3 control-label">Nilai Kontrak</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="nilai_kontrak" name="nilai_kontrak" required/>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="tanggal_berakhir" class="col-sm-3 control-label">Tanggal Berakhir</label>
                                <div class="col-sm-5">
                                   									<div class="input-group">
																	<input name="tanggal_berakhir" id="id-date-picker-1" class="form-control date-picker" type="text" data-date-format="dd-mm-yyyy" />
																	<span class="input-group-addon">
																		<i class="fa fa-calendar-o"></i>
																	</span>
																</div>
                                </div>
                            </div>
                        </div>
						  <div class="col-lg-10">
                            <div class="form-group">
                                <label for="status" class="col-sm-3 control-label">Status</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="status" name="status" required/>
                                </div>
                            </div>
                        </div>
                        

														

														
                        
                       
                    </div>
                    <div class="box-footer">
                        <div class="pull-right">
                            <a href="<?php echo base_url(); ?>pmis/kontrak_supervisi_view?id_project=<?php echo $_GET['id_project']; ?>" class="btn btn-danger">Kembali</a>
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
