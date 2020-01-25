<?php

require_once 'functions.php';

echo view('template', [
	'sites' => [
		'chrusa' => [
			'title' => 'Consolidated Human Resources',
			'href' => 'https://chrusa.com',
			'description' => 'Custom Bootstrap theme',
		],
		
		'justplaneadventures' => [
			'title' => 'Just Plane Adventures',
			'href' => 'https://justplaneadventures.com',
			'description' => 'Custom theme w/ PayPal eCommerce cabin rental functionality',
		],
		
		'backpackuniversity' => [
			'title' => 'Backpack University',
			'href' => 'https://backpackuniversity.com/',
			'description' => 'Custom bootstrap theme',
		],
	],
]);

?>