<?php
### Factory Design Pattern
class AutomobileFactory
{
	public static $location = '233 Factory Rd';

	public static function create($make, $model)
	{
		return new Automobile($make, $model);
	}
}