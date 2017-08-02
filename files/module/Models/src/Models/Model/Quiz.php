<?php
namespace Models\Model;
class Quiz
{
	// Add the following method:
	public function getArrayCopy()
	{
		return get_object_vars($this);
	}

}