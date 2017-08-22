<?php get_header(); ?>

<div id="page-wrapper" class="container">
	<div id="page-content">
		<div class="categories">
			<?php

			function listStoriesOfCategory($categoryName){
				global $post;
				$args = array('numberposts' => 3, 'category_name' => $categoryName);
				$custom_posts = get_posts($args);
				$counter = 0;
				foreach($custom_posts as $post) : setup_postdata($post);
						$author_id = $post->post_author;
						echo '<div class="storyOfCategory">';
						if ($counter < 1) {
							echo '<div class="imageOfStory" style="background-image: url('.get_the_post_thumbnail_url($post->ID, 'post-thumbnail' ).');"></div>';
						}
						echo '<div class="storyInfo"><p>By '.get_the_author_meta( 'display_name', $author_id ).'</p><p>'.get_the_date('m/d/y', $post->ID).'</p></div>';
						echo '<h4>'.get_the_title($post->ID).'</h4>';
						echo '</div>';
						$counter++;
				endforeach;

				wp_reset_postdata();
			}

			?>
			<div class="category">
				<div class="categoryTitle"><h3>News</h3></div>
				<?php listStoriesOfCategory('News'); ?>
			</div>
			<div class="category">
				<div class="categoryTitle"><h3>A &amp; E</h3></div>
				<?php listStoriesOfCategory('Arts & Entertainment'); ?>
			</div>
			<div class="category">
				<div class="categoryTitle"><h3>Opinion</h3></div>
				<?php listStoriesOfCategory('Opinion'); ?>
			</div>
			<div class="category">
				<div class="categoryTitle"><h3>Sports</h3></div>
				<?php listStoriesOfCategory('Sports'); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
