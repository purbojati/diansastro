<!DOCTYPE html>
<!--[if IE 7]><html class="ie7 no-js"  <?php language_attributes(); ?><![endif]-->
<!--[if lte IE 8]><html class="ie8 no-js"  <?php language_attributes(); ?><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="not-ie no-js" <?php language_attributes(); ?>>  <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="theme-color" content="#3498db">
    <title><?php if ( is_home() ) { ?><?php bloginfo('name'); } else{ ?><?php  wp_title(''); } ?></title>
	<link rel="alternate" href="https://en.arenalaptop.com/" hreflang="en" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link rel="icon" sizes="192x192" href="/wp-content/uploads/2017/06/fav.png">
    <?php if(get_post_type() == 'products'){
        global $wp;
        $u123 = home_url(add_query_arg(array(),$wp->request));
        $u123 = explode('/', $u123);
        add_filter( 'wpseo_canonical', '__return_false' );
        ?>
        <link rel="amphtml" href="https://amp.arenalaptop.com/harga/<?php echo $u123[4]; ?>">
        <?php
    }?>
    <?php wp_head(); ?>
     <style>
        <?php minify('https://www.arenalaptop.com/wp-content/themes/diansastro/style.css'); ?>
    </style>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-56390965-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-56390965-1');
</script>

</head>

<body <?php body_class(); ?> <?php $background = of_get_option('background'); echo 'style="background-color:'.$background.'"'; ?>>

    <div id="headblock">
        <div id="header">
            <div id ="trheader">
                <?php
                if(check_device()=="true"){
                    ?>
                    <div id="jandamuda">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </div>
                    <div id="perawandesa">
                        <img src="<?php echo get_template_directory_uri() ?>/img/loop-icon.png">
                    </div>
                    <nav id="resmenu" class="pop_up">
                        <?php wp_nav_menu( array( 'theme_location' => 'main-menu 1', 'menu_class' => 'menu' , 'fallback_cb' => '' ) ); ?>
                    </nav>
                    <?php
                }
                ?>
                <div id="header-left">
                    <a href="https://www.arenalaptop.com"><img src="https://www.arenalaptop.com/arenalaptop3.png" alt="<?php bloginfo('name'); ?>"></a>
                </div>
                <div class="searchy">
                    <form action="https://www.arenalaptop.com/" method="get" id="search-form" autocomplete="on" data-ajax="false">
                        <input id="s" name="s" type="search" placeholder="cari disini" value="" class="search-text">
                        <div style="-webkit-transform: rotate(45deg); -moz-transform: rotate(45deg); -o-transform: rotate(45deg);transform: rotate(45deg);">
                            &#9906;
                        </div>
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <?php if(check_device() == 'false'){
            ?>
            <div id="header-right">
                <nav id="mainmenu">
                <?php wp_nav_menu( array( 'theme_location' => 'main-menu 1', 'menu_class' => 'menu' , 'fallback_cb' => '' ) ); ?>
                </nav>

                <div class="clearfix"></div>
            </div>
            <?php
        }
        ?>
    </div>
    <div class="korban"></div>
    <?php if (function_exists ('adinserter')) echo adinserter (7); ?>
    <?php if (function_exists ('adinserter')) echo adinserter (11); ?>
    <div id="wrap">