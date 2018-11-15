

    <div id="sidebar" class="sidebar responsive ace-save-state sidebar-fixed sidebar-scroll" style="width: 230px !important;">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

                                  <!--  <div class="sidebar-shortcuts pull-right" id="sidebar-shortcuts">
                                            <div class="sidebar-shortcuts-large " id="sidebar-shortcuts-large">
                                                    <button class="btn btn-success">
                                                            <i class="ace-icon fa fa-signal"></i>
                                                    </button>

                                                    <button class="btn btn-info">
                                                            <i class="ace-icon fa fa-pencil"></i>
                                                    </button>

                                                    <button class="btn btn-warning">
                                                            <i class="ace-icon fa fa-users"></i>
                                                    </button>

                                                    <button class="btn btn-danger">
                                                            <i class="ace-icon fa fa-cogs"></i>
                                                    </button>
                                            </div>

                                    </div>--><!-- /.sidebar-shortcuts -->
				<ul class="nav nav-list">
					<li class="active">
						<a href="index.html">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>

						<b class="arrow"></b>
					</li>
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-user"></i>
							<span class="menu-text">
								Members
							</span>
							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>
						<ul class="submenu">
                                <li class="">
                                    <a href="javascript:void()" controller='Members' method='registered_members'>
										<i class="menu-icon fa fa-caret-right"></i>
										Registered Members
									</a>
                                    <b class="arrow"></b>
                                </li>								
                                <li class="">
                                    <a href="javascript:void()" controller='Members' method='eligible_members'>
										<i class="menu-icon fa fa-caret-right"></i>
										 Eligible Members
									</a>
                                    <b class="arrow"></b>
                                </li>
                                <li class="">
	                                    <a href="javascript:void()" controller='Members' method='approved_members'>
											<i class="menu-icon fa fa-caret-right"></i>
										Approved Members
										</a>
	                                    <b class="arrow"></b>
	                          	</li>	                            
	                            <li class="">
	                                    <a href="javascript:void()" controller='Members' method='pedding_members'>
											<i class="menu-icon fa fa-caret-right"></i>
										Pending Members
										</a>
	                                    <b class="arrow"></b>
	                          	</li>		                        
                    	 </ul>
					</li>                                        
                    <li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> Message Center </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>
						<ul class="submenu">
							<li class="">
								<a href="javascript:void()" controller='Messages' method='loadBulkySMS'>
									<i class="menu-icon fa fa-eye pink"></i>
									Send Bulky SMS
								</a>
								<b class="arrow"></b>
							</li>
							<li class="">
                                 <a href="javascript:void()" controller='Messages' method='loadIndividualSMS'>
									<i class="menu-icon fa fa-caret-right"></i>
									Send Individual SMS
								</a>
                                 <b class="arrow"></b>
                             </li>
                             <li class="">
                                 <a href="javascript:void()" controller='Messages' method='loadBulkySMS'>
									<i class="menu-icon fa fa-caret-right"></i>
									Send Bulky Email
								</a>
                                 <b class="arrow"></b>
                             </li>
						</ul>
					</li>
                    <li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> Manage Staffs  </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="javascript:void()" controller='Managestaff' method=''>
									<i class="menu-icon fa fa-caret-right"></i>
									Staffs
								</a>

								<b class="arrow"></b>
							</li>
                            <li class="">
								<a href="javascript:void()" page='ManageUsers' method='load_roles'>
									<i class="menu-icon fa fa-caret-right"></i>
									Users Roles
								</a>

								<b class="arrow"></b>
							</li>
                        </ul>
					</li>										
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-shopping-cart"></i>
							<span class="menu-text"> Finance Center </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">                 			
														
							<li class="">
								<a href="javascript:void()" controller='Finance' method="LoadReceivePaymentForm">
									<i class="menu-icon fa fa-shopping-bag"></i>
									Receive Payment
								</a>
								<b class="arrow"></b>
							</li>
							
                        </ul>
					</li>					
                    <li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-book"></i>
							<span class="menu-text">Reports</span>
                            <b class="arrow fa fa-angle-right"></b>
						</a>

						<b class="arrow"></b>
                                                <ul class="submenu">
							<li class="">
								<a href="">
									<i class="menu-icon fa fa-eye pink"></i>
									Members Paids
								</a>

								<b class="arrow"></b>
							</li>
                                                        <li class="">
								<a href="">
									<i class="menu-icon fa fa-eye pink"></i>
									Unpaid Members
								</a>

								<b class="arrow"></b>
							</li>
                            <li class="">
								<a href="">
									<i class="menu-icon fa fa-eye pink"></i>
									Approved Members
								</a>
								<b class="arrow"></b>
							</li>                       
                            <li class="">
								<a href="">
									<i class="menu-icon fa fa-plus purple"></i>
									Members Reports 
								</a>

								<b class="arrow"></b>
							</li>
                                                       
						</ul>
					</li>
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-gears"></i>
							<span class="menu-text"> Settings </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
                                                    
                            <li class="">
								<a href="#">
									<i class="menu-icon fa fa-caret-right"></i>
									System Setting
								</a>

								<b class="arrow"></b>
							</li>
                            <li class="">
								<a href="#">
									<i class="menu-icon fa fa-caret-right"></i>
									Counties
								</a>

								<b class="arrow"></b>
							</li>
                            <li class="">
								<a href="#">
									<i class="menu-icon fa fa-caret-right"></i>
									Constituency
								</a>

								<b class="arrow"></b>
							</li>
                            <li class="">
								<a href="#">
									<i class="menu-icon fa fa-caret-right"></i>
									Wards
								</a>

								<b class="arrow"></b>
							</li>
                                                    
							<li class="">
								<a href="#">
									<i class="menu-icon fa fa-caret-right"></i>
									Email Setting
								</a>

								<b class="arrow"></b>
							</li>                                                      
                            <li class="">
								<a href="#">
									<i class="menu-icon fa fa-caret-right"></i>
									SMS Setting
								</a>

								<b class="arrow"></b>
							</li>
                        </ul>
					</li>

				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>