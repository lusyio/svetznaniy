<?php

Redux::setSection( Lezada_Redux::$opt_name, array(
	'title'      => esc_html__( 'Custom JS', 'lezada' ),
	'id'         => 'section_custom_js',
	'subsection' => true,
	'fields'     => array(
		array(
			'id'      => 'custom_js',
			'type'    => 'ace_editor',
			'mode'    => 'javascript',
			'options' => array( 'minLines' => 20 )
		)
	)
) );
