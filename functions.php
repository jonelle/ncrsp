<?php

// CALLOUTS

// callouts
add_action( 'init', 'create_my_post_types' );

function create_my_post_types() {
	register_post_type( 'mission-statements',
		array(
			'labels' => array(
				'name' => __( 'Home Mission Statement' ),
			),
			'public' => true,
                        'supports' => array( 'title', 'editor', 'custom-fields'),
		)
	);

       register_post_type( 'bottom-callouts',
		array(
			'labels' => array(
				'name' => __( 'Home Bottom Callouts' ),
			),
			'public' => true,
                        'supports' => array( 'title', 'editor', 'custom-fields'),
		)
	);
}
?>
