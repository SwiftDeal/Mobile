<?php
	require_once $dir_requires_mobile.'header.php';
	require_once $dir_requires_mobile.'navbar.php';
?>
<div data-role="content" data-theme="a">

	<h2>Never Sold Online Before. It's Easy</h2>
	<form action="editstuff.php?item_id=<?php echo $_GET['item_id'];?>" method="post" enctype="multipart/form-data" data-ajax="false">
		<div data-role="fieldcontain">
			<label for="name">Item Name:</label>
			<input type="text" name="title" id="name" value="<?php echo $item->title;?>" required="" />
		</div>
		
		<div data-role="fieldcontain">
			<label for="select-choice-a" class="select">Category:</label>
			<select name="select-choice-a" id="select-choice-a" data-native-menu="false" name="category">
				<option value="book" <?php if($item->category=='book') echo 'selected';?> >Book</option>
				<option value="mobile" <?php if($item->category=='mobile') echo 'selected';?> >Mobile</option>
				<option value="calculator" <?php if($item->category=='calculator') echo 'selected';?> >Calculator</option>
				<option value="art" <?php if($item->category=='art') echo 'selected';?> >Art Related</option>
				<option value="camera electronics" <?php if($item->category=='camera electronics') echo 'selected';?> >Camera</option>
				<option value="computer" <?php if($item->category=='computer laptop') echo 'selected';?> >Computer laptop</option>
				<option value="car" <?php if($item->category=='car') echo 'selected';?> >Car</option>
				<option value="bike" <?php if($item->category=='bike') echo 'selected';?> >Bike</option>
				<option value="home housing" <?php if($item->category=='home housing') echo 'selected';?> >Home and lifestyle</option>
				<option value="others" <?php if($item->category=='others') echo 'selected';?> >Others</option>
			</select>
		</div>
		
		<div data-role="fieldcontain">
			<label for="details">Details:</label>
			<textarea cols="40" rows="8" name="description" id="details"><?php echo $item->description;?></textarea>
		</div>
		
		<div data-role="fieldcontain">
			<label for="cost">Cost:</label>
			<input type="tel" name="cost" id="cost" value="<?php echo $item->cost;?>" required="" />
		</div>

		<div data-role="fieldcontain">
			<label for="city">City:</label>
			<input type="text" name="city" id="city" list="city" value="<?php echo $item->city;?>" required="" />
		</div>
		
		<div data-role="fieldcontain">
			<label for="photo">Photos:</label>
			<input type="file" name="photo[]" id="photo" class="form-control" accept="image/*" multiple="true">
            <br><span class="help-block">Selling Increases by Adding Photos.</span>
			<?php
				foreach($photos as $photo){
					echo '<img src="'.$photo->image_path_thumb().'">';
				}
			?>
		</div>
		
		<div class="ui-body ui-body-b">
			<fieldset class="ui-grid-a">
				<div class="ui-block-a"><a data-role="button" href="<?php echo $_SERVER['HTTP_REFERER'];?>" data-theme="d">Cancel</a></div>
				<div class="ui-block-b"><input type="submit" data-theme="a" name="save" value="Submit"></div>
		    </fieldset>
		</div>
	</form>
</div>
<?php require_once $dir_requires_mobile.'footer.php';?>