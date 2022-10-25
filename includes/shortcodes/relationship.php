<?php

add_shortcode(
    'iiv_acf_relationship',
    'iiv_acf_relationship_shortcode'
);

function iiv_acf_relationship_shortcode( $atts = [], $content = null, $tag = ''  ) {

    $iiv_attributes = shortcode_atts(
        array(
            'field' => '',
            'display' => ''
        ), $atts, $tag
    );
    
    $output = '';

    $posts = get_field( $iiv_attributes['field'] );

    switch ( $iiv_attributes['display'] ) {
        case 'list': 
            $output .= '<ul>';
            foreach ( $posts as $post ) {

                $title = get_the_title( $post->ID );
                $url = get_permalink( $post->ID );
        
                
                $output .= '<li><a href="' . $url . '">' . esc_html( $title ) . '</a></li>';
            }
            $output .= '</ul>';
            break;
        default:
            foreach ( $posts as $post ) {

                $title = get_the_title( $post->ID );
                $url = get_permalink( $post->ID );
        
            
                $output .= '<a href="' . $url . '">' . esc_html( $title ) . '</a>';
            }
            break;
            
    }

    return wp_kses_post( $output );

};