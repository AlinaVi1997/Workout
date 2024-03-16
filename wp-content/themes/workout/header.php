<?php 
/**
* Header
*@package workout
*@since  2.0
 */
?>
<!DOCTYPE html>
<html class="m-0" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <?php
        echo '<link rel="shortcut icon" type="image/x-icon" href="/wp-content/themes/workout/icon/favicon.svg">';
    ?>
<?php wp_head();?>

<body <?php body_class(); ?>>

<header class="header">
    <div class="container-fluid">
        <div class="header__inner">
            <?php if($logo = get_field('header_logo', 'option')): ?>
                <div class="header__logo">
                    <a href="<?php echo get_site_url(); ?>">
                        <img src="<?php echo $logo; ?>" alt="Logo" class="site-logo">
                    </a>
                </div>
            <?php endif; ?>
            <div class="header__navbar-menu">
                    <?php $header_nav_menu = get_field("header_nav_menu", 'option');
                    wp_nav_menu( array(
                        'menu' => $header_nav_menu,
                        'container' => true,
                        'menu_class' => ' header__list_nav-menu',
                        'fallback_cb'=> ''
                    ));?>
                <div class="header__login-btn">
                    <?php the_field('header_btn', 'option'); ?>
                </div>
            </div>

            <!-- Mobile menu -->
            <button class="menu-btn">
                <span></span>
            </button>
            <div id="mobile-menu" class="header__navbar-menu mobile__header__navbar-menu">
                <ul class=" header__list_nav-menu">
                    <li><a href="#">EXERCICES</a></li>
                    <li><a href="#">COMMUNITY</a></li>
                    <li><a href="#">PRICING</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <div class="header__login-btn"><?php the_field('header_btn', 'option'); ?></div>
                </ul>
            </div>
        </div>
        <div class="menu-backdrop"></div>
    </div>
</header>