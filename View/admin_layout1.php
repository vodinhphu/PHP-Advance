<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
		
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		
		<title>Simpla Admin</title>
		
		<!--                       CSS                       -->
	  
		<!-- Reset Stylesheet -->
		<link rel="stylesheet" href="<?php echo BASE_URL ?>/admincp/resources/css/reset.css" type="text/css" media="screen" />
	  
		<!-- Main Stylesheet -->
		<link rel="stylesheet" href="<?php echo BASE_URL ?>/admincp/resources/css/style.css" type="text/css" media="screen" />
		
		<!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid -->
		<link rel="stylesheet" href="<?php echo BASE_URL ?>/admincp/resources/css/invalid.css" type="text/css" media="screen" />	
		
		<!-- Colour Schemes
	  
		Default colour scheme is green. Uncomment prefered stylesheet to use it.
		
		<link rel="stylesheet" href="<?php echo BASE_URL ?>/admincp/resources/css/blue.css" type="text/css" media="screen" />
		
		<link rel="stylesheet" href="<?php echo BASE_URL ?>/admincp/resources/css/red.css" type="text/css" media="screen" />  
	 
		-->
		
		<!-- Internet Explorer Fixes Stylesheet -->
		
		<!--[if lte IE 7]>
			<link rel="stylesheet" href="<?php echo BASE_URL ?>/admincp/resources/css/ie.css" type="text/css" media="screen" />
		<![endif]-->
		
		<!--                       Javascripts                       -->
  
		<!-- jQuery -->
		<script type="text/javascript" src="<?php echo BASE_URL ?>/admincp/resources/scripts/jquery-1.3.2.min.js"></script>
		
		<!-- jQuery Configuration -->
		<script type="text/javascript" src="<?php echo BASE_URL ?>/admincp/resources/scripts/simpla.jquery.configuration.js"></script>
		
		<!-- Facebox jQuery Plugin -->
		<script type="text/javascript" src="<?php echo BASE_URL ?>/admincp/resources/scripts/facebox.js"></script>
		
		<!-- jQuery WYSIWYG Plugin -->
		<script type="text/javascript" src="<?php echo BASE_URL ?>/admincp/resources/scripts/jquery.wysiwyg.js"></script>
		
		<!-- jQuery Datepicker Plugin -->
		<script type="text/javascript" src="<?php echo BASE_URL ?>/admincp/resources/scripts/jquery.datePicker.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL ?>/admincp/resources/scripts/jquery.date.js"></script>
		<!--[if IE]><script type="text/javascript" src="<?php echo BASE_URL ?>/admincp/resources/scripts/jquery.bgiframe.js"></script><![endif]-->

		
		<!-- Internet Explorer .png-fix -->
		
		<!--[if IE 6]>
			<script type="text/javascript" src="<?php echo BASE_URL ?>/admincp/resources/scripts/DD_belatedPNG_0.0.7a.js"></script>
			<script type="text/javascript">
				DD_belatedPNG.fix('.png_bg, img, li');
			</script>
		<![endif]-->
		
	</head>
  
	<body><div id="body-wrapper"> <!-- Wrapper for the radial gradient background -->
		
		<div id="sidebar"><div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->
			
			<h1 id="sidebar-title"><a href="<?php echo BASE_URL ?>/admincp/#">Simpla Admin</a></h1>
		  
			<!-- Logo (221px wide) -->
			<a href="<?php echo BASE_URL ?>/admincp/#"><img id="logo" src="<?php echo BASE_URL ?>/admincp/resources/images/logo.png" alt="Simpla Admin logo" /></a>
		  
			<!-- Sidebar Profile links -->
			<div id="profile-links">
				Hello, <a href="<?php echo BASE_URL ?>/admincp/#" title="Edit your profile">
					<?php echo $_SESSION['admin_login']['username'] ?>
				</a>, you have <a href="<?php echo BASE_URL ?>/admin.php#messages" rel="modal" title="3 Messages">3 Messages</a><br />
				<br />
				<a href="<?php echo BASE_URL ?>/" title="View the Site">View the Site</a> | <a href="<?php echo BASE_URL ?>/index.php?controller=Login&action=logout" title="Sign Out">Sign Out</a>
			</div>        
			
			<ul id="main-nav">  <!-- Accordion Menu -->
				
				<li>
					<a href="<?php echo BASE_URL ?>/index.php?controller=Admin&action=index" class="nav-top-item no-submenu"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
						Dashboard
					</a>       
				</li>
				
				<li> 
					<a href="<?php echo BASE_URL ?>/index.php?controller=Admin&action=index" class="nav-top-item current"> <!-- Add the class "current" to current menu item -->
					Product
					</a>
					<ul>
						<li><a class="current" href="<?php echo BASE_URL ?>/index.php?controller=Admin&action=index">Product list</a></li>
						<!-- <li><a  href="<?php echo BASE_URL ?>/admincp/#">Manage Articles</a></li> --> <!-- Add class "current" to sub menu items also -->
				<!-- 		<li><a href="<?php echo BASE_URL ?>/admincp/#">Manage Comments</a></li>
						<li><a href="<?php echo BASE_URL ?>/admincp/#">Manage Categories</a></li> -->
					</ul>
				</li>
				<li> 
					<a href="index.php?controller=Admin&action=import" class="nav-top-item"> <!-- Add the class "current" to current menu item -->
					Import
					</a>
					<ul>
						<li><a  href="<?php echo BASE_URL ?>/index.php?controller=Admin&action=import">IMPORT</a></li>
					</ul>
				</li>
				
		     
				
			</ul> <!-- End #main-nav -->
			
		
				
			</div> <!-- End #messages -->
			
		</div></div> <!-- End #sidebar -->
		
		<div id="main-content"> <!-- Main Content Section with everything -->
			

			<!-- Page Head -->
		
				
			</ul><!-- End .shortcut-buttons-set -->
			
			<div class="clear"></div> <!-- End .clear -->
			
			<div class="content-box">
				<?php 
				include ROOT."/View/subview/$admin_sub_view";
				?>
			</div> <!-- End .content-box -->
			
			
			<div class="clear"></div>
			
			
			<div id="footer">
				<small> <!-- Remove this notice or replace it with whatever you want -->
						&#169; Copyright 2009 Your Company | Powered by <a href="<?php echo BASE_URL ?>/admincp/http://themeforest.net/item/simpla-admin-flexible-user-friendly-admin-skin/46073">Simpla Admin</a> | <a href="<?php echo BASE_URL ?>/admin.php">Top</a>
				</small>
			</div><!-- End #footer -->
			
		</div> <!-- End #main-content -->
		
	</div></body>
  

<!-- Download From www.exet.tk-->
</html>
