<?php
class DeliverAutomobile 
{
	public static function route($source, $destination) 
	{
		return new Delivery($source, $destination);
	}
	
}