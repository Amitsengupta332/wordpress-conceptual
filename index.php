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
                        <p>Learning WordPress is fun</p>
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
                        <ul id="nav">
                            <li><a href="">Home</a></li>
                            <li><a href="">Blog</a></li>
                            <li><a href="">About</a></li>
                            <li><a href="">Services</a></li>
                            <li><a href="">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <h1>Hello WordPress. This is Wp Conceptual</h1>

    <?php wp_footer() ?>
</body>

</html>