<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="wrapper" class="hfeed">
        <header id="header" role="banner">
            <div id="branding">
                <a href="<?php echo home_url('/'); ?>">
                    <img src="https://localhost/1-home/ProjetOC/3-P6/Planty/wp-content/uploads/2024/07/Logo.svg" class="logo">
                </a>
            </div>
           
            <nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
                <label for="toggle" class="toggle">☰</label>
                <input type="checkbox" id="toggle">
                <?php wp_nav_menu(array(
                    'theme_location' => 'main-menu',
                    'link_before' => '<span itemprop="name">',
                    'link_after' => '</span>',
                    'menu_id' => 'menu-principal',
                    'container' => '',
                )); ?>
            </nav>
        </header>
        <div id="container">
            <main id="content" role="main">

