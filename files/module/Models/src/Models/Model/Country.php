<?php
namespace Models\Model;
class Country
{
	// Add the following method:
	public function getArrayCopy()
	{
		return get_object_vars($this);
	}

}