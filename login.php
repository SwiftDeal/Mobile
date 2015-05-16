<?php
	require_once $dir_requires_mobile.'header.php';
	require_once $dir_requires_mobile.'navbar.php';
?>
<div data-role="header">
	<h1>Please Sign In to Continue.</h1>
</div><!-- /header -->
<div data-role="content" data-theme="a">
	<form method="post" action="login.php">
		<div data-role="fieldcontain">
			<label for="email">E-mail:</label>
			<input type="email" name="email" id="email" required=""  />
		</div>
		
		<div data-role="fieldcontain">
			<label for="password">Password:</label>
			<input type="password" name="password" id="password" required=""  />
		</div>
		
		<div class="ui-body">
			<fieldset class="ui-grid-a">
				<div class="ui-block-a"></div>
				<div class="ui-block-b"><input type="submit" name="login" data-theme="a" value="Submit"></div>
			</fieldset>
		</div>
	</form>
</div>
<?php require_once $dir_requires_mobile.'footer.php';?>