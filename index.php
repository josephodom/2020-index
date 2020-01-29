<?php

require_once 'functions.php';

$sites = [
	'chrusa' => [
		'title' => 'Consolidated Human Resources',
		'href' => 'https://chrusa.com',
		'description' => 'Custom WP &amp; Bootstrap theme',
	],
	
	'justplaneadventures' => [
		'title' => 'Just Plane Adventures',
		'href' => 'https://justplaneadventures.com',
		'description' => 'Custom WP &amp; Bootstrap theme w/ PayPal eCommerce cabin rental functionality',
	],
	
	'backpackuniversity' => [
		'title' => 'Backpack University',
		'href' => 'https://backpackuniversity.com/',
		'description' => 'Custom WP &amp; Bootstrap theme',
	],
	
	'rcdevgroup' => [
		'title' => 'RC Development Group',
		'href' => 'https://rcdevgroup.com',
		'description' => 'Custom WP &amp; Bootstrap theme',
	],
	
	'a1stoneworld' => [
		'title' => 'A1 Stone World',
		'href' => 'https://a1stoneworld.com',
		'description' => 'Custom WP &amp; Bootstrap theme w/ gallery',
	],
	
	'strikefirst' => [
		'title' => 'Strike First Bait Company',
		'href' => 'https://strikefirstbaitcompany.com',
		'description' => 'Custom WP &amp; Bootstrap theme w/ WooCommerce store',
	],
];
$icons = [
	'php' => 'PHP',
	'html5' => 'HTML5',
	'css3-alt' => 'CSS3',
	'laravel' => 'Laravel',
	'bootstrap' => 'Bootstrap',
	'sass' => 'Sass',
	'js' => 'JavaScript',
	'npm' => 'NPM',
	'git' => 'Git',
	'grunt' => 'Grunt',
	'linux' => 'Linux',
	'wordpress' => 'WordPress',
	'font-awesome-flag' => 'Font Awesome',
	'slack' => 'Slack',
	'vuejs' => 'Vue.js',
];
$examples = [
	'ubiq' => [
		'title' => 'Ubiq.css',
		'href' => './ubiq/',
		'description' => 'A custom responsive CSS library',
	],
];

echo view('template', [
	'sites' => $sites,
	'icons' => $icons,
	'examples' => $examples,
]);

?>