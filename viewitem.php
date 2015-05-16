<?php
	require_once $dir_requires_mobile.'header.php';
	require_once $dir_requires_mobile.'navbar.php';
?>
<div data-role="content" data-theme="a">
	<ul data-role="listview" data-inset="true" data-divider-theme="a">
		<li data-role="list-divider"><?php echo $item->title;?></li>
		<li>
			<p>
			<?php
				foreach($photos as $photo){
					echo '<a href="'.$photo->image_path().'" target="_blank">
						<img src="'.$photo->image_path_thumb().'" class="img-responsive" style="max-height:500px;">
						</a>';
				}
			?>
			</p>
			<p class="pull-right">&#x20B9; <?php echo number($item->cost);?></p>
			<p><?php echo $user->name;?></p>
			<p><?php echo $user->phone;?></p>
			<p><?php echo $item->city;?></p>
			<p><?php echo $item->description;?></p>
			<p><?php echo datetime_to_text($item->created);?></p>
			<p class="pull-right"><?php echo $item->viewed;?> reviews</p>
			<iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fswiftdeal.in%2Fviewitem.php%3Fitem_id%3D<?php echo $_GET['item_id'];?>&amp;width=20&amp;height=35&amp;colorscheme=light&amp;layout=standard&amp;action=like&amp;show_faces=false&amp;send=true&amp;appId=391539497615701" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:22px;" allowTransparency="true"></iframe>
		</li>
	</ul>
	<br />
	<div data-role="header" data-position="inline">
	<?php
	   	if(isset($_SESSION['user_id'])){
	       	if($_SESSION['user_id']==$item->user_id){
				echo '<a href="'.$dir_controller_admin.'task.php?action=delete_item&item_id='.$_GET['item_id'].'" data-icon="delete" data-theme="c">Delete</a>';
				echo '<h1></h1>';
				echo '<a href="editstuff.php?item_id='.$_GET['item_id'].'" data-icon="check" data-theme="b">Edit</a>';
			}
		}else { 
			echo '<a data-toggle="modal" data-target="#messageowner" data-icon="check" data-theme="d">Send Message to Owner</a><h1></h1>
				<a data-icon="delete" data-theme="c" data-toggle="modal" data-target="#report">Report</a>';
		}
	?>
	</div>
	<br><?php include $dir_requires.'disqus.php';?>
</div>
<?php
	require_once $dir_requires_mobile.'footer.php';
?>