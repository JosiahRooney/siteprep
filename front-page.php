<?php get_header(); ?>
<?php if( get_field('hero_image') ): ?>
<section class="hero" style="background-image: url(<?php the_field('hero_image'); ?>)">
<?php else: ?>
<section class="hero" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/iron.jpg)">
<?php endif; ?>
  <div class="stripes top"></div>
  <div class="hero__header">
    <div class="container">
      <div class="row">
        <img class="hero__logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="SitePrep, Inc. logo">
      </div>
    </div>
  </div>
  <?php if (have_rows('hero_boxes')): ?>
  <div class="hero__boxes">
    <div class="container">
      <div class="row">
        <?php while(have_rows('hero_boxes')) : the_row(); ?>
        <?php 
          $title = get_sub_field('hero_box_title'); // String
          $content = get_sub_field('hero_box_content'); // String
          $link = get_sub_field('hero_box_link'); // String
          $icon = get_sub_field('hero_box_icon'); // String
        ?>
          <div class="hero__box box col-md-4">
            <div class="box__inner">
              <h2 class="box__title">
                <a href="<?php echo $link; ?>"><?php echo $title; ?> <i class="fas <?php echo $icon; ?>"></i></a>
              </h2>
              <div class="box__content">
                <?php echo $content; ?>
              </div><!-- .box__content -->
            </div><!-- .box__inner -->
          </div><!-- .hero__box .box .col-md-4 -->
        <?php endwhile; ?>
      </div><!-- .row -->
    </div><!-- .container -->
  </div><!-- .hero__boxes -->
  <?php endif; ?>
  <div class="stripes bottom"></div>
</section><!-- .hero -->
<section id="primary-content" role="main" class="container">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <header class="header">
        <h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
      </header>
      <section class="entry-content">
        <div class="row">
          <?php if ( has_post_thumbnail() ) { ?>
            <div class="col-md-6">
              <?php the_content(); ?>
            </div>
            <div class="content-featured-image col-sm-6" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);"></div>
          <?php } else { ?>
            <div class="col-md-12">
              <?php the_content(); ?>
            </div>
          <?php } ?>
        </div>
        <div class="entry-links"><?php wp_link_pages(); ?></div>
      </section>
    </article>
    <?php if ( ! post_password_required() ) comments_template( '', true ); ?>
  <?php endwhile; endif; ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>