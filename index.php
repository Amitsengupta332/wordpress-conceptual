<?php get_header(); ?>

<!-- body part -->
<!-- <h1>Hello WordPress. This is Wp Conceptual</h1> -->

<section id="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- <div>
                    <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </div> -->
                <!-- <h1>Hello WordPress. This is Wp Conceptual</h1> -->

                <div class="blog_post">
                    <?php if (have_posts()):
                        while (have_posts()):
                            the_post(); ?>
                            <div class="child_post">
                                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                                <?php the_post_thumbnail('post-thumbnails'); ?>
                                <?php the_content(); ?>
                            </div>

                        <?php endwhile;
                    else:
                        _e('No post found');
                    endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

</body>

</html>