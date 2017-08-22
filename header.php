<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>
		<title><?php wp_title( '|', true, 'right' ); ?></title>

		<!-- Default Meta Tags -->
		<?php get_template_part( '/templates/header-meta' ); ?>
		<?php get_template_part( '/templates/facebook-opengraph' ); ?>

		<!-- css + javascript -->

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

		<?php wp_head(); ?>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.min.js"></script>
			<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->


	<!-- for auditting -->
        <script type="text/javascript">
            var access_analytics = {
                base_url: "https://analytics.ssbbartgroup.com/api/",
                instance_id: "AA-590382487ff9c"
            };
            (function(a, b, c) {
                var d = a.createElement(b);
                a = a.getElementsByTagName(b)[0];
                d.src = c.base_url + "access.js?o=" + c.instance_id + "&v=2";
                a.parentNode.insertBefore(d, a)
            })(document, "script", access_analytics);
        </script>
	</head>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-3881133552149931",
    enable_page_level_ads: true
  });
</script>
	<body id="top" <?php body_class(); ?>>

			<div class="adContainer">
				<div class="ad container">
					<a href="http://www.unrsearch.com">
						<img src="http://nevadasagebrush.com/wp-content/uploads/2017/06/Inkblot-—-Open-Engineering.png" alt="Open Student Positions">
					</a>
					<!-- script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script -->
					<!-- top-of-page-responsive -->
					<!-- ins class="adsbygoogle"
					style="min-width:400px;width:100%;height:90px"
					data-ad-client="ca-pub-3881133552149931"
					data-ad-slot="6070235608"
					data-ad-format="horizontal"></ins>
					<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
					</script -->
				</div>
			</div>

			<nav id="mobile-nav-wrapper" role="navigation"></nav>
			<div id="off-canvas-body-inner">

				<!-- Top Bar -->
				<div id="top-bar" class="top-bar">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<div class="top-bar-right">

									<?php if( function_exists( 'qtrans_generateLanguageSelectCode' ) ) qtrans_generateLanguageSelectCode( 'image' ); ?>

									<?php vw_render_site_social_icons(); ?>

									<a class="instant-search-icon"><i class="icon-entypo-search"></i></a>
								</div>

								<div id="open-mobile-nav"><i class="icon-entypo-menu"></i></div>

								<nav id="top-nav-wrapper">
								<?php
								if ( has_nav_menu('top_navigation' ) ) {
									wp_nav_menu( array(
										'theme_location' => 'top_navigation',
										'container' => false,
										'menu_class' => 'top-nav list-unstyled clearfix',
										'link_before' => '<span>',
										'link_after' => '</span>',
										'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
										'depth' => 2,
										'walker' => new vw_text_menu_walker()
									) );
								}
								?>
								</nav>

							</div>
						</div>
					</div>
				</div>
				<!-- End Top Bar -->

				<!-- Main Bar -->
				<?php $header_layout = vw_get_option( 'header_layout', 'left-logo' ); ?>
				<header class="main-bar <?php echo 'header-layout-'.esc_attr( $header_layout ); ?>">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<div id="logo" class="">
									<a href="<?php echo esc_url( home_url() ); ?>/">
										<img src="/wp-content/uploads/2017/08/2Artboard-1@2x.png" alt="The Nevada Sagebrush Logo">
									</a>
								</div>

								<?php if( vw_get_option( 'header_ads_code' ) != '' ) : ?>
								<div class="header-ads">
									<?php echo do_shortcode( vw_get_option( 'header_ads_code' ) ) ; ?>
								</div>
								<?php endif; ?>

							</div>
						</div>
					</div>
				</header>
				<!-- End Main Bar -->

				<!-- Main Navigation Bar -->
				<div class="main-nav-bar <?php echo 'header-layout-'.esc_attr( $header_layout ); ?>">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<?php
								if ( has_nav_menu('main_navigation' ) ) {
									wp_nav_menu( array(
										'theme_location' => 'main_navigation',
										'container' => false,
										'menu_class' => 'main-nav list-unstyled',
										'link_before' => '<span>',
										'link_after' => '</span>',
										'items_wrap' => '<nav id="main-nav-wrapper"><ul id="%1$s" class="%2$s">%3$s</ul></nav>',
										'depth' => 2,
										'walker' => new vw_main_menu_walker()
									) );
								}
								?>
							</div>
						</div>
					</div>
				</div>
				<!-- End Main Navigation Bar -->
				<!-- Start Adsense test -->

				<!-- End Adsense -->
