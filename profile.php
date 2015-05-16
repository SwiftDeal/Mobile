<?php
	require_once $dir_requires_mobile.'header.php';
	require_once $dir_requires_mobile.'navbar.php';
?>

<div data-role="header">
	<h1>Hi, <?php echo $_SESSION['name'];?><a href="logout.php" data-icon="gear" data-role="button" class="ui-btn-right">Log Out</a></h1>
</div><!-- /header -->
<div data-role="content" data-theme="a">
	<div data-role="navbar">
		<ul>
			<li><a href="profile.php" class="ui-btn-active">My Items</a></li>
			<li><a href="#editprofile" data-rel="dialog" data-transition="pop">Profile</a></li>
			<li><a href="#mywishlist" data-rel="dialog" data-transition="pop">MyWish List</a></li>
			<li><a href="#messages" data-rel="dialog" data-transition="pop">Messages</a></li>
		</ul>
	</div><!-- /navbar -->
</div>
<?php
	if ($total_user_items){
		foreach ($user_items as $user_item){
			$item = Item::find_by_id('id', $user_item->id);
			$photo = Photograph::find_by_id('item_id', $item->id);
			
			echo '<ul data-role="listview" data-inset="true" data-divider-theme="a">
					<li data-role="list-divider">'.$item->title.'</li>
					<li>
						<a href="viewitem.php?title='.str_replace(' ', '_', trim($item->title)).'&item_id='.$user_item->id.'">
							<img src="'.$photo->image_path_thumb().'" alt="'.$item->title.'" id="productBox">
							<p>&#x20B9;'.number($item->cost).'</p>
							<p class="pull-right">'.$item->viewed.' reviews</p>
						</a>
					</li>
				</ul>';		
		}
		
		//pagination's navigation
		echo '<div data-role="footer" data-theme="a">';
			if(!empty($keywords)) {
				if ($pagination->total_pages() > 1) {
					if ($pagination->has_previous_page()) {
						echo '<a href="search_results.php?keywords='.$keywords.'&page='.$pagination->previous_page().'" data-role="button" data-icon="arrow-l" data-iconpos="right">Previous</a>';
					}

					if ($pagination->has_next_page()) {
						echo '<a href="search_results.php?keywords='.$keywords.'&page='.$pagination->next_page().'" data-role="button" data-icon="arrow-r" data-iconpos="right">Next</a>';
					}
				}
			}
		echo '</div>';
	}
?>
</div>
<!-- Start of second page: #editprofile -->
<div data-role="page" id="editprofile" data-theme="a">
<form method="post" action="profile.php" enctype="multipart/form-data">
	<div data-role="header">
		<h1>Edit Profile</h1>
	</div><!-- /header -->
	<div data-role="content" data-theme="a">
		<div data-role="fieldcontain">
			<label for="name">Name:</label>
			<input type="text" name="name" id="name" placeholder="Full Name" value="<?php echo $user->name;?>" required="" />
		</div>
		<div data-role="fieldcontain">
			<label for="email">Email:</label>
			<input type="email" name="email" id="email" placeholder="E-Mail" value="<?php echo $user->email;?>" required="" />
		</div>
		<div data-role="fieldcontain">
			<label for="phone">Contact No.:</label>
			<input type="tel" name="phone" id="phone" placeholder="0XXXXXXXXXX" value="<?php echo $user->phone;?>" required=""/>
		</div>
		<div data-role="fieldcontain">
			<label for="city">City:</label>
			<input type="text" name="city" id="city" placeholder="Current City" value="<?php echo $user->city;?>" required="" />
		</div>
		<div data-role="fieldcontain">
			<label for="address">Address:</label>
			<textarea cols="40" rows="8" name="address" id="address"><?php echo $user->address;?></textarea>
		</div>
		<div data-role="fieldcontain">
			<label for="password">Password:</label>
			<input type="password" name="password" id="password" />
		</div>
	</div><!-- /content -->
	<div class="ui-body">
		<fieldset class="ui-grid-a">
			<div class="ui-block-a"></div>
			<div class="ui-block-b"><input type="submit" name="login" data-theme="a" value="Save"></div>
		</fieldset>
	</div>
</form>
</div><!-- /page editprofile -->

<!-- Start of second page: #mywishlist -->
<div data-role="page" id="mywishlist" data-theme="a">

	<div data-role="header">
		<h1>MyWish List</h1>
	</div><!-- /header -->

	<div data-role="content" data-theme="a">	
		<p>My WIsh List Contains Items which you have requested for and it will be a pleasure for us to provide you that item, as soon as possible.</p>	
		<p>You have not requested any Item.</p>
		<p><a href="#requestitem" data-rel="dialog" data-transition="pop">Request Item</a></p>
		
	</div><!-- /content -->
	
</div><!-- /page mywishlist -->

<!-- Start of second page: #messages -->
<div data-role="page" id="messages" data-theme="a">

	<div data-role="header">
		<h1>Two</h1>
	</div><!-- /header -->

	<div data-role="content" data-theme="a">	
		<h2>Two</h2>
		<p>I have an id of "two" on my page container. I'm the second page container in this multi-page template.</p>	
		<p>Notice that the theme is different for this page because we've added a few <code>data-theme</code> swatch assigments here to show off how flexible it is. You can add any content or widget to these pages, but we're keeping these simple.</p>	
		<p><a href="#one" data-direction="reverse" data-role="button" data-theme="b">Back to page "one"</a></p>	
		
	</div><!-- /content -->
	
</div><!-- /page messages -->
<?php require_once $dir_requires_mobile.'footer.php';?>