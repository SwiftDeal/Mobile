<?php
	require_once $dir_requires_mobile.'header.php';
	require_once $dir_requires_mobile.'navbar.php';
?>
	<div data-role="header">
		<h1>Frequently Asked Questions</h1>
	</div><!-- /header -->

	<div data-role="content" data-theme="a">
	<?php
		foreach($faqs as $faq){
			echo '<div data-role="collapsible" data-theme="a" data-content-theme="a">
				   <h3>'.$faq->ques.'</h3>
				   <p>'.$faq->ans.'</p>
				</div>';
		}
	?>
	</div><!-- /content -->
<?php require_once $dir_requires_mobile.'footer.php';?>