<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="author" content="ziem">
    <meta name="description" content="here we can put a description for the website">
    <meta name="keywords" content="example words">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php 
        wp_head();
    ?>
</head>

<body class="container-fluid">
    <header>
        <div id="nav-toggle">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <nav class="nav pt-5 align-content-start justify-content-center">
            <div class="container">
                <h2 class="my-5">
                    <a class="navbar-brand" href="/">
                        <?php
                            echo get_bloginfo('name');
                        ?>
                    </a>
                </h2>
                <?php
                    if(function_exists('the_custom_logo')) {
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id);
                    }
                ?>
                <img class="nav-logo" src="<?php echo $logo[0] ?>" alt="logo">
                <?php
                    wp_nav_menu(
                        array(
                            'menu' => 'primary',
                            'depth' => 1,
                            'theme_location' => 'primary',
                            'items_wrap' => '<ul id="" class="navbar-nav">%3$s</ul>',
                            'walker' => new WP_Bootstrap_Navwalker()
                        )
                    );
                ?>
            </div>
            <div class="container my-5">
                <a href="https://facebook.com/trendinginvestors" class="fa fa-facebook m-1"></a>
                <a href="https://www.linkedin.com/in/shakir-phelps-1561656b/" class="fa fa-twitter m-1"></a>
                <a href="https://www.instagram.com/trendinginvestors/" class="fa fa-instagram m-1"></a>
            </div>
        </nav>
    </header>
    <main class="content">