<?php

/* ==========================================
   Remove <p>, <br> from Shortcodes
========================================== */

/**
 * Remove empty paragraphs created by wpautop()
 */
function remove_empty_p( $content ) {
    $content = force_balance_tags( $content );
    $content = preg_replace( '#<p>\s*+(<br\s*/*>)?\s*</p>#i', '', $content );
    $content = preg_replace( '~\s?<p>(\s|&nbsp;)+</p>\s?~', '', $content );
    return $content;
}

/**
 * Filters the content to remove any extra paragraph or break tags
 * caused by shortcodes.
 */
function remove_extra_empty_p( $content ) {

    $array = array(
        '<p>['    => '[',
        ']</p>'   => ']',
        ']<br />' => ']'
    );
    return strtr( $content, $array );

}

add_filter('the_content', 'remove_extra_empty_p' );
add_filter('the_content', 'remove_empty_p');


//Remove WPAUTOP from ACF TinyMCE Editor
function acf_wysiwyg_remove_wpautop() {

    add_filter('acf_the_content', 'remove_extra_empty_p' );
    add_filter('acf_the_content', 'remove_empty_p');

}

add_action('acf/init', 'acf_wysiwyg_remove_wpautop');

/* ==========================================
   Define Shortcodes Button
========================================== */

function register_button( $buttons ) {
   array_push( $buttons, "|", "shortcodes" );
   return $buttons;
}

function add_plugin( $plugin_array ) {
   $plugin_array['shortcodes'] = get_template_directory_uri() . '/shortcode.js';
   return $plugin_array;
}

function shortcodes_button() {

   if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') ) {
      return;
   }

   if ( get_user_option('rich_editing') == 'true' ) {
      add_filter( 'mce_external_plugins', 'add_plugin' );
      add_filter( 'mce_buttons', 'register_button' );
   }

}

add_action('init', 'shortcodes_button');

/* ==========================================
   Add Shortcodes
========================================== */

// Spacer
function spacer_shortcode($atts) {

	$atts = shortcode_atts(
        array(
            'color' => 'black'
        ), $atts
    );

	return '<hr class="u-block-hr--' . $atts[ 'color' ] . '">';
}

add_shortcode('spacer', 'spacer_shortcode');

// Button
function button_shortcode($atts) {

	extract(
        shortcode_atts(array(
            'color' => 'black',
            'href'  => 'http://example.com',
            'text'  => 'Button Text',
            'target' => '',
            'title' => 'Button Title'
        ), $atts )
    );

	if ( $target == "true" ) {
        return '<a class="c-btn c-btn--' . $atts[ 'color' ] . '" target="blank" href="' . $atts[ 'href' ] . '" title="' . $atts[ 'title' ] . '"> ' . $atts[ 'text' ] . ' </a>';
    } else {
        return '<a class="c-btn c-btn--' . $atts[ 'color' ] . '" href="' . $atts[ 'href' ] . '" title="' . $atts[ 'title' ] . '"> ' . $atts[ 'text' ] . ' </a>';
    }
}

add_shortcode('button', 'button_shortcode');

// Lead
function lead_shortcode($atts, $content = null ) {

  $atts = shortcode_atts(
        array(
            'align' => 'left',
        ), $atts
    );

  return '<p class="c-lead u-text--' . $atts[ 'align' ] . '"> ' . $content . ' </p>';
}

add_shortcode('lead', 'lead_shortcode');

// Lead Dropcap
function lead_dropcap_shortcode($atts, $content = null ) {

  $atts = shortcode_atts(
        array(
            'align' => 'left',
        ), $atts
    );

  return '<p class="c-lead--dropcap u-text--' . $atts[ 'align' ] . '"> ' . $content . ' </p>';
}

add_shortcode('lead-dropcap', 'lead_dropcap_shortcode');

// Row
function row_shortcode($atts, $content = null ) {

    $atts = shortcode_atts(
        array(
            'align' => 'center',
            'breakpoint' => 'sm'
        ), $atts
    );

    return '<div class="o-row align-items-' . $atts[ 'align' ] . '-' . $atts[ 'breakpoint' ] . '"> ' . do_shortcode($content) . ' </div>';
}

add_shortcode('row', 'row_shortcode');

// Columns
function columns_shortcode($atts, $content = null) {

    $atts = shortcode_atts(
        array(
            'column' => '6',
            'breakpoint' => 'sm'
        ), $atts
    );

    return '<div class="o-col--' . $atts[ 'breakpoint' ] . '-' . $atts[ 'column' ] . '"> ' . do_shortcode($content) . ' </div>';
}

add_shortcode('columns', 'columns_shortcode');
