<div id="sidebar">
    <h2 ><?php _e('Categories'); ?></h2>
    <ul >
        <?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
    </ul>
    <h2 ><?php _e('Archives'); ?></h2>
    <ul >
        <?php wp_get_archives('type=monthly'); ?>
    </ul>

    <div id="text-7" class="widget widget_text"> <!-- Widget Container -->
        <div class="widget-wrap">
            <h4 class="widgettitle">This is a text widget</h4> <!-- Title -->
            <div class="textwidget"> <!-- Content of Widget -->
                I can put HTML in here.
                <a href="http://google.com">Search me!</a>
            </div>
        </div>
    </div>






    <?php if ( is_active_sidebar( 'home_right_1' ) ) : ?>
        <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
            <?php dynamic_sidebar( 'home_right_1' ); ?>
        </div><!-- #primary-sidebar -->
    <?php endif; ?>
</div>