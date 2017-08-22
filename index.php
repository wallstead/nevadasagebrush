<?php get_header(); ?>

<div id="page-wrapper" class="container">
	<div id="page-content">
		<div class="categories">



			<div class="category">
				<h3>News</h3>
				<?php global $post; // required
					$args = array('numberposts' => 3, 'category_name' => 'news');
					$custom_posts = get_posts($args);
					foreach($custom_posts as $post) : setup_postdata($post);
							$author_id = $post->post_author;
							echo '<div class="storyOfCategory">';

							echo '<p>By '.get_the_author_meta( 'user_nicename', $author_id ).'</p>';
							echo '<h4>'.get_the_title($post->ID).'</h4>';
							echo '</div>';
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
