<?php

namespace SpaceX;

class Base {
	protected static $base_url = 'https://api.spacexdata.com';
	protected static $version  = 'v2';

	public static function get($endpoint, $params=array()) {
		$url = self::$base_url . '/' . self::$version . '/' . $endpoint;
		
		if(!empty($params)) {
			if(is_string($params)) {
				$url .= '/' . $params;
			} else {
				$url .= '?' . http_build_query($params);
			}
		}

		$result = \Requests::get($url, array('Accept' => 'application/json'));

		if(200 === $result->status_code) {
			return json_decode($result->body);
		}

		return false;
	}
}