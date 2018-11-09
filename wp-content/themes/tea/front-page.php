<?php get_header(); 

	$templates = [
		'intro',
		'best',
		'exclusive',
		'about',
		'contacts',
	];
	foreach ($templates as $template) {
		get_template_part('includes/template-parts/' . $template);
	}

        
get_footer();