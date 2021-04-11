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
							<li class="active">Edit Data Kontrak Utama</li>
						</ul><!-- /.breadcrumb -->

					
						<!-- /section:basics/content.searchbox -->
					</div>

					<!-- /section:basics/content.breadcrumbs -->
					<div class="page-content">
						<!-- #section:settings.box -->
						
						<!-- /section:settings.box -->
						<div class="page-header">
							<h1>
								Edit Data Kontrak Utama
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
                <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>pmis/aksi_kontrak_utama_edit?id_project=<?php echo $kontr['id_project']; ?>"  enctype="multipart/form-data">
				
				 <input type="hidden" name="id_project" value="<?php echo $kontr['id_project']; ?>">
				 <input type="hidden" name="id_kontrak_utama" value="<?php echo $kontr['id_kontrak_utama']; ?>">
                    
                        
                        <div class="box-body">
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="nama_kontrak_utama" class="col-sm-3 control-label">Nama Kontrak Utama</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="nama_kontrak_utama" name="nama_kontrak_utama" value="<?php echo $kontr['nama_kontrak_utama']; ?>" required/>
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
                                <label for="nomor_kontrak" class="col-sm-3 control-label">Nomor Kontrak</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="nomor_kontrak" name="nomor_kontrak" value="<?php echo $kontr['nomor_kontrak']; ?>" />
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="jenis_kontrak" class="col-sm-3 control-label">Jenis Kontrak</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="jenis_kontrak" name="jenis_kontrak" value="<?php echo $kontr['jenis_kontrak']; ?>" required/>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-10">
                            <div class="form-group" >
							<label for="tanggal_kontrak" class="col-sm-3 control-label">Tanggal Kontrak</label>
                                <div class="col-sm-5">
															
															<div class="input-group">
															  
															  <input name="tanggal_kontrak"  class="form-control date-picker" id="id-date-picker-1" type="text" value="<?php echo $kontr['tanggal_kontrak']; ?>" data-date-format="yyyy-mm-dd"  required/>
															 
															 <span class="input-group-addon">
																<i class="fa fa-calendar-o"></i>
															  </span>
															</div>
														  </div>
							
								</div>
                        </div>
						<div class="col-lg-10">
                            <div class="form-group">
                                <label for="effective_date" class="col-sm-3 control-label">Effective Date</label>
                                <div class="col-sm-5">
                                 									<div class="input-group">
																	
																	  <input name="effective_date"  class="form-control date-picker" id="id-date-picker-1" type="text" value="<?php echo $kontr['effective_date']; ?>" data-date-format="yyyy-mm-dd"  required/>
															 
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
						
                        <?php
						$kali = $mesin['jumlah_mesin'];
							for($kata=1;$kata<=$kali;$kata++)	 {
							echo '<div class="col-lg-10">
                            <div class="form-group">
                                <label for="tanggal_berakhir'.$kata.'" class="col-sm-3 control-label">Tanggal COD (Unit '.$kata.')</label>
                                <div class="col-sm-5">
                                   									<div class="input-group">
																	<input name="tanggal_berakhir'.$kata.'" id="id-date-picker-1" class="form-control date-picker" type="text" data-date-format="yyyy-mm-dd"" value="'.$kontr['tanggal_berakhir'.$kata].'" />
																	
																	<span class="input-group-addon">
																		<i class="fa fa-calendar-o"></i>
																	</span>
																</div>
														</div>
													</div>
												</div>';
															
								}
							?>
														

														
                        
                       
                    </div>
                    <div class="box-footer">
					<div  class="space"> </div>
                      <center> <div class="col-sm-10">
                            <a href="<?php echo base_url(); ?>pmis/kontrak_utama_view?id_project=<?php echo $kontr['id_project']; ?>" class="btn btn-danger">Kembali</a>
                            
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
