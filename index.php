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
    <h1>Hello WordPress. This is Wp Conceptual</h1>

    <?php wp_footer() ?>
</body>

</html>