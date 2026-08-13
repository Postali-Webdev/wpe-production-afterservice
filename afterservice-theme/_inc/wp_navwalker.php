<?php

/**
 * Class Name: wp_bootstrap_navwalker
 * GitHub URI: https://github.com/twittem/wp-bootstrap-navwalker
 * Description: A custom WordPress nav walker class to implement the Bootstrap 3 navigation style in a custom theme using the WordPress built in menu manager.
 * Version: 2.0.4
 * Author: Edward McIntyre - @twittem
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

class wp_bootstrap_navwalker extends Walker_Nav_Menu {

    /**
     * Start the element output.
     *
     * @param  string $output Passed by reference. Used to append additional content.
     * @param  object $item   Menu item data object.
     * @param  int $depth     Depth of menu item. May be used for padding.
     * @param  array $args    Additional strings.
     * @return void
     */

    public function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat( "\t", $depth );
        $output .= "\n$indent<ul class=\"c-nav__dropdown\">\n";
    }

    public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

        $classes     = empty ( $item->classes ) ? array () : (array) $item->classes;

        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter( $classes ), $item));

        // Check all $class_names string for 'current-menu-item' and add 'c-nav__current'
        if ( in_array( 'current-menu-item', $classes ) )
            $class_names .= ' c-nav__item--active';

        // Check all $class_names string for 'current-menu-item' and add 'c-nav__current'
        if ( in_array( 'menu-item-has-children', $classes ) )
            $class_names .= ' c-nav__item--children';

        // Add wrapping class="" and required custom classes.
        // esc_attr encodes <, >, &, " and '.
        $class_names = ' class="c-nav__item '. esc_attr( $class_names ) . '"';
        $title = apply_filters( 'the_title', $item->title, $item->ID );

        $output .= "<li role=\"menuitem\" id='menu-item-$item->ID' $class_names>";

            $attributes  = 'class="c-nav__link"';
            $attributes  .= ' aria-label="'. $title .'"';

        if(!empty($item->attr_title )) {
            $attributes .= ' title="'  . esc_attr( $item->attr_title ) .'"';
        }
        if(!empty( $item->target )) {
            $attributes .= ' target="' . esc_attr( $item->target     ) .'"';
        }
        if(!empty( $item->xfn )) {
            $attributes .= ' rel="'    . esc_attr( $item->xfn        ) .'"';
        }
        if(!empty( $item->url )) {
            $attributes .= ' href="'   . esc_attr( $item->url        ) .'"';
        }

        $item_output = $args->before
            . "<a $attributes>"
            . $args->link_before
            . $title
            . '</a> '
            . $args->link_after
            . $args->after;

        // Since $output is called by reference we don't need to return anything.
        $output .= apply_filters(
            'walker_nav_menu_start_el',
            $item_output,
            $item,
            $depth,
            $args
        );
    }
}
