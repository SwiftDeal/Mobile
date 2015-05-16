<?php
	require_once $dir_requires_mobile.'header.php';
	require_once $dir_requires_mobile.'navbar.php';
?>

<div data-role="content" data-theme="a">
<p><?php echo $keywords;?></p>
<?php
	if ($search->total_results != 0) {
		foreach ($results as $result){
			$item = Item::find_by_id('id', $result->id);
			$photo = Photograph::find_by_id('item_id', $item->id);
			
			echo '<ul data-role="listview" data-inset="true" data-divider-theme="a">
					<li data-role="list-divider">'.$item->title.'</li>
					<li>
						<a href="viewitem.php?title='.str_replace(' ', '_', trim($item->title)).'&item_id='.$result->id.'">
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
						echo '<a rel="prev" href="search_results.php?keywords='.$keywords.'&page='.$pagination->previous_page().'" data-role="button" data-icon="arrow-l" data-iconpos="right">Previous</a>';
					}

					if ($pagination->has_next_page()) {
						echo '<a rel="next" href="search_results.php?keywords='.$keywords.'&page='.$pagination->next_page().'" data-role="button" data-icon="arrow-r" data-iconpos="right">Next</a>';
					}
				}
			}
		echo '</div>';
	}
?>
				
</div>
<?php require_once $dir_requires_mobile.'footer.php';?>