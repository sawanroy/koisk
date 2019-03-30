<!--copy rights start here-->
				<div class="sidebar-menu">
					<header class="logo1">
						<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
					</header>
						<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                           <div class="menu">
									<ul id="menu" >
										<li><a href="<?= base_url('admin_controller/faculty_feedback');?>"><i class="fa fa-picture-o" aria-hidden="true"></i><span>Faculty feedback</span><div class="clearfix"></div></a></li>
										<li><a href="<?= base_url('admin_controller/infras_feedback');?>"><i class="fa fa-picture-o" aria-hidden="true"></i><span>Infrastucture feedback</span><div class="clearfix"></div></a></li>
										<li><a href="<?= base_url('admin_controller/list_subject');?>"><i class="fa fa-picture-o" aria-hidden="true"></i><span>Subjects</span><div class="clearfix"></div></a></li>
										<li><a href="<?= base_url('admin_controller/list_teacher');?>"><i class="fa fa-picture-o" aria-hidden="true"></i><span>List of Facalties</span><div class="clearfix"></div></a></li>
										<li><a href="<?= base_url('admin_controller/reg_student');?>"><i class="fa fa-picture-o" aria-hidden="true"></i><span>Registerd students</span><div class="clearfix"></div></a></li>
										<li><a href="<?= base_url('admin_controller/add_teacher');?>"><i class="fa fa-picture-o" aria-hidden="true"></i><span>ADD Faculty</span><div class="clearfix"></div></a></li>
										<li><a href="<?= base_url('admin_controller/add_subject');?>"><i class="fa fa-picture-o" aria-hidden="true"></i><span>ADD Subject</span><div class="clearfix"></div></a></li>
										<li><a href="<?= base_url('admin_controller/notification');?>"><i class="fa fa-picture-o" aria-hidden="true"></i><span> notification</span><div class="clearfix"></div></a></li>
										<li><a href="<?= base_url('admin_controller/admission');?>"><i class="fa fa-picture-o" aria-hidden="true"></i><span> Admission</span><div class="clearfix"></div></a></li>
								  </ul>
								</div>
							  </div>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="<?= base_url('assets2/admin/js/jquery.nicescroll.js')?>"></script>
<script src="<?= base_url('assets2/admin/js/scripts.js')?>"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="<?= base_url('assets2/admin/js/bootstrap.min.js')?>"></script>
   <!-- /Bootstrap Core JavaScript -->	   
<!-- morris JavaScript -->	
<script src="<?= base_url('assets2/admin/js/raphael-min.js')?>"></script>
<script src="<?= base_url('assets2/admin/js/morris.js')?>"></script>