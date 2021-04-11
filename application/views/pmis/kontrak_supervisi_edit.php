
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
							<li class="active">Edit Data Kontrak Supervisi</li>
						</ul><!-- /.breadcrumb -->

					
						<!-- /section:basics/content.searchbox -->
					</div>

					<!-- /section:basics/content.breadcrumbs -->
					<div class="page-content">
						<!-- #section:settings.box -->
						
						<!-- /section:settings.box -->
						<div class="page-header">
							<h1>
								Edit Data Kontrak Supervisi
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
                <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>pmis/aksi_kontrak_supervisi_edit?id_project=<?php echo $kontr['id_project']; ?>"  enctype="multipart/form-data">
				
				 <input type="hidden" name="id_project" value="<?php echo $kontr['id_project']; ?>">
				 <input type="hidden" name="id_kontrak_supervisi" value="<?php echo $kontr['id_kontrak_supervisi']; ?>">
                    
                        
                        <div class="box-body">
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="nama_kontrak_supervisi" class="col-sm-3 control-label">Nama Kontrak Supervisi</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="nama_kontrak_supervisi" name="nama_kontrak_supervisi" value="<?php echo $kontr['nama_kontrak_supervisi']; ?>" required/>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="pelaksana" class="col-sm-3 control-label">Pelaksana</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="pelaksana" name="pelaksana" value="<?php echo $kontr['pelaksana']; ?>" required/>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="nomor" class="col-sm-3 control-label">Nomor Kontrak</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="nomor" name="nomor" value="<?php echo $kontr['nomor']; ?>" required/>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-10">
                            <div class="form-group" >
							<label for="tanggal_ttd" class="col-sm-3 control-label">Tanggal TTD</label>
                                <div class="col-sm-5">
															
															<div class="input-group">
															  
															  <input name="tanggal_ttd"  class="form-control date-picker" id="id-date-picker-1" type="text" value="<?php echo $kontr['tanggal_ttd']; ?>"  data-date-format="yyyy-mm-dd"  required/>
															 
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
								 <input type="text" class="form-control" id="nilai_kontrak" name="nilai_kontrak" value="<?php echo $kontr['nilai_kontrak']; ?>" required/>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="tanggal_berakhir" class="col-sm-3 control-label">Tanggal Berakhir</label>
                                <div class="col-sm-5">
                                   									<div class="input-group">
																	<input name="tanggal_berakhir" id="id-date-picker-1" class="form-control date-picker" type="text" data-date-format="dd-mm-yyyy" value="<?php echo $kontr['tanggal_berakhir']; ?>" disabled/>
																	<input name="tanggal_berakhir" type="hidden" value="<?php echo $kontr['tanggal_berakhir']; ?>">
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
								 <input type="text" class="form-control" id="status" name="status" value="<?php echo $kontr['status']; ?>" required/>
                                </div>
                            </div>
                        </div>
						

														

														
                        
                       
                    </div>
                    <div class="box-footer">
					<div  class="space"> </div>
                      <center> <div class="col-sm-10">
                            <a href="<?php echo base_url(); ?>pmis/kontrak_supervisi_view?id_project=<?php echo $kontr['id_project']; ?>" class="btn btn-danger">Kembali</a>
                            
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
