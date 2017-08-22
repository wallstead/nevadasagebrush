<?php get_header(); ?>

<div id="page-wrapper" class="container">
	<div id="page-content">
		<div class="categories">



			<div class="category">
				<h3>News</h3>
				<?php global $post; // required
					$args = array('numberposts' => 3, 'category_name' => 'news');
					$custom_posts = get_posts($args);
					$counter = 0;
					foreach($custom_posts as $post) : setup_postdata($post);
							$author_id = $post->post_author;
							echo '<div class="storyOfCategory">';
							if ($counter < 1) {
								echo '<img src="'.get_the_post_thumbnail_url($post->ID, 'post-thumbnail' ).'" alt="'.get_the_title($post->ID).'">';
							}
							echo '<div class="storyInfo"><p>By '.get_the_author_meta( 'display_name', $author_id ).'</p><p>'.get_the_date('m/d/y', $post->ID).'</p></div>';
							echo '<h4>'.get_the_title($post->ID).'</h4>';
							echo '</div>';
							$counter++;
					endforeach;

					wp_reset_postdata();
				?>
			</div>
			<div class="category">
				<h3>A &amp; E</h3>
			</div>
			<div class="category">
				<h3>Opinion</h3>
			</div>
			<div class="category">
				<h3>Sports</h3>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
