<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2013, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */

use lithium\core\Libraries;
use lithium\analysis\Logger;

$logsPath = Libraries::get(true, 'resources') . '/tmp/logs';

Logger::config(array(
	'default' => array(
		'adapter' => 'File',
		'path' => $logsPath,
	),
));

?>