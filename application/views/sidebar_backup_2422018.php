
	<body class="no-skin">
		<!-- #section:basics/navbar.layout -->
		<div id="navbar" class="navbar navbar-default">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<!-- #section:basics/sidebar.mobile.toggle -->
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<!-- /section:basics/sidebar.mobile.toggle -->
				<div class="navbar-header pull-left">
					<img src="<?php echo base_url(); ?>public/assets/images/logo.png" width="60" height="60">				
				</div>
				
				<div class="navbar-header pull-left">
					<!-- #section:basics/navbar.layout.brand -->
					
							
					<a href="#" class="navbar-brand">
						
						<small>
						
							
					  SI OPUNG KITSUM <br>(<b>S</b>ISTEM <b>I</b>NFORMASI M<b>O</b>NITORING <b>P</b>ROYEK <b>UNG</b>GUL PEMBANG<B>KIT</b> <b>SUM</b>ATERA) 
					
						</small>
					</a>

					<!-- /section:basics/navbar.layout.brand -->

					<!-- #section:basics/navbar.toggle -->

					<!-- /section:basics/navbar.toggle -->
				</div>

				<!-- #section:basics/navbar.dropdown -->
				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						
						<!-- #section:basics/navbar.user_menu -->
						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="<?php echo base_url(); ?>public/assets/avatars/<?php echo $username.'.jpg'; ?>" alt="Admin" />
								<span class="user-info">
									<small>Welcome,</small>
									<?php echo $nama_admin; ?>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								

								<li>
									<a href="#">
										<i class="ace-icon fa fa-user"></i>
										Back to Administrator
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="<?php echo site_url('pmis/logout'); ?>">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>

						<!-- /section:basics/navbar.user_menu -->
					</ul>
				</div>
				<!-- /section:basics/navbar.dropdown -->
				<nav role="navigation" class="navbar-menu pull-left collapse navbar-collapse">
					<!-- #section:basics/navbar.nav -->
					<ul class="nav navbar-nav">
					
						<li>
							<a href="<?php echo site_url('pmis/index'); ?>">
								<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
							</a>
						</li>
						<li>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="menu-icon fa fa-inbox"></i>
								
	  		&nbsp;<span class="menu-text"> Master Data Project </span>
								<i class="ace-icon fa fa-angle-down bigger-110"></i>
							</a>

							<ul class="dropdown-menu dropdown-light-blue dropdown-caret">
								<li class="">
						<a href="<?php echo site_url('pmis/project_view'); ?>">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text">  Project List </span>
						</a>

						<b class="arrow"></b>
					</li>
					
					<li class="">
						<a href="<?php echo site_url('pmis/user_view'); ?>">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text">  User List </span>
						</a>

						<b class="arrow"></b>
					</li>
					
					<li class="">
						<a href="<?php echo site_url('pmis/last_login_view'); ?>">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text">  Last Login List  </span>
						</a>

						<b class="arrow"></b>
					</li>
					
					<li class="">
						<a href="<?php echo site_url('pmis/activity_log_view'); ?>">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text">  Activity Log  </span>
						</a>

						<b class="arrow"></b>
					</li>
					
							</ul>
						</li>
					<!--	
					<li class="green">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-envelope icon-animated-vertical"></i>
								<span class="badge badge-success">5</span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-envelope-o"></i>
									5 Messages
								</li>

								<li class="dropdown-content">
									<ul class="dropdown-menu dropdown-navbar">
										<li>
											<a href="#" class="clearfix">
												<img src="../assets/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Alex:</span>
														Ciao sociis natoque penatibus et auctor ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>a moment ago</span>
													</span>
												</span>
											</a>
										</li>

										<li>
											<a href="#" class="clearfix">
												<img src="../assets/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Susan:</span>
														Vestibulum id ligula porta felis euismod ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>20 minutes ago</span>
													</span>
												</span>
											</a>
										</li>

										<li>
											<a href="#" class="clearfix">
												<img src="../assets/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Bob:</span>
														Nullam quis risus eget urna mollis ornare ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>3:15 pm</span>
													</span>
												</span>
											</a>
										</li>

										<li>
											<a href="#" class="clearfix">
												<img src="../assets/avatars/avatar2.png" class="msg-photo" alt="Kate's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Kate:</span>
														Ciao sociis natoque eget urna mollis ornare ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>1:33 pm</span>
													</span>
												</span>
											</a>
										</li>

										<li>
											<a href="#" class="clearfix">
												<img src="../assets/avatars/avatar5.png" class="msg-photo" alt="Fred's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Fred:</span>
														Vestibulum id penatibus et auctor  ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>10:09 am</span>
													</span>
												</span>
											</a>
										</li>
									</ul>
								</li>

								<li class="dropdown-footer">
									<a href="inbox.html">
										See all messages
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>
						-->
					</ul>
						
					<!-- /section:basics/navbar.nav -->
					

					<!-- /section:basics/navbar.form -->
					
				</nav>
	
						
				<!-- /section:basics/navbar.dropdown -->
			</div><!-- /.navbar-container -->
		</div>

		<!-- /section:basics/navbar.layout -->
		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			
