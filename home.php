<?php
	require_once $dir_requires_mobile.'header.php';
	require_once $dir_requires_mobile.'navbar.php';
?>
<div data-role="content" data-theme="a">
<center><a href="<?php echo $site_url;?>" align="center">
	<img src="<?php echo $dir_assets_images.'logo_mobile2.png';?>" style='width:100%;'>
</a></center>
<form method="GET" action="search_results.php" id="formSearch">
	<div data-role="fieldcontain">
		<input type="search" id="search" name="keywords" autocomplete="off" placeholder="Search anything you want" autofocus="" value="<?php echo $keywords;?>" required="" /><br>
		<input type="submit" data-role="button" value="Search Everywhere">
	</div>
</form>
<ul data-role="listview" data-inset="true" data-theme="d" data-divider-theme="d">
	<li data-role="list-divider">Category</li>
	<li><a href="search_results.php?keywords=mobile">Mobile</a></li>
	<li><a href="search_results.php?keywords=laptop computer">Laptop</a></li>
	<li><a href="search_results.php?keywords=car">Car</a></li>
	<li><a href="search_results.php?keywords=bikes">Bikes</a></li>
	<li><a href="search_results.php?category=custom">Custom Items(at lower price)</a></li>
	<li><a href="search_results.php?keywords=mobile">Books</a></li>
	<li><a href="addstuffs.php?type=individual">Add Items to Sell here</a></li>
</ul>
</div>
<?php require_once $dir_requires_mobile.'footer.php';?>