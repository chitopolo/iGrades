<!-- Main Container Fluid -->
	<div class="container-fluid">

		<!-- Sidebar Menu -->
		<div id="menu" class="hidden-print">

			<div id="sidebar-discover-wrapper">
	<div id="logoWrapper">
		

		<?php
			echo $this->Html->link(
		    $this->Html->image("logo/app-logo-style-default.png", array("alt" => "Mapa UCATEC", "id" => "logo", "class" => "animated fadeInDown")),
		    "/pages/contactus",
		    array('escape' => false)
			);
		?>
	</div>
	<ul class="list-unstyled">
	
		<li class="active">
			<a href="#sidebar-discover-social" class="glyphicons globe_af" data-toggle="sidebar-discover"><span class="badge pull-right badge-primary hidden-md">30</span><i></i><span>Social</span></a>
			<div id="sidebar-discover-social" class="sidebar-discover-menu">
				<div class="innerAll text-center border-bottom text-white animated pulse">
					<strong>Social App</strong>
				</div>
				<ul class="animated fadeIn">
					<li class="active"><a href="index.html?lang=en"><i class="fa fa-flash"></i> Activity</a></li>
					<li><a href="social_account.html?lang=en"><i class="fa fa-male"></i> Account</a></li>
					<li><a href="social_messages.html?lang=en"><i class="fa fa-comments-o"></i> Messages</a></li>
					<li><a href="email.html?lang=en"><span class="badge pull-right badge-primary hidden-md">30</span><i class="fa fa-envelope"></i> Inbox</a></li>
					<li><a href="social.html?lang=en"><i class="fa fa-folder"></i> Widgets</a></li>
					<li><a href="timeline.html?lang=en"><i class="fa fa-clock-o"></i> Timelines</a></li>
					<li><a href="contacts.html?lang=en"><i class="fa fa-phone"></i> Contacts</a></li>
				</ul>
			</div>
		</li>

		<li>
			<a href="#sidebar-discover-media" class="glyphicons picture" data-toggle="sidebar-discover"><i></i><span>Media</span></a>
			<div id="sidebar-discover-media" class="sidebar-discover-menu">
				<div class="innerAll text-center border-bottom text-white animated pulse">
					<strong>Media</strong>
				</div>
				<ul class="animated fadeIn">
					<li><a href="gallery_video.html?lang=en"><i class="fa fa-video-camera"></i> Video Gallery</a></li>
					<li><a href="gallery_photo.html?lang=en"><i class="fa fa-camera"></i> Photo Gallery</a></li>
				</ul>
			</div>
		</li>

		<li>
			<a href="#sidebar-discover-manage" class="glyphicons wrench" data-toggle="sidebar-discover"><i></i><span>Manage</span></a>
			<div id="sidebar-discover-manage" class="sidebar-discover-menu">
				<div class="innerAll text-center border-bottom text-white animated pulse">
					<strong>Management</strong>
				</div>
				<ul class="animated fadeIn">
					<li><a href="tasks.html?lang=en"><i class="fa fa-clock-o"></i> Tasks</a></li>
					<!-- <li><a href="projects.html?lang=en"><i class="fa fa-suitcase"></i> Projects</a></li> -->
					<li><a href="employees.html?lang=en"><i class="fa fa-user"></i> Employees</a></li>
				</ul>
			</div>
		</li>

		<li>
			<a href="#sidebar-discover-medical" data-toggle="sidebar-discover" class="glyphicons circle_plus"><i></i><span>Medical</span></a>
			<div id="sidebar-discover-medical" class="sidebar-discover-menu">
				<div class="innerAll text-center border-bottom text-white animated pulse">
					<strong>Medical App</strong>
				</div>
				<ul class="animated fadeIn">
					<li class="">
						<a href="medical_overview.html?lang=en"><i class="fa fa-medkit"></i> Overview</a>
					</li>
					<li class="">
						<a href="medical_patients.html?lang=en"><span class="badge pull-right badge-primary hidden-md">2</span><i class="fa fa-user-md"></i> Patients</a>
					</li>
					<li class="">
						<a href="medical_appointments.html?lang=en"><i class="fa fa-stethoscope"></i> Appointments</a>
					</li>
					<li class="">
						<a href="medical_memos.html?lang=en"><i class="fa fa-file-text-o"></i> Memos</a>
					</li>
					<li class="border-bottom-none">
						<a href="medical_metrics.html?lang=en"><i class="fa fa-bar-chart-o"></i> Metrics</a>
					</li>
				</ul>
			</div>
		</li>

		<li><a href="courses.html?lang=en" class="glyphicons crown"><i></i><span>Courses</span></a></li>

		<li>
			<a href="#sidebar-discover-content" data-toggle="sidebar-discover" class="glyphicons notes_2"><i></i><span>Content</span></a>
			<div id="sidebar-discover-content" class="sidebar-discover-menu">
				<div class="innerAll text-center border-bottom text-white animated pulse">
					<strong>Manage content</strong>
				</div>
				<ul class="animated fadeIn">
					<li><a href="faq.html?lang=en"><i class="fa fa-question-circle"></i> FAQ</a></li>
					<li><a href="search.html?lang=en"><i class="fa fa-search"></i> Search</a></li>
				</ul>
			</div>
		</li>

		<li>
			<a href="#sidebar-discover-financial" data-toggle="sidebar-discover" class="glyphicons calculator"><i></i><span>Financial</span></a>
			<div id="sidebar-discover-financial" class="sidebar-discover-menu">
				<div class="innerAll text-center border-bottom text-white animated pulse">
					<strong>Financial</strong>
				</div>
				<ul class="animated fadeIn">
					<li><a href="invoice.html?lang=en"><i class="fa fa-file-text-o"></i> Invoice</a></li>
					<li><a href="finances.html?lang=en"><i class="fa fa-legal"></i> Finances</a></li>
					<li><a href="bookings.html?lang=en"><i class="fa fa-ticket"></i> Bookings</a></li>
				</ul>
			</div>
		</li>

		<!-- <li><a href="support.html?lang=en" class="glyphicons life_preserver"><i></i><span>Support</span></a></li> -->

		<li><a href="ui.html?lang=en" class="glyphicons adjust_alt"><i></i><span>Elements</span></a></li>

		<li>
			<a href="#sidebar-discover-front" data-toggle="sidebar-discover" class="glyphicons leather"><i></i><span>Website</span></a>
			<div id="sidebar-discover-front" class="sidebar-discover-menu">
				<div class="innerAll text-center border-bottom text-white animated pulse">
					<strong>Front End Website</strong>
				</div>
				<ul class="animated fadeIn">
					<li><a target="_blank" href="../front/index.html?lang=en"><i class="fa fa-home"></i> Home page</a></li>
					<li><a target="_blank" href="../front/pricing.html?lang=en"><i class="fa fa-money"></i> Pricing</a></li>
					<li><a target="_blank" href="../front/blog.html?lang=en"><i class="fa fa-file-text-o"></i> Blog</a></li>
					<li><a target="_blank" href="../front/team.html?lang=en"><i class="fa fa-group"></i> The Team</a></li>
					<li><a target="_blank" href="../front/contact.html?lang=en"><i class="fa fa-envelope"></i> Contact</a></li>
				</ul>
			</div>
		</li>

		<li>
			<a href="#sidebar-discover-account" data-toggle="sidebar-discover" class="glyphicons user"><i></i><span>Account</span></a>
			<div id="sidebar-discover-account" class="sidebar-discover-menu">
				<div class="innerAll text-center border-bottom text-white animated pulse">
					<strong>Account</strong>
				</div>
				<ul class="animated fadeIn">
					<li><a href="login.html?lang=en"><i class="fa fa-lock"></i> Login</a></li>
					<li><a href="signup.html?lang=en"><i class="fa fa-pencil"></i> Signup</a></li>
				</ul>
			</div>
		</li>

		<li><a href="error.html?lang=en" class="glyphicons warning_sign"><i></i><span>Error</span></a></li>

	</ul>
</div>

			
		</div>
