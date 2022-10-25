<?php

add_shortcode(
    'iiv_acf_taxonomy',
    'iiv_acf_taxonomy_shortcode'
);

function iiv_acf_taxonomy_shortcode( $atts = [], $content = null, $tag = '' ) {

    $iiv_attributes = shortcode_atts(
        array(
            'field' => '',
            'display' => 'inline'
        ), $atts, $tag
    );

    $output = '';

    $terms = get_field( $iiv_attributes['field']);

    if ( !empty( $terms )) {

        if ( $iiv_attributes['display'] == 'inline') {
            $output .= '<ul class="iiv-taxonomy">';
        } else {
            $output .= '<ul>';
        }
        

        // index of run for comma purposes
        $x = 1;

        foreach ( $terms as $term ) {

            $output .= '<li>';

            $output .= '<a href="' . esc_url( get_term_link( $term) ) . '">' . esc_html( $term->name ) . '</a>';

            if ($iiv_attributes['display'] == 'inline' and $x != count($terms) ) {
                $output .= ', ';
            }
            $output .= '</li>';
            $x++;

        }

        $output .= '</ul>';

    }
    return wp_kses_post( $output );
};
