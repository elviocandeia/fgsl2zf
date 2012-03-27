<?php
/**
 * Fgsl Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * If you did not receive a copy of the license, you can get it at www.fgsl.eti.br.
 *
 * @category   Fgsl
 * @package    Fgsl_Exception
 * @subpackage Fgsl_Exception
 * @copyright  Copyright (c) 2012 Flávio Gomes da Silva Lisboa (http://www.fgsl.eti.br)
 * @license   New BSD License
 * @version    1.0.0
 */

/**
 * Fgsl_Exception
 */
class Fgsl_Exception extends Exception
{
	const TRANSACTION_ABORTED_CODE = 1;
	const TRANSACTION_ABORTED_MESSAGE = 'Transaction aborted';
	const MISSING_OPTIONS_FOR_OBJECT_CODE = 2;
	const MISSING_OPTIONS_FOR_OBJECT_MESSAGE = 'Missing options for object';
}