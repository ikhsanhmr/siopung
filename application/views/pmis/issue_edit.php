
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
							<li class="active">Edit Data Issue</li>
						</ul><!-- /.breadcrumb -->

					
						<!-- /section:basics/content.searchbox -->
					</div>

					<!-- /section:basics/content.breadcrumbs -->
					<div class="page-content">
						<!-- #section:settings.box -->
						
						<!-- /section:settings.box -->
						<div class="page-header">
							<h1>
								Edit Data Issue
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
                <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>pmis/aksi_issue_edit?id_project=<?php echo $issue['id_project']; ?>"  enctype="multipart/form-data">
				
				 <input type="hidden" name="id_project" value="<?php echo $issue['id_project']; ?>">
				 <input type="hidden" name="id_issue" value="<?php echo $issue['id_issue']; ?>">
                    
                        
                        <div class="box-body">
                       
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="id_project" class="col-sm-3 control-label">ID Project</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="id_project" name="id_project" value="<?php echo $issue['id_project']; ?>"  readonly/>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="issue_description" class="col-sm-3 control-label">Issue Description</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="issue_description" name="issue_description" value="<?php echo $issue['issue_description']; ?>"  required/>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="action" class="col-sm-3 control-label">Action</label>
                                <div class="col-sm-5">
								 <textarea style="white-space: pre-line" name="action" id="action" rows="6" cols="44" required/><?php echo $issue['action']; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="form-group" >
							<label for="target_resolved_date" class="col-sm-3 control-label">Target Resolved Date</label>
                                <div class="col-sm-5">
															
															<div class="input-group">
															  
															  <input name="target_resolved_date"  class="form-control date-picker" id="id-date-picker-1" type="text" value="<?php echo $issue['target_resolved_date']; ?>"   disabled/>
															  <input type="hidden" class="form-control" id="target_resolved_date" name="target_resolved_date" value="<?php echo $issue['target_resolved_date']; ?>"  />
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
								<?php
										if ($issue['status']== 1){
												$jelas = "Open";
											} if ($issue['status']== 2){
												$jelas = "Close";
											}
												?>		
						<select class="form-control" id="status" name="status" required>	
							
							
							<option value="<?php echo $issue['status']; ?>"><?php echo $jelas; ?></option>
							<option>--Pilih Status--</option>
							<option value="1">Open</option>
							<option value="2">Close</option>
							
							</select>													
								
								 
                                </div>
                            </div>
                        </div>
                    
						

														

														
                        
                       
                    </div>
                    <div class="box-footer">
					<div  class="space"> </div>
                      <center> <div class="col-sm-10">
                            <a href="<?php echo base_url(); ?>pmis/issue_view?id_project=<?php echo $issue['id_project']; ?>" class="btn btn-danger">Kembali</a>
                            
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
