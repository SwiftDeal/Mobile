<?php
	require_once $dir_requires_mobile.'header.php';
	require_once $dir_requires_mobile.'navbar.php';
?>
<div data-role="content" data-theme="a">

	<h2>Never Sold Online Before. It's Easy</h2>
	<form role="form" method="post" action="addstuffs.php" enctype="multipart/form-data" data-ajax="false">
		<div data-role="fieldcontain">
			<label for="name">Item Name:</label>
			<input type="text" name="title" id="name" placeholder="Product Name" required="" />
		</div>
		
		<div data-role="fieldcontain">
			<label for="select-choice-a" class="select">Category:</label>
			<select name="select-choice-a" id="select-choice-a" data-native-menu="false" name="category">
				<option value="book" >Book</option>
                <option value="mobile">Mobile</option>
				<option value="car">Car</option>
                <option value="calculator">Calculator</option>
                <option value="art">Art Related</option>
                <option value="camera electronics">Camera</option>
                <option value="computer laptop">Computer Laptop</option>
                <option value="bike motorcycle">Bike</option>
                <option value="home housing">Home and lifestyle</option>
                <option value="others">Others</option>
			</select>
		</div>
		
		<div data-role="fieldcontain">
			<label for="details">Details:</label>
			<textarea cols="40" rows="8" name="description" id="details" placeholder="Good Description"></textarea>
		</div>
		
		<div data-role="fieldcontain">
			<label for="cost">Cost:</label>
			<input type="tel" name="cost" id="cost" placeholder="Estimated Cost" required="" />
		</div>

		<div data-role="fieldcontain">
			<label for="city">City:</label>
			<input type="text" name="city" id="city" list="city" value="<?php echo $_COOKIE['dealcity'];?>" required="" placeholder="Your Current City" />
		</div>
		
		<div data-role="fieldcontain">
			<label for="photo">Choose Photos:</label>
			<input type="file" id="photo" data-clear-btn="false" name="photo[]" accept="image/*" multiple="true" capture>
        </div>
		<?php if(!$session->is_logged_in()):?>
		<div data-role="fieldcontain">
			<label for="Username">Name:</label>
			<input type="text" name="name" id="Username" value="" placeholder="Your Name" required="" />
		</div>
		
		<div data-role="fieldcontain">
			<label for="email">Email:</label>
			<input type="email" name="email" id="email" value="" placeholder="Your E-mail" required="" />
		</div>
		
		<div data-role="fieldcontain">
			<label for="password">Password:</label>
			<input type="password" name="password" id="password" required="" />
			<span>You may Further change Edit your Product.</span>
		</div>
		
		<div data-role="fieldcontain">
			<label for="phone">Phone:</label>
			<input type="tel" name="phone" id="phone" placeholder="Your Phone Number" required="" />
		</div>
		
		<div data-role="fieldcontain">
			<label for="slider2">Are you Retailer/Vendor?</label>
			<select name="slider2" id="slider2" data-role="slider" name="type">
				<option value="individual">No</option>
				<option value="retailer">Yes</option>
			</select>
		</div>

		<div data-role="fieldcontain">
			<label for="details">Address:</label>
			<textarea cols="40" rows="8" name="address" id="details" placeholder="Your Address"></textarea>
		</div>
		<?php endif;?>
		<div class="ui-body ui-body-b">
			<fieldset class="ui-grid-a">
				<div class="ui-block-a"><button type="submit" data-theme="d">Cancel</button></div>
				<div class="ui-block-b"><input type="submit" data-theme="a" name="submit" value="Submit"></div>
		    </fieldset>
		</div>
	</form>
</div>
<?php require_once $dir_requires_mobile.'footer.php';?>