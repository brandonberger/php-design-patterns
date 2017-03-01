<?php
class Main_Auto_Loader {
	public static function autoload_main($className) {
		$path = 'classes/';
		include $path.$className.'.php';
	}
}