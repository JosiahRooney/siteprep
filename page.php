<?php get_header(); ?>
<section id="content" role="main" class="container">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <section class="entry-content">
        <header class="header">
          <h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
        </header>
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
        <div class="entry-links"><?php wp_link_pages(); ?></div>
      </section>
    </article>
    <?php if ( ! post_password_required() ) comments_template( '', true ); ?>
  <?php endwhile; endif; ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>