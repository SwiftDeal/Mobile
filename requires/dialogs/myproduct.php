<!-- Start of third page: #myproduct -->
<div data-role="page" id="myproduct">

	<div data-role="header" data-theme="e">
		<h1>Login to Continue</h1>
	</div><!-- /header -->
	<form action="login.php" method="post">
	<div data-role="content" data-theme="d">
		<div data-role="fieldcontain">
			<label for="email">Email:</label>
			<input type="email" name="email" id="email" required=""  />
		</div>
		<div data-role="fieldcontain">
			<label for="password">Password:</label>
			<input type="password" name="password" id="password" required=""  />
		</div>
	</div><!-- /content -->
	
	<div data-role="footer">
		<input type="submit" name="login" data-role="button" value="Login">
	</div><!-- /footer -->
	</form>
</div><!-- /page myproduct -->