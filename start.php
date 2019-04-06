<?php
/**
 * Age Restriction
 *
 */

elgg_register_event_handler('init', 'system', 'agerestriction_init');

function agerestriction_init() {
	//put the check at the very end
	elgg_extend_view('register/extend', 'agerestriction/register', 1000);

	//block user registration if they don't check the box
	elgg_register_plugin_hook_handler('action:validate', 'register', 'agerestriction_register_hook');
}

function agerestriction_register_hook(\Elgg\Hook $hook) {
	elgg_make_sticky_form('register');

	$agevalid = (int) get_input('agevalid', 0);

	if (!$agevalid) {
		register_error(elgg_echo('agerestriction:required'));
		return false;
	}

	return true;
}
