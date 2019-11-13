<?php
add_filter( 'show_admin_bar', '__return_false' );

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page();

}
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}
function custom_scripts() {
    wp_register_script( 'jquery-js', get_stylesheet_directory_uri() . '/plugins/jquery/dist/jquery.min.js');

    wp_register_script( 'owl.js', get_stylesheet_directory_uri() . '/plugins/owl.carousel/dist/owl.carousel.min.js');

    wp_register_script( 'bootstrap.js',get_stylesheet_directory_uri().'/plugins/bootstrap/dist/js/bootstrap.min.js');
    wp_register_script( 'carousel-swipe.js',get_stylesheet_directory_uri().'/plugins/bootstrap-carousel-swipe/carousel-swipe.js');

    wp_register_script( 'app.js',get_stylesheet_directory_uri().'/scripts/app.js');
    wp_register_script( 'jquery.mobile.custom.min.js',get_stylesheet_directory_uri().'/scripts/jquery.mobile.custom.min.js');


    if (!is_admin()) {
        wp_enqueue_script('jquery-js');
        wp_enqueue_script('owl.js','','','',true);
        wp_enqueue_script('bootstrap.js','','','',true);
        wp_enqueue_script('moment.js','','','',true);
        wp_enqueue_script('app.js','','','',true);
    }
}

function my_nav_wrap() {

    $wrap  = '<ul id="%1$s" class="%2$s">';
    $wrap .= '%3$s';
    $wrap .= '</ul>';
    return $wrap;
}

function wpb_custom_new_menu() {
    register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
    register_nav_menu('my-custom-menu2',__( 'My Custom Menu2' ));
    register_nav_menus(
        array(
            'my-custom-menu' => __( 'My Custom Menu' ),
            'extra-menu' => __( 'Extra Menu' )
        )
    );
    register_nav_menus(
        array(
            'my-custom-menu2' => __( 'My Custom Menu2' ),
            'extra-menu' => __( 'Extra Menu' )
        )
    );
}
add_action( 'init', 'wpb_custom_new_menu' );

add_action('wp_enqueue_scripts', 'cssmenumaker_scripts_styles' );

function cssmenumaker_scripts_styles() {
    wp_enqueue_style( 'cssmenu-styles', get_template_directory_uri() . '/cssmenu/styles.css');
    wp_enqueue_script('cssmenu-scripts', get_template_directory_uri() . '/cssmenu/script.js');
}

class CSS_Menu_Maker_Walker extends Walker {

    var $db_fields = array( 'parent' => 'menu_item_parent', 'id' => 'db_id' );

    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul>\n";
    }

    function end_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }

    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

        global $wp_query;
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
        $class_names = $value = '';
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;

        /* Add active class */
        if(in_array('current-menu-item', $classes)) {
            $classes[] = 'active';
            unset($classes['current-menu-item']);
        }

        /* Check for children */
        $children = get_posts(array('post_type' => 'nav_menu_item', 'nopaging' => true, 'numberposts' => 1, 'meta_key' => '_menu_item_menu_item_parent', 'meta_value' => $item->ID));
        if (!empty($children)) {
            $classes[] = 'has-sub';
        }

        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

        $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
        $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

        $output .= $indent . '<li' . $id . $value . $class_names .'>';

        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

        $item_output = $args->before;
        $item_output .= '<a'. $attributes .'><span>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        $item_output .= '</span></a>';
        $item_output .= $args->after;

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }

    function end_el( &$output, $item, $depth = 0, $args = array() ) {
        $output .= "</li>\n";
    }
}

