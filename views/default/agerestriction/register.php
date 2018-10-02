<?php

echo elgg_view_field([
	'#type' => 'checkbox',
	'#label' => elgg_echo('agerestriction:confirmation'),
	'name' => 'agevalid',
	'value' => 1,
	'required' => true,
]);
