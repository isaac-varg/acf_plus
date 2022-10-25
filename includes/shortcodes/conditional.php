<?php

add_shortcode(
    'iiv_acf_conditional',
    'iiv_acf_conditional_shortcode'
);


function iiv_acf_conditional_shortcode ( $atts = [], $content = null, $tag = ''  ) {

    $iiv_attributes = shortcode_atts(
        array(
            'field' => '',
            'mode' => 'show' //show = display on true, hide = do not display on true
        ), $atts, $tag
    );

    $conditional = get_field( $iiv_attributes['field'] );


    $output = '';

    switch ( $iiv_attributes['mode']) {
        case 'hide': 
            if ( $conditional ) {
                // do nothing
            } else {
                $output .=  $content;
            }
            break;
        default: 
            if ( $conditional ) {
                $output .=  $content;
            }
            break;
    }
    
    return wp_kses_post( $output );
};

