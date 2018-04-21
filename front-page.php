<?php get_header(); ?>
<section class="hero" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/hero.jpg)">
  <div class="hero__boxes">
    <div class="container">
      <div class="row">
        <div class="hero__box box col-md-4">
          <div class="box__inner">
            <h2 class="box__title">
              <a href="#">Services <i class="fas fa-industry"></i></a>
            </h2>
            <div class="box__content">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque earum minima reprehenderit quisquam, vitae commodi sapiente repudiandae recusandae ipsam facilis. Tempora assumenda sapiente cupiditate deleniti minus fuga, nobis laborum ducimus!
            </div><!-- .box__content -->
          </div><!-- .box__inner -->
          <div class="stripes"></div>
        </div><!-- .hero__box .box .col-md-4 -->
        <div class="hero__box box col-md-4">
          <div class="box__inner">
            <h2 class="box__title">
              <a href="#">About Us <i class="fas fa-info-circle"></i></a>
            </h2>
            <div class="box__content">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque earum minima reprehenderit quisquam, vitae commodi sapiente repudiandae recusandae ipsam facilis. Tempora assumenda sapiente cupiditate deleniti minus fuga, nobis laborum ducimus!
            </div><!-- .box__content -->
          </div><!-- .box__inner -->
          <div class="stripes"></div>
        </div><!-- .hero__box .box .col-md-4 -->
        <div class="hero__box box col-md-4">
          <div class="box__inner">
            <h2 class="box__title">
              <a href="#">Contact <i class="fas fa-envelope"></i></a>
            </h2>
            <div class="box__content">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque earum minima reprehenderit quisquam, vitae commodi sapiente repudiandae recusandae ipsam facilis. Tempora assumenda sapiente cupiditate deleniti minus fuga, nobis laborum ducimus!
            </div><!-- .box__content -->
          </div><!-- .box__inner -->
          <div class="stripes"></div>
        </div><!-- .hero__box .box .col-md-4 -->
      </div><!-- .row -->
    </div><!-- .container -->
  </div><!-- .hero__boxes -->
</section><!-- .hero -->
<section id="primary-content" role="main" class="container">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <header class="header">
        <h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
      </header>
      <section class="entry-content">
        <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
        <?php the_content(); ?>
        <div class="entry-links"><?php wp_link_pages(); ?></div>
      </section>
    </article>
    <?php if ( ! post_password_required() ) comments_template( '', true ); ?>
  <?php endwhile; endif; ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>