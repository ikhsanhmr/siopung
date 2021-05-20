<body class="no-skin">
	<!-- #section:basics/navbar.layout -->
	<div id="navbar" class="navbar navbar-default">
		<script type="text/javascript">
			try {
				ace.settings.check('navbar', 'fixed')
			} catch (e) {}
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
					<li class="transparent">
						<a href="<?php echo site_url('pmis/index'); ?>">
							<i class="ace-icon fa fa-tachometer"></i>
							Dashboard
						</a>
					</li>

					<li class="transparent">
						<a data-toggle="dropdown" class="dropdown-toggle" href="#">
							<i class="ace-icon fa fa-list-alt"></i>
							Master Data Project
							<i class="ace-icon fa fa-angle-down bigger-110"></i>
						</a>

						<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">

							<li class="dropdown-content">
								<ul class="dropdown-menu dropdown-navbar navbar-pink">
									<li>
										<a href="<?php echo site_url('pmis/project_view'); ?>">
											<div class="clearfix">
												<span class="pull-left">
													<i class="btn btn-xs no-hover fa fa-list-alt"></i>
													Project List
												</span>

											</div>
										</a>
									</li>

									<li>
										<a href="<?php echo site_url('pmis/user_view'); ?>">
											<div class="clearfix">
												<span class="pull-left">
													<i class="btn btn-xs no-hover fa fa-list-alt"></i>
													User List
												</span>

											</div>
										</a>
									</li>

									<li>
										<a href="<?php echo site_url('pmis/last_login_view'); ?>">
											<div class="clearfix">
												<span class="pull-left">
													<i class="btn btn-xs no-hover fa fa-list-alt"></i>
													Last Login List
												</span>

											</div>
										</a>
									</li>

									<li>
										<a href="<?php echo site_url('pmis/activity_log_view'); ?>">
											<div class="clearfix">
												<span class="pull-left">
													<i class="btn btn-xs no-hover fa fa-list-alt"></i>
													Activity Log
												</span>

											</div>
										</a>
									</li>


								</ul>
							</li>


						</ul>
					</li>


					<!-- #section:basics/navbar.user_menu -->
					<li class="light-blue">
						<a data-toggle="dropdown" href="#" class="dropdown-toggle">
							<img class="nav-user-photo" src="<?php echo base_url(); ?>public/assets/avatars/<?php echo $username . '.jpg'; ?>" alt="Admin" />
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



			<!-- /section:basics/navbar.dropdown -->
		</div><!-- /.navbar-container -->
	</div>

	<!-- /section:basics/navbar.layout -->
	<div class="main-container" id="main-container">
		<script type="text/javascript">
			try {
				ace.settings.check('main-container', 'fixed')
			} catch (e) {}
		</script>


		<!-- #section:basics/sidebar -->
		<div id="sidebar" class="sidebar                  responsive">
			<script type="text/javascript">
				try {
					ace.settings.check('sidebar', 'fixed')
				} catch (e) {}
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

			<?php //print_r($this->session->userdata);exit;
			?>
			<ul class="nav nav-list">
				<!--
					<li class="active">
					
					<a href="<?php //echo site_url('pmis/index'); 
										?>">
					
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>

						<b class="arrow"></b>
					</li>
					-->

				<!-- LOGIN pmis -->
				<?php if ($this->session->userdata('status') == 2 || $this->session->userdata('status') == 4) { ?>
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
						<a href="<?php //echo site_url('pmis/project_view'); 
											?>">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text">  Project List </span>
						</a>

						<b class="arrow"></b>
					</li>
					
					<li class="">
						<a href="<?php //echo site_url('pmis/user_view'); 
											?>">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text">  User List </span>
						</a>

						<b class="arrow"></b>
					</li>
					
					<li class="">
						<a href="<?php //echo site_url('pmis/last_login_view'); 
											?>">
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
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-bolt"></i>
							<span class="menu-text"> UPP 1</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>



						<?php
						$menu1_pln_ = $menu1_pln->result_array();
						if (empty($menu1_pln_)) { ?>
							<!-- PLN Mulai-->
							<b class="arrow"></b>
							<ul class='submenu'>
								<li class="">
									<a href="#" class="dropdown-toggle">
										<i class="menu-icon fa fa-list-alt"></i>
										<span class="menu-text">PLN</span>
										<b class="arrow fa fa-angle-down"></b>
									</a>


									<ul class="submenu">

										<li class="">
											<a href="#" class="dropdown-toggle">
												<span class="menu-text"> <?php echo '-'; ?> </span>
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
									<a href="#" class="dropdown-toggle">
										<i class="menu-icon fa fa-list-alt"></i>
										<span class="menu-text">PLN</span>
										<b class="arrow fa fa-angle-down"></b>
									</a>


									<ul class="submenu">
										<?php foreach ($menu1_pln->result_array() as $data) { ?>
											<li class="">
												<a href="#" class="dropdown-toggle">
													<i class="menu-icon fa fa-list-alt"></i>
													<span class="menu-text"> <?php echo $data['nama_project']; ?> </span>
													<b class="arrow fa fa-angle-down"></b>
												</a>

												<b class="arrow"></b>

												<ul class="submenu">

													<li class="">
														<a href="<?php echo site_url('pmis/general_information_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> General Information </span>
														</a>
														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/milstone_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> Milestone </span>
														</a>

														<b class="arrow"></b>
													</li>
													<li class="">
														<a href="#" class="dropdown-toggle">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> Contract</span>
															<b class="arrow fa fa-angle-down"></b>
														</a>

														<b class="arrow"></b>
														<ul class="submenu">
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_utama_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Main Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_supervisi_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Supervision Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_engineering_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Engineering Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_lokal_view?id_project=' . $data['id_project']); ?>">
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
																<a href="<?php echo site_url('pmis/progress_gallery_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Progress Gallery</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/gallery_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Others Gallery</span>
																</a>
																<b class="arrow"></b>
															</li>

														</ul>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/progress_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text">Progress </span>
														</a>

														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/issue_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text">Issue </span>
														</a>

														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/daily_activity_view?id_project=' . $data['id_project']); ?>">
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
						$menu1_ipp_ = $menu1_ipp->result_array();
						if (empty($menu1_ipp_)) { ?>
							<!-- IPP Mulai-->
							<b class="arrow"></b>
							<ul class='submenu'>
								<li class="">
									<a href="#" class="dropdown-toggle">
										<i class="menu-icon fa fa-list-alt"></i>
										<span class="menu-text">IPP</span>
										<b class="arrow fa fa-angle-down"></b>
									</a>


									<ul class="submenu">

										<li class="">
											<a href="#" class="dropdown-toggle">
												<span class="menu-text"> <?php echo '-'; ?> </span>
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
									<a href="#" class="dropdown-toggle">
										<i class="menu-icon fa fa-list-alt"></i>
										<span class="menu-text">IPP</span>
										<b class="arrow fa fa-angle-down"></b>
									</a>


									<ul class="submenu">
										<?php foreach ($menu1_ipp->result_array() as $data) { ?>
											<li class="">
												<a href="#" class="dropdown-toggle">
													<i class="menu-icon fa fa-list-alt"></i>
													<span class="menu-text"> <?php echo $data['nama_project']; ?> </span>
													<b class="arrow fa fa-angle-down"></b>
												</a>

												<b class="arrow"></b>

												<ul class="submenu">

													<li class="">
														<a href="<?php echo site_url('pmis/general_information_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> General Information </span>
														</a>
														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/milstone_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> Milestone </span>
														</a>

														<b class="arrow"></b>
													</li>
													<li class="">
														<a href="#" class="dropdown-toggle">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> Contract</span>
															<b class="arrow fa fa-angle-down"></b>
														</a>

														<b class="arrow"></b>
														<ul class="submenu">
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_utama_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Main Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_supervisi_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Supervision Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_engineering_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Engineering Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_lokal_view?id_project=' . $data['id_project']); ?>">
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
																<a href="<?php echo site_url('pmis/progress_gallery_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Progress Gallery</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/gallery_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Others Gallery</span>
																</a>
																<b class="arrow"></b>
															</li>

														</ul>
													</li>



													<li class="">
														<a href="<?php echo site_url('pmis/progress_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text">Progress </span>
														</a>

														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/issue_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text">Issue </span>
														</a>

														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/daily_activity_view?id_project=' . $data['id_project']); ?>">
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
						$menu1_unallocated_ = $menu1_unallocated->result_array();
						if (empty($menu1_unallocated_)) { ?>
							<!-- unallocated Mulai-->
							<b class="arrow"></b>
							<ul class='submenu'>
								<li class="">
									<a href="#" class="dropdown-toggle">
										<i class="menu-icon fa fa-list-alt"></i>
										<span class="menu-text">UNALLOCATED</span>
										<b class="arrow fa fa-angle-down"></b>
									</a>


									<ul class="submenu">

										<li class="">
											<a href="#" class="dropdown-toggle">
												<span class="menu-text"> <?php echo '-'; ?> </span>
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
									<a href="#" class="dropdown-toggle">
										<i class="menu-icon fa fa-list-alt"></i>
										<span class="menu-text">UNALLOCATED</span>
										<b class="arrow fa fa-angle-down"></b>
									</a>


									<ul class="submenu">
										<?php foreach ($menu1_unallocated->result_array() as $data) { ?>
											<li class="">
												<a href="#" class="dropdown-toggle">
													<i class="menu-icon fa fa-list-alt"></i>
													<span class="menu-text"> <?php echo $data['nama_project']; ?> </span>
													<b class="arrow fa fa-angle-down"></b>
												</a>

												<b class="arrow"></b>

												<ul class="submenu">

													<li class="">
														<a href="<?php echo site_url('pmis/general_information_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> General Information </span>
														</a>
														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/milstone_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> Milestone </span>
														</a>

														<b class="arrow"></b>
													</li>
													<li class="">
														<a href="#" class="dropdown-toggle">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> Contract</span>
															<b class="arrow fa fa-angle-down"></b>
														</a>

														<b class="arrow"></b>
														<ul class="submenu">
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_utama_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Main Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_supervisi_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Supervision Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_engineering_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Engineering Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_lokal_view?id_project=' . $data['id_project']); ?>">
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
																<a href="<?php echo site_url('pmis/progress_gallery_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Progress Gallery</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/gallery_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Others Gallery</span>
																</a>
																<b class="arrow"></b>
															</li>

														</ul>
													</li>



													<li class="">
														<a href="<?php echo site_url('pmis/progress_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text">Progress </span>
														</a>

														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/issue_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text">Issue </span>
														</a>

														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/daily_activity_view?id_project=' . $data['id_project']); ?>">
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
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-bolt"></i>
							<span class="menu-text"> UPP 2</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>



						<?php
						$menu2_pln_ = 	$menu2_pln->result_array();
						if (empty($menu2_pln_)) { ?>
							<!-- PLN Mulai-->
							<b class="arrow"></b>
							<ul class='submenu'>
								<li class="">
									<a href="#" class="dropdown-toggle">
										<i class="menu-icon fa fa-list-alt"></i>
										<span class="menu-text">PLN</span>
										<b class="arrow fa fa-angle-down"></b>
									</a>


									<ul class="submenu">

										<li class="">
											<a href="#" class="dropdown-toggle">
												<span class="menu-text"> <?php echo '-'; ?> </span>
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
									<a href="#" class="dropdown-toggle">
										<i class="menu-icon fa fa-list-alt"></i>
										<span class="menu-text">PLN</span>
										<b class="arrow fa fa-angle-down"></b>
									</a>


									<ul class="submenu">
										<?php foreach ($menu2_pln->result_array() as $data) { ?>
											<li class="">
												<a href="#" class="dropdown-toggle">
													<i class="menu-icon fa fa-list-alt"></i>
													<span class="menu-text"> <?php echo $data['nama_project']; ?> </span>
													<b class="arrow fa fa-angle-down"></b>
												</a>

												<b class="arrow"></b>

												<ul class="submenu">

													<li class="">
														<a href="<?php echo site_url('pmis/general_information_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> General Information </span>
														</a>
														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/milstone_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> Milestone </span>
														</a>

														<b class="arrow"></b>
													</li>
													<li class="">
														<a href="#" class="dropdown-toggle">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> Contract</span>
															<b class="arrow fa fa-angle-down"></b>
														</a>

														<b class="arrow"></b>
														<ul class="submenu">
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_utama_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Main Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_supervisi_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Supervision Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_engineering_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Engineering Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_lokal_view?id_project=' . $data['id_project']); ?>">
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
																<a href="<?php echo site_url('pmis/progress_gallery_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Progress Gallery</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/gallery_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Others Gallery</span>
																</a>
																<b class="arrow"></b>
															</li>

														</ul>
													</li>



													<li class="">
														<a href="<?php echo site_url('pmis/progress_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text">Progress </span>
														</a>

														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/issue_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text">Issue </span>
														</a>

														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/daily_activity_view?id_project=' . $data['id_project']); ?>">
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



						<?php
						$menu2_ipp_ = $menu2_ipp->result_array();
						if (empty($menu2_ipp_)) { ?>
							<!-- IPP Mulai-->
							<b class="arrow"></b>
							<ul class='submenu'>
								<li class="">
									<a href="#" class="dropdown-toggle">
										<i class="menu-icon fa fa-list-alt"></i>
										<span class="menu-text">IPP</span>
										<b class="arrow fa fa-angle-down"></b>
									</a>


									<ul class="submenu">

										<li class="">
											<a href="#" class="dropdown-toggle">
												<span class="menu-text"> <?php echo '-'; ?> </span>
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
									<a href="#" class="dropdown-toggle">
										<i class="menu-icon fa fa-list-alt"></i>
										<span class="menu-text">IPP</span>
										<b class="arrow fa fa-angle-down"></b>
									</a>


									<ul class="submenu">
										<?php foreach ($menu2_ipp->result_array() as $data) { ?>
											<li class="">
												<a href="#" class="dropdown-toggle">
													<i class="menu-icon fa fa-list-alt"></i>
													<span class="menu-text"> <?php echo $data['nama_project']; ?> </span>
													<b class="arrow fa fa-angle-down"></b>
												</a>

												<b class="arrow"></b>

												<ul class="submenu">

													<li class="">
														<a href="<?php echo site_url('pmis/general_information_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> General Information </span>
														</a>
														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/milstone_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> Milestone </span>
														</a>

														<b class="arrow"></b>
													</li>
													<li class="">
														<a href="#" class="dropdown-toggle">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> Contract</span>
															<b class="arrow fa fa-angle-down"></b>
														</a>

														<b class="arrow"></b>
														<ul class="submenu">
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_utama_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Main Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_supervisi_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Supervision Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_engineering_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Engineering Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_lokal_view?id_project=' . $data['id_project']); ?>">
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
																<a href="<?php echo site_url('pmis/progress_gallery_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Progress Gallery</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/gallery_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Others Gallery</span>
																</a>
																<b class="arrow"></b>
															</li>

														</ul>
													</li>



													<li class="">
														<a href="<?php echo site_url('pmis/progress_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text">Progress </span>
														</a>

														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/issue_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text">Issue </span>
														</a>

														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/daily_activity_view?id_project=' . $data['id_project']); ?>">
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



						<?php
						$menu2_unallocated_ = $menu2_unallocated->result_array();
						if (empty($menu2_unallocated_)) { ?>
							<!-- unallocated Mulai-->
							<b class="arrow"></b>
							<ul class='submenu'>
								<li class="">
									<a href="#" class="dropdown-toggle">
										<i class="menu-icon fa fa-list-alt"></i>
										<span class="menu-text">UNALLOCATED</span>
										<b class="arrow fa fa-angle-down"></b>
									</a>


									<ul class="submenu">

										<li class="">
											<a href="#" class="dropdown-toggle">
												<span class="menu-text"> <?php echo '-'; ?> </span>
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
									<a href="#" class="dropdown-toggle">
										<i class="menu-icon fa fa-list-alt"></i>
										<span class="menu-text">UNALLOCATED</span>
										<b class="arrow fa fa-angle-down"></b>
									</a>


									<ul class="submenu">
										<?php foreach ($menu2_unallocated->result_array() as $data) { ?>
											<li class="">
												<a href="#" class="dropdown-toggle">
													<i class="menu-icon fa fa-list-alt"></i>
													<span class="menu-text"> <?php echo $data['nama_project']; ?> </span>
													<b class="arrow fa fa-angle-down"></b>
												</a>

												<b class="arrow"></b>

												<ul class="submenu">

													<li class="">
														<a href="<?php echo site_url('pmis/general_information_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> General Information </span>
														</a>
														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/milstone_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> Milestone </span>
														</a>

														<b class="arrow"></b>
													</li>
													<li class="">
														<a href="#" class="dropdown-toggle">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> Contract</span>
															<b class="arrow fa fa-angle-down"></b>
														</a>

														<b class="arrow"></b>
														<ul class="submenu">
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_utama_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Main Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_supervisi_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Supervision Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_engineering_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Engineering Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_lokal_view?id_project=' . $data['id_project']); ?>">
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
																<a href="<?php echo site_url('pmis/progress_gallery_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Progress Gallery</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/gallery_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Others Gallery</span>
																</a>
																<b class="arrow"></b>
															</li>

														</ul>
													</li>



													<li class="">
														<a href="<?php echo site_url('pmis/progress_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text">Progress </span>
														</a>

														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/issue_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text">Issue </span>
														</a>

														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/daily_activity_view?id_project=' . $data['id_project']); ?>">
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
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-bolt"></i>
							<span class="menu-text"> UPP 3</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>



						<?php
						$menu3_pln_ = $menu3_pln->result_array();
						if (empty($menu3_pln_)) { ?>
							<!-- PLN Mulai-->
							<b class="arrow"></b>
							<ul class='submenu'>
								<li class="">
									<a href="#" class="dropdown-toggle">
										<i class="menu-icon fa fa-list-alt"></i>
										<span class="menu-text">PLN</span>
										<b class="arrow fa fa-angle-down"></b>
									</a>


									<ul class="submenu">

										<li class="">
											<a href="#" class="dropdown-toggle">
												<span class="menu-text"> <?php echo '-'; ?> </span>
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
									<a href="#" class="dropdown-toggle">
										<i class="menu-icon fa fa-list-alt"></i>
										<span class="menu-text">PLN</span>
										<b class="arrow fa fa-angle-down"></b>
									</a>


									<ul class="submenu">
										<?php foreach ($menu3_pln->result_array() as $data) { ?>
											<li class="">
												<a href="#" class="dropdown-toggle">
													<i class="menu-icon fa fa-list-alt"></i>
													<span class="menu-text"> <?php echo $data['nama_project']; ?> </span>
													<b class="arrow fa fa-angle-down"></b>
												</a>

												<b class="arrow"></b>

												<ul class="submenu">

													<li class="">
														<a href="<?php echo site_url('pmis/general_information_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> General Information </span>
														</a>
														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/milstone_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> Milestone </span>
														</a>

														<b class="arrow"></b>
													</li>
													<li class="">
														<a href="#" class="dropdown-toggle">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> Contract</span>
															<b class="arrow fa fa-angle-down"></b>
														</a>

														<b class="arrow"></b>
														<ul class="submenu">
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_utama_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Main Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_supervisi_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Supervision Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_engineering_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Engineering Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_lokal_view?id_project=' . $data['id_project']); ?>">
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
																<a href="<?php echo site_url('pmis/progress_gallery_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Progress Gallery</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/gallery_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Others Gallery</span>
																</a>
																<b class="arrow"></b>
															</li>

														</ul>
													</li>



													<li class="">
														<a href="<?php echo site_url('pmis/progress_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text">Progress </span>
														</a>

														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/issue_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text">Issue </span>
														</a>

														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/daily_activity_view?id_project=' . $data['id_project']); ?>">
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



						<?php
						$menu3_ipp_ = $menu3_ipp->result_array();
						if (empty($menu3_ipp_)) { ?>
							<!-- IPP Mulai-->
							<b class="arrow"></b>
							<ul class='submenu'>
								<li class="">
									<a href="#" class="dropdown-toggle">
										<i class="menu-icon fa fa-list-alt"></i>
										<span class="menu-text">IPP</span>
										<b class="arrow fa fa-angle-down"></b>
									</a>


									<ul class="submenu">

										<li class="">
											<a href="#" class="dropdown-toggle">
												<span class="menu-text"> <?php echo '-'; ?> </span>
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
									<a href="#" class="dropdown-toggle">
										<i class="menu-icon fa fa-list-alt"></i>
										<span class="menu-text">IPP</span>
										<b class="arrow fa fa-angle-down"></b>
									</a>


									<ul class="submenu">
										<?php foreach ($menu3_ipp->result_array() as $data) { ?>
											<li class="">
												<a href="#" class="dropdown-toggle">
													<i class="menu-icon fa fa-list-alt"></i>
													<span class="menu-text"> <?php echo $data['nama_project']; ?> </span>
													<b class="arrow fa fa-angle-down"></b>
												</a>

												<b class="arrow"></b>

												<ul class="submenu">

													<li class="">
														<a href="<?php echo site_url('pmis/general_information_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> General Information </span>
														</a>
														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/milstone_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> Milestone </span>
														</a>

														<b class="arrow"></b>
													</li>
													<li class="">
														<a href="#" class="dropdown-toggle">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> Contract</span>
															<b class="arrow fa fa-angle-down"></b>
														</a>

														<b class="arrow"></b>
														<ul class="submenu">
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_utama_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Main Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_supervisi_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Supervision Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_engineering_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Engineering Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_lokal_view?id_project=' . $data['id_project']); ?>">
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
																<a href="<?php echo site_url('pmis/progress_gallery_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Progress Gallery</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/gallery_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Others Gallery</span>
																</a>
																<b class="arrow"></b>
															</li>

														</ul>
													</li>



													<li class="">
														<a href="<?php echo site_url('pmis/progress_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text">Progress </span>
														</a>

														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/issue_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text">Issue </span>
														</a>

														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/daily_activity_view?id_project=' . $data['id_project']); ?>">
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



						<?php
						$menu3_unallocated_ = $menu3_unallocated->result_array();
						if (empty($menu3_unallocated_)) { ?>
							<!-- unallocated Mulai-->
							<b class="arrow"></b>
							<ul class='submenu'>
								<li class="">
									<a href="#" class="dropdown-toggle">
										<i class="menu-icon fa fa-list-alt"></i>
										<span class="menu-text">UNALLOCATED</span>
										<b class="arrow fa fa-angle-down"></b>
									</a>


									<ul class="submenu">

										<li class="">
											<a href="#" class="dropdown-toggle">
												<span class="menu-text"> <?php echo '-'; ?> </span>
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
									<a href="#" class="dropdown-toggle">
										<i class="menu-icon fa fa-list-alt"></i>
										<span class="menu-text">UNALLOCATED</span>
										<b class="arrow fa fa-angle-down"></b>
									</a>


									<ul class="submenu">
										<?php foreach ($menu3_unallocated->result_array() as $data) { ?>
											<li class="">
												<a href="#" class="dropdown-toggle">
													<i class="menu-icon fa fa-list-alt"></i>
													<span class="menu-text"> <?php echo $data['nama_project']; ?> </span>
													<b class="arrow fa fa-angle-down"></b>
												</a>

												<b class="arrow"></b>

												<ul class="submenu">

													<li class="">
														<a href="<?php echo site_url('pmis/general_information_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> General Information </span>
														</a>
														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/milstone_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> Milestone </span>
														</a>

														<b class="arrow"></b>
													</li>
													<li class="">
														<a href="#" class="dropdown-toggle">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> Contract</span>
															<b class="arrow fa fa-angle-down"></b>
														</a>

														<b class="arrow"></b>
														<ul class="submenu">
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_utama_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Main Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_supervisi_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Supervision Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_engineering_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Engineering Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_lokal_view?id_project=' . $data['id_project']); ?>">
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
																<a href="<?php echo site_url('pmis/progress_gallery_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Progress Gallery</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/gallery_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Others Gallery</span>
																</a>
																<b class="arrow"></b>
															</li>

														</ul>
													</li>



													<li class="">
														<a href="<?php echo site_url('pmis/progress_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text">Progress </span>
														</a>

														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/issue_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text">Issue </span>
														</a>

														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/daily_activity_view?id_project=' . $data['id_project']); ?>">
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
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-bolt"></i>
							<span class="menu-text"> UPP 4</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>



						<?php
						$menu4_pln_ = $menu4_pln->result_array();
						if (empty($menu4_pln_)) { ?>
							<!-- PLN Mulai-->
							<b class="arrow"></b>
							<ul class='submenu'>
								<li class="">
									<a href="#" class="dropdown-toggle">
										<i class="menu-icon fa fa-list-alt"></i>
										<span class="menu-text">PLN</span>
										<b class="arrow fa fa-angle-down"></b>
									</a>


									<ul class="submenu">

										<li class="">
											<a href="#" class="dropdown-toggle">
												<span class="menu-text"> <?php echo '-'; ?> </span>
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
									<a href="#" class="dropdown-toggle">
										<i class="menu-icon fa fa-list-alt"></i>
										<span class="menu-text">PLN</span>
										<b class="arrow fa fa-angle-down"></b>
									</a>


									<ul class="submenu">
										<?php foreach ($menu4_pln->result_array() as $data) { ?>
											<li class="">
												<a href="#" class="dropdown-toggle">
													<i class="menu-icon fa fa-list-alt"></i>
													<span class="menu-text"> <?php echo $data['nama_project']; ?> </span>
													<b class="arrow fa fa-angle-down"></b>
												</a>

												<b class="arrow"></b>

												<ul class="submenu">

													<li class="">
														<a href="<?php echo site_url('pmis/general_information_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> General Information </span>
														</a>
														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/milstone_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> Milestone </span>
														</a>

														<b class="arrow"></b>
													</li>
													<li class="">
														<a href="#" class="dropdown-toggle">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> Contract</span>
															<b class="arrow fa fa-angle-down"></b>
														</a>

														<b class="arrow"></b>
														<ul class="submenu">
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_utama_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Main Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_supervisi_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Supervision Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_engineering_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Engineering Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_lokal_view?id_project=' . $data['id_project']); ?>">
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
																<a href="<?php echo site_url('pmis/progress_gallery_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Progress Gallery</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/gallery_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Others Gallery</span>
																</a>
																<b class="arrow"></b>
															</li>

														</ul>
													</li>



													<li class="">
														<a href="<?php echo site_url('pmis/progress_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text">Progress </span>
														</a>

														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/issue_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text">Issue </span>
														</a>

														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/daily_activity_view?id_project=' . $data['id_project']); ?>">
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



						<?php
						$menu4_ipp_ = $menu4_ipp->result_array();
						if (empty($menu4_ipp_)) { ?>
							<!-- IPP Mulai-->
							<b class="arrow"></b>
							<ul class='submenu'>
								<li class="">
									<a href="#" class="dropdown-toggle">
										<i class="menu-icon fa fa-list-alt"></i>
										<span class="menu-text">IPP</span>
										<b class="arrow fa fa-angle-down"></b>
									</a>


									<ul class="submenu">

										<li class="">
											<a href="#" class="dropdown-toggle">
												<span class="menu-text"> <?php echo '-'; ?> </span>
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
									<a href="#" class="dropdown-toggle">
										<i class="menu-icon fa fa-list-alt"></i>
										<span class="menu-text">IPP</span>
										<b class="arrow fa fa-angle-down"></b>
									</a>


									<ul class="submenu">
										<?php foreach ($menu4_ipp->result_array() as $data) { ?>
											<li class="">
												<a href="#" class="dropdown-toggle">
													<i class="menu-icon fa fa-list-alt"></i>
													<span class="menu-text"> <?php echo $data['nama_project']; ?> </span>
													<b class="arrow fa fa-angle-down"></b>
												</a>

												<b class="arrow"></b>

												<ul class="submenu">

													<li class="">
														<a href="<?php echo site_url('pmis/general_information_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> General Information </span>
														</a>
														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/milstone_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> Milestone </span>
														</a>

														<b class="arrow"></b>
													</li>
													<li class="">
														<a href="#" class="dropdown-toggle">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> Contract</span>
															<b class="arrow fa fa-angle-down"></b>
														</a>

														<b class="arrow"></b>
														<ul class="submenu">
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_utama_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Main Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_supervisi_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Supervision Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_engineering_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Engineering Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_lokal_view?id_project=' . $data['id_project']); ?>">
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
																<a href="<?php echo site_url('pmis/progress_gallery_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Progress Gallery</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/gallery_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Others Gallery</span>
																</a>
																<b class="arrow"></b>
															</li>

														</ul>
													</li>



													<li class="">
														<a href="<?php echo site_url('pmis/progress_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text">Progress </span>
														</a>

														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/issue_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text">Issue </span>
														</a>

														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/daily_activity_view?id_project=' . $data['id_project']); ?>">
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
						$menu4_unallocated_ = $menu4_unallocated->result_array();
						if (empty($menu4_unallocated_)) { ?>
							<!-- unallocated Mulai-->
							<b class="arrow"></b>
							<ul class='submenu'>
								<li class="">
									<a href="#" class="dropdown-toggle">
										<i class="menu-icon fa fa-list-alt"></i>
										<span class="menu-text">UNALLOCATED</span>
										<b class="arrow fa fa-angle-down"></b>
									</a>


									<ul class="submenu">

										<li class="">
											<a href="#" class="dropdown-toggle">
												<span class="menu-text"> <?php echo '-'; ?> </span>
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
									<a href="#" class="dropdown-toggle">
										<i class="menu-icon fa fa-list-alt"></i>
										<span class="menu-text">UNALLOCATED</span>
										<b class="arrow fa fa-angle-down"></b>
									</a>


									<ul class="submenu">
										<?php foreach ($menu4_unallocated->result_array() as $data) { ?>
											<li class="">
												<a href="#" class="dropdown-toggle">
													<i class="menu-icon fa fa-list-alt"></i>
													<span class="menu-text"> <?php echo $data['nama_project']; ?> </span>
													<b class="arrow fa fa-angle-down"></b>
												</a>

												<b class="arrow"></b>

												<ul class="submenu">

													<li class="">
														<a href="<?php echo site_url('pmis/general_information_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> General Information </span>
														</a>
														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/milstone_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> Milestone </span>
														</a>

														<b class="arrow"></b>
													</li>
													<li class="">
														<a href="#" class="dropdown-toggle">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> Contract</span>
															<b class="arrow fa fa-angle-down"></b>
														</a>

														<b class="arrow"></b>
														<ul class="submenu">
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_utama_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Main Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_supervisi_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Supervision Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_engineering_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Engineering Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_lokal_view?id_project=' . $data['id_project']); ?>">
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
																<a href="<?php echo site_url('pmis/progress_gallery_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Progress Gallery</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/gallery_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Others Gallery</span>
																</a>
																<b class="arrow"></b>
															</li>

														</ul>
													</li>



													<li class="">
														<a href="<?php echo site_url('pmis/progress_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text">Progress </span>
														</a>

														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/issue_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text">Issue </span>
														</a>

														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/daily_activity_view?id_project=' . $data['id_project']); ?>">
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
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-bolt"></i>
							<span class="menu-text"> UPP 5</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>



						<?php
						$menu5_pln_ = $menu5_pln->result_array();
						if (empty($menu5_pln_)) { ?>
							<!-- PLN Mulai-->
							<b class="arrow"></b>
							<ul class='submenu'>
								<li class="">
									<a href="#" class="dropdown-toggle">
										<i class="menu-icon fa fa-list-alt"></i>
										<span class="menu-text">PLN</span>
										<b class="arrow fa fa-angle-down"></b>
									</a>


									<ul class="submenu">

										<li class="">
											<a href="#" class="dropdown-toggle">
												<span class="menu-text"> <?php echo '-'; ?> </span>
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
									<a href="#" class="dropdown-toggle">
										<i class="menu-icon fa fa-list-alt"></i>
										<span class="menu-text">PLN</span>
										<b class="arrow fa fa-angle-down"></b>
									</a>


									<ul class="submenu">
										<?php foreach ($menu5_pln->result_array() as $data) { ?>
											<li class="">
												<a href="#" class="dropdown-toggle">
													<i class="menu-icon fa fa-list-alt"></i>
													<span class="menu-text"> <?php echo $data['nama_project']; ?> </span>
													<b class="arrow fa fa-angle-down"></b>
												</a>

												<b class="arrow"></b>

												<ul class="submenu">

													<li class="">
														<a href="<?php echo site_url('pmis/general_information_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> General Information </span>
														</a>
														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/milstone_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> Milestone </span>
														</a>

														<b class="arrow"></b>
													</li>
													<li class="">
														<a href="#" class="dropdown-toggle">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> Contract</span>
															<b class="arrow fa fa-angle-down"></b>
														</a>

														<b class="arrow"></b>
														<ul class="submenu">
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_utama_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Main Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_supervisi_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Supervision Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_engineering_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Engineering Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_lokal_view?id_project=' . $data['id_project']); ?>">
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
																<a href="<?php echo site_url('pmis/progress_gallery_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Progress Gallery</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/gallery_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Others Gallery</span>
																</a>
																<b class="arrow"></b>
															</li>

														</ul>
													</li>



													<li class="">
														<a href="<?php echo site_url('pmis/progress_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text">Progress </span>
														</a>

														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/issue_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text">Issue </span>
														</a>

														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/daily_activity_view?id_project=' . $data['id_project']); ?>">
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



						<?php
						$menu5_ipp_ = $menu5_ipp->result_array();
						if (empty($menu5_ipp_)) { ?>
							<!-- IPP Mulai-->
							<b class="arrow"></b>
							<ul class='submenu'>
								<li class="">
									<a href="#" class="dropdown-toggle">
										<i class="menu-icon fa fa-list-alt"></i>
										<span class="menu-text">IPP</span>
										<b class="arrow fa fa-angle-down"></b>
									</a>


									<ul class="submenu">

										<li class="">
											<a href="#" class="dropdown-toggle">
												<span class="menu-text"> <?php echo '-'; ?> </span>
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
									<a href="#" class="dropdown-toggle">
										<i class="menu-icon fa fa-list-alt"></i>
										<span class="menu-text">IPP</span>
										<b class="arrow fa fa-angle-down"></b>
									</a>


									<ul class="submenu">
										<?php foreach ($menu5_ipp->result_array() as $data) { ?>
											<li class="">
												<a href="#" class="dropdown-toggle">
													<i class="menu-icon fa fa-list-alt"></i>
													<span class="menu-text"> <?php echo $data['nama_project']; ?> </span>
													<b class="arrow fa fa-angle-down"></b>
												</a>

												<b class="arrow"></b>

												<ul class="submenu">

													<li class="">
														<a href="<?php echo site_url('pmis/general_information_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> General Information </span>
														</a>
														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/milstone_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> Milestone </span>
														</a>

														<b class="arrow"></b>
													</li>
													<li class="">
														<a href="#" class="dropdown-toggle">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> Contract</span>
															<b class="arrow fa fa-angle-down"></b>
														</a>

														<b class="arrow"></b>
														<ul class="submenu">
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_utama_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Main Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_supervisi_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Supervision Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_engineering_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Engineering Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_lokal_view?id_project=' . $data['id_project']); ?>">
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
																<a href="<?php echo site_url('pmis/progress_gallery_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Progress Gallery</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/gallery_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Others Gallery</span>
																</a>
																<b class="arrow"></b>
															</li>

														</ul>
													</li>



													<li class="">
														<a href="<?php echo site_url('pmis/progress_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text">Progress </span>
														</a>

														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/issue_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text">Issue </span>
														</a>

														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/daily_activity_view?id_project=' . $data['id_project']); ?>">
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



						<?php
						$menu5_unallocated_ = $menu5_unallocated->result_array();
						if (empty($menu5_unallocated_)) { ?>
							<!-- unallocated Mulai-->
							<b class="arrow"></b>
							<ul class='submenu'>
								<li class="">
									<a href="#" class="dropdown-toggle">
										<i class="menu-icon fa fa-list-alt"></i>
										<span class="menu-text">UNALLOCATED</span>
										<b class="arrow fa fa-angle-down"></b>
									</a>


									<ul class="submenu">

										<li class="">
											<a href="#" class="dropdown-toggle">
												<span class="menu-text"> <?php echo '-'; ?> </span>
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
									<a href="#" class="dropdown-toggle">
										<i class="menu-icon fa fa-list-alt"></i>
										<span class="menu-text">UNALLOCATED</span>
										<b class="arrow fa fa-angle-down"></b>
									</a>


									<ul class="submenu">
										<?php foreach ($menu5_unallocated->result_array() as $data) { ?>
											<li class="">
												<a href="#" class="dropdown-toggle">
													<i class="menu-icon fa fa-list-alt"></i>
													<span class="menu-text"> <?php echo $data['nama_project']; ?> </span>
													<b class="arrow fa fa-angle-down"></b>
												</a>

												<b class="arrow"></b>

												<ul class="submenu">

													<li class="">
														<a href="<?php echo site_url('pmis/general_information_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> General Information </span>
														</a>
														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/milstone_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> Milestone </span>
														</a>

														<b class="arrow"></b>
													</li>
													<li class="">
														<a href="#" class="dropdown-toggle">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> Contract</span>
															<b class="arrow fa fa-angle-down"></b>
														</a>

														<b class="arrow"></b>
														<ul class="submenu">
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_utama_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Main Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_supervisi_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Supervision Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_engineering_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Engineering Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_lokal_view?id_project=' . $data['id_project']); ?>">
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
																<a href="<?php echo site_url('pmis/progress_gallery_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Progress Gallery</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/gallery_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Others Gallery</span>
																</a>
																<b class="arrow"></b>
															</li>

														</ul>
													</li>



													<li class="">
														<a href="<?php echo site_url('pmis/progress_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text">Progress </span>
														</a>

														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/issue_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text">Issue </span>
														</a>

														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/daily_activity_view?id_project=' . $data['id_project']); ?>">
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
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-bolt"></i>
							<span class="menu-text"> UPP 6</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>



						<?php
						$menu6_pln_ = $menu6_pln->result_array();
						if (empty($menu6_pln_)) { ?>
							<!-- PLN Mulai-->
							<b class="arrow"></b>
							<ul class='submenu'>
								<li class="">
									<a href="#" class="dropdown-toggle">
										<i class="menu-icon fa fa-list-alt"></i>
										<span class="menu-text">PLN</span>
										<b class="arrow fa fa-angle-down"></b>
									</a>


									<ul class="submenu">

										<li class="">
											<a href="#" class="dropdown-toggle">
												<span class="menu-text"> <?php echo '-'; ?> </span>
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
									<a href="#" class="dropdown-toggle">
										<i class="menu-icon fa fa-list-alt"></i>
										<span class="menu-text">PLN</span>
										<b class="arrow fa fa-angle-down"></b>
									</a>


									<ul class="submenu">
										<?php foreach ($menu6_pln->result_array() as $data) { ?>
											<li class="">
												<a href="#" class="dropdown-toggle">
													<i class="menu-icon fa fa-list-alt"></i>
													<span class="menu-text"> <?php echo $data['nama_project']; ?> </span>
													<b class="arrow fa fa-angle-down"></b>
												</a>

												<b class="arrow"></b>

												<ul class="submenu">

													<li class="">
														<a href="<?php echo site_url('pmis/general_information_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> General Information </span>
														</a>
														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/milstone_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> Milestone </span>
														</a>

														<b class="arrow"></b>
													</li>
													<li class="">
														<a href="#" class="dropdown-toggle">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> Contract</span>
															<b class="arrow fa fa-angle-down"></b>
														</a>

														<b class="arrow"></b>
														<ul class="submenu">
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_utama_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Main Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_supervisi_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Supervision Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_engineering_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Engineering Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_lokal_view?id_project=' . $data['id_project']); ?>">
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
																<a href="<?php echo site_url('pmis/progress_gallery_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Progress Gallery</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/gallery_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Others Gallery</span>
																</a>
																<b class="arrow"></b>
															</li>

														</ul>
													</li>


													<li class="">
														<a href="<?php echo site_url('pmis/progress_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text">Progress </span>
														</a>

														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/issue_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text">Issue </span>
														</a>

														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/daily_activity_view?id_project=' . $data['id_project']); ?>">
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



						<?php
						$menu6_ipp_ = $menu6_ipp->result_array();
						if (empty($menu6_ipp_)) { ?>
							<!-- IPP Mulai-->
							<b class="arrow"></b>
							<ul class='submenu'>
								<li class="">
									<a href="#" class="dropdown-toggle">
										<i class="menu-icon fa fa-list-alt"></i>
										<span class="menu-text">IPP</span>
										<b class="arrow fa fa-angle-down"></b>
									</a>


									<ul class="submenu">

										<li class="">
											<a href="#" class="dropdown-toggle">
												<span class="menu-text"> <?php echo '-'; ?> </span>
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
									<a href="#" class="dropdown-toggle">
										<i class="menu-icon fa fa-list-alt"></i>
										<span class="menu-text">IPP</span>
										<b class="arrow fa fa-angle-down"></b>
									</a>


									<ul class="submenu">
										<?php foreach ($menu6_ipp->result_array() as $data) { ?>
											<li class="">
												<a href="#" class="dropdown-toggle">
													<i class="menu-icon fa fa-list-alt"></i>
													<span class="menu-text"> <?php echo $data['nama_project']; ?> </span>
													<b class="arrow fa fa-angle-down"></b>
												</a>

												<b class="arrow"></b>

												<ul class="submenu">

													<li class="">
														<a href="<?php echo site_url('pmis/general_information_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> General Information </span>
														</a>
														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/milstone_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> Milestone </span>
														</a>

														<b class="arrow"></b>
													</li>
													<li class="">
														<a href="#" class="dropdown-toggle">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> Contract</span>
															<b class="arrow fa fa-angle-down"></b>
														</a>

														<b class="arrow"></b>
														<ul class="submenu">
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_utama_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Main Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_supervisi_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Supervision Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_engineering_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Engineering Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_lokal_view?id_project=' . $data['id_project']); ?>">
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
																<a href="<?php echo site_url('pmis/progress_gallery_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Progress Gallery</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/gallery_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Others Gallery</span>
																</a>
																<b class="arrow"></b>
															</li>

														</ul>
													</li>



													<li class="">
														<a href="<?php echo site_url('pmis/progress_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text">Progress </span>
														</a>

														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/issue_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text">Issue </span>
														</a>

														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/daily_activity_view?id_project=' . $data['id_project']); ?>">
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



						<?php
						$menu6_unallocated_ = $menu6_unallocated->result_array();
						if (empty($menu6_unallocated_)) { ?>
							<!-- unallocated Mulai-->
							<b class="arrow"></b>
							<ul class='submenu'>
								<li class="">
									<a href="#" class="dropdown-toggle">
										<i class="menu-icon fa fa-list-alt"></i>
										<span class="menu-text">UNALLOCATED</span>
										<b class="arrow fa fa-angle-down"></b>
									</a>


									<ul class="submenu">

										<li class="">
											<a href="#" class="dropdown-toggle">
												<span class="menu-text"> <?php echo '-'; ?> </span>
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
									<a href="#" class="dropdown-toggle">
										<i class="menu-icon fa fa-list-alt"></i>
										<span class="menu-text">UNALLOCATED</span>
										<b class="arrow fa fa-angle-down"></b>
									</a>


									<ul class="submenu">
										<?php foreach ($menu6_unallocated->result_array() as $data) { ?>
											<li class="">
												<a href="#" class="dropdown-toggle">
													<i class="menu-icon fa fa-list-alt"></i>
													<span class="menu-text"> <?php echo $data['nama_project']; ?> </span>
													<b class="arrow fa fa-angle-down"></b>
												</a>

												<b class="arrow"></b>

												<ul class="submenu">

													<li class="">
														<a href="<?php echo site_url('pmis/general_information_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> General Information </span>
														</a>
														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/milstone_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> Milestone </span>
														</a>

														<b class="arrow"></b>
													</li>
													<li class="">
														<a href="#" class="dropdown-toggle">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> Contract</span>
															<b class="arrow fa fa-angle-down"></b>
														</a>

														<b class="arrow"></b>
														<ul class="submenu">
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_utama_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Main Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_supervisi_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Supervision Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_engineering_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Engineering Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_lokal_view?id_project=' . $data['id_project']); ?>">
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
																<a href="<?php echo site_url('pmis/progress_gallery_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Progress Gallery</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/gallery_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Others Gallery</span>
																</a>
																<b class="arrow"></b>
															</li>

														</ul>
													</li>



													<li class="">
														<a href="<?php echo site_url('pmis/progress_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text">Progress </span>
														</a>

														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/issue_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text">Issue </span>
														</a>

														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/daily_activity_view?id_project=' . $data['id_project']); ?>">
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
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-bolt"></i>
							<span class="menu-text"> UPP 7</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>



						<?php
						$menu7_pln_ = $menu7_pln->result_array();
						if (empty($menu7_pln_)) { ?>
							<!-- PLN Mulai-->
							<b class="arrow"></b>
							<ul class='submenu'>
								<li class="">
									<a href="#" class="dropdown-toggle">
										<i class="menu-icon fa fa-list-alt"></i>
										<span class="menu-text">PLN</span>
										<b class="arrow fa fa-angle-down"></b>
									</a>


									<ul class="submenu">

										<li class="">
											<a href="#" class="dropdown-toggle">
												<span class="menu-text"> <?php echo '-'; ?> </span>
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
									<a href="#" class="dropdown-toggle">
										<i class="menu-icon fa fa-list-alt"></i>
										<span class="menu-text">PLN</span>
										<b class="arrow fa fa-angle-down"></b>
									</a>


									<ul class="submenu">
										<?php foreach ($menu7_pln->result_array() as $data) { ?>
											<li class="">
												<a href="#" class="dropdown-toggle">
													<i class="menu-icon fa fa-list-alt"></i>
													<span class="menu-text"> <?php echo $data['nama_project']; ?> </span>
													<b class="arrow fa fa-angle-down"></b>
												</a>

												<b class="arrow"></b>

												<ul class="submenu">

													<li class="">
														<a href="<?php echo site_url('pmis/general_information_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> General Information </span>
														</a>
														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/milstone_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> Milestone </span>
														</a>

														<b class="arrow"></b>
													</li>
													<li class="">
														<a href="#" class="dropdown-toggle">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> Contract</span>
															<b class="arrow fa fa-angle-down"></b>
														</a>

														<b class="arrow"></b>
														<ul class="submenu">
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_utama_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Main Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_supervisi_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Supervision Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_engineering_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Engineering Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_lokal_view?id_project=' . $data['id_project']); ?>">
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
																<a href="<?php echo site_url('pmis/progress_gallery_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Progress Gallery</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/gallery_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Others Gallery</span>
																</a>
																<b class="arrow"></b>
															</li>

														</ul>
													</li>



													<li class="">
														<a href="<?php echo site_url('pmis/progress_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text">Progress </span>
														</a>

														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/issue_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text">Issue </span>
														</a>

														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/daily_activity_view?id_project=' . $data['id_project']); ?>">
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



						<?php
						$menu7_ipp_ = $menu7_ipp->result_array();
						if (empty($menu7_ipp_)) { ?>
							<!-- IPP Mulai-->
							<b class="arrow"></b>
							<ul class='submenu'>
								<li class="">
									<a href="#" class="dropdown-toggle">
										<i class="menu-icon fa fa-list-alt"></i>
										<span class="menu-text">IPP</span>
										<b class="arrow fa fa-angle-down"></b>
									</a>


									<ul class="submenu">

										<li class="">
											<a href="#" class="dropdown-toggle">
												<span class="menu-text"> <?php echo '-'; ?> </span>
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
									<a href="#" class="dropdown-toggle">
										<i class="menu-icon fa fa-list-alt"></i>
										<span class="menu-text">IPP</span>
										<b class="arrow fa fa-angle-down"></b>
									</a>


									<ul class="submenu">
										<?php foreach ($menu7_ipp->result_array() as $data) { ?>
											<li class="">
												<a href="#" class="dropdown-toggle">
													<i class="menu-icon fa fa-list-alt"></i>
													<span class="menu-text"> <?php echo $data['nama_project']; ?> </span>
													<b class="arrow fa fa-angle-down"></b>
												</a>

												<b class="arrow"></b>

												<ul class="submenu">

													<li class="">
														<a href="<?php echo site_url('pmis/general_information_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> General Information </span>
														</a>
														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/milstone_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> Milestone </span>
														</a>

														<b class="arrow"></b>
													</li>
													<li class="">
														<a href="#" class="dropdown-toggle">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> Contract</span>
															<b class="arrow fa fa-angle-down"></b>
														</a>

														<b class="arrow"></b>
														<ul class="submenu">
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_utama_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Main Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_supervisi_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Supervision Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_engineering_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Engineering Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_lokal_view?id_project=' . $data['id_project']); ?>">
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
																<a href="<?php echo site_url('pmis/progress_gallery_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Progress Gallery</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/gallery_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Others Gallery</span>
																</a>
																<b class="arrow"></b>
															</li>

														</ul>
													</li>



													<li class="">
														<a href="<?php echo site_url('pmis/progress_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text">Progress </span>
														</a>

														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/issue_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text">Issue </span>
														</a>

														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/daily_activity_view?id_project=' . $data['id_project']); ?>">
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



						<?php
						$menu7_unallocated_ = $menu7_unallocated->result_array();
						if (empty($menu7_unallocated_)) { ?>
							<!-- unallocated Mulai-->
							<b class="arrow"></b>
							<ul class='submenu'>
								<li class="">
									<a href="#" class="dropdown-toggle">
										<i class="menu-icon fa fa-list-alt"></i>
										<span class="menu-text">UNALLOCATED</span>
										<b class="arrow fa fa-angle-down"></b>
									</a>


									<ul class="submenu">

										<li class="">
											<a href="#" class="dropdown-toggle">
												<span class="menu-text"> <?php echo '-'; ?> </span>
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
									<a href="#" class="dropdown-toggle">
										<i class="menu-icon fa fa-list-alt"></i>
										<span class="menu-text">UNALLOCATED</span>
										<b class="arrow fa fa-angle-down"></b>
									</a>


									<ul class="submenu">
										<?php foreach ($menu7_unallocated->result_array() as $data) { ?>
											<li class="">
												<a href="#" class="dropdown-toggle">
													<i class="menu-icon fa fa-list-alt"></i>
													<span class="menu-text"> <?php echo $data['nama_project']; ?> </span>
													<b class="arrow fa fa-angle-down"></b>
												</a>

												<b class="arrow"></b>

												<ul class="submenu">

													<li class="">
														<a href="<?php echo site_url('pmis/general_information_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> General Information </span>
														</a>
														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/milstone_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> Milestone </span>
														</a>

														<b class="arrow"></b>
													</li>
													<li class="">
														<a href="#" class="dropdown-toggle">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> Contract</span>
															<b class="arrow fa fa-angle-down"></b>
														</a>

														<b class="arrow"></b>
														<ul class="submenu">
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_utama_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Main Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_supervisi_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Supervision Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_engineering_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Engineering Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_lokal_view?id_project=' . $data['id_project']); ?>">
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
																<a href="<?php echo site_url('pmis/progress_gallery_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Progress Gallery</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/gallery_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Others Gallery</span>
																</a>
																<b class="arrow"></b>
															</li>

														</ul>
													</li>



													<li class="">
														<a href="<?php echo site_url('pmis/progress_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text">Progress </span>
														</a>

														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/issue_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text">Issue </span>
														</a>

														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/daily_activity_view?id_project=' . $data['id_project']); ?>">
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
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-bolt"></i>
							<span class="menu-text"> UPP 8</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>



						<?php
						$menu8_pln_ = $menu8_pln->result_array();
						if (empty($menu8_pln_)) { ?>
							<!-- PLN Mulai-->
							<b class="arrow"></b>
							<ul class='submenu'>
								<li class="">
									<a href="#" class="dropdown-toggle">
										<i class="menu-icon fa fa-list-alt"></i>
										<span class="menu-text">PLN</span>
										<b class="arrow fa fa-angle-down"></b>
									</a>


									<ul class="submenu">

										<li class="">
											<a href="#" class="dropdown-toggle">
												<span class="menu-text"> <?php echo '-'; ?> </span>
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
									<a href="#" class="dropdown-toggle">
										<i class="menu-icon fa fa-list-alt"></i>
										<span class="menu-text">PLN</span>
										<b class="arrow fa fa-angle-down"></b>
									</a>


									<ul class="submenu">
										<?php foreach ($menu8_pln->result_array() as $data) { ?>
											<li class="">
												<a href="#" class="dropdown-toggle">
													<i class="menu-icon fa fa-list-alt"></i>
													<span class="menu-text"> <?php echo $data['nama_project']; ?> </span>
													<b class="arrow fa fa-angle-down"></b>
												</a>

												<b class="arrow"></b>

												<ul class="submenu">

													<li class="">
														<a href="<?php echo site_url('pmis/general_information_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> General Information </span>
														</a>
														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/milstone_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> Milestone </span>
														</a>

														<b class="arrow"></b>
													</li>
													<li class="">
														<a href="#" class="dropdown-toggle">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> Contract</span>
															<b class="arrow fa fa-angle-down"></b>
														</a>

														<b class="arrow"></b>
														<ul class="submenu">
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_utama_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Main Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_supervisi_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Supervision Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_engineering_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Engineering Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_lokal_view?id_project=' . $data['id_project']); ?>">
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
																<a href="<?php echo site_url('pmis/progress_gallery_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Progress Gallery</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/gallery_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Others Gallery</span>
																</a>
																<b class="arrow"></b>
															</li>

														</ul>
													</li>



													<li class="">
														<a href="<?php echo site_url('pmis/progress_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text">Progress </span>
														</a>

														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/issue_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text">Issue </span>
														</a>

														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/daily_activity_view?id_project=' . $data['id_project']); ?>">
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
						$menu8_ipp_ = $menu8_ipp->result_array();
						if (empty($menu8_ipp_)) { ?>
							<!-- IPP Mulai-->
							<b class="arrow"></b>
							<ul class='submenu'>
								<li class="">
									<a href="#" class="dropdown-toggle">
										<i class="menu-icon fa fa-list-alt"></i>
										<span class="menu-text">IPP</span>
										<b class="arrow fa fa-angle-down"></b>
									</a>


									<ul class="submenu">

										<li class="">
											<a href="#" class="dropdown-toggle">
												<span class="menu-text"> <?php echo '-'; ?> </span>
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
									<a href="#" class="dropdown-toggle">
										<i class="menu-icon fa fa-list-alt"></i>
										<span class="menu-text">IPP</span>
										<b class="arrow fa fa-angle-down"></b>
									</a>


									<ul class="submenu">
										<?php foreach ($menu8_ipp->result_array() as $data) { ?>
											<li class="">
												<a href="#" class="dropdown-toggle">
													<i class="menu-icon fa fa-list-alt"></i>
													<span class="menu-text"> <?php echo $data['nama_project']; ?> </span>
													<b class="arrow fa fa-angle-down"></b>
												</a>

												<b class="arrow"></b>

												<ul class="submenu">

													<li class="">
														<a href="<?php echo site_url('pmis/general_information_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> General Information </span>
														</a>
														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/milstone_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> Milestone </span>
														</a>

														<b class="arrow"></b>
													</li>
													<li class="">
														<a href="#" class="dropdown-toggle">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> Contract</span>
															<b class="arrow fa fa-angle-down"></b>
														</a>

														<b class="arrow"></b>
														<ul class="submenu">
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_utama_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Main Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_supervisi_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Supervision Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_engineering_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Engineering Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_lokal_view?id_project=' . $data['id_project']); ?>">
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
																<a href="<?php echo site_url('pmis/progress_gallery_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Progress Gallery</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/gallery_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Others Gallery</span>
																</a>
																<b class="arrow"></b>
															</li>

														</ul>
													</li>



													<li class="">
														<a href="<?php echo site_url('pmis/progress_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text">Progress </span>
														</a>

														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/issue_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text">Issue </span>
														</a>

														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/daily_activity_view?id_project=' . $data['id_project']); ?>">
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
						$menu8_unallocated_ = $menu8_unallocated->result_array();
						if (empty($menu8_unallocated_)) { ?>
							<!-- unallocated Mulai-->
							<b class="arrow"></b>
							<ul class='submenu'>
								<li class="">
									<a href="#" class="dropdown-toggle">
										<i class="menu-icon fa fa-list-alt"></i>
										<span class="menu-text">UNALLOCATED</span>
										<b class="arrow fa fa-angle-down"></b>
									</a>


									<ul class="submenu">

										<li class="">
											<a href="#" class="dropdown-toggle">
												<span class="menu-text"> <?php echo '-'; ?> </span>
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
									<a href="#" class="dropdown-toggle">
										<i class="menu-icon fa fa-list-alt"></i>
										<span class="menu-text">UNALLOCATED</span>
										<b class="arrow fa fa-angle-down"></b>
									</a>


									<ul class="submenu">
										<?php foreach ($menu8_unallocated->result_array() as $data) { ?>
											<li class="">
												<a href="#" class="dropdown-toggle">
													<i class="menu-icon fa fa-list-alt"></i>
													<span class="menu-text"> <?php echo $data['nama_project']; ?> </span>
													<b class="arrow fa fa-angle-down"></b>
												</a>

												<b class="arrow"></b>

												<ul class="submenu">

													<li class="">
														<a href="<?php echo site_url('pmis/general_information_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> General Information </span>
														</a>
														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/milstone_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> Milestone </span>
														</a>

														<b class="arrow"></b>
													</li>
													<li class="">
														<a href="#" class="dropdown-toggle">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text"> Contract</span>
															<b class="arrow fa fa-angle-down"></b>
														</a>

														<b class="arrow"></b>
														<ul class="submenu">
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_utama_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Main Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_supervisi_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Supervision Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_engineering_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Engineering Contract</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/kontrak_lokal_view?id_project=' . $data['id_project']); ?>">
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
																<a href="<?php echo site_url('pmis/progress_gallery_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Progress Gallery</span>
																</a>

																<b class="arrow"></b>
															</li>
															<li class="">
																<a href="<?php echo site_url('pmis/gallery_view?id_project=' . $data['id_project']); ?>">
																	<i class="menu-icon fa fa-list-alt"></i>
																	<span class="menu-text">Others Gallery</span>
																</a>
																<b class="arrow"></b>
															</li>

														</ul>
													</li>



													<li class="">
														<a href="<?php echo site_url('pmis/progress_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text">Progress </span>
														</a>

														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/issue_view?id_project=' . $data['id_project']); ?>">
															<i class="menu-icon fa fa-list-alt"></i>
															<span class="menu-text">Issue </span>
														</a>

														<b class="arrow"></b>
													</li>

													<li class="">
														<a href="<?php echo site_url('pmis/daily_activity_view?id_project=' . $data['id_project']); ?>">
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
				try {
					ace.settings.check('sidebar', 'collapsed')
				} catch (e) {}
			</script>
		</div>