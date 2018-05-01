<?php get_header(); ?>
<section role="main" class="container">
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
          <div>
            <?php the_content(); ?>
          </div>
        <?php } ?>
        <?php if (is_page('contact')) { ?>
        <section class="contact-form container">
          <?php echo do_shortcode('[contact-form-7 id="90" title="Contact form 1"]'); ?>
        </section>
        <?php } ?>
        <div class="entry-links"><?php wp_link_pages(); ?></div>
      </section>
    </article>
    <?php if ( ! post_password_required() ) comments_template( '', true ); ?>
  <?php endwhile; endif; ?>
</section>
<?php if ( have_rows('photo_gallery') ) : ?>
<section id="photo-gallery" class="container">
  <ul class="col-md-12 gallery">
  <?php while( have_rows('photo_gallery') ) : the_row(); ?>
    <?php if(get_sub_field('active')) : ?>
      <li class="gallery__item">
        <img src="<?php the_sub_field('gallery_image_url') ?>" alt="<?php if(get_sub_field('image_caption')) { the_sub_field('image_caption'); }?>">
        <div class="gallery__caption wp-caption">
          <p><?php if(get_sub_field('image_caption')) { the_sub_field('image_caption'); }?></p>
        </div>
      </li>
    <?php endif; ?>
  <?php endwhile; ?>
  </ul>
</section>
<?php endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>