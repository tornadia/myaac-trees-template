<!DOCTYPE HTML>
<html>
<head>
	<?php echo template_place_holder('head_start'); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo $template_path; ?>/css/style.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $template_path; ?>/css/default.css" />
	<!-- modernizr enables HTML5 elements and feature detects -->
	<script type="text/javascript" src="<?php echo $template_path; ?>/js/modernizr-1.5.min.js"></script>
	<?php echo template_place_holder('head_end'); ?>
</head>

<body>
	<?php echo template_place_holder('body_start'); ?>
	<div id="main">
	<header>
	  <div id="logo">
		<div id="logo_text">
		<!-- class="logo_colour", allows you to change the colour of the text -->
		<h1><a href="<?php echo getLink('news'); ?>">My<span class="logo_colour">AAC</span></a></h1>
		<h2>The best AAC and CMS ever made!</h2>
		</div>
	</div>
	<nav>
		<div id="menu_container">
		  <ul class="sf-menu" id="nav">
			<li><a href="<?php echo getLink('news'); ?>">Home</a></li>
			<li><a href="#">Community</a>
				<ul>
					<li><a href="<?php echo getLink('characters'); ?>">Characters</a></li>
					<li><a href="<?php echo getLink('online'); ?>">Online</a></li>
					<li><a href="<?php echo getLink('highscores'); ?>">Highscores</a></li>
					<li><a href="<?php echo getLink('lastkills'); ?>">Last Kills</a></li>
					<li><a href="<?php echo getLink('houses'); ?>">Houses</a></li>
					<li><a href="<?php echo getLink('guilds'); ?>">Guilds</a></li>
					<?php if(isset($config['wars'])): ?>
						<li><a href="<?php echo getLink('wars'); ?>">Wars</a></li>
					<?php endif;
					if($config['otserv_version'] == TFS_03): ?>
						<li><a href="<?php echo getLink('bans'); ?>">Bans</a></li>
					<?php endif; ?>
				</ul>
			</li>
			<li><a href="#">Library</a>
				<ul>
					<li><a href="<?php echo getLink('creatures'); ?>">Monsters</a></li>
					<li><a href="<?php echo getLink('spells'); ?>">Spells</a></li>
					<li><a href="<?php echo getLink('commands'); ?>">Commands</a></li>
					<li><a href="<?php echo getLink('serverInfo'); ?>">Server Info</a></li>
					<li><a href="<?php echo getLink('movies'); ?>">Movies</a></li>
					<li><a href="<?php echo getLink('screenshots'); ?>">Screenshots</a></li>
					<li><a href="<?php echo getLink('experienceTable'); ?>">Experience Table</a></li>
				</ul>
			</li>
			<li><?php echo $template['link_forum']; ?>Forum</a></li>
			<li><a href="#">Help</a>
				<ul>
					<li><a href="<?php echo getLink('team'); ?>">Support</a></li>
					<li><a href="<?php echo getLink('faq'); ?>">FAQ</a></li>
				</ul>
			</li>
			<?php if($config['gifts_system']): ?>
			<li><a href="#">Shop</a>
				<ul>
					<li><a href="<?php echo getLink('points'); ?>">Buy points</a></li>
					<li><a href="<?php echo getLink('gifts'); ?>">Gifts</a></li>
					<li><a href="<?php echo getLink('gifts/history'); ?>">History</a></li>
				</ul>
			</li>
			<?php endif; ?>
		  </ul>
		</div>
	</nav>
	</header>
	<div id="site_content">
		<div id="sidebar_container">
			<?php
			if($logged) {
				include(TEMPLATES . 'trees/widgets/loggedin.php');
			} else {
				include(TEMPLATES . 'trees/widgets/login.php');
			}
			if($logged && admin()) {
				include(TEMPLATES . 'trees/widgets/admin.php');
			}
			
			foreach(glob(TEMPLATES . 'trees/widgets/*.php') as $file) {
				$filename = pathinfo($file, PATHINFO_FILENAME);
				if($filename != "login" && $filename != "loggedin" && $filename != "admin") {
					include($file);
				}
			}
			?>
		</div>
		<div class="content">
			<?php echo template_place_holder('center_top') . $content; ?>
		</div>
	</div>
	<div id="scroll">
		<a title="Scroll to the top" class="top" href="#"><img src="images/top.png" alt="top" /></a>
	</div>
	<footer>
		<p><?php echo template_footer(); ?><br/><a href="http://www.css3templates.co.uk">design from css3templates.co.uk</a></p>
	</footer>
	</div>
	<!-- javascript at the bottom for fast page loading -->
	<script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
	<script type="text/javascript" src="js/jquery.sooperfish.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {
	 	$('ul.sf-menu').sooperfish();
		$('.top').click(function() {$('html, body').animate({scrollTop:0}, 'fast'); return false;});
	});
	</script>
	<?php echo template_place_holder('body_end'); ?>
</body>
</html>