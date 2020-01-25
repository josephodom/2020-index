<?php

require_once 'functions.php';

echo view('template', [
	'sites' => [
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
	],
]);

?>