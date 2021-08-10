<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Themesam Web Sitesi</title>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="top">
<div class="container">
<?php wp_nav_menu(
    array(
        'theme_location' => 'top-menu',
        'menu_class' => 'navigation',
    )
)
?>
</div>
</header>