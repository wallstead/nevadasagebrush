<?php get_header(); ?>

<div id="page-wrapper" class="container">
	<div id="page-content">
		<div class="categories">

			<?php global $post; // required
				$args = array('category_name' => 'news'); // exclude category 9
				$custom_posts = get_posts($args);
				foreach($custom_posts as $post) : setup_postdata($post);
						echo get_the_title($post->ID);
				endforeach;

				wp_reset_postdata();
			?>

			<div class="category">
				<h3>News</h3>

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
