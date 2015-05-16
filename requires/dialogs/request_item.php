<!-- Start of third page: #requestitem -->
<div data-role="page" id="requestitem">

	<div data-role="header" data-theme="e">
		<h1>Request Any Item</h1>
	</div><!-- /header -->
	<form action="login.php" method="post">
	<div data-role="content" data-theme="d">
		<div data-role="fieldcontain">
			<label for="name">Item Name:</label>
			<input type="text" name="name" id="name" required="" />
		</div>
		<div data-role="fieldcontain">
			<label for="phone">Phone:</label>
			<input type="tel" name="phone" id="phone" required="" />
		</div>
		<div data-role="fieldcontain">
			<label for="email">Email(optional):</label>
			<input type="email" name="email" id="email" />
		</div>
		<div data-role="fieldcontain">
			<label for="name">Your Name:</label>
			<input type="text" name="name" id="name" placeholder="Full Name" value="<?php echo $user->name;?>" required="" />
		</div>
		<div data-role="fieldcontain">
			<label for="address">Address:</label>
			<textarea cols="40" rows="8" name="address" id="address"></textarea>
		</div>
	</div><!-- /content -->
	
	<div data-role="footer">
		<input type="submit" name="login" data-role="button" value="Login">
	</div><!-- /footer -->
	</form>
</div><!-- /page requestitem -->