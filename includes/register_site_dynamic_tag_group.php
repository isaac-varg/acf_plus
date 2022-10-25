<?php

function register_site_dynamic_tag_group( $dynamic_tags_manager ) {

	$dynamic_tags_manager->register_group(
		'iiv',
		[
			'title' => esc_html__( 'IsaacisVargas', 'iiv_acf_plus' )
		]
	);

}
