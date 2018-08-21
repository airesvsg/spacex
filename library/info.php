<?php

namespace SpaceX;

class Info extends Base {
	public function company() {
		return self::get('info');
	}
	
	public function roadster() {
		return self::get('info/roadster');
	}

	public function history($params=array()) {
		return self::get('info/history', $params);
	}
}