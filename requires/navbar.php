<?php $basename = substr(strtolower(basename($_SERVER['PHP_SELF'])),0,strlen(basename($_SERVER['PHP_SELF']))-4);?>
<div data-role="header" data-position="inline" data-position="fixed">
	<h1>SwiftDeal.in</h1>
	<?php if($session->is_logged_in()){
		echo '<a href="profile.php" data-icon="gear" data-role="button" class="ui-btn-right">'.$_SESSION['name'].'</a>';
	}else{?>
	<a href="#myproduct" data-icon="gear" data-role="button" data-rel="dialog" data-transition="pop" class="ui-btn-right">MyProduct</a>
	<?php }?>
	<div data-role="navbar">
		<ul>
			<li><a href="index.php" data-icon="home" <?php if ($basename == 'index') echo ' class="ui-btn-active"'; ?>>Home</a></li>
			<li><a href="addstuffs.php" data-icon="plus" <?php if ($basename == 'addstuffs') echo ' class="ui-btn-active"'; ?>>Sell here</a></li>
			<li><a href="contact.php" data-icon="grid" <?php if ($basename == 'contact') echo ' class="ui-btn-active"'; ?>>Contact</a></li>
			<li><a href="about.php" data-icon="star" <?php if ($basename == 'about') echo ' class="ui-btn-active"'; ?>>About</a></li>
			<li><a href="faq.php" data-icon="gear" <?php if ($basename == 'faq') echo ' class="ui-btn-active"'; ?>>Help</a></li>
		</ul>
	</div>
</div>