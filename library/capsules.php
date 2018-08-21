<?php

namespace SpaceX;

class Capsules extends Base {
	protected static $capsules = array('dragon1', 'dragon2', 'crewdragon');

	public function __call($name, $args) {
		if (in_array($name, self::$capsules)) {
			return self::get('capsules/' . $name);
		}
	}

	public function all() {
		return self::get('capsules');
	}
}