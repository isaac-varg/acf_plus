<?php

function register_new_dynamic_tags( $dynamic_tags_manager ) {


	require_once( IIV_ACF_PLUS_PLUGIN_DIR . 'includes/dynamic-tags/post-object.php' );
	
	$dynamic_tags_manager->register( new \Dynamic_Tag_Post_Object() );


}