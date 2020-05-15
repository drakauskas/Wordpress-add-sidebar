<?php

function themename_widgets_init()
{
    register_sidebar( array(
        'name'          => __( 'Custom sidebar', 'bootstrap-start-child' ), // name of sidebar and theme for translation
        'id'            => 'custom-sidebar',                                // sidebar id, is used for php showing sidebar
        'before_widget' => '<div class="sidebar-default">',                 // html tag before showing sidebar widgets
        'after_widget'  => '</div>',                                        // html tag before showing sidebar widgets
        'before_title'  => '<h3 class="widget-title">',                     // title before sidebar widget
        'after_title'   => '</h3>',                                         // closing html tag after title of widget
    ) );
}

add_action('init', 'themename_widgets_init');

/*
     To show sideabr insert this code line:

        dynamic_sidebar( 'custom-sidebar' );

*/
