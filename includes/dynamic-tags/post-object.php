<?php

class Dynamic_Tag_Post_Object extends \Elementor\Core\DynamicTags\Tag {

	public function get_name() {
        return 'acf_post_object';
    }

	public function get_title() {
        return esc_html__( 'ACF Post Object', 'iiv_acf_plus' );
    }

	public function get_group() {
        return [ 'iiv' ];
    }

	public function get_categories() {
        return [ \Elementor\Modules\DynamicTags\Module::TEXT_CATEGORY ];
    }

	protected function register_controls() {
        $this->add_control(
            'field',
            [
                'type' => \Elementor\Controls_Manager::TEXT,
                'label' => esc_html__( 'Post Object Field', 'iiv_acf_plus' ),
                'placeholder' => esc_html__( 'Enter the ACF Field', 'iiv_acf_plus' )
            ]
            );

    }

	public function render() {

        $field = $this->get_settings( 'field' );

        $post_object = get_field($field);

        $output = '';

        if ( $post_object ) {
            // $title = get_the_title( $post_object->ID );

            $output .= esc_html( $post_object->post_title);
        }

        echo $output;
    }

}