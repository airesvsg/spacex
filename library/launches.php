<?php

namespace SpaceX;

class Launches extends Base {
	public function latest() {
		return self::get('launches/latest');
	}
	
	public function next() {
		return self::get('launches/next');
	}

	public function past($params=array()) {
		return self::get('launches', $params);
	}

	public function upcoming($params=array()) {
		return self::get('launches/upcoming', $params);
	}
	
	public function all($params=array()) {
		return self::get('launches/all', $params);
	}
}