<!-- #section:basics/sidebar -->
			<div id="sidebar" class="sidebar                  responsive" >
				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-success">
							<i class="ace-icon fa fa-signal"></i>
						</button>

						<button class="btn btn-info">
							<i class="ace-icon fa fa-pencil"></i>
						</button>

						<!-- #section:basics/sidebar.layout.shortcuts -->
						<button class="btn btn-warning">
							<i class="ace-icon fa fa-users"></i>
						</button>

						<button class="btn btn-danger">
							<i class="ace-icon fa fa-cogs"></i>
						</button>

						<!-- /section:basics/sidebar.layout.shortcuts -->
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->

	 <?php //print_r($this->session->userdata);exit;?>
				<ul class="nav nav-list">
					<!--
					<li class="active">
					
					<a href="<?php //echo site_url('pmis/index'); ?>">
					
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>

						<b class="arrow"></b>
					</li>
					-->
											
					<!-- LOGIN pmis -->
					<?php if($this->session->userdata('status') == 2 || $this->session->userdata('status') == 4){ ?>
					<!--
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-inbox"></i>
							<span class="menu-text"> Master Data Project </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
					<li class="">
						<a href="<?php //echo site_url('pmis/project_view'); ?>">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text">  Project List </span>
						</a>

						<b class="arrow"></b>
					</li>
					
					<li class="">
						<a href="<?php //echo site_url('pmis/user_view'); ?>">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text">  User List </span>
						</a>

						<b class="arrow"></b>
					</li>
					
					<li class="">
						<a href="<?php //echo site_url('pmis/last_login_view'); ?>">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text">  Last Login List  </span>
						</a>

						<b class="arrow"></b>
					</li>
					
					<li class="">
						<a href="<?php echo site_url('pmis/activity_log_view'); ?>">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text">  Activity Log  </span>
						</a>

						<b class="arrow"></b>
					</li>
					
						
						</ul>
					</li>
					-->
					<!-- MENU 1-->
					<li class="" >
						<a href="#" class="dropdown-toggle" >
							<i class="menu-icon fa fa-bolt"></i>
							<span class="menu-text">  UPP 1</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>
						
						
						
						<?PHP 
						if(empty($menu1_pln->result_array())){ ?>
						<!-- PLN Mulai-->
					<b class="arrow"></b>
					<ul class='submenu'> 
							<li class="">
								<a href="#" class="dropdown-toggle" >
									<i class="menu-icon fa fa-list-alt"></i>
									<span class="menu-text">PLN</span>
									<b class="arrow fa fa-angle-down"></b>
								</a>
						
															
																		<ul class="submenu">
																		
																		<li class="">
																			<a href="#" class="dropdown-toggle">
																				<span class="menu-text">  <?php echo '-'; ?> </span>
																							</a>
																		</li>
																						
																						</ul>
																					
						</li>
					</ul><!-- PLN selesai-->
					
						
						
						
						<?php } else { ?>
					<!-- PLN Mulai-->
					<b class="arrow"></b>
					<ul class='submenu'> 
							<li class="">
								<a href="#" class="dropdown-toggle" >
									<i class="menu-icon fa fa-list-alt"></i>
									<span class="menu-text">PLN</span>
									<b class="arrow fa fa-angle-down"></b>
								</a>
						
															
																		<ul class="submenu">
																		<?php foreach ($menu1_pln->result_array() as $data) { ?>
																		<li class="">
																			<a href="#" class="dropdown-toggle">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  <?php echo $data['nama_project']; ?> </span>
																			<b class="arrow fa fa-angle-down"></b>
																							</a>

																			<b class="arrow"></b>
																			
																		<ul class="submenu">
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/general_information_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  General Information </span>
																			</a>
																			<b class="arrow"></b>
																			</li>
																			
																			<li class="">
																			<a href="<?php echo site_url('pmis/milstone_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  Milestone </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																			<li class="" >
																				<a href="#" class="dropdown-toggle">
																					<i class="menu-icon fa fa-list-alt"></i>
																					<span class="menu-text"> Contract</span>
																					<b class="arrow fa fa-angle-down"></b>
																				</a>

																				<b class="arrow"></b>
																					<ul class="submenu">
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_utama_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Main Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_supervisi_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Supervision Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_engineering_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Engineering Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_lokal_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Local Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																					</ul>
																			</li>
																			<li class="">
																			<a href="#" class="dropdown-toggle">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Gallery </span>
																				<b class="arrow fa fa-angle-down"></b>
																				</a>

																			
																				<b class="arrow"></b>
																					<ul class="submenu">
																						<li class="">
																						<a href="<?php echo site_url('pmis/progress_gallery_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Progress Gallery</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/gallery_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Others Gallery</span>
																						</a>
																						<b class="arrow"></b>
																						</li>
																					
																					</ul>
																			</li>
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/progress_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Progress </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/issue_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Issue </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																			
																			<li class="">
																			<a href="<?php echo site_url('pmis/daily_activity_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Daily Activity </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																		
																		
																			
																		
																		
																			</ul>
																		</li>
																						<?php 	} ?>
																						</ul>
																					
						</li>
					</ul><!-- PLN selesai-->
					<?php } ?>
					
					
						
						<?PHP 
						if(empty($menu1_ipp->result_array())){ ?>
						<!-- IPP Mulai-->
					<b class="arrow"></b>
					<ul class='submenu'> 
							<li class="">
								<a href="#" class="dropdown-toggle" >
									<i class="menu-icon fa fa-list-alt"></i>
									<span class="menu-text">IPP</span>
									<b class="arrow fa fa-angle-down"></b>
								</a>
						
															
																		<ul class="submenu">
																		
																		<li class="">
																			<a href="#" class="dropdown-toggle">
																				<span class="menu-text">  <?php echo '-'; ?> </span>
																							</a>
																		</li>
																						
																						</ul>
																					
						</li>
					</ul><!-- IPP selesai-->
						
						
						
						<?php } else { ?>
					<!-- IPP Mulai-->
					<b class="arrow"></b>
					<ul class='submenu'> 
							<li class="">
								<a href="#" class="dropdown-toggle" >
									<i class="menu-icon fa fa-list-alt"></i>
									<span class="menu-text">IPP</span>
									<b class="arrow fa fa-angle-down"></b>
								</a>
						
															
																		<ul class="submenu">
																		<?php foreach ($menu1_ipp->result_array() as $data) { ?>
																		<li class="">
																			<a href="#" class="dropdown-toggle">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  <?php echo $data['nama_project']; ?> </span>
																			<b class="arrow fa fa-angle-down"></b>
																							</a>

																			<b class="arrow"></b>
																			
																		<ul class="submenu">
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/general_information_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  General Information </span>
																			</a>
																			<b class="arrow"></b>
																			</li>
																			
																			<li class="">
																			<a href="<?php echo site_url('pmis/milstone_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  Milestone </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																			<li class="" >
																				<a href="#" class="dropdown-toggle">
																					<i class="menu-icon fa fa-list-alt"></i>
																					<span class="menu-text"> Contract</span>
																					<b class="arrow fa fa-angle-down"></b>
																				</a>

																				<b class="arrow"></b>
																					<ul class="submenu">
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_utama_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Main Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_supervisi_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Supervision Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_engineering_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Engineering Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_lokal_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Local Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																					</ul>
																			</li>
																			
																			<li class="">
																			<a href="#" class="dropdown-toggle">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Gallery </span>
																				<b class="arrow fa fa-angle-down"></b>
																				</a>

																			
																				<b class="arrow"></b>
																					<ul class="submenu">
																						<li class="">
																						<a href="<?php echo site_url('pmis/progress_gallery_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Progress Gallery</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/gallery_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Others Gallery</span>
																						</a>
																						<b class="arrow"></b>
																						</li>
																					
																					</ul>
																			</li>
																		
																		
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/progress_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Progress </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/issue_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Issue </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																			
																			<li class="">
																			<a href="<?php echo site_url('pmis/daily_activity_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Daily Activity </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																		
																		
																			
																		
																		
																			</ul>
																		</li>
																						<?php 	} ?>
																						</ul>
																					
						</li>
					</ul><!-- IPP selesai-->
					<?php } ?>
					
					
						
						<?PHP 
						if(empty($menu1_unallocated->result_array())){ ?>
						<!-- unallocated Mulai-->
					<b class="arrow"></b>
					<ul class='submenu'> 
							<li class="">
								<a href="#" class="dropdown-toggle" >
									<i class="menu-icon fa fa-list-alt"></i>
									<span class="menu-text">UNALLOCATED</span>
									<b class="arrow fa fa-angle-down"></b>
								</a>
						
															
																		<ul class="submenu">
																		
																		<li class="">
																			<a href="#" class="dropdown-toggle">
																				<span class="menu-text">  <?php echo '-'; ?> </span>
																							</a>
																		</li>
																						
																						</ul>
																					
						</li>
					</ul><!-- unallocated selesai-->
						
						
						
						<?php } else { ?>
					<!-- unallocated Mulai-->
					<b class="arrow"></b>
					<ul class='submenu'> 
							<li class="">
								<a href="#" class="dropdown-toggle" >
									<i class="menu-icon fa fa-list-alt"></i>
									<span class="menu-text">UNALLOCATED</span>
									<b class="arrow fa fa-angle-down"></b>
								</a>
						
															
																		<ul class="submenu">
																		<?php foreach ($menu1_unallocated->result_array() as $data) { ?>
																		<li class="">
																			<a href="#" class="dropdown-toggle">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  <?php echo $data['nama_project']; ?> </span>
																			<b class="arrow fa fa-angle-down"></b>
																							</a>

																			<b class="arrow"></b>
																			
																		<ul class="submenu">
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/general_information_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  General Information </span>
																			</a>
																			<b class="arrow"></b>
																			</li>
																			
																			<li class="">
																			<a href="<?php echo site_url('pmis/milstone_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  Milestone </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																			<li class="" >
																				<a href="#" class="dropdown-toggle">
																					<i class="menu-icon fa fa-list-alt"></i>
																					<span class="menu-text"> Contract</span>
																					<b class="arrow fa fa-angle-down"></b>
																				</a>

																				<b class="arrow"></b>
																					<ul class="submenu">
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_utama_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Main Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_supervisi_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Supervision Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_engineering_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Engineering Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_lokal_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Local Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																					</ul>
																			</li>
																			
																			<li class="">
																			<a href="#" class="dropdown-toggle">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Gallery </span>
																				<b class="arrow fa fa-angle-down"></b>
																				</a>

																			
																				<b class="arrow"></b>
																					<ul class="submenu">
																						<li class="">
																						<a href="<?php echo site_url('pmis/progress_gallery_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Progress Gallery</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/gallery_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Others Gallery</span>
																						</a>
																						<b class="arrow"></b>
																						</li>
																					
																					</ul>
																			</li>
																		
																		
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/progress_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Progress </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/issue_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Issue </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																			
																			<li class="">
																			<a href="<?php echo site_url('pmis/daily_activity_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Daily Activity </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																		
																			</ul>
																		</li>
																						<?php 	} ?>
																						</ul>
																					
						</li>
					</ul><!-- unallocated selesai-->
					<?php } ?>
					
					
				</li>
					<!-- MENU selesai-->
					
					<!-- MENU 2 MULAI-->
					<li class="">
						<a href="#" class="dropdown-toggle" >
							<i class="menu-icon fa fa-bolt"></i>
							<span class="menu-text">  UPP 2</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>
						
						
						
						<?PHP 
						if(empty($menu2_pln->result_array())){ ?>
						<!-- PLN Mulai-->
					<b class="arrow"></b>
					<ul class='submenu'> 
							<li class="">
								<a href="#" class="dropdown-toggle" >
									<i class="menu-icon fa fa-list-alt"></i>
									<span class="menu-text">PLN</span>
									<b class="arrow fa fa-angle-down"></b>
								</a>
						
															
																		<ul class="submenu">
																		
																		<li class="">
																			<a href="#" class="dropdown-toggle">
																				<span class="menu-text">  <?php echo '-'; ?> </span>
																							</a>
																		</li>
																						
																						</ul>
																					
						</li>
					</ul><!-- PLN selesai-->
					
						
						
						
						<?php } else { ?>
					<!-- PLN Mulai-->
					<b class="arrow"></b>
					<ul class='submenu'> 
							<li class="">
								<a href="#" class="dropdown-toggle" >
									<i class="menu-icon fa fa-list-alt"></i>
									<span class="menu-text">PLN</span>
									<b class="arrow fa fa-angle-down"></b>
								</a>
						
															
																		<ul class="submenu">
																		<?php foreach ($menu2_pln->result_array() as $data) { ?>
																		<li class="">
																			<a href="#" class="dropdown-toggle">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  <?php echo $data['nama_project']; ?> </span>
																			<b class="arrow fa fa-angle-down"></b>
																							</a>

																			<b class="arrow"></b>
																			
																		<ul class="submenu">
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/general_information_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  General Information </span>
																			</a>
																			<b class="arrow"></b>
																			</li>
																			
																			<li class="">
																			<a href="<?php echo site_url('pmis/milstone_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  Milestone </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																			<li class="" >
																				<a href="#" class="dropdown-toggle">
																					<i class="menu-icon fa fa-list-alt"></i>
																					<span class="menu-text"> Contract</span>
																					<b class="arrow fa fa-angle-down"></b>
																				</a>

																				<b class="arrow"></b>
																					<ul class="submenu">
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_utama_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Main Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_supervisi_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Supervision Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_engineering_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Engineering Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_lokal_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Local Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																					</ul>
																			</li>
																			
																			<li class="">
																			<a href="#" class="dropdown-toggle">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Gallery </span>
																				<b class="arrow fa fa-angle-down"></b>
																				</a>

																			
																				<b class="arrow"></b>
																					<ul class="submenu">
																						<li class="">
																						<a href="<?php echo site_url('pmis/progress_gallery_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Progress Gallery</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/gallery_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Others Gallery</span>
																						</a>
																						<b class="arrow"></b>
																						</li>
																					
																					</ul>
																			</li>
																		
																		
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/progress_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Progress </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/issue_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Issue </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																			
																			<li class="">
																			<a href="<?php echo site_url('pmis/daily_activity_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Daily Activity </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																		
																		
																			
																		
																		
																			</ul>
																		</li>
																						<?php 	} ?>
																						</ul>
																					
						</li>
					</ul><!-- PLN selesai-->
					<?php } ?>
					
					
						
						<?PHP 
						if(empty($menu2_ipp->result_array())){ ?>
						<!-- IPP Mulai-->
					<b class="arrow"></b>
					<ul class='submenu'> 
							<li class="">
								<a href="#" class="dropdown-toggle" >
									<i class="menu-icon fa fa-list-alt"></i>
									<span class="menu-text">IPP</span>
									<b class="arrow fa fa-angle-down"></b>
								</a>
						
															
																		<ul class="submenu">
																		
																		<li class="">
																			<a href="#" class="dropdown-toggle">
																				<span class="menu-text">  <?php echo '-'; ?> </span>
																							</a>
																		</li>
																						
																						</ul>
																					
						</li>
					</ul><!-- IPP selesai-->
						
						
						
						<?php } else { ?>
					<!-- IPP Mulai-->
					<b class="arrow"></b>
					<ul class='submenu'> 
							<li class="">
								<a href="#" class="dropdown-toggle" >
									<i class="menu-icon fa fa-list-alt"></i>
									<span class="menu-text">IPP</span>
									<b class="arrow fa fa-angle-down"></b>
								</a>
						
															
																		<ul class="submenu">
																		<?php foreach ($menu2_ipp->result_array() as $data) { ?>
																		<li class="">
																			<a href="#" class="dropdown-toggle">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  <?php echo $data['nama_project']; ?> </span>
																			<b class="arrow fa fa-angle-down"></b>
																							</a>

																			<b class="arrow"></b>
																			
																		<ul class="submenu">
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/general_information_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  General Information </span>
																			</a>
																			<b class="arrow"></b>
																			</li>
																			
																			<li class="">
																			<a href="<?php echo site_url('pmis/milstone_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  Milestone </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																			<li class="" >
																				<a href="#" class="dropdown-toggle">
																					<i class="menu-icon fa fa-list-alt"></i>
																					<span class="menu-text"> Contract</span>
																					<b class="arrow fa fa-angle-down"></b>
																				</a>

																				<b class="arrow"></b>
																					<ul class="submenu">
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_utama_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Main Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_supervisi_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Supervision Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_engineering_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Engineering Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_lokal_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Local Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																					</ul>
																			</li>
																			
																			<li class="">
																			<a href="#" class="dropdown-toggle">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Gallery </span>
																				<b class="arrow fa fa-angle-down"></b>
																				</a>

																			
																				<b class="arrow"></b>
																					<ul class="submenu">
																						<li class="">
																						<a href="<?php echo site_url('pmis/progress_gallery_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Progress Gallery</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/gallery_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Others Gallery</span>
																						</a>
																						<b class="arrow"></b>
																						</li>
																					
																					</ul>
																			</li>
																		
																		
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/progress_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Progress </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/issue_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Issue </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																			
																			<li class="">
																			<a href="<?php echo site_url('pmis/daily_activity_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Daily Activity </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																		
																		
																			
																		
																		
																			</ul>
																		</li>
																						<?php 	} ?>
																						</ul>
																					
						</li>
					</ul><!-- IPP selesai-->
					<?php } ?>
					
					
						
						<?PHP 
						if(empty($menu2_unallocated->result_array())){ ?>
						<!-- unallocated Mulai-->
					<b class="arrow"></b>
					<ul class='submenu'> 
							<li class="">
								<a href="#" class="dropdown-toggle" >
									<i class="menu-icon fa fa-list-alt"></i>
									<span class="menu-text">UNALLOCATED</span>
									<b class="arrow fa fa-angle-down"></b>
								</a>
						
															
																		<ul class="submenu">
																		
																		<li class="">
																			<a href="#" class="dropdown-toggle">
																				<span class="menu-text">  <?php echo '-'; ?> </span>
																							</a>
																		</li>
																						
																						</ul>
																					
						</li>
					</ul><!-- unallocated selesai-->
						
						
						
						<?php } else { ?>
					<!-- unallocated Mulai-->
					<b class="arrow"></b>
					<ul class='submenu'> 
							<li class="">
								<a href="#" class="dropdown-toggle" >
									<i class="menu-icon fa fa-list-alt"></i>
									<span class="menu-text">UNALLOCATED</span>
									<b class="arrow fa fa-angle-down"></b>
								</a>
						
															
																		<ul class="submenu">
																		<?php foreach ($menu2_unallocated->result_array() as $data) { ?>
																		<li class="">
																			<a href="#" class="dropdown-toggle">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  <?php echo $data['nama_project']; ?> </span>
																			<b class="arrow fa fa-angle-down"></b>
																							</a>

																			<b class="arrow"></b>
																			
																		<ul class="submenu">
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/general_information_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  General Information </span>
																			</a>
																			<b class="arrow"></b>
																			</li>
																			
																			<li class="">
																			<a href="<?php echo site_url('pmis/milstone_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  Milestone </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																			<li class="" >
																				<a href="#" class="dropdown-toggle">
																					<i class="menu-icon fa fa-list-alt"></i>
																					<span class="menu-text"> Contract</span>
																					<b class="arrow fa fa-angle-down"></b>
																				</a>

																				<b class="arrow"></b>
																					<ul class="submenu">
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_utama_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Main Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_supervisi_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Supervision Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_engineering_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Engineering Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_lokal_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Local Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																					</ul>
																			</li>
																			
																			<li class="">
																			<a href="#" class="dropdown-toggle">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Gallery </span>
																				<b class="arrow fa fa-angle-down"></b>
																				</a>

																			
																				<b class="arrow"></b>
																					<ul class="submenu">
																						<li class="">
																						<a href="<?php echo site_url('pmis/progress_gallery_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Progress Gallery</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/gallery_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Others Gallery</span>
																						</a>
																						<b class="arrow"></b>
																						</li>
																					
																					</ul>
																			</li>
																		
																		
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/progress_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Progress </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/issue_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Issue </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																			
																			<li class="">
																			<a href="<?php echo site_url('pmis/daily_activity_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Daily Activity </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																		
																		
																			
																		
																		
																			</ul>
																		</li>
																						<?php 	} ?>
																						</ul>
																					
						</li>
					</ul><!-- unallocated selesai-->
					<?php } ?>
					
					
				</li>
					<!-- MENU 2 selesai-->
					
								
					
					<!-- MENU 3 MULAI-->
					<li class="">
						<a href="#" class="dropdown-toggle" >
							<i class="menu-icon fa fa-bolt"></i>
							<span class="menu-text">  UPP 3</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>
						
						
						
						<?PHP 
						if(empty($menu3_pln->result_array())){ ?>
						<!-- PLN Mulai-->
					<b class="arrow"></b>
					<ul class='submenu'> 
							<li class="">
								<a href="#" class="dropdown-toggle" >
									<i class="menu-icon fa fa-list-alt"></i>
									<span class="menu-text">PLN</span>
									<b class="arrow fa fa-angle-down"></b>
								</a>
						
															
																		<ul class="submenu">
																		
																		<li class="">
																			<a href="#" class="dropdown-toggle">
																				<span class="menu-text">  <?php echo '-'; ?> </span>
																							</a>
																		</li>
																						
																						</ul>
																					
						</li>
					</ul><!-- PLN selesai-->
					
						
						
						
						<?php } else { ?>
					<!-- PLN Mulai-->
					<b class="arrow"></b>
					<ul class='submenu'> 
							<li class="">
								<a href="#" class="dropdown-toggle" >
									<i class="menu-icon fa fa-list-alt"></i>
									<span class="menu-text">PLN</span>
									<b class="arrow fa fa-angle-down"></b>
								</a>
						
															
																		<ul class="submenu">
																		<?php foreach ($menu3_pln->result_array() as $data) { ?>
																		<li class="">
																			<a href="#" class="dropdown-toggle">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  <?php echo $data['nama_project']; ?> </span>
																			<b class="arrow fa fa-angle-down"></b>
																							</a>

																			<b class="arrow"></b>
																			
																		<ul class="submenu">
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/general_information_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  General Information </span>
																			</a>
																			<b class="arrow"></b>
																			</li>
																			
																			<li class="">
																			<a href="<?php echo site_url('pmis/milstone_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  Milestone </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																			<li class="" >
																				<a href="#" class="dropdown-toggle">
																					<i class="menu-icon fa fa-list-alt"></i>
																					<span class="menu-text"> Contract</span>
																					<b class="arrow fa fa-angle-down"></b>
																				</a>

																				<b class="arrow"></b>
																					<ul class="submenu">
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_utama_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Main Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_supervisi_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Supervision Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_engineering_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Engineering Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_lokal_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Local Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																					</ul>
																			</li>
																			
																			<li class="">
																			<a href="#" class="dropdown-toggle">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Gallery </span>
																				<b class="arrow fa fa-angle-down"></b>
																				</a>

																			
																				<b class="arrow"></b>
																					<ul class="submenu">
																						<li class="">
																						<a href="<?php echo site_url('pmis/progress_gallery_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Progress Gallery</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/gallery_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Others Gallery</span>
																						</a>
																						<b class="arrow"></b>
																						</li>
																					
																					</ul>
																			</li>
																		
																		
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/progress_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Progress </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/issue_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Issue </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																			
																			<li class="">
																			<a href="<?php echo site_url('pmis/daily_activity_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Daily Activity </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																		
																		
																			
																		
																		
																			</ul>
																		</li>
																						<?php 	} ?>
																						</ul>
																					
						</li>
					</ul><!-- PLN selesai-->
					<?php } ?>
					
					
						
						<?PHP 
						if(empty($menu3_ipp->result_array())){ ?>
						<!-- IPP Mulai-->
					<b class="arrow"></b>
					<ul class='submenu'> 
							<li class="">
								<a href="#" class="dropdown-toggle" >
									<i class="menu-icon fa fa-list-alt"></i>
									<span class="menu-text">IPP</span>
									<b class="arrow fa fa-angle-down"></b>
								</a>
						
															
																		<ul class="submenu">
																		
																		<li class="">
																			<a href="#" class="dropdown-toggle">
																				<span class="menu-text">  <?php echo '-'; ?> </span>
																							</a>
																		</li>
																						
																						</ul>
																					
						</li>
					</ul><!-- IPP selesai-->
						
						
						
						<?php } else { ?>
					<!-- IPP Mulai-->
					<b class="arrow"></b>
					<ul class='submenu'> 
							<li class="">
								<a href="#" class="dropdown-toggle" >
									<i class="menu-icon fa fa-list-alt"></i>
									<span class="menu-text">IPP</span>
									<b class="arrow fa fa-angle-down"></b>
								</a>
						
															
																		<ul class="submenu">
																		<?php foreach ($menu3_ipp->result_array() as $data) { ?>
																		<li class="">
																			<a href="#" class="dropdown-toggle">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  <?php echo $data['nama_project']; ?> </span>
																			<b class="arrow fa fa-angle-down"></b>
																							</a>

																			<b class="arrow"></b>
																			
																		<ul class="submenu">
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/general_information_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  General Information </span>
																			</a>
																			<b class="arrow"></b>
																			</li>
																			
																			<li class="">
																			<a href="<?php echo site_url('pmis/milstone_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  Milestone </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																			<li class="" >
																				<a href="#" class="dropdown-toggle">
																					<i class="menu-icon fa fa-list-alt"></i>
																					<span class="menu-text"> Contract</span>
																					<b class="arrow fa fa-angle-down"></b>
																				</a>

																				<b class="arrow"></b>
																					<ul class="submenu">
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_utama_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Main Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_supervisi_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Supervision Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_engineering_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Engineering Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_lokal_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Local Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																					</ul>
																			</li>
																			
																			<li class="">
																			<a href="#" class="dropdown-toggle">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Gallery </span>
																				<b class="arrow fa fa-angle-down"></b>
																				</a>

																			
																				<b class="arrow"></b>
																					<ul class="submenu">
																						<li class="">
																						<a href="<?php echo site_url('pmis/progress_gallery_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Progress Gallery</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/gallery_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Others Gallery</span>
																						</a>
																						<b class="arrow"></b>
																						</li>
																					
																					</ul>
																			</li>
																		
																		
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/progress_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Progress </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/issue_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Issue </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																			
																			<li class="">
																			<a href="<?php echo site_url('pmis/daily_activity_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Daily Activity </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																		
																		
																			
																		
																		
																			</ul>
																		</li>
																						<?php 	} ?>
																						</ul>
																					
						</li>
					</ul><!-- IPP selesai-->
					<?php } ?>
					
					
						
						<?PHP 
						if(empty($menu3_unallocated->result_array())){ ?>
						<!-- unallocated Mulai-->
					<b class="arrow"></b>
					<ul class='submenu'> 
							<li class="">
								<a href="#" class="dropdown-toggle" >
									<i class="menu-icon fa fa-list-alt"></i>
									<span class="menu-text">UNALLOCATED</span>
									<b class="arrow fa fa-angle-down"></b>
								</a>
						
															
																		<ul class="submenu">
																		
																		<li class="">
																			<a href="#" class="dropdown-toggle">
																				<span class="menu-text">  <?php echo '-'; ?> </span>
																							</a>
																		</li>
																						
																						</ul>
																					
						</li>
					</ul><!-- unallocated selesai-->
						
						
						
						<?php } else { ?>
					<!-- unallocated Mulai-->
					<b class="arrow"></b>
					<ul class='submenu'> 
							<li class="">
								<a href="#" class="dropdown-toggle" >
									<i class="menu-icon fa fa-list-alt"></i>
									<span class="menu-text">UNALLOCATED</span>
									<b class="arrow fa fa-angle-down"></b>
								</a>
						
															
																		<ul class="submenu">
																		<?php foreach ($menu3_unallocated->result_array() as $data) { ?>
																		<li class="">
																			<a href="#" class="dropdown-toggle">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  <?php echo $data['nama_project']; ?> </span>
																			<b class="arrow fa fa-angle-down"></b>
																							</a>

																			<b class="arrow"></b>
																			
																		<ul class="submenu">
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/general_information_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  General Information </span>
																			</a>
																			<b class="arrow"></b>
																			</li>
																			
																			<li class="">
																			<a href="<?php echo site_url('pmis/milstone_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  Milestone </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																			<li class="" >
																				<a href="#" class="dropdown-toggle">
																					<i class="menu-icon fa fa-list-alt"></i>
																					<span class="menu-text"> Contract</span>
																					<b class="arrow fa fa-angle-down"></b>
																				</a>

																				<b class="arrow"></b>
																					<ul class="submenu">
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_utama_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Main Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_supervisi_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Supervision Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_engineering_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Engineering Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_lokal_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Local Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																					</ul>
																			</li>
																			
																			<li class="">
																			<a href="#" class="dropdown-toggle">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Gallery </span>
																				<b class="arrow fa fa-angle-down"></b>
																				</a>

																			
																				<b class="arrow"></b>
																					<ul class="submenu">
																						<li class="">
																						<a href="<?php echo site_url('pmis/progress_gallery_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Progress Gallery</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/gallery_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Others Gallery</span>
																						</a>
																						<b class="arrow"></b>
																						</li>
																					
																					</ul>
																			</li>
																		
																		
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/progress_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Progress </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/issue_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Issue </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																			
																			<li class="">
																			<a href="<?php echo site_url('pmis/daily_activity_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Daily Activity </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																		
																		
																			
																		
																		
																			</ul>
																		</li>
																						<?php 	} ?>
																						</ul>
																					
						</li>
					</ul><!-- unallocated selesai-->
					<?php } ?>
					
					
				</li>
					<!-- MENU 3 selesai-->
					
								
					
							
					
					<!-- MENU 4 MULAI-->
					<li class="">
						<a href="#" class="dropdown-toggle" >
							<i class="menu-icon fa fa-bolt"></i>
							<span class="menu-text">  UPP 4</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>
						
						
						
						<?PHP 
						if(empty($menu4_pln->result_array())){ ?>
						<!-- PLN Mulai-->
					<b class="arrow"></b>
					<ul class='submenu'> 
							<li class="">
								<a href="#" class="dropdown-toggle" >
									<i class="menu-icon fa fa-list-alt"></i>
									<span class="menu-text">PLN</span>
									<b class="arrow fa fa-angle-down"></b>
								</a>
						
															
																		<ul class="submenu">
																		
																		<li class="">
																			<a href="#" class="dropdown-toggle">
																				<span class="menu-text">  <?php echo '-'; ?> </span>
																							</a>
																		</li>
																						
																						</ul>
																					
						</li>
					</ul><!-- PLN selesai-->
					
						
						
						
						<?php } else { ?>
					<!-- PLN Mulai-->
					<b class="arrow"></b>
					<ul class='submenu'> 
							<li class="">
								<a href="#" class="dropdown-toggle" >
									<i class="menu-icon fa fa-list-alt"></i>
									<span class="menu-text">PLN</span>
									<b class="arrow fa fa-angle-down"></b>
								</a>
						
															
																		<ul class="submenu">
																		<?php foreach ($menu4_pln->result_array() as $data) { ?>
																		<li class="">
																			<a href="#" class="dropdown-toggle">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  <?php echo $data['nama_project']; ?> </span>
																			<b class="arrow fa fa-angle-down"></b>
																							</a>

																			<b class="arrow"></b>
																			
																		<ul class="submenu">
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/general_information_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  General Information </span>
																			</a>
																			<b class="arrow"></b>
																			</li>
																			
																			<li class="">
																			<a href="<?php echo site_url('pmis/milstone_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  Milestone </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																			<li class="" >
																				<a href="#" class="dropdown-toggle">
																					<i class="menu-icon fa fa-list-alt"></i>
																					<span class="menu-text"> Contract</span>
																					<b class="arrow fa fa-angle-down"></b>
																				</a>

																				<b class="arrow"></b>
																					<ul class="submenu">
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_utama_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Main Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_supervisi_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Supervision Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_engineering_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Engineering Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_lokal_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Local Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																					</ul>
																			</li>
																			
																			<li class="">
																			<a href="#" class="dropdown-toggle">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Gallery </span>
																				<b class="arrow fa fa-angle-down"></b>
																				</a>

																			
																				<b class="arrow"></b>
																					<ul class="submenu">
																						<li class="">
																						<a href="<?php echo site_url('pmis/progress_gallery_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Progress Gallery</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/gallery_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Others Gallery</span>
																						</a>
																						<b class="arrow"></b>
																						</li>
																					
																					</ul>
																			</li>
																		
																		
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/progress_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Progress </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/issue_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Issue </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																			
																			<li class="">
																			<a href="<?php echo site_url('pmis/daily_activity_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Daily Activity </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																		
																		
																			
																		
																		
																			</ul>
																		</li>
																						<?php 	} ?>
																						</ul>
																					
						</li>
					</ul><!-- PLN selesai-->
					<?php } ?>
					
					
						
						<?PHP 
						if(empty($menu4_ipp->result_array())){ ?>
						<!-- IPP Mulai-->
					<b class="arrow"></b>
					<ul class='submenu'> 
							<li class="">
								<a href="#" class="dropdown-toggle" >
									<i class="menu-icon fa fa-list-alt"></i>
									<span class="menu-text">IPP</span>
									<b class="arrow fa fa-angle-down"></b>
								</a>
						
															
																		<ul class="submenu">
																		
																		<li class="">
																			<a href="#" class="dropdown-toggle">
																				<span class="menu-text">  <?php echo '-'; ?> </span>
																							</a>
																		</li>
																						
																						</ul>
																					
						</li>
					</ul><!-- IPP selesai-->
						
						
						
						<?php } else { ?>
					<!-- IPP Mulai-->
					<b class="arrow"></b>
					<ul class='submenu'> 
							<li class="">
								<a href="#" class="dropdown-toggle" >
									<i class="menu-icon fa fa-list-alt"></i>
									<span class="menu-text">IPP</span>
									<b class="arrow fa fa-angle-down"></b>
								</a>
						
															
																		<ul class="submenu">
																		<?php foreach ($menu4_ipp->result_array() as $data) { ?>
																		<li class="">
																			<a href="#" class="dropdown-toggle">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  <?php echo $data['nama_project']; ?> </span>
																			<b class="arrow fa fa-angle-down"></b>
																							</a>

																			<b class="arrow"></b>
																			
																		<ul class="submenu">
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/general_information_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  General Information </span>
																			</a>
																			<b class="arrow"></b>
																			</li>
																			
																			<li class="">
																			<a href="<?php echo site_url('pmis/milstone_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  Milestone </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																			<li class="" >
																				<a href="#" class="dropdown-toggle">
																					<i class="menu-icon fa fa-list-alt"></i>
																					<span class="menu-text"> Contract</span>
																					<b class="arrow fa fa-angle-down"></b>
																				</a>

																				<b class="arrow"></b>
																					<ul class="submenu">
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_utama_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Main Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_supervisi_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Supervision Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_engineering_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Engineering Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_lokal_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Local Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																					</ul>
																			</li>
																			
																			<li class="">
																			<a href="#" class="dropdown-toggle">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Gallery </span>
																				<b class="arrow fa fa-angle-down"></b>
																				</a>

																			
																				<b class="arrow"></b>
																					<ul class="submenu">
																						<li class="">
																						<a href="<?php echo site_url('pmis/progress_gallery_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Progress Gallery</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/gallery_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Others Gallery</span>
																						</a>
																						<b class="arrow"></b>
																						</li>
																					
																					</ul>
																			</li>
																		
																		
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/progress_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Progress </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/issue_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Issue </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																			
																			<li class="">
																			<a href="<?php echo site_url('pmis/daily_activity_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Daily Activity </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																		
																		
																			
																		
																		
																			</ul>
																		</li>
																						<?php 	} ?>
																						</ul>
																					
						</li>
					</ul><!-- IPP selesai-->
					<?php } ?>
					
					
						
						<?PHP 
						if(empty($menu4_unallocated->result_array())){ ?>
						<!-- unallocated Mulai-->
					<b class="arrow"></b>
					<ul class='submenu'> 
							<li class="">
								<a href="#" class="dropdown-toggle" >
									<i class="menu-icon fa fa-list-alt"></i>
									<span class="menu-text">UNALLOCATED</span>
									<b class="arrow fa fa-angle-down"></b>
								</a>
						
															
																		<ul class="submenu">
																		
																		<li class="">
																			<a href="#" class="dropdown-toggle">
																				<span class="menu-text">  <?php echo '-'; ?> </span>
																							</a>
																		</li>
																						
																						</ul>
																					
						</li>
					</ul><!-- unallocated selesai-->
						
						
						
						<?php } else { ?>
					<!-- unallocated Mulai-->
					<b class="arrow"></b>
					<ul class='submenu'> 
							<li class="">
								<a href="#" class="dropdown-toggle" >
									<i class="menu-icon fa fa-list-alt"></i>
									<span class="menu-text">UNALLOCATED</span>
									<b class="arrow fa fa-angle-down"></b>
								</a>
						
															
																		<ul class="submenu">
																		<?php foreach ($menu4_unallocated->result_array() as $data) { ?>
																		<li class="">
																			<a href="#" class="dropdown-toggle">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  <?php echo $data['nama_project']; ?> </span>
																			<b class="arrow fa fa-angle-down"></b>
																							</a>

																			<b class="arrow"></b>
																			
																		<ul class="submenu">
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/general_information_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  General Information </span>
																			</a>
																			<b class="arrow"></b>
																			</li>
																			
																			<li class="">
																			<a href="<?php echo site_url('pmis/milstone_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  Milestone </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																			<li class="" >
																				<a href="#" class="dropdown-toggle">
																					<i class="menu-icon fa fa-list-alt"></i>
																					<span class="menu-text"> Contract</span>
																					<b class="arrow fa fa-angle-down"></b>
																				</a>

																				<b class="arrow"></b>
																					<ul class="submenu">
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_utama_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Main Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_supervisi_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Supervision Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_engineering_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Engineering Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_lokal_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Local Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																					</ul>
																			</li>
																			
																			<li class="">
																			<a href="#" class="dropdown-toggle">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Gallery </span>
																				<b class="arrow fa fa-angle-down"></b>
																				</a>

																			
																				<b class="arrow"></b>
																					<ul class="submenu">
																						<li class="">
																						<a href="<?php echo site_url('pmis/progress_gallery_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Progress Gallery</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/gallery_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Others Gallery</span>
																						</a>
																						<b class="arrow"></b>
																						</li>
																					
																					</ul>
																			</li>
																		
																		
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/progress_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Progress </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/issue_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Issue </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																			
																			<li class="">
																			<a href="<?php echo site_url('pmis/daily_activity_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Daily Activity </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																		
																		
																			
																		
																		
																			</ul>
																		</li>
																						<?php 	} ?>
																						</ul>
																					
						</li>
					</ul><!-- unallocated selesai-->
					<?php } ?>
					
					
				</li>
					<!-- MENU 4 selesai-->
					
								
					
					
							
					
					<!-- MENU 5 MULAI-->
					<li class="">
						<a href="#" class="dropdown-toggle" >
							<i class="menu-icon fa fa-bolt"></i>
							<span class="menu-text">  UPP 5</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>
						
						
						
						<?PHP 
						if(empty($menu5_pln->result_array())){ ?>
						<!-- PLN Mulai-->
					<b class="arrow"></b>
					<ul class='submenu'> 
							<li class="">
								<a href="#" class="dropdown-toggle" >
									<i class="menu-icon fa fa-list-alt"></i>
									<span class="menu-text">PLN</span>
									<b class="arrow fa fa-angle-down"></b>
								</a>
						
															
																		<ul class="submenu">
																		
																		<li class="">
																			<a href="#" class="dropdown-toggle">
																				<span class="menu-text">  <?php echo '-'; ?> </span>
																							</a>
																		</li>
																						
																						</ul>
																					
						</li>
					</ul><!-- PLN selesai-->
					
						
						
						
						<?php } else { ?>
					<!-- PLN Mulai-->
					<b class="arrow"></b>
					<ul class='submenu'> 
							<li class="">
								<a href="#" class="dropdown-toggle" >
									<i class="menu-icon fa fa-list-alt"></i>
									<span class="menu-text">PLN</span>
									<b class="arrow fa fa-angle-down"></b>
								</a>
						
															
																		<ul class="submenu">
																		<?php foreach ($menu5_pln->result_array() as $data) { ?>
																		<li class="">
																			<a href="#" class="dropdown-toggle">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  <?php echo $data['nama_project']; ?> </span>
																			<b class="arrow fa fa-angle-down"></b>
																							</a>

																			<b class="arrow"></b>
																			
																		<ul class="submenu">
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/general_information_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  General Information </span>
																			</a>
																			<b class="arrow"></b>
																			</li>
																			
																			<li class="">
																			<a href="<?php echo site_url('pmis/milstone_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  Milestone </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																			<li class="" >
																				<a href="#" class="dropdown-toggle">
																					<i class="menu-icon fa fa-list-alt"></i>
																					<span class="menu-text"> Contract</span>
																					<b class="arrow fa fa-angle-down"></b>
																				</a>

																				<b class="arrow"></b>
																					<ul class="submenu">
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_utama_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Main Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_supervisi_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Supervision Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_engineering_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Engineering Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_lokal_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Local Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																					</ul>
																			</li>
																			
																			<li class="">
																			<a href="#" class="dropdown-toggle">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Gallery </span>
																				<b class="arrow fa fa-angle-down"></b>
																				</a>

																			
																				<b class="arrow"></b>
																					<ul class="submenu">
																						<li class="">
																						<a href="<?php echo site_url('pmis/progress_gallery_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Progress Gallery</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/gallery_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Others Gallery</span>
																						</a>
																						<b class="arrow"></b>
																						</li>
																					
																					</ul>
																			</li>
																		
																		
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/progress_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Progress </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/issue_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Issue </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																			
																			<li class="">
																			<a href="<?php echo site_url('pmis/daily_activity_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Daily Activity </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																		
																		
																			
																		
																		
																			</ul>
																		</li>
																						<?php 	} ?>
																						</ul>
																					
						</li>
					</ul><!-- PLN selesai-->
					<?php } ?>
					
					
						
						<?PHP 
						if(empty($menu5_ipp->result_array())){ ?>
						<!-- IPP Mulai-->
					<b class="arrow"></b>
					<ul class='submenu'> 
							<li class="">
								<a href="#" class="dropdown-toggle" >
									<i class="menu-icon fa fa-list-alt"></i>
									<span class="menu-text">IPP</span>
									<b class="arrow fa fa-angle-down"></b>
								</a>
						
															
																		<ul class="submenu">
																		
																		<li class="">
																			<a href="#" class="dropdown-toggle">
																				<span class="menu-text">  <?php echo '-'; ?> </span>
																							</a>
																		</li>
																						
																						</ul>
																					
						</li>
					</ul><!-- IPP selesai-->
						
						
						
						<?php } else { ?>
					<!-- IPP Mulai-->
					<b class="arrow"></b>
					<ul class='submenu'> 
							<li class="">
								<a href="#" class="dropdown-toggle" >
									<i class="menu-icon fa fa-list-alt"></i>
									<span class="menu-text">IPP</span>
									<b class="arrow fa fa-angle-down"></b>
								</a>
						
															
																		<ul class="submenu">
																		<?php foreach ($menu5_ipp->result_array() as $data) { ?>
																		<li class="">
																			<a href="#" class="dropdown-toggle">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  <?php echo $data['nama_project']; ?> </span>
																			<b class="arrow fa fa-angle-down"></b>
																							</a>

																			<b class="arrow"></b>
																			
																		<ul class="submenu">
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/general_information_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  General Information </span>
																			</a>
																			<b class="arrow"></b>
																			</li>
																			
																			<li class="">
																			<a href="<?php echo site_url('pmis/milstone_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  Milestone </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																			<li class="" >
																				<a href="#" class="dropdown-toggle">
																					<i class="menu-icon fa fa-list-alt"></i>
																					<span class="menu-text"> Contract</span>
																					<b class="arrow fa fa-angle-down"></b>
																				</a>

																				<b class="arrow"></b>
																					<ul class="submenu">
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_utama_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Main Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_supervisi_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Supervision Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_engineering_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Engineering Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_lokal_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Local Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																					</ul>
																			</li>
																			
																			<li class="">
																			<a href="#" class="dropdown-toggle">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Gallery </span>
																				<b class="arrow fa fa-angle-down"></b>
																				</a>

																			
																				<b class="arrow"></b>
																					<ul class="submenu">
																						<li class="">
																						<a href="<?php echo site_url('pmis/progress_gallery_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Progress Gallery</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/gallery_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Others Gallery</span>
																						</a>
																						<b class="arrow"></b>
																						</li>
																					
																					</ul>
																			</li>
																		
																		
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/progress_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Progress </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/issue_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Issue </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																			
																			<li class="">
																			<a href="<?php echo site_url('pmis/daily_activity_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Daily Activity </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																		
																		
																			
																		
																		
																			</ul>
																		</li>
																						<?php 	} ?>
																						</ul>
																					
						</li>
					</ul><!-- IPP selesai-->
					<?php } ?>
					
					
						
						<?PHP 
						if(empty($menu5_unallocated->result_array())){ ?>
						<!-- unallocated Mulai-->
					<b class="arrow"></b>
					<ul class='submenu'> 
							<li class="">
								<a href="#" class="dropdown-toggle" >
									<i class="menu-icon fa fa-list-alt"></i>
									<span class="menu-text">UNALLOCATED</span>
									<b class="arrow fa fa-angle-down"></b>
								</a>
						
															
																		<ul class="submenu">
																		
																		<li class="">
																			<a href="#" class="dropdown-toggle">
																				<span class="menu-text">  <?php echo '-'; ?> </span>
																							</a>
																		</li>
																						
																						</ul>
																					
						</li>
					</ul><!-- unallocated selesai-->
						
						
						
						<?php } else { ?>
					<!-- unallocated Mulai-->
					<b class="arrow"></b>
					<ul class='submenu'> 
							<li class="">
								<a href="#" class="dropdown-toggle" >
									<i class="menu-icon fa fa-list-alt"></i>
									<span class="menu-text">UNALLOCATED</span>
									<b class="arrow fa fa-angle-down"></b>
								</a>
						
															
																		<ul class="submenu">
																		<?php foreach ($menu5_unallocated->result_array() as $data) { ?>
																		<li class="">
																			<a href="#" class="dropdown-toggle">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  <?php echo $data['nama_project']; ?> </span>
																			<b class="arrow fa fa-angle-down"></b>
																							</a>

																			<b class="arrow"></b>
																			
																		<ul class="submenu">
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/general_information_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  General Information </span>
																			</a>
																			<b class="arrow"></b>
																			</li>
																			
																			<li class="">
																			<a href="<?php echo site_url('pmis/milstone_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  Milestone </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																			<li class="" >
																				<a href="#" class="dropdown-toggle">
																					<i class="menu-icon fa fa-list-alt"></i>
																					<span class="menu-text"> Contract</span>
																					<b class="arrow fa fa-angle-down"></b>
																				</a>

																				<b class="arrow"></b>
																					<ul class="submenu">
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_utama_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Main Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_supervisi_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Supervision Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_engineering_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Engineering Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_lokal_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Local Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																					</ul>
																			</li>
																			
																			<li class="">
																			<a href="#" class="dropdown-toggle">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Gallery </span>
																				<b class="arrow fa fa-angle-down"></b>
																				</a>

																			
																				<b class="arrow"></b>
																					<ul class="submenu">
																						<li class="">
																						<a href="<?php echo site_url('pmis/progress_gallery_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Progress Gallery</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/gallery_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Others Gallery</span>
																						</a>
																						<b class="arrow"></b>
																						</li>
																					
																					</ul>
																			</li>
																		
																		
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/progress_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Progress </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/issue_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Issue </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																			
																			<li class="">
																			<a href="<?php echo site_url('pmis/daily_activity_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Daily Activity </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																		
																		
																			
																		
																		
																			</ul>
																		</li>
																						<?php 	} ?>
																						</ul>
																					
						</li>
					</ul><!-- unallocated selesai-->
					<?php } ?>
					
					
				</li>
					<!-- MENU 5 selesai-->
					
								
					
					
							
					
					<!-- MENU 6 MULAI-->
					<li class="">
						<a href="#" class="dropdown-toggle" >
							<i class="menu-icon fa fa-bolt"></i>
							<span class="menu-text">  UPP 6</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>
						
						
						
						<?PHP 
						if(empty($menu6_pln->result_array())){ ?>
						<!-- PLN Mulai-->
					<b class="arrow"></b>
					<ul class='submenu'> 
							<li class="">
								<a href="#" class="dropdown-toggle" >
									<i class="menu-icon fa fa-list-alt"></i>
									<span class="menu-text">PLN</span>
									<b class="arrow fa fa-angle-down"></b>
								</a>
						
															
																		<ul class="submenu">
																		
																		<li class="">
																			<a href="#" class="dropdown-toggle">
																				<span class="menu-text">  <?php echo '-'; ?> </span>
																							</a>
																		</li>
																						
																						</ul>
																					
						</li>
					</ul><!-- PLN selesai-->
					
						
						
						
						<?php } else { ?>
					<!-- PLN Mulai-->
					<b class="arrow"></b>
					<ul class='submenu'> 
							<li class="">
								<a href="#" class="dropdown-toggle" >
									<i class="menu-icon fa fa-list-alt"></i>
									<span class="menu-text">PLN</span>
									<b class="arrow fa fa-angle-down"></b>
								</a>
						
															
																		<ul class="submenu">
																		<?php foreach ($menu6_pln->result_array() as $data) { ?>
																		<li class="">
																			<a href="#" class="dropdown-toggle">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  <?php echo $data['nama_project']; ?> </span>
																			<b class="arrow fa fa-angle-down"></b>
																							</a>

																			<b class="arrow"></b>
																			
																		<ul class="submenu">
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/general_information_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  General Information </span>
																			</a>
																			<b class="arrow"></b>
																			</li>
																			
																			<li class="">
																			<a href="<?php echo site_url('pmis/milstone_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  Milestone </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																			<li class="" >
																				<a href="#" class="dropdown-toggle">
																					<i class="menu-icon fa fa-list-alt"></i>
																					<span class="menu-text"> Contract</span>
																					<b class="arrow fa fa-angle-down"></b>
																				</a>

																				<b class="arrow"></b>
																					<ul class="submenu">
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_utama_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Main Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_supervisi_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Supervision Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_engineering_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Engineering Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_lokal_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Local Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																					</ul>
																			</li>
																			
																			<li class="">
																			<a href="#" class="dropdown-toggle">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Gallery </span>
																				<b class="arrow fa fa-angle-down"></b>
																				</a>

																			
																				<b class="arrow"></b>
																					<ul class="submenu">
																						<li class="">
																						<a href="<?php echo site_url('pmis/progress_gallery_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Progress Gallery</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/gallery_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Others Gallery</span>
																						</a>
																						<b class="arrow"></b>
																						</li>
																					
																					</ul>
																			</li>
																		
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/progress_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Progress </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/issue_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Issue </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																			
																			<li class="">
																			<a href="<?php echo site_url('pmis/daily_activity_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Daily Activity </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																		
																		
																			
																		
																		
																			</ul>
																		</li>
																						<?php 	} ?>
																						</ul>
																					
						</li>
					</ul><!-- PLN selesai-->
					<?php } ?>
					
					
						
						<?PHP 
						if(empty($menu6_ipp->result_array())){ ?>
						<!-- IPP Mulai-->
					<b class="arrow"></b>
					<ul class='submenu'> 
							<li class="">
								<a href="#" class="dropdown-toggle" >
									<i class="menu-icon fa fa-list-alt"></i>
									<span class="menu-text">IPP</span>
									<b class="arrow fa fa-angle-down"></b>
								</a>
						
															
																		<ul class="submenu">
																		
																		<li class="">
																			<a href="#" class="dropdown-toggle">
																				<span class="menu-text">  <?php echo '-'; ?> </span>
																							</a>
																		</li>
																						
																						</ul>
																					
						</li>
					</ul><!-- IPP selesai-->
						
						
						
						<?php } else { ?>
					<!-- IPP Mulai-->
					<b class="arrow"></b>
					<ul class='submenu'> 
							<li class="">
								<a href="#" class="dropdown-toggle" >
									<i class="menu-icon fa fa-list-alt"></i>
									<span class="menu-text">IPP</span>
									<b class="arrow fa fa-angle-down"></b>
								</a>
						
															
																		<ul class="submenu">
																		<?php foreach ($menu6_ipp->result_array() as $data) { ?>
																		<li class="">
																			<a href="#" class="dropdown-toggle">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  <?php echo $data['nama_project']; ?> </span>
																			<b class="arrow fa fa-angle-down"></b>
																							</a>

																			<b class="arrow"></b>
																			
																		<ul class="submenu">
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/general_information_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  General Information </span>
																			</a>
																			<b class="arrow"></b>
																			</li>
																			
																			<li class="">
																			<a href="<?php echo site_url('pmis/milstone_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  Milestone </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																			<li class="" >
																				<a href="#" class="dropdown-toggle">
																					<i class="menu-icon fa fa-list-alt"></i>
																					<span class="menu-text"> Contract</span>
																					<b class="arrow fa fa-angle-down"></b>
																				</a>

																				<b class="arrow"></b>
																					<ul class="submenu">
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_utama_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Main Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_supervisi_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Supervision Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_engineering_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Engineering Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_lokal_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Local Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																					</ul>
																			</li>
																			
																			<li class="">
																			<a href="#" class="dropdown-toggle">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Gallery </span>
																				<b class="arrow fa fa-angle-down"></b>
																				</a>

																			
																				<b class="arrow"></b>
																					<ul class="submenu">
																						<li class="">
																						<a href="<?php echo site_url('pmis/progress_gallery_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Progress Gallery</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/gallery_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Others Gallery</span>
																						</a>
																						<b class="arrow"></b>
																						</li>
																					
																					</ul>
																			</li>
																		
																		
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/progress_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Progress </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/issue_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Issue </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																			
																			<li class="">
																			<a href="<?php echo site_url('pmis/daily_activity_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Daily Activity </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																		
																		
																			
																		
																		
																			</ul>
																		</li>
																						<?php 	} ?>
																						</ul>
																					
						</li>
					</ul><!-- IPP selesai-->
					<?php } ?>
					
					
						
						<?PHP 
						if(empty($menu6_unallocated->result_array())){ ?>
						<!-- unallocated Mulai-->
					<b class="arrow"></b>
					<ul class='submenu'> 
							<li class="">
								<a href="#" class="dropdown-toggle" >
									<i class="menu-icon fa fa-list-alt"></i>
									<span class="menu-text">UNALLOCATED</span>
									<b class="arrow fa fa-angle-down"></b>
								</a>
						
															
																		<ul class="submenu">
																		
																		<li class="">
																			<a href="#" class="dropdown-toggle">
																				<span class="menu-text">  <?php echo '-'; ?> </span>
																							</a>
																		</li>
																						
																						</ul>
																					
						</li>
					</ul><!-- unallocated selesai-->
						
						
						
						<?php } else { ?>
					<!-- unallocated Mulai-->
					<b class="arrow"></b>
					<ul class='submenu'> 
							<li class="">
								<a href="#" class="dropdown-toggle" >
									<i class="menu-icon fa fa-list-alt"></i>
									<span class="menu-text">UNALLOCATED</span>
									<b class="arrow fa fa-angle-down"></b>
								</a>
						
															
																		<ul class="submenu">
																		<?php foreach ($menu6_unallocated->result_array() as $data) { ?>
																		<li class="">
																			<a href="#" class="dropdown-toggle">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  <?php echo $data['nama_project']; ?> </span>
																			<b class="arrow fa fa-angle-down"></b>
																							</a>

																			<b class="arrow"></b>
																			
																		<ul class="submenu">
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/general_information_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  General Information </span>
																			</a>
																			<b class="arrow"></b>
																			</li>
																			
																			<li class="">
																			<a href="<?php echo site_url('pmis/milstone_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  Milestone </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																			<li class="" >
																				<a href="#" class="dropdown-toggle">
																					<i class="menu-icon fa fa-list-alt"></i>
																					<span class="menu-text"> Contract</span>
																					<b class="arrow fa fa-angle-down"></b>
																				</a>

																				<b class="arrow"></b>
																					<ul class="submenu">
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_utama_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Main Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_supervisi_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Supervision Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_engineering_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Engineering Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_lokal_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Local Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																					</ul>
																			</li>
																			
																			<li class="">
																			<a href="#" class="dropdown-toggle">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Gallery </span>
																				<b class="arrow fa fa-angle-down"></b>
																				</a>

																			
																				<b class="arrow"></b>
																					<ul class="submenu">
																						<li class="">
																						<a href="<?php echo site_url('pmis/progress_gallery_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Progress Gallery</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/gallery_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Others Gallery</span>
																						</a>
																						<b class="arrow"></b>
																						</li>
																					
																					</ul>
																			</li>
																		
																		
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/progress_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Progress </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/issue_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Issue </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																			
																			<li class="">
																			<a href="<?php echo site_url('pmis/daily_activity_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Daily Activity </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																		
																		
																			
																		
																		
																			</ul>
																		</li>
																						<?php 	} ?>
																						</ul>
																					
						</li>
					</ul><!-- unallocated selesai-->
					<?php } ?>
					
					
				</li>
					<!-- MENU 6 selesai-->
					
								
					
					
							
					
					<!-- MENU 7 MULAI-->
					<li class="">
						<a href="#" class="dropdown-toggle" >
							<i class="menu-icon fa fa-bolt"></i>
							<span class="menu-text">  UPP 7</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>
						
						
						
						<?PHP 
						if(empty($menu7_pln->result_array())){ ?>
						<!-- PLN Mulai-->
					<b class="arrow"></b>
					<ul class='submenu'> 
							<li class="">
								<a href="#" class="dropdown-toggle" >
									<i class="menu-icon fa fa-list-alt"></i>
									<span class="menu-text">PLN</span>
									<b class="arrow fa fa-angle-down"></b>
								</a>
						
															
																		<ul class="submenu">
																		
																		<li class="">
																			<a href="#" class="dropdown-toggle">
																				<span class="menu-text">  <?php echo '-'; ?> </span>
																							</a>
																		</li>
																						
																						</ul>
																					
						</li>
					</ul><!-- PLN selesai-->
					
						
						
						
						<?php } else { ?>
					<!-- PLN Mulai-->
					<b class="arrow"></b>
					<ul class='submenu'> 
							<li class="">
								<a href="#" class="dropdown-toggle" >
									<i class="menu-icon fa fa-list-alt"></i>
									<span class="menu-text">PLN</span>
									<b class="arrow fa fa-angle-down"></b>
								</a>
						
															
																		<ul class="submenu">
																		<?php foreach ($menu7_pln->result_array() as $data) { ?>
																		<li class="">
																			<a href="#" class="dropdown-toggle">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  <?php echo $data['nama_project']; ?> </span>
																			<b class="arrow fa fa-angle-down"></b>
																							</a>

																			<b class="arrow"></b>
																			
																		<ul class="submenu">
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/general_information_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  General Information </span>
																			</a>
																			<b class="arrow"></b>
																			</li>
																			
																			<li class="">
																			<a href="<?php echo site_url('pmis/milstone_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  Milestone </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																			<li class="" >
																				<a href="#" class="dropdown-toggle">
																					<i class="menu-icon fa fa-list-alt"></i>
																					<span class="menu-text"> Contract</span>
																					<b class="arrow fa fa-angle-down"></b>
																				</a>

																				<b class="arrow"></b>
																					<ul class="submenu">
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_utama_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Main Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_supervisi_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Supervision Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_engineering_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Engineering Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_lokal_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Local Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																					</ul>
																			</li>
																			
																			<li class="">
																			<a href="#" class="dropdown-toggle">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Gallery </span>
																				<b class="arrow fa fa-angle-down"></b>
																				</a>

																			
																				<b class="arrow"></b>
																					<ul class="submenu">
																						<li class="">
																						<a href="<?php echo site_url('pmis/progress_gallery_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Progress Gallery</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/gallery_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Others Gallery</span>
																						</a>
																						<b class="arrow"></b>
																						</li>
																					
																					</ul>
																			</li>
																		
																		
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/progress_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Progress </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/issue_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Issue </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																			
																			<li class="">
																			<a href="<?php echo site_url('pmis/daily_activity_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Daily Activity </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																		
																		
																			
																		
																		
																			</ul>
																		</li>
																						<?php 	} ?>
																						</ul>
																					
						</li>
					</ul><!-- PLN selesai-->
					<?php } ?>
					
					
						
						<?PHP 
						if(empty($menu7_ipp->result_array())){ ?>
						<!-- IPP Mulai-->
					<b class="arrow"></b>
					<ul class='submenu'> 
							<li class="">
								<a href="#" class="dropdown-toggle" >
									<i class="menu-icon fa fa-list-alt"></i>
									<span class="menu-text">IPP</span>
									<b class="arrow fa fa-angle-down"></b>
								</a>
						
															
																		<ul class="submenu">
																		
																		<li class="">
																			<a href="#" class="dropdown-toggle">
																				<span class="menu-text">  <?php echo '-'; ?> </span>
																							</a>
																		</li>
																						
																						</ul>
																					
						</li>
					</ul><!-- IPP selesai-->
						
						
						
						<?php } else { ?>
					<!-- IPP Mulai-->
					<b class="arrow"></b>
					<ul class='submenu'> 
							<li class="">
								<a href="#" class="dropdown-toggle" >
									<i class="menu-icon fa fa-list-alt"></i>
									<span class="menu-text">IPP</span>
									<b class="arrow fa fa-angle-down"></b>
								</a>
						
															
																		<ul class="submenu">
																		<?php foreach ($menu7_ipp->result_array() as $data) { ?>
																		<li class="">
																			<a href="#" class="dropdown-toggle">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  <?php echo $data['nama_project']; ?> </span>
																			<b class="arrow fa fa-angle-down"></b>
																							</a>

																			<b class="arrow"></b>
																			
																		<ul class="submenu">
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/general_information_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  General Information </span>
																			</a>
																			<b class="arrow"></b>
																			</li>
																			
																			<li class="">
																			<a href="<?php echo site_url('pmis/milstone_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  Milestone </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																			<li class="" >
																				<a href="#" class="dropdown-toggle">
																					<i class="menu-icon fa fa-list-alt"></i>
																					<span class="menu-text"> Contract</span>
																					<b class="arrow fa fa-angle-down"></b>
																				</a>

																				<b class="arrow"></b>
																					<ul class="submenu">
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_utama_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Main Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_supervisi_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Supervision Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_engineering_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Engineering Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_lokal_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Local Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																					</ul>
																			</li>
																			
																			<li class="">
																			<a href="#" class="dropdown-toggle">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Gallery </span>
																				<b class="arrow fa fa-angle-down"></b>
																				</a>

																			
																				<b class="arrow"></b>
																					<ul class="submenu">
																						<li class="">
																						<a href="<?php echo site_url('pmis/progress_gallery_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Progress Gallery</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/gallery_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Others Gallery</span>
																						</a>
																						<b class="arrow"></b>
																						</li>
																					
																					</ul>
																			</li>
																		
																		
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/progress_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Progress </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/issue_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Issue </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																			
																			<li class="">
																			<a href="<?php echo site_url('pmis/daily_activity_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Daily Activity </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																		
																		
																			
																		
																		
																			</ul>
																		</li>
																						<?php 	} ?>
																						</ul>
																					
						</li>
					</ul><!-- IPP selesai-->
					<?php } ?>
					
					
						
						<?PHP 
						if(empty($menu7_unallocated->result_array())){ ?>
						<!-- unallocated Mulai-->
					<b class="arrow"></b>
					<ul class='submenu'> 
							<li class="">
								<a href="#" class="dropdown-toggle" >
									<i class="menu-icon fa fa-list-alt"></i>
									<span class="menu-text">UNALLOCATED</span>
									<b class="arrow fa fa-angle-down"></b>
								</a>
						
															
																		<ul class="submenu">
																		
																		<li class="">
																			<a href="#" class="dropdown-toggle">
																				<span class="menu-text">  <?php echo '-'; ?> </span>
																							</a>
																		</li>
																						
																						</ul>
																					
						</li>
					</ul><!-- unallocated selesai-->
						
						
						
						<?php } else { ?>
					<!-- unallocated Mulai-->
					<b class="arrow"></b>
					<ul class='submenu'> 
							<li class="">
								<a href="#" class="dropdown-toggle" >
									<i class="menu-icon fa fa-list-alt"></i>
									<span class="menu-text">UNALLOCATED</span>
									<b class="arrow fa fa-angle-down"></b>
								</a>
						
															
																		<ul class="submenu">
																		<?php foreach ($menu7_unallocated->result_array() as $data) { ?>
																		<li class="">
																			<a href="#" class="dropdown-toggle">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  <?php echo $data['nama_project']; ?> </span>
																			<b class="arrow fa fa-angle-down"></b>
																							</a>

																			<b class="arrow"></b>
																			
																		<ul class="submenu">
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/general_information_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  General Information </span>
																			</a>
																			<b class="arrow"></b>
																			</li>
																			
																			<li class="">
																			<a href="<?php echo site_url('pmis/milstone_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  Milestone </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																			<li class="" >
																				<a href="#" class="dropdown-toggle">
																					<i class="menu-icon fa fa-list-alt"></i>
																					<span class="menu-text"> Contract</span>
																					<b class="arrow fa fa-angle-down"></b>
																				</a>

																				<b class="arrow"></b>
																					<ul class="submenu">
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_utama_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Main Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_supervisi_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Supervision Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_engineering_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Engineering Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_lokal_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Local Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																					</ul>
																			</li>
																			
																			<li class="">
																			<a href="#" class="dropdown-toggle">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Gallery </span>
																				<b class="arrow fa fa-angle-down"></b>
																				</a>

																			
																				<b class="arrow"></b>
																					<ul class="submenu">
																						<li class="">
																						<a href="<?php echo site_url('pmis/progress_gallery_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Progress Gallery</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/gallery_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Others Gallery</span>
																						</a>
																						<b class="arrow"></b>
																						</li>
																					
																					</ul>
																			</li>
																		
																		
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/progress_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Progress </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/issue_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Issue </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																			
																			<li class="">
																			<a href="<?php echo site_url('pmis/daily_activity_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Daily Activity </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																		
																		
																			
																		
																		
																			</ul>
																		</li>
																						<?php 	} ?>
																						</ul>
																					
						</li>
					</ul><!-- unallocated selesai-->
					<?php } ?>
					
					
				</li>
					<!-- MENU 7 selesai-->
					
								
					
					
							
					
					<!-- MENU 8 MULAI-->
					<li class="">
						<a href="#" class="dropdown-toggle" >
							<i class="menu-icon fa fa-bolt"></i>
							<span class="menu-text">  UPP 8</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>
						
						
						
						<?PHP 
						if(empty($menu8_pln->result_array())){ ?>
						<!-- PLN Mulai-->
					<b class="arrow"></b>
					<ul class='submenu'> 
							<li class="">
								<a href="#" class="dropdown-toggle" >
									<i class="menu-icon fa fa-list-alt"></i>
									<span class="menu-text">PLN</span>
									<b class="arrow fa fa-angle-down"></b>
								</a>
						
															
																		<ul class="submenu">
																		
																		<li class="">
																			<a href="#" class="dropdown-toggle">
																				<span class="menu-text">  <?php echo '-'; ?> </span>
																							</a>
																		</li>
																						
																						</ul>
																					
						</li>
					</ul><!-- PLN selesai-->
					
						
						
						
						<?php } else { ?>
					<!-- PLN Mulai-->
					<b class="arrow"></b>
					<ul class='submenu'> 
							<li class="">
								<a href="#" class="dropdown-toggle" >
									<i class="menu-icon fa fa-list-alt"></i>
									<span class="menu-text">PLN</span>
									<b class="arrow fa fa-angle-down"></b>
								</a>
						
															
																		<ul class="submenu">
																		<?php foreach ($menu8_pln->result_array() as $data) { ?>
																		<li class="">
																			<a href="#" class="dropdown-toggle">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  <?php echo $data['nama_project']; ?> </span>
																			<b class="arrow fa fa-angle-down"></b>
																							</a>

																			<b class="arrow"></b>
																			
																		<ul class="submenu">
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/general_information_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  General Information </span>
																			</a>
																			<b class="arrow"></b>
																			</li>
																			
																			<li class="">
																			<a href="<?php echo site_url('pmis/milstone_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  Milestone </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																			<li class="" >
																				<a href="#" class="dropdown-toggle">
																					<i class="menu-icon fa fa-list-alt"></i>
																					<span class="menu-text"> Contract</span>
																					<b class="arrow fa fa-angle-down"></b>
																				</a>

																				<b class="arrow"></b>
																					<ul class="submenu">
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_utama_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Main Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_supervisi_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Supervision Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_engineering_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Engineering Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_lokal_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Local Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																					</ul>
																			</li>
																			
																			<li class="">
																			<a href="#" class="dropdown-toggle">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Gallery </span>
																				<b class="arrow fa fa-angle-down"></b>
																				</a>

																			
																				<b class="arrow"></b>
																					<ul class="submenu">
																						<li class="">
																						<a href="<?php echo site_url('pmis/progress_gallery_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Progress Gallery</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/gallery_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Others Gallery</span>
																						</a>
																						<b class="arrow"></b>
																						</li>
																					
																					</ul>
																			</li>
																		
																		
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/progress_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Progress </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/issue_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Issue </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																			
																			<li class="">
																			<a href="<?php echo site_url('pmis/daily_activity_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Daily Activity </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																		
																		
																			
																		
																		
																			</ul>
																		</li>
																						<?php 	} ?>
																						</ul>
																					
						</li>
					</ul><!-- PLN selesai-->
					<?php } ?>
					
					
						
						<?PHP 
						if(empty($menu8_ipp->result_array())){ ?>
						<!-- IPP Mulai-->
					<b class="arrow"></b>
					<ul class='submenu'> 
							<li class="">
								<a href="#" class="dropdown-toggle" >
									<i class="menu-icon fa fa-list-alt"></i>
									<span class="menu-text">IPP</span>
									<b class="arrow fa fa-angle-down"></b>
								</a>
						
															
																		<ul class="submenu">
																		
																		<li class="">
																			<a href="#" class="dropdown-toggle">
																				<span class="menu-text">  <?php echo '-'; ?> </span>
																							</a>
																		</li>
																						
																						</ul>
																					
						</li>
					</ul><!-- IPP selesai-->
						
						
						
						<?php } else { ?>
					<!-- IPP Mulai-->
					<b class="arrow"></b>
					<ul class='submenu'> 
							<li class="">
								<a href="#" class="dropdown-toggle" >
									<i class="menu-icon fa fa-list-alt"></i>
									<span class="menu-text">IPP</span>
									<b class="arrow fa fa-angle-down"></b>
								</a>
						
															
																		<ul class="submenu">
																		<?php foreach ($menu8_ipp->result_array() as $data) { ?>
																		<li class="">
																			<a href="#" class="dropdown-toggle">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  <?php echo $data['nama_project']; ?> </span>
																			<b class="arrow fa fa-angle-down"></b>
																							</a>

																			<b class="arrow"></b>
																			
																		<ul class="submenu">
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/general_information_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  General Information </span>
																			</a>
																			<b class="arrow"></b>
																			</li>
																			
																			<li class="">
																			<a href="<?php echo site_url('pmis/milstone_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  Milestone </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																			<li class="" >
																				<a href="#" class="dropdown-toggle">
																					<i class="menu-icon fa fa-list-alt"></i>
																					<span class="menu-text"> Contract</span>
																					<b class="arrow fa fa-angle-down"></b>
																				</a>

																				<b class="arrow"></b>
																					<ul class="submenu">
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_utama_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Main Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_supervisi_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Supervision Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_engineering_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Engineering Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_lokal_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Local Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																					</ul>
																			</li>
																			
																			<li class="">
																			<a href="#" class="dropdown-toggle">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Gallery </span>
																				<b class="arrow fa fa-angle-down"></b>
																				</a>

																			
																				<b class="arrow"></b>
																					<ul class="submenu">
																						<li class="">
																						<a href="<?php echo site_url('pmis/progress_gallery_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Progress Gallery</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/gallery_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Others Gallery</span>
																						</a>
																						<b class="arrow"></b>
																						</li>
																					
																					</ul>
																			</li>
																		
																		
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/progress_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Progress </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/issue_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Issue </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																			
																			<li class="">
																			<a href="<?php echo site_url('pmis/daily_activity_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Daily Activity </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																		
																		
																			
																		
																		
																			</ul>
																		</li>
																						<?php 	} ?>
																						</ul>
																					
						</li>
					</ul><!-- IPP selesai-->
					<?php } ?>
					
					
						
						<?PHP 
						if(empty($menu8_unallocated->result_array())){ ?>
						<!-- unallocated Mulai-->
					<b class="arrow"></b>
					<ul class='submenu'> 
							<li class="">
								<a href="#" class="dropdown-toggle" >
									<i class="menu-icon fa fa-list-alt"></i>
									<span class="menu-text">UNALLOCATED</span>
									<b class="arrow fa fa-angle-down"></b>
								</a>
						
															
																		<ul class="submenu">
																		
																		<li class="">
																			<a href="#" class="dropdown-toggle">
																				<span class="menu-text">  <?php echo '-'; ?> </span>
																							</a>
																		</li>
																						
																						</ul>
																					
						</li>
					</ul><!-- unallocated selesai-->
						
						
						
						<?php } else { ?>
					<!-- unallocated Mulai-->
					<b class="arrow"></b>
					<ul class='submenu'> 
							<li class="">
								<a href="#" class="dropdown-toggle" >
									<i class="menu-icon fa fa-list-alt"></i>
									<span class="menu-text">UNALLOCATED</span>
									<b class="arrow fa fa-angle-down"></b>
								</a>
						
															
																		<ul class="submenu">
																		<?php foreach ($menu8_unallocated->result_array() as $data) { ?>
																		<li class="">
																			<a href="#" class="dropdown-toggle">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  <?php echo $data['nama_project']; ?> </span>
																			<b class="arrow fa fa-angle-down"></b>
																							</a>

																			<b class="arrow"></b>
																			
																		<ul class="submenu">
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/general_information_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  General Information </span>
																			</a>
																			<b class="arrow"></b>
																			</li>
																			
																			<li class="">
																			<a href="<?php echo site_url('pmis/milstone_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">  Milestone </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																			<li class="" >
																				<a href="#" class="dropdown-toggle">
																					<i class="menu-icon fa fa-list-alt"></i>
																					<span class="menu-text"> Contract</span>
																					<b class="arrow fa fa-angle-down"></b>
																				</a>

																				<b class="arrow"></b>
																					<ul class="submenu">
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_utama_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Main Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_supervisi_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Supervision Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_engineering_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Engineering Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/kontrak_lokal_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Local Contract</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																					</ul>
																			</li>
																			
																			<li class="">
																			<a href="#" class="dropdown-toggle">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Gallery </span>
																				<b class="arrow fa fa-angle-down"></b>
																				</a>

																			
																				<b class="arrow"></b>
																					<ul class="submenu">
																						<li class="">
																						<a href="<?php echo site_url('pmis/progress_gallery_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Progress Gallery</span>
																						</a>

																						<b class="arrow"></b>
																						</li>
																						<li class="">
																						<a href="<?php echo site_url('pmis/gallery_view?id_project='.$data['id_project']); ?>">
																							<i class="menu-icon fa fa-list-alt"></i>
																							<span class="menu-text">Others Gallery</span>
																						</a>
																						<b class="arrow"></b>
																						</li>
																					
																					</ul>
																			</li>
																		
																		
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/progress_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Progress </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																		
																			<li class="">
																			<a href="<?php echo site_url('pmis/issue_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Issue </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																			
																			<li class="">
																			<a href="<?php echo site_url('pmis/daily_activity_view?id_project='.$data['id_project']); ?>">
																				<i class="menu-icon fa fa-list-alt"></i>
																				<span class="menu-text">Daily Activity </span>
																			</a>

																			<b class="arrow"></b>
																			</li>
																		
																		
																			
																		
																		
																			</ul>
																		</li>
																						<?php 	} ?>
																						</ul>
																					
						</li>
					</ul><!-- unallocated selesai-->
					<?php } ?>
					
					
				</li>
					<!-- MENU 8 selesai-->
					
						
					<?php } ?>
					

					


					
				</ul><!-- /.nav-list -->

				<!-- #section:basics/sidebar.layout.minimize -->
				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>

				<!-- /section:basics/sidebar.layout.minimize -->
				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
				</script>
			</div>