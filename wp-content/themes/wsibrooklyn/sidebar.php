</div>

<div class="sidebar">
	<aside>
		<?php $aboutme = get_post(2); 
			$aboutme_title = $aboutme->post_title;
			$aboutme_content = $aboutme->post_content; ?>
		<h2><?php echo $aboutme_title; ?></h2>
		<?php echo wpautop($aboutme_content); ?>

	</aside>
</div>