<div class="sidebar-inner">
<?php 
if( is_page() || ( function_exists( 'is_woocommerce' ) && is_woocommerce() ) ){
	/* Page Sidebar */
	if ( ( function_exists( 'is_woocommerce' ) && is_woocommerce() ) ) {
		$page_id = woocommerce_get_page_id('shop');
	} else {
		$page_id = get_the_id();
	}

	$page_sidebar = get_post_meta( $page_id, 'vw_page_sidebar', true );
	dynamic_sidebar( $page_sidebar );

} else {
	/* Blog Sidebar */
	echo '<a href="https://www.nationalguard.com"><img src="http://nevadasagebrush.com/wp-content/uploads/2017/06/NVARNG_Online.png" alt="Nevada Army National Guard"></a>';
	$blog_sidebar = vw_get_option( 'blog_sidebar' );
	dynamic_sidebar( $blog_sidebar );
}
?>
</div>