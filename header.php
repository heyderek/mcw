<!DOCTYPE html>
<meta charset="utf-8">
<html>
  <head>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" title="stylesheet" type="text/css" media="screen" charset="utf-8">
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" />
    <script src="js/jquery.js" charset="utf-8"></script>
    <!--[if lt IE 9]><script src="<?php bloginfo('template_url'); ?>/js/html5.js" charset="utf-8"></script><![endif]-->
    <script src="<?php bloginfo('template_url'); ?>/js/custom.js" charset="utf-8"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/prefixfree.min.js" charset="utf-8"></script>
    <title>
      <?php
        //Title based on page.
        global $page, $paged;
        wp_title( '|', true, 'right' );
        // Add the blog name.
        bloginfo( 'name' );
        // Add the blog description for the home/front page.
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) )
        	echo " | $site_description";
        // Add a page number if necessary:
        if ( $paged >= 2 || $page >= 2 )
        	echo ' | ' . sprintf( __( 'Page %s', 'toolbox' ), max( $paged, $page ) ); 
      ?>
    </title>
  </head>
  <body>
    <div class="page">
      <section class="masthead">
        <nav class="menu">
          <div class="wrapper"><a href="<?php echo home_url('/'); ?>" class="logo"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="Mid-Columbia Warehouses Logo Graphic" /></a></div><!-- /.wrapper -->
          <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'wrapper')); ?>
        </nav><!-- /.menu -->
        <header class="wrapper">
          <hgroup class="branding">
            <h1><?php bloginfo('name'); ?></h1>
            <h2><?php bloginfo('description'); ?></h2>
          </hgroup><!-- /.branding -->
          <div class="location">
            <p>509-547-2194</p><!-- /.phone -->
            <address>1810 Ainsworth, Pasco, WA 99301</address>
          </div><!-- /.location -->
        </header><!-- /.wrapper -->
        <?php if(is_home() || is_front_page()) : ?>
          <section class="featured-content wrapper">
            <div class="primary content">
              <article class="caption">
                <h3>Complete Facilities with a Strategic Location</h3>
                <p>Whether you are an importer or an exporter, a manufacturer or distributor, a builder or a broker, Mid-Columbia can help solve your warehousing and distribution needs. Mid-Columbia Warehouses has been in the Pacific Northwest since 1967 with a staff that is committed to providing fast, efficient, personalized service.</p>
              </article><!-- /.caption -->
            </div><!-- /.primary -->
              <div class="secondary">
                <div class="ns-border-wrap"><img src="<?php bloginfo('template_url'); ?>/images/stockholder.jpg" /></div><!-- /.ns-border-wrap -->
              </div><!-- /.secondary-->
          </section><!-- /.featured-content -->
        <?php endif; ?>
      </section><!-- /.masthead -->