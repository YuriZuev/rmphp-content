<?php
/**
 * Created by PhpStorm.
 * User: Zuev Yuri
 * Date: 27.09.2021
 * Time: 15:53
 */

namespace Rmphp\Content;


class ContentData {

	private array $data;

	public function __set($name, $value) {
		$this->data[$name] = $value;
	}

	public function __isset($name) {
		return isset($this->data[$name]);
	}

	public function __get($name) {
		return $this->data[$name];
	}
}