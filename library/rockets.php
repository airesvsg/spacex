<?php

namespace SpaceX;

class Rockets extends Base {
	protected static $rockets = array('falcon1', 'falcon9', 'falconheavy', 'bfr');

	public function __call($name, $args) {
		if (in_array($name, self::$rockets)) {
			return self::get('rockets/' . $name);
		}
	}

	public function all() {
		return self::get('rockets');
	}
}