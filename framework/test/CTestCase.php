<?php
/**
 * This file contains the CTestCase class.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @link http://www.yiiframework.com/
 * @copyright Copyright &copy; 2008-2011 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

@require_once('PHPUnit/Runner/Version.php');
// check version of phpunit
if(@PHPUnit_Runner_Version::id() == '3.4'){
	require_once('PHPUnit/Framework.php');
} else {
	// this is what it normally is
	require_once('PHPUnit/Autoload.php');
}


/**
 * CTestCase is the base class for all test case classes.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @version $Id$
 * @package system.test
 * @since 1.1
 */
abstract class CTestCase extends PHPUnit_Framework_TestCase
{
}
