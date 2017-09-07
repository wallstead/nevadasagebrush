<?php get_header(); ?>

<div id="page-wrapper" class="container">
	<div id="page-content">
		<div class="hero">
				<div class="featuredSlider owl-carousel">
					<?php

						global $post;
						$args = array('numberposts' => 3, 'category_name' => 'Featured');
						$custom_posts = get_posts($args);
						foreach($custom_posts as $post) : setup_postdata($post);
								$author_id = $post->post_author;
								echo '<a class="featuredLink" href="'.get_permalink($post->ID) .'"><div class="featuredStory animated fadeIn" style="background-image: url('.get_the_post_thumbnail_url($post->ID, 'post-thumbnail' ).');" data-title="'.get_the_title($post->ID).'">';
								echo '<div class="featuredInfo"><p>'.get_the_date('F jS, Y', $post->ID).'</p><h2>'.get_the_title($post->ID).'</h2><p class="byline">By '.get_the_author_meta( 'display_name', $author_id ).'</p></div>';
								echo '</div></a>';
						endforeach;

						wp_reset_postdata();
					?>
				</div>

				<div class="rightside animated fadeIn">
					<div class="newsletter">
						<h3>Subscribe to our Newsletter</h3>
						<p>To be notified of new stories and events.</p>
						<form id="chimpsub">
							<label for="mc-email"></label>
							<div class="input">
						    <input id="mc-email" type="email" placeholder="Your Email"/>
						    <button type="submit">Subscribe</button>
							</div>
						</form>
					</div>

					<div class="issuu">
						<h3>Sagebrush Archive</h3>
						<p>Our two most recent papers.</p>
						<div class="journals">
							<?php
	                $response = wp_remote_get( 'http://search.issuu.com/api/2_0/document?q=username:nevadasagebrush&pageSize=2&sortBy=epoch' );
	                if( is_array($response) ) {
	                  $header = $response['headers']; // array of http header lines
	                    $body = $response['body']; // use the content
	                    $array = json_decode( $body, true );
	                    if( ! empty( $array ) ) {
	                        foreach($array['response']['docs'] as $doc) {
	                            echo '<div class="recent-journal"><a href="https://issuu.com/nevadasagebrush/docs/'.$doc['docname'].'"><img src="https://image.isu.pub/'.$doc['documentId'].'/jpg/page_1_thumb_large.jpg" alt="'.$doc['title on Issuu'].'"></a></div>';
	                        }
	                    }
	                }
	            ?>
						</div>
					</div>
				</div>
		</div>



		<div class="categories">
			<?php

				function listStoriesOfCategory($categoryName){
					global $post;
					$args = array('numberposts' => 3, 'category_name' => $categoryName);
					$custom_posts = get_posts($args);
					$counter = 0;
					foreach($custom_posts as $post) : setup_postdata($post);
							$author_id = $post->post_author;
							echo '<a class="storyPermalink" href="'.get_post_permalink($post->ID).'"><div class="storyOfCategory animated fadeIn">';
							if ($counter < 1) {
								echo '<div class="imageOfStory" style="background-image: url('.get_the_post_thumbnail_url($post->ID, 'post-thumbnail' ).');"></div>';
							}
							echo '<div class="storyInfo"><p>By '.get_the_author_meta( 'display_name', $author_id ).'</p><p>'.get_the_date('m/d/y', $post->ID).'</p></div>';
							echo '<h4>'.get_the_title($post->ID).'</h4>';
							echo '</div></a>';
							$counter++;
					endforeach;

					wp_reset_postdata();
				}

			?>
			<div class="cat">
				<a href="/blog/category/news/"><div class="categoryTitle"><h3>News</h3></div></a>
				<?php listStoriesOfCategory('News'); ?>
			</div>
			<div class="cat">
				<a href="/blog/category/arts-entertainment/"><div class="categoryTitle"><h3>Entertainment</h3></div></a>
				<?php listStoriesOfCategory('Arts & Entertainment'); ?>
			</div>
			<div class="cat">
				<a href="/blog/category/opinion/"><div class="categoryTitle"><h3>Opinion</h3></div></a>
				<?php listStoriesOfCategory('Opinion'); ?>
			</div>
			<div class="cat">
				<a href="/blog/category/sports/"><div class="categoryTitle"><h3>Sports</h3></div></a>
				<?php listStoriesOfCategory('Sports'); ?>
			</div>
		</div>
	</div>
</div>



<script>
	$(document).ready(function() {
		$(".featuredSlider").owlCarousel({
			loop: true,
		  dots: true,
		  autoplay: true,
		  items: 1,
		  nav: false,
			smartSpeed: 500,
		  autoplayHoverPause: true
		});

		// 1) ASSIGN EACH 'DOT' A NUMBER
		var dotcount = 1;

		$('.owl-dot').each(function() {
		  jQuery( this ).addClass( 'dotnumber' + dotcount);
		  jQuery( this ).attr('data-info', dotcount);
		  dotcount = dotcount+1;
		});

		// 2) ASSIGN EACH 'SLIDE' A NUMBER
		var slidecount = 1;

		$('.owl-item').not('.cloned').each(function() {
		  $(this).addClass( 'slidenumber' + slidecount);
		  slidecount = slidecount+1;
		});

		// SYNC THE SLIDE NUMBER IMG TO ITS DOT COUNTERPART (E.G SLIDE 1 IMG TO DOT 1 BACKGROUND-IMAGE)
		$('.owl-dot').each(function() {

      var grab = $(this).data('info');

			var slideUrl = $('.slidenumber'+ grab +' .featuredStory').css('background-image');
      slideUrl = slideUrl.replace('url(','').replace(')','').replace(/\"/gi, "");

			var slideTitle = $('.slidenumber'+ grab +' .featuredStory').data('title');

      $(this).css("background-image", "url("+slideUrl+")");

			$(this).html('<div class="previewInfo"><h5>' + slideTitle + '</h5>')
    });


		function callbackFunction (resp) {
		    if (resp.result === 'success') {
		        console.log("sub'd");
		    }
		}

		$('#chimpsub').ajaxChimp({
		    url: 'http://nevadasagebrush.us16.list-manage.com/subscribe/post?u=6f9c1a2b60a71db286dbd5936&amp;id=0e02749988',
				callback: callbackFunction
		});
	});
</script>

<?php get_footer(); ?>
