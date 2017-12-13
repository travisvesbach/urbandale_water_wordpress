<!DOCTYPE html>
<html>
  <head>
    <title><?php wp_title(' | ',true,'right'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" >
    <link rel="stylesheet" href="https://use.typekit.net/fsa7upa.css">

    <?php wp_head(); ?>
    </head>
  <body>
    
    <div class = "navbar nav-upper navbar-static-top">
        <div class="container">
            <div class="col-sm-6 col-xs-12">
                <a class="home-button" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img src="http://tranquil-badlands-43021.herokuapp.com/wp-content/uploads/2017/12/u-icon.png" class="icon">
                    <p class="navbar-text icon-text">Urbandale Water Utility</p>
                </a>
            </div>
            <div class="col-sm-6 col-xs-12">
                <p class="navbar-text phone"><span class="glyphicon glyphicon-earphone"></span> (515)278-3940</p>
            </div>
        </div>
    </div>
    <div class = "navbar nav-lower navbar-static-top">
        <div class = "container">
            <span class="navbar-toggle menu-toggle col-xs-11">Menu</span>
            <button class = "navbar-toggle glyphicon glyphicon-menu-hamburger col-xs-1" data-toggle = "collapse" data-target = ".navHeaderCollapse">
                <span class = "icon-bar"></span>
                <span class = "icon-bar"></span>
                <span class = "icon-bar"></span>
            </button>
                
            <div class = "collapse navbar-collapse navHeaderCollapse">
                <?php
                    wp_nav_menu( array(
                        'theme_location'    => 'primary',
                        'depth'             => 2,
                        'container'         => 'div',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker(),
                    ) );
                ?>
                <a href="#" class="bill-button">Pay My Bill</a>
            </div>
        </div>
    </div>
        