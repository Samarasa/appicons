<?php
namespace Models\Model;
class Ipaddresses
{
	// Add the following method:
	public function getArrayCopy()
	{
		return get_object_vars($this);
	}

}