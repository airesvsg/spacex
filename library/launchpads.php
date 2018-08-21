<?php

namespace SpaceX;

class Launchpads extends Base {
	public function all() {
		return self::get('launchpads');
	}

	public function detail($id) {
		return self::get('launchpads/' . $id);
	}
}
