<?php

namespace Agerestriction;

class Hooks {

	public static function agerestriction_register_hook(\Elgg\Hook $hook) {
		elgg_make_sticky_form('register');

		$agevalid = (int) get_input('agevalid', 0);

		if (!$agevalid) {
			return elgg_error_response(elgg_echo('agerestriction:required'));
			return false;
		}

		return true;
	}
}