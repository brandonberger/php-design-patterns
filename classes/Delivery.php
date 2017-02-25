<?php
class Delivery
{
	private $pickup;
	private $dropoff;

	public function __construct($pickup, $dropoff)
	{
		$this->pickup = $pickup;
		$this->dropoff = $dropoff;
	}

	public function getRoute()
	{
		$route = 'Pickup: ' . $this->pickup;
		$route .= '<br>';
		$route .= 'Dropoff: ' . $this->dropoff;
		return $route;
	}

	public function selectDriver()
	{
		return Drivers::assignment();
	}
}