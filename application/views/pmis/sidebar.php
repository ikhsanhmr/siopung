
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
					<!-- #section:basics/navbar.layout.brand -->
					<a href="#" class="navbar-brand">
						<small>
							<i class="fa fa-bolt"></i>
							Sistem Informasi mOnitoring Proyek UNGgul (SI OPUNG) KITSUM
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
								<img class="nav-user-photo" src="<?php echo base_url(); ?>public/assets/avatars/user.jpg" alt="Admin" />
								<span class="user-info">
									<small>Welcome,</small>
									Admin
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
									<a href="<?php echo site_url('admin/logout'); ?>">
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
			</div><!-- /.navbar-container -->
		</div>

		<!-- /section:basics/navbar.layout -->
		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			
<!-- #section:basics/sidebar -->
			<div id="sidebar" class="sidebar                  responsive">
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
					<li class="active">
					<?php if($this->session->userdata('status') == 1){ ?>
						<a href="<?php echo site_url('admin/index'); ?>">
					<?php } else { ?>
					<a href="<?php echo site_url('pmis/index'); ?>">
					<?php }  ?>
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>

						<b class="arrow"></b>
					</li>

						<?php if($this->session->userdata('status') == 1){ ?>
					<!--
					<li class="">
						<a href="<?php //echo site_url('admin/permintaan_ruangan'); ?>">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> Permintaan Ruangan </span>
						</a>

						<b class="arrow"></b>
					</li>
					
					

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-inbox"></i>
							<span class="menu-text"> Master Data </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="<?php //echo site_url('admin/ruangan_view'); ?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Ruangan Rapat
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="<?php //echo site_url('admin/dokumen_view'); ?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Document Location
								</a>

								<b class="arrow"></b>
							</li>

							
						</ul>
					</li>
					
					-->

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-book"></i>
							<span class="menu-text"> Data Perizinan </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="<?php echo site_url('admin/perizinan_view'); ?>">
									<i class="menu-icon fa fa-caret-right"></i> Master Data
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="<?php echo site_url('admin/monitoring_perizinan'); ?>">
									<i class="menu-icon fa fa-caret-right"></i>Monitoring Perizinan 
								</a>
								<b class="arrow"></b>
							</li>

							
						</ul>
					</li>
					
					<?php } ?>
					
					
					<!-- LOGIN pmis -->
					<?php if($this->session->userdata('status') == 2){ ?>
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-inbox"></i>
							<span class="menu-text"> Master Data Project </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
					<li class="">
						<a href="<?php echo site_url('pmis/project_view'); ?>">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text">  List Project </span>
						</a>

						<b class="arrow"></b>
					</li>
					
					<li class="">
						<a href="<?php echo site_url('pmis/user_view'); ?>">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text">  List User </span>
						</a>

						<b class="arrow"></b>
					</li>
					
						
						</ul>
					</li>
					
					<!-- MENU 1-->
					<li class="">
						<a href="#" class="dropdown-toggle" >
							<i class="menu-icon fa fa-bolt"></i>
							<span class="menu-text">  UPP 1</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>
			<?php foreach ($menu1->result_array() as $data) { ?>
						<ul class="submenu">
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
									<span class="menu-text">  Kontrak </span>
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>
									<ul class="submenu">
										<li class="">
										<a href="<?php echo site_url('pmis/kontrak_utama_view?id_project='.$data['id_project']); ?>">
											<i class="menu-icon fa fa-list-alt"></i>
											<span class="menu-text">Kontrak Utama</span>
										</a>

										<b class="arrow"></b>
										</li>
										<li class="">
										<a href="<?php echo site_url('pmis/kontrak_supervisi_view?id_project='.$data['id_project']); ?>">
											<i class="menu-icon fa fa-list-alt"></i>
											<span class="menu-text">Kontrak Supervisi</span>
										</a>

										<b class="arrow"></b>
										</li>
										<li class="">
										<a href="<?php echo site_url('pmis/kontrak_engineering_view?id_project='.$data['id_project']); ?>">
											<i class="menu-icon fa fa-list-alt"></i>
											<span class="menu-text">Kontrak Engineering</span>
										</a>

										<b class="arrow"></b>
										</li>
										<li class="">
										<a href="<?php echo site_url('pmis/kontrak_lokal_view?id_project='.$data['id_project']); ?>">
											<i class="menu-icon fa fa-list-alt"></i>
											<span class="menu-text">Kontrak Lokal</span>
										</a>

										<b class="arrow"></b>
										</li>
									</ul>
							</li>
							<li class="">
							<a href="<?php echo site_url('pmis/gallery_view?id_project='.$data['id_project']); ?>">
								<i class="menu-icon fa fa-list-alt"></i>
								<span class="menu-text">Galeri </span>
							</a>

							<b class="arrow"></b>
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
				
						
					
						
						</ul><?php 	} ?>
					</li>
					<!-- MENU selesai-->
					
					<!-- MENU -->
					<li class="">
						<a href="#" class="dropdown-toggle" >
							<i class="menu-icon fa fa-bolt"></i>
							<span class="menu-text">  UPP 2</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>
			<?php foreach ($menu2->result_array() as $data) { ?>
						<ul class="submenu">
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
									<span class="menu-text">  Kontrak </span>
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>
									<ul class="submenu">
										<li class="">
										<a href="<?php echo site_url('pmis/kontrak_utama_view?id_project='.$data['id_project']); ?>">
											<i class="menu-icon fa fa-list-alt"></i>
											<span class="menu-text">Kontrak Utama</span>
										</a>

										<b class="arrow"></b>
										</li>
										<li class="">
										<a href="<?php echo site_url('pmis/kontrak_supervisi_view?id_project='.$data['id_project']); ?>">
											<i class="menu-icon fa fa-list-alt"></i>
											<span class="menu-text">Kontrak Supervisi</span>
										</a>

										<b class="arrow"></b>
										</li>
										<li class="">
										<a href="<?php echo site_url('pmis/kontrak_engineering_view?id_project='.$data['id_project']); ?>">
											<i class="menu-icon fa fa-list-alt"></i>
											<span class="menu-text">Kontrak Engineering</span>
										</a>

										<b class="arrow"></b>
										</li>
										<li class="">
										<a href="<?php echo site_url('pmis/kontrak_lokal_view?id_project='.$data['id_project']); ?>">
											<i class="menu-icon fa fa-list-alt"></i>
											<span class="menu-text">Kontrak Lokal</span>
										</a>

										<b class="arrow"></b>
										</li>
									</ul>
							</li>
							<li class="">
							<a href="<?php echo site_url('pmis/gallery_view?id_project='.$data['id_project']); ?>">
								<i class="menu-icon fa fa-list-alt"></i>
								<span class="menu-text">Galeri </span>
							</a>

							<b class="arrow"></b>
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
				
						
					
						
						</ul><?php 	} ?>
					</li>
					<!-- MENU selesai-->
					
					<!-- MENU -->
					<li class="">
						<a href="#" class="dropdown-toggle" >
							<i class="menu-icon fa fa-bolt"></i>
							<span class="menu-text">  UPP 3</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>
			<?php foreach ($menu3->result_array() as $data) { ?>
						<ul class="submenu">
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
									<span class="menu-text">  Kontrak </span>
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>
									<ul class="submenu">
										<li class="">
										<a href="<?php echo site_url('pmis/kontrak_utama_view?id_project='.$data['id_project']); ?>">
											<i class="menu-icon fa fa-list-alt"></i>
											<span class="menu-text">Kontrak Utama</span>
										</a>

										<b class="arrow"></b>
										</li>
										<li class="">
										<a href="<?php echo site_url('pmis/kontrak_supervisi_view?id_project='.$data['id_project']); ?>">
											<i class="menu-icon fa fa-list-alt"></i>
											<span class="menu-text">Kontrak Supervisi</span>
										</a>

										<b class="arrow"></b>
										</li>
										<li class="">
										<a href="<?php echo site_url('pmis/kontrak_engineering_view?id_project='.$data['id_project']); ?>">
											<i class="menu-icon fa fa-list-alt"></i>
											<span class="menu-text">Kontrak Engineering</span>
										</a>

										<b class="arrow"></b>
										</li>
										<li class="">
										<a href="<?php echo site_url('pmis/kontrak_lokal_view?id_project='.$data['id_project']); ?>">
											<i class="menu-icon fa fa-list-alt"></i>
											<span class="menu-text">Kontrak Lokal</span>
										</a>

										<b class="arrow"></b>
										</li>
									</ul>
							</li>
							<li class="">
							<a href="<?php echo site_url('pmis/gallery_view?id_project='.$data['id_project']); ?>">
								<i class="menu-icon fa fa-list-alt"></i>
								<span class="menu-text">Galeri </span>
							</a>

							<b class="arrow"></b>
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
				
						
					
						
						</ul><?php 	} ?>
					</li>
					<!-- MENU selesai-->
					
					<!-- MENU -->
					<li class="">
						<a href="#" class="dropdown-toggle" >
							<i class="menu-icon fa fa-bolt"></i>
							<span class="menu-text">  UPP 4</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>
			<?php foreach ($menu4->result_array() as $data) { ?>
						<ul class="submenu">
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
									<span class="menu-text">  Kontrak </span>
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>
									<ul class="submenu">
										<li class="">
										<a href="<?php echo site_url('pmis/kontrak_utama_view?id_project='.$data['id_project']); ?>">
											<i class="menu-icon fa fa-list-alt"></i>
											<span class="menu-text">Kontrak Utama</span>
										</a>

										<b class="arrow"></b>
										</li>
										<li class="">
										<a href="<?php echo site_url('pmis/kontrak_supervisi_view?id_project='.$data['id_project']); ?>">
											<i class="menu-icon fa fa-list-alt"></i>
											<span class="menu-text">Kontrak Supervisi</span>
										</a>

										<b class="arrow"></b>
										</li>
										<li class="">
										<a href="<?php echo site_url('pmis/kontrak_engineering_view?id_project='.$data['id_project']); ?>">
											<i class="menu-icon fa fa-list-alt"></i>
											<span class="menu-text">Kontrak Engineering</span>
										</a>

										<b class="arrow"></b>
										</li>
										<li class="">
										<a href="<?php echo site_url('pmis/kontrak_lokal_view?id_project='.$data['id_project']); ?>">
											<i class="menu-icon fa fa-list-alt"></i>
											<span class="menu-text">Kontrak Lokal</span>
										</a>

										<b class="arrow"></b>
										</li>
									</ul>
							</li>
							<li class="">
							<a href="<?php echo site_url('pmis/gallery_view?id_project='.$data['id_project']); ?>">
								<i class="menu-icon fa fa-list-alt"></i>
								<span class="menu-text">Galeri </span>
							</a>

							<b class="arrow"></b>
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
				
						
					
						
						</ul><?php 	} ?>
					</li>
					<!-- MENU selesai-->
					
					<!-- MENU -->
					<li class="">
						<a href="#" class="dropdown-toggle" >
							<i class="menu-icon fa fa-bolt"></i>
							<span class="menu-text">  UPP 5</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>
			<?php foreach ($menu5->result_array() as $data) { ?>
						<ul class="submenu">
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
									<span class="menu-text">  Kontrak </span>
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>
									<ul class="submenu">
										<li class="">
										<a href="<?php echo site_url('pmis/kontrak_utama_view?id_project='.$data['id_project']); ?>">
											<i class="menu-icon fa fa-list-alt"></i>
											<span class="menu-text">Kontrak Utama</span>
										</a>

										<b class="arrow"></b>
										</li>
										<li class="">
										<a href="<?php echo site_url('pmis/kontrak_supervisi_view?id_project='.$data['id_project']); ?>">
											<i class="menu-icon fa fa-list-alt"></i>
											<span class="menu-text">Kontrak Supervisi</span>
										</a>

										<b class="arrow"></b>
										</li>
										<li class="">
										<a href="<?php echo site_url('pmis/kontrak_engineering_view?id_project='.$data['id_project']); ?>">
											<i class="menu-icon fa fa-list-alt"></i>
											<span class="menu-text">Kontrak Engineering</span>
										</a>

										<b class="arrow"></b>
										</li>
										<li class="">
										<a href="<?php echo site_url('pmis/kontrak_lokal_view?id_project='.$data['id_project']); ?>">
											<i class="menu-icon fa fa-list-alt"></i>
											<span class="menu-text">Kontrak Lokal</span>
										</a>

										<b class="arrow"></b>
										</li>
									</ul>
							</li>
							<li class="">
							<a href="<?php echo site_url('pmis/gallery_view?id_project='.$data['id_project']); ?>">
								<i class="menu-icon fa fa-list-alt"></i>
								<span class="menu-text">Galeri </span>
							</a>

							<b class="arrow"></b>
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
				
						
					
						
						</ul><?php 	} ?>
					</li>
					<!-- MENU selesai-->
					
					<!-- MENU -->
					<li class="">
						<a href="#" class="dropdown-toggle" >
							<i class="menu-icon fa fa-bolt"></i>
							<span class="menu-text">  UPP 6</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>
			<?php foreach ($menu6->result_array() as $data) { ?>
						<ul class="submenu">
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
									<span class="menu-text">  Kontrak </span>
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>
									<ul class="submenu">
										<li class="">
										<a href="<?php echo site_url('pmis/kontrak_utama_view?id_project='.$data['id_project']); ?>">
											<i class="menu-icon fa fa-list-alt"></i>
											<span class="menu-text">Kontrak Utama</span>
										</a>

										<b class="arrow"></b>
										</li>
										<li class="">
										<a href="<?php echo site_url('pmis/kontrak_supervisi_view?id_project='.$data['id_project']); ?>">
											<i class="menu-icon fa fa-list-alt"></i>
											<span class="menu-text">Kontrak Supervisi</span>
										</a>

										<b class="arrow"></b>
										</li>
										<li class="">
										<a href="<?php echo site_url('pmis/kontrak_engineering_view?id_project='.$data['id_project']); ?>">
											<i class="menu-icon fa fa-list-alt"></i>
											<span class="menu-text">Kontrak Engineering</span>
										</a>

										<b class="arrow"></b>
										</li>
										<li class="">
										<a href="<?php echo site_url('pmis/kontrak_lokal_view?id_project='.$data['id_project']); ?>">
											<i class="menu-icon fa fa-list-alt"></i>
											<span class="menu-text">Kontrak Lokal</span>
										</a>

										<b class="arrow"></b>
										</li>
									</ul>
							</li>
							<li class="">
							<a href="<?php echo site_url('pmis/gallery_view?id_project='.$data['id_project']); ?>">
								<i class="menu-icon fa fa-list-alt"></i>
								<span class="menu-text">Galeri </span>
							</a>

							<b class="arrow"></b>
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
				
						
					
						
						</ul><?php 	} ?>
					</li>
					<!-- MENU selesai-->
					
					<!-- MENU -->
					<li class="">
						<a href="#" class="dropdown-toggle" >
							<i class="menu-icon fa fa-bolt"></i>
							<span class="menu-text">  UPP 7</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>
			<?php foreach ($menu7->result_array() as $data) { ?>
						<ul class="submenu">
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
									<span class="menu-text">  Kontrak </span>
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>
									<ul class="submenu">
										<li class="">
										<a href="<?php echo site_url('pmis/kontrak_utama_view?id_project='.$data['id_project']); ?>">
											<i class="menu-icon fa fa-list-alt"></i>
											<span class="menu-text">Kontrak Utama</span>
										</a>

										<b class="arrow"></b>
										</li>
										<li class="">
										<a href="<?php echo site_url('pmis/kontrak_supervisi_view?id_project='.$data['id_project']); ?>">
											<i class="menu-icon fa fa-list-alt"></i>
											<span class="menu-text">Kontrak Supervisi</span>
										</a>

										<b class="arrow"></b>
										</li>
										<li class="">
										<a href="<?php echo site_url('pmis/kontrak_engineering_view?id_project='.$data['id_project']); ?>">
											<i class="menu-icon fa fa-list-alt"></i>
											<span class="menu-text">Kontrak Engineering</span>
										</a>

										<b class="arrow"></b>
										</li>
										<li class="">
										<a href="<?php echo site_url('pmis/kontrak_lokal_view?id_project='.$data['id_project']); ?>">
											<i class="menu-icon fa fa-list-alt"></i>
											<span class="menu-text">Kontrak Lokal</span>
										</a>

										<b class="arrow"></b>
										</li>
									</ul>
							</li>
							<li class="">
							<a href="<?php echo site_url('pmis/gallery_view?id_project='.$data['id_project']); ?>">
								<i class="menu-icon fa fa-list-alt"></i>
								<span class="menu-text">Galeri </span>
							</a>

							<b class="arrow"></b>
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
				
						
					
						
						</ul><?php 	} ?>
					</li>
					<!-- MENU selesai-->
					
					<!-- MENU -->
					<li class="">
						<a href="#" class="dropdown-toggle" >
							<i class="menu-icon fa fa-bolt"></i>
							<span class="menu-text">  UPP 8</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>
			<?php foreach ($menu8->result_array() as $data) { ?>
						<ul class="submenu">
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
									<span class="menu-text">  Kontrak </span>
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>
									<ul class="submenu">
										<li class="">
										<a href="<?php echo site_url('pmis/kontrak_utama_view?id_project='.$data['id_project']); ?>">
											<i class="menu-icon fa fa-list-alt"></i>
											<span class="menu-text">Kontrak Utama</span>
										</a>

										<b class="arrow"></b>
										</li>
										<li class="">
										<a href="<?php echo site_url('pmis/kontrak_supervisi_view?id_project='.$data['id_project']); ?>">
											<i class="menu-icon fa fa-list-alt"></i>
											<span class="menu-text">Kontrak Supervisi</span>
										</a>

										<b class="arrow"></b>
										</li>
										<li class="">
										<a href="<?php echo site_url('pmis/kontrak_engineering_view?id_project='.$data['id_project']); ?>">
											<i class="menu-icon fa fa-list-alt"></i>
											<span class="menu-text">Kontrak Engineering</span>
										</a>

										<b class="arrow"></b>
										</li>
										<li class="">
										<a href="<?php echo site_url('pmis/kontrak_lokal_view?id_project='.$data['id_project']); ?>">
											<i class="menu-icon fa fa-list-alt"></i>
											<span class="menu-text">Kontrak Lokal</span>
										</a>

										<b class="arrow"></b>
										</li>
									</ul>
							</li>
							<li class="">
							<a href="<?php echo site_url('pmis/gallery_view?id_project='.$data['id_project']); ?>">
								<i class="menu-icon fa fa-list-alt"></i>
								<span class="menu-text">Galeri </span>
							</a>

							<b class="arrow"></b>
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
				
						
					
						
						</ul><?php 	} ?>
					</li>
					<!-- MENU selesai-->
					
					
					
					
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