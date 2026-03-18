<?php
//  this area going to header 
?>

<!DOCTYPE html>
<html lang="<?php language_attributes() ?>">

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Wp Conceptual</title> -->

    <?php wp_head() ?>
</head>

<body <?php body_class() ?>>
    <header id="header">
        <div class="top_header">
            <div class="container">
                <div class="row">
                    <div class="col-m-12">
                        <!-- <p>Learning WordPress is fun</p> -->
                        <p><?php echo esc_html(get_theme_mod('amit_top_header', 'Learning WordPress is Fun 🤩')); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="header_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <!-- <h1>Logo</h1> -->
                        <h1>
                            <a href="<?php echo home_url(); ?>">
                                <img src="<?php echo get_theme_mod('amit_logo', get_template_directory_uri() . '/images/logo.png'); ?>"
                                    alt="Logo">
                            </a>
                        </h1>
                    </div>
                    <div class="col-md-9">
                        <!-- <ul id="nav">
                            <li><a href="">Home</a></li>
                            <li><a href="">Blog</a></li>
                            <li><a href="">About</a></li>
                            <li><a href="">Services</a></li>
                            <li><a href="">Contact</a></li>
                        </ul> -->
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'main-menu',
                            'menu_id' => 'nav',
                        ));
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- body part -->
    <!-- <h1>Hello WordPress. This is Wp Conceptual</h1> -->

    <section id="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><?php the_title(); ?></h1>
                      <?php the_content(); ?>
                    <!-- <h1>Hello WordPress. This is Wp Conceptual</h1> -->

                    <!-- <div class="blog_post">
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
                    </div> -->
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p><?php echo wp_kses_post(get_theme_mod('amit_copyright_text', 'Copyright &copy; 2026')); ?></p>

                    <!-- <p>All Rights Reserved</p> -->
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer() ?>
</body>

</html>