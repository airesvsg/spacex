<?php

namespace SpaceX;

class Parts extends Base {
	public function caps($params=array()) {
		return self::get('parts/caps', $params);
	}

	public function cores($params=array()) {
		return self::get('parts/cores', $params);
	}
}
