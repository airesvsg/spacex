<?php

namespace SpaceX;

class SpaceX {
	protected $classes = array('Capsules', 'Info', 'Launches', 'Launchpads', 'Parts', 'Rockets');

	public static function autoloader($class) {
		$class = strtolower($class);
		$class = explode('\\', $class);
		$class = end($class);
		if(file_exists(dirname(__FILE__) . '/' . $class . '.php')) {
			require_once(dirname(__FILE__) . '/' . $class . '.php');
		}
	}

	public static function register_autoloader() {
		spl_autoload_register(array(__CLASS__, 'autoloader'));
	}

	public function __get($name) {
		$name = ucfirst($name);
		if(in_array($name, $this->classes)) {
			$class = __NAMESPACE__ . '\\' . $name;
			return new $class;
		}
	}

	public function __isset($name) {
		return isset($this->classes[$name]);
	}
}
