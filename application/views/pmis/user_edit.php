
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
							<li class="active">Edit Data User</li>
						</ul><!-- /.breadcrumb -->

					
						<!-- /section:basics/content.searchbox -->
					</div>

					<!-- /section:basics/content.breadcrumbs -->
					<div class="page-content">
						<!-- #section:settings.box -->
						
						<!-- /section:settings.box -->
						<div class="page-header">
							<h1>
								Edit Data User
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
                <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>pmis/aksi_user_edit" enctype="multipart/form-data">
				
				 <input type="hidden" name="id_user" value="<?php echo $proj['id_user']; ?>">
                    
                        
                        <div class="box-body">
                       
                         <div class="col-lg-10">
                            <div class="form-group">
                                <label for="nama_admin" class="col-sm-3 control-label">Nama Admin</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="nama_admin" name="nama_admin" value="<?php echo $proj['nama_admin']; ?>" required/>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="username" class="col-sm-3 control-label">Username</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="username" name="username" value="<?php echo $proj['username']; ?>" required/>
                                </div>
                            </div>
                        </div> 
						<div class="col-lg-10">
                            <div class="form-group">
                                <label for="password" class="col-sm-3 control-label">Password</label>
                                <div class="col-sm-5">
                                    <input type="password" class="form-control" id="password" name="password" value="<?php echo $proj['password']; ?>" disabled/>
                                    <input type="hidden" class="form-control" id="pass" name="pass" value="<?php echo $proj['password']; ?>"/>
                                </div>
                            </div>
                        </div>
                      
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="email" class="col-sm-3 control-label">Email</label>
                                <div class="col-sm-5">
                                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $proj['email']; ?>" required/>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                    <div class="box-footer">
					<div  class="space"> </div>
                      <center> <div class="col-sm-10">
                            <a href="<?php echo base_url(); ?>pmis/user_view" class="btn btn-danger">Kembali</a>
                            
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
