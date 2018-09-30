<?php
/**
 * The template for displaying the header
 *
 *
 * */
?><!doctype html>
<html <?php language_attributes(); ?> >
<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
</head>
<body>
<!-- header  -->
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php
            $menu = array(
                'menu' => 'header-menu',
                'menu_class' => 'navbar-nav mr-auto',
                'container' => '',
                'walker' => new WP_Bootstrap_Navwalker(),

            );
            wp_nav_menu($menu);
            ?>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <i class="fas fa-search search-icon"></i>
            </form>
        </div>
    </nav>
</header>
<!--end header-->
