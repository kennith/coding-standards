<?php 

namespace lib;

class my {
	function __construct()
	{
		var_dump('test lib my');

	}

	public function getName()
	{
		var_dump("lib my getname()");
		return 'app\my';
	}
}