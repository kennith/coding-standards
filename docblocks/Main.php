<?php
namespace Docblocks;

use Foo;

/**
 * A summary of what this class do
 * 
 * A description about this class. It can be multiple lines to explain in detail
 * about the class.
 * 
 * @author Kennith Leung <kennith.leung@gmail.com>
 * 
 * @category Class
 * @copyright None
 * @example (new Main(new TypeHintClass))->readMe('1', '2');
 * @version 0.1
 * 
 */
class Main implements Foo
{
	const VERSION = '0.1';
	const REALCLASS = false;

	public $app = 'true';

	function __construct(TypeHintClass $class)
	{

	}

	function readMe($arg1, $arg2)
	{
		return null;
	}

	function variablesInMultipleLines(
		$arg1,
		$arg2,
		$arg3
		) {
		return true;
	}
}