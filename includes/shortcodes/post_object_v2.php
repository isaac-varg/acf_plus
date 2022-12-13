<?php

add_shortcode(
    'iiv_acf_post_object_v2',
    'iiv_acf_post_object_v2_shortcode'
);


function iiv_acf_post_object_v2_shortcode( $atts = [], $content = null, $tag = ''  ) {

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

        $postID = $posts->ID;

        $propName = $attributes['return'];

        $propValue = get_field($propName, $postID);

        $output .= esc_html( $propValue );

    }
    return $output;
    
}