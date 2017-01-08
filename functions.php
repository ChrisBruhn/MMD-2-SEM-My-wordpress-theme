<?php
/**
* MyTheme's functions and definitions
*
* @package MyTheme
* @since MyTheme 1.0
*/

/**
* First, let's set the maximum content width based on the theme's design and stylesheet.
* This will limit the width of all uploaded images and embeds.
*/
if ( ! isset( $content_width ) )
$content_width = 800; /* pixels */

if ( ! function_exists( 'MyTheme_setup' ) ) :
/**
* Sets up theme defaults and registers support for various WordPress features.
*
* Note that this function is hooked into the after_setup_theme hook, which runs
* before the init hook. The init hook is too late for some features, such as indicating
* support post thumbnails.
*/
function MyTheme_setup() {

/**
* Make theme available for translation.
* Translations can be placed in the /languages/ directory.
*/
load_theme_textdomain( 'MyTheme', get_template_directory() . '/languages' );

/**
* Add default posts and comments RSS feed links to <head>.
    */
    add_theme_support( 'automatic-feed-links' );

    /**
    * Enable support for post thumbnails and featured images.
    */
    add_theme_support( 'post-thumbnails' );
    /**
     * Enable support for custom bagground
     */
    add_theme_support( 'custom-background' );

    /**
    * Add support for two custom navigation menus.
    */
    register_nav_menus( array(
    'primary'   => __( 'Primary Menu', 'MyTheme' ),
    'secondary' => __('Secondary Menu', 'MyTheme' )
    ) );

    /**
    * Enable support for the following post formats:
    * aside, gallery, quote, image, and video
    */
    add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
    }
    endif; // MyTheme_setup
    add_action( 'after_setup_theme', 'MyTheme_setup' );




/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

    register_sidebar( array(
        'name'          => 'Home right sidebar',
        'id'            => 'home_right_1',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="rounded">',
        'after_title'   => '</h2>',
    ) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );
