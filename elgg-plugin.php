<?php

return [
	'plugin' => [
		'name' => 'Age Restriction',
		'version' => '4.0.0',
	],
	'view_extensions' => [
		'register/extend' => [
			'agerestriction/register' => [
				'priority' => 1000,
			],
		],
	],
	'hooks' => [
		'action:validate' => [
			'register' => [
				'Agerestriction\Hooks::agerestriction_register_hook' => [],
			],
		],
	],
];
