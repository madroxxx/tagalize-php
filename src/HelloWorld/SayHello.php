<?php 
namespace HelloWorld;
class SayHello
{
    public static function world()
    {
	    return 'Hello World, Composer!';
    }
    public function getTagalized($string = "Kamusta")
    {
	return $string . '-EY';
    }
}
