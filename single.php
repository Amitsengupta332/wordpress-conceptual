<?php get_header(); ?>

  <section id="main-content">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
            <h1><a href="<?php the_permalink( ); ?>"><?php the_title(); ?></a></h1>
            <?php the_post_thumbnail('post-thumbnails'); ?>
            <?php the_content(); ?>
        </div>
        <div class="col-md-3">
          <?php dynamic_sidebar("sidebar") ?>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>