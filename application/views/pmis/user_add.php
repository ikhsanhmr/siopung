
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
							<li class="active">Add User</li>
						</ul><!-- /.breadcrumb -->

					
						<!-- /section:basics/content.searchbox -->
					</div>

					<!-- /section:basics/content.breadcrumbs -->
					<div class="page-content">
						<!-- #section:settings.box -->
						
						<!-- /section:settings.box -->
						<div class="page-header">
							<h1>
								Add User
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Tambah Data User
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								
<div class="box-body">
                <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>pmis/aksi_user_add" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="nama_upp" class="col-sm-3 control-label">Pilih UPP</label>
                                <div class="col-sm-5">
								
							<select class="form-control" id="nama_upp" name="nama_upp" required>	
							<option>--Pilih Nama UPP--</option>
							<?php foreach ($upp->result_array() as $data) { ?>
							
							<option value="<?php echo $data['id_upp']; ?>"><?php echo $data['nama_upp']; ?></option>
							
							<?php } ?>
							</select>	
                                    
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="nama_admin" class="col-sm-3 control-label">Nama Admin</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="nama_admin" name="nama_admin" required/>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="username" class="col-sm-3 control-label">Username</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="username" name="username" required/>
                                </div>
                            </div>
                        </div> 
						<div class="col-lg-10">
                            <div class="form-group">
                                <label for="password" class="col-sm-3 control-label">Password</label>
                                <div class="col-sm-5">
                                    <input type="password" class="form-control" id="password" name="password" required/>
                                </div>
                            </div>
                        </div>
                       <div class="col-lg-10">
                            <div class="form-group">
                                <label for="password2" class="col-sm-3 control-label">Confirm Password</label>
                                <div class="col-sm-5">
                                    <input type="password" class="form-control" id="password2" name="password2" required/>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="email" class="col-sm-3 control-label">Email</label>
                                <div class="col-sm-5">
                                    <input type="email" class="form-control" id="email" name="email" required/>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                    <div class="box-footer">
                        <div class="pull-right">
                            <a href="<?php echo base_url(); ?>pmis/user_view" class="btn btn-danger">Kembali</a>
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
			
			
