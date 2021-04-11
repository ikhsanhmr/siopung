
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
							<li class="active">Edit Data General Information</li>
						</ul><!-- /.breadcrumb -->

					
						<!-- /section:basics/content.searchbox -->
					</div>

					<!-- /section:basics/content.breadcrumbs -->
					<div class="page-content">
						<!-- #section:settings.box -->
						
						<!-- /section:settings.box -->
						<div class="page-header">
							<h1>
								Edit Data General Information
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
                <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>pmis/aksi_general_information_edit?id_project=<?php echo $general_information['id_project']; ?>"  enctype="multipart/form-data">
				
				 <input type="hidden" name="id_project" value="<?php echo $general_information['id_project']; ?>">
				 <input type="hidden" name="id_general_information" value="<?php echo $general_information['id_general_information']; ?>">
                    
                        
                        <div class="box-body">
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="lokasi_project" class="col-sm-3 control-label">Project Location</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="lokasi_project" name="lokasi_project" value="<?php echo $general_information['lokasi_project']; ?>" required/>
                                </div>
                            </div>
                        </div>
						<?php if($tampil_nama_project['kode_project'] =='IPP'){ ?>
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="developer" class="col-sm-3 control-label">Developer</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="developer" name="developer" value="<?php echo $general_information['developer']; ?>" />
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-10">
                            <div class="form-group" >
							<label for="date_sign_ppa" class="col-sm-3 control-label">Date Sign PPA</label>
                                <div class="col-sm-5">	
															<div class="input-group">
															  
															  <input name="date_sign_ppa"  class="form-control date-picker" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy"  value="<?php echo $general_information['date_sign_ppa']; ?>"/>
															  <span class="input-group-addon">
																<i class="fa fa-calendar-o"></i>
															  </span> 
															</div>
														  </div>
							
								</div>
                        </div>
                        
						
                        <div class="col-lg-10">
                            <div class="form-group" >
							<label for="financial_close_date" class="col-sm-3 control-label">Financial Close Date</label>
                                <div class="col-sm-5">	
															<div class="input-group">
															  
															  <input name="financial_close_date"  class="form-control date-picker" id="id-date-picker-1" type="text" data-date-format="yyyy-mm-dd" value="<?php echo $general_information['financial_close_date']; ?>"/>
															  
															  <span class="input-group-addon">
																<i class="fa fa-calendar-o"></i>
															  </span> 
															</div>
														  </div>
							
								</div>
                        </div>
						
                         <div class="col-lg-10">
                            <div class="form-group">
                                <label for="tariff" class="col-sm-3 control-label">Tariff</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="tariff" name="tariff" value="<?php echo $general_information['tariff']; ?>" />
                                </div>
                            </div>
                        </div>
                        <?php } ?>
						<div class="col-lg-10">
                            <div class="form-group">
                                <label for="luas_area" class="col-sm-3 control-label">Plant Area</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="luas_area" name="luas_area" value="<?php echo $general_information['luas_area']; ?>" required/>
                                </div>
                            </div>
                        </div>
                        
						<div class="col-lg-10">
                            <div class="form-group">
                                <label for="lingkup_pekerjaan" class="col-sm-3 control-label">Scope Of Work</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="lingkup_pekerjaan" name="lingkup_pekerjaan" value="<?php echo $general_information['lingkup_pekerjaan']; ?>" required/>
                                </div>
                            </div>
                        </div>
                      
						<div class="col-lg-10">
                            <div class="form-group">
                                <label for="no_kontrak" class="col-sm-3 control-label">Contract Number</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="no_kontrak" name="no_kontrak" value="<?php echo $general_information['no_kontrak']; ?>" required/>
                                </div>
                            </div>
                        </div>
                        
						
						  
                        <div class="col-lg-10">
                            <div class="form-group" >
							<label for="tgl_kontrak" class="col-sm-3 control-label">Contract Date</label>
                                <div class="col-sm-5">
															
															<div class="input-group">
															  
															  <input name="tgl_kontrak"  class="form-control date-picker" id="id-date-picker-1" type="text" data-date-format="yyyy-mm-dd" value="<?php echo $general_information['tgl_kontrak']; ?>" required/>
															  <span class="input-group-addon">
																<i class="fa fa-calendar-o"></i>
															  </span>
															</div>
														  </div>
							
								</div>
                        </div>
                        
						
						<div class="col-lg-10">
                            <div class="form-group">
                                <label for="nilai_kontrak" class="col-sm-3 control-label">Contract Value</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="nilai_kontrak" name="nilai_kontrak" value="<?php echo $general_information['nilai_kontrak']; ?>" required/>
                                </div>
                            </div>
                        </div>
                        
						<div class="col-lg-10">
                            <div class="form-group">
                                <label for="sumber_pendanaan" class="col-sm-3 control-label">Sources of Funding</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="sumber_pendanaan" name="sumber_pendanaan" value="<?php echo $general_information['sumber_pendanaan']; ?>" required/>
                                </div>
                            </div>
                        </div>
                        
						<div class="col-lg-10">
                            <div class="form-group">
                                <label for="tanggal_efektif" class="col-sm-3 control-label">Effective Date</label>
                                <div class="col-sm-5">
									<div class="input-group">
										<input name="tanggal_efektif"  class="form-control date-picker" id="id-date-picker-1" type="text" data-date-format="yyyy-mm-dd" value="<?php echo $general_information['tanggal_efektif']; ?>" required/>
											<span class="input-group-addon">
												<i class="fa fa-calendar-o"></i>
											</span>						 
									</div>
                                </div>
                            </div>
                        </div>
                        
						<div class="col-lg-10">
                            <div class="form-group">
                                <label for="kontraktor" class="col-sm-3 control-label">Contractor</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="kontraktor" name="kontraktor"  value="<?php echo $general_information['kontraktor']; ?>" required/>
                                </div>
                            </div>
                        </div>
                        
						<div class="col-lg-10">
                            <div class="form-group">
                                <label for="konsultan_desain" class="col-sm-3 control-label">Design Consultant</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="konsultan_desain" name="konsultan_desain"  value="<?php echo $general_information['konsultan_desain']; ?>"required/>
                                </div>
                            </div>
                        </div>
                        
						<div class="col-lg-10">
                            <div class="form-group">
                                <label for="konsultan_supervisi" class="col-sm-3 control-label">Supervision Consultant</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="konsultan_supervisi" name="konsultan_supervisi"  value="<?php echo $general_information['konsultan_supervisi']; ?>"required/>
                                </div>
                            </div>
                        </div>
                        
						<div class="col-lg-10">
                            <div class="form-group">
                                <label for="transmisi" class="col-sm-3 control-label">Transmision</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="transmisi" name="transmisi" value="<?php echo $general_information['transmisi']; ?>" required/>
                                </div>
                            </div>
                        </div>

 
                        <div class="col-lg-10">
                            <div class="form-group" >
							<label for="target_cod" class="col-sm-3 control-label">Target COD</label>
                                <div class="col-sm-5">	
															<div class="input-group">
															  
															  <input name="target_cod"  class="form-control date-picker" id="id-date-picker-1" type="text" data-date-format="yyyy-mm-dd" value="<?php echo $general_information['target_cod']; ?>" required/>
															  <span class="input-group-addon">
																<i class="fa fa-calendar-o"></i>
															  </span>
															</div>
														  </div>
							
								</div>
                        </div>
						

														

														
                        
                       
                    </div>
                    <div class="box-footer">
					<div  class="space"> </div>
                      <center> <div class="col-sm-10">
                            <a href="<?php echo base_url(); ?>pmis/general_information_view?id_project=<?php echo $general_information['id_project']; ?>" class="btn btn-danger">Kembali</a>
                            
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
