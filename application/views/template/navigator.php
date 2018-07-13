		<div id="navbar" class="navbar navbar-default">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>
				<div class="navbar-buttons navbar-header pull-left" role="navigation">
			        <div class="nav ace-nav">
			             <span class="navbar-brand">
			                <span class="msg-body"> <?=$app['NamaApp'] ?> <img class="nav-user-photo" src="<?=base_URL()?><?=$app['Logo'] ?>" alt="<?=$app['NamaApp'] ?>"/></span>
			             </span>
			        </div>
	        	</div>
	        	<div class="navbar-buttons navbar-header pull-right" role="navigation">
			        <ul class="nav ace-nav">
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
												<img src="assets/avatars/avatar5.png" class="msg-photo" alt="Fred's Avatar" />
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
			            <li class="purple">
			              <a data-toggle="dropdown" class="dropdown-toggle" href="#">
			                <i class="ace-icon fa fa-bell icon-animated-bell"></i>
			                <span class="badge badge-important">
			                  <?php
			                $jml =$this->m_crud->countAll('t_info','Expired >= now()');
			                echo $jml;
			                ?>
			                </span>
			              </a>

			              	<ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
				                <li class="dropdown-header">
				                  <i class="ace-icon fa fa-exclamation-triangle"></i>
				                  <?php 
				                  if ($jml > 0){
				                      echo "ada $jml Pemberitahuan";
				                    }else{
				                      echo "Tidak ada pemberitahuan";  
				                    }
				                  ?> 
				                </li>
				                
				                <?php 
				                if ($jml > 0) {
				                ?> 
				                <li class="dropdown-content">
				                  <ul class="dropdown-menu dropdown-navbar navbar-pink">
				                  </ul>
				                </li>
				                <?php } ?>
				            </ul>
				        </li>
						<li class="light-blue">
			              <a data-toggle="dropdown" href="#" class="dropdown-toggle">
			                <img class="nav-user-photo" src="<?=base_URL()?><?=$usr['Foto']?>" alt="<?=$usr['Nama']?>" />
			                <span class="user-info">
			                  <small><?=$usr['Nama']?></small>
			                </span>
			                <i class="ace-icon fa fa-caret-down"></i>
			              </a>

			              <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
			                <li>
			                  <a href="#">
			                    <i class="ace-icon fa fa-cog"></i>
			                    Settings
			                  </a>
			                </li>

			                <li>
			                  <a href="profil">
			                    <i class="ace-icon fa fa-user"></i>
			                    Profil
			                  </a>
			                </li>

			                <li class="divider"></li>

			                <li>
			                  <a href="<?=base_URL()?>auth/logout">
			                    <i class="ace-icon fa fa-power-off"></i>
			                    Logout
			                  </a>
			                </li>
			              </ul>
			            </li>
				    </ul>
				</div>    
			</div>
		</div>
		<!-- /.navbar-container -->
