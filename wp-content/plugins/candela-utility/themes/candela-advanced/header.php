<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html <?php language_attributes(); ?> class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js">
      </script>
    <![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="//use.typekit.net/mje6fya.js"></script>
  <script>try{Typekit.load();}catch(e){}</script>

<?php
if ( is_front_page() ) {
	echo pbt_get_seo_meta_elements();
	echo pbt_get_microdata_meta_elements();
} else {
	echo pbt_get_microdata_meta_elements();
}
?>

<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.png" />
<title><?php
	global $page, $paged;
	wp_title( '|', true, 'right' );
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'pressbooks' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); ?>
</head>
<body <?php body_class(); if(wp_title('', false) != '') { print ' id="' . str_replace(' ', '', strtolower(wp_title('', false))) . '"'; } ?>>

<!-- Facebook share js sdk -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- end Facebook JS -->

	 <?php if (is_front_page()):?>

	 	<!-- home page wrap -->

		<span itemscope itemtype="http://schema.org/Book" itemref="about alternativeHeadline author copyrightHolder copyrightYear datePublished description editor
		      image inLanguage keywords publisher audience educationalAlignment educationalUse interactivityType learningResourceType typicalAgeRange">
			<div class="book-info-container hfeed">

		<?php else: ?>

		<span itemscope itemtype="http://schema.org/WebPage" itemref="about copyrightHolder copyrightYear inLanguage publisher">
			<div class="nav-container">

        <div class="skip-to-content">
          <a href="#main-content">Skip to main content</a>
        </div>

        <div class="row">
          <nav role="navigation">
            <!-- Book Title -->
            <div class="book-title"><a href="<?php echo home_url('/'); ?>"
                                      title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>"
                                      rel="home"><?php bloginfo('name'); ?></a>
            </div>

            <div class="sub-nav-left" aria-hidden="true">
              <!-- Logo -->
              <div class="pressbooks-logo"><?php echo get_site_option('site_name'); ?></div>
            </div><!-- end .sub-nav-left -->

            <!-- previous/next page links -->
            <?php ca_get_links(); ?>
          </nav>
        </div>

		</div> <!-- end .nav-container -->

	<div class="wrapper"><!-- for sitting footer at the bottom of the page -->
			<div id="wrap">
				<div id="content" role="main">

	 <?php endif; ?>
