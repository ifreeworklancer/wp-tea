<?php
// Theme setup
function theme_setup()
{
	add_theme_support('post-thumbnails');
	add_theme_support('title-tag');
	register_nav_menus(
		[
			'main_menu' => 'Главное меню',
			'footer_menu' => 'Меню футера',
		]
	);
}
add_action('after_setup_theme', 'theme_setup');
// Cleanup header
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
add_filter('the_generator', '__return_empty_string');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_resource_hints', 2);
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rest_output_link_wp_head');
show_admin_bar(false);
// Enqueue scripts
function theme_scripts()
{
	wp_deregister_script('wp-embed');
	wp_deregister_script('jquery');
    wp_deregister_script('jquery-migrate');
    
	wp_enqueue_script('app', get_theme_file_uri('dist/app.js'), null, '', true);
}
add_action('wp_enqueue_scripts', 'theme_scripts');
// Enqueue styles
function theme_styles()
{
	wp_enqueue_style('theme-app', get_theme_file_uri('dist/app.css'), null, null);
}
add_action('wp_enqueue_scripts', 'theme_styles');

// Debug
function dd($value)
{
	echo "<pre>";
	var_dump($value);
	echo "</pre>";
	die();
}

if (!function_exists('phone_filter')) {
	function phone_filter($phone) {
		return str_replace([' ', '(', ')', '-'], '', $phone);
	}
}

function theme_customize_register($wp_customize)
{
	$wp_customize->add_section('contacts', [
		'title' => 'Контактная информация',
		'priority' => 30,
	]);
	$wp_customize->add_setting('facebook');
	$wp_customize->add_control('facebook', [
		'section' => 'contacts',
		'label' => 'Facebook',
		'type' => 'text',
	]);
	$wp_customize->add_setting('instagram');
	$wp_customize->add_control('instagram', [
		'section' => 'contacts',
		'label' => 'Instagram',
		'type' => 'text',
	]);
	$wp_customize->add_setting('email');
	$wp_customize->add_control('email', [
		'section' => 'contacts',
		'label' => 'E-mail',
		'type' => 'text',
	]);
	$wp_customize->add_setting('phone');
	$wp_customize->add_control('phone', [
		'section' => 'contacts',
		'label' => 'Телефоны',
		'type' => 'text',
	]);
	$wp_customize->add_setting('address', [
		'default' => "",
	]);
	$wp_customize->add_control('address', [
		'section' => 'contacts',
		'label' => 'Адрес',
		'type' => 'textarea',
	]);
}
add_action('customize_register', 'theme_customize_register');