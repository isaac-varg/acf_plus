<?php

add_shortcode(
    'iiv_acf_post_object',
    'iiv_acf_post_object_shortcode'
);


function iiv_acf_post_object_shortcode( $atts = [], $content = null, $tag = ''  ) {

    $attributes = shortcode_atts(
        array(
            'field' => '',
            'return' => 'title'
        ), $atts, $tag
    );

    //maybe add a thing to work with multiple posts not just one

    $posts = get_field( $attributes['field']);
    $output = '';

    if ( $posts ) {

        switch( $attributes['return']) {
            case 'title':
                $output .= esc_html( $posts->post_title);
                break;
            default:
                // do nothing
                break;
        }

    }
    return $output;
    
}