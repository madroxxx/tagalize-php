<?php
namespace TagalizePhp;

class Index
{
	public function __construct(){
		echo 'start'."\n\n";
	}
	public function getTagalized($string = "Kamusta")
	{
		return $string . '-EY';
	}
}
