<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width" />

  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/styles/vendor/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/styles/theme.css" />

  <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js"></script>

  <link href="https://fonts.googleapis.com/css?family=Nova+Flat|Open+Sans" rel="stylesheet">

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div id="wrapper" class="hfeed">
    <header id="header" role="banner">
      <div class="container">
        <div class="row">
          <section id="branding" class="col-md-6 col-sm-4">
            <div id="site-title">
              <div class="site-logo">
                <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-small.png" alt="SitePrep, Inc. logo"></a>
              </div>
            </div>
          </section>
          <section class="col-md-6 col-sm-8">
            <div class="row">
              <div class="contact col-sm-12">
                <div class="row">
                  <div class="col-sm-4 contact__item phone"><i class="fas fa-mobile-alt"></i> 123-456-7890</div>
                  <div class="col-sm-4 contact__item email"><i class="far fa-envelope"></i> john@siteprep.net</div>
                  <div class="col-sm-4 contact__item license"><i class="fas fa-bookmark"></i> CA Lic # 822805</div>
                </div>
              </div>
              <nav id="menu" role="navigation" class="col-sm-12">
                <?php wp_nav_menu( array( 
                  'theme_location' => 'main-menu',
                  'menu_class' => 'nav nav-pills justify-content-end'
                ) ); ?>
              </nav>
            </div>
          </section>
        </div>
      </div>
    </header>
    <div id="content">