<html>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>


    <?php wp_head(); ?>
</head>
    <div id="header">
        <div id="headerimg">
            <h1>
                <a href="<?php echo get_option('home'); ?>">
                    <?php bloginfo('name'); ?></a>
            </h1>
            <div class="description">
                <?php bloginfo('description'); ?>
            </div>
        </div>
    </div>
<div id="nav">
    <?php wp_nav_menu( ) ?>


</div>