
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
							<li class="active">Add Project</li>
						</ul><!-- /.breadcrumb -->

					
						<!-- /section:basics/content.searchbox -->
					</div>

					<!-- /section:basics/content.breadcrumbs -->
					<div class="page-content">
						<!-- #section:settings.box -->
						
						<!-- /section:settings.box -->
						<div class="page-header">
							<h1>
								Add Project
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Add Project
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								
<div class="box-body">
                <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>pmis/aksi_project_add" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="nama_upp" class="col-sm-3 control-label">UPP </label>
                                <div class="col-sm-5">
								
							<select class="form-control" id="nama_upp" name="nama_upp" required>	
							<option>--List of UPP--</option>
							<?php foreach ($upp->result_array() as $data) { ?>
							
							<option value="<?php echo $data['id_upp']; ?>"><?php echo $data['nama_upp']; ?></option>
							
							<?php } ?>
							</select>	
                                    
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="kode_project" class="col-sm-3 control-label">Ownership</label>
                                <div class="col-sm-5">
							<select class="form-control" id="kode_project" name="kode_project" >	
							<option>--List of Ownership--</option>
							<option value="PLN">PLN</option>
							<option value="IPP">IPP</option>
							<option value="UNALLOCATED">UNALLOCATED</option>
							
							
							</select>	
                                    
                                </div>
                            </div>
                        </div>
						
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="provinsi" class="col-sm-3 control-label">Province</label>
                                <div class="col-sm-5">
							<select class="form-control" id="provinsi" name="provinsi" >	
							<option>--List of Province--</option>
							<option value="1">Aceh</option>
							<option value="2">Sumatera Utara</option>
							<option value="3">Riau</option>
							<option value="4">Sumatera Barat</option>
							<option value="5">Kepulauan Riau</option>
							<option value="6">Jambi</option>
							<option value="7">Sumatera Selatan</option>
							<option value="8">Bengkulu</option>
							<option value="9">Bangka Belitung</option>
							<option value="10">Lampung</option>
							
							
							</select>	
                                    
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="program_project" class="col-sm-3 control-label">Program</label>
                                <div class="col-sm-5">
							<select class="form-control" id="program_project" name="program_project" >	
							<option>--List of Program--</option>
							<option value="1">Regular</option>
							<option value="2">FTP I</option>
							<option value="3">FTP II</option>
							<option value="4">35.000 MW</option>
							<option value="5">-</option>
							</select>	
                                    
                                </div>
                            </div>
                        </div>
						
                          <div class="col-lg-10">
                            <div class="form-group">
                                <label for="ruptl" class="col-sm-3 control-label">RUPTL</label>
                                <div class="col-sm-5">
							<select class="form-control" id="ruptl" name="ruptl" >	
							<option>--List of RUPTL--</option>
							<option value="2016">2016</option>
							<option value="2017">2017</option>
							<option value="2018">2018</option>
							<option value="2019">2019</option>
							<option value="2020">2020</option>
							</select>	
                                    
                                </div>
                            </div>
                        </div>
                         
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="fase_project" class="col-sm-3 control-label">Phase</label>
                                <div class="col-sm-5">
							<select class="form-control" id="fase_project" name="fase_project" >	
							<option>--List of Phase--</option>
							<option value="1">Inisiasi</option>
							<option value="2">Perencanaan</option>
							<option value="3">Pra Pelaksanaan</option>
							<option value="4">Pelaksanaan</option>
							<option value="5">Penyelesaian</option>
							</select>	
                                    
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="nama_project" class="col-sm-3 control-label">Project Name</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="nama_project" name="nama_project" required/>
                                </div>
                            </div>
                        </div>
						
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="jumlah_mesin" class="col-sm-3 control-label">Unit of Engine</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="jumlah_mesin" name="jumlah_mesin" required/> 
                                </div>
                            </div>
                        </div>
						
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="lokasi_project" class="col-sm-3 control-label">Location</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="lokasi_project" name="lokasi_project" required/>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                    <div class="box-footer">
                        <div class="pull-right">
                            <a href="<?php echo base_url(); ?>pmis/project_view" class="btn btn-danger">Back</a>
                            <button type="reset" class="btn btn-warning">Reset</button>
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
