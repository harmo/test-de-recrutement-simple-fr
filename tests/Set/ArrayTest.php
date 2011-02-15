<?php

/**
 * File: ArraySetTest.php
 *
 * @author Nicolas Dubois <ndubois@amg-dev.fr>
 * @version SVN: $Id$
 * @copyright © 2011 GPdis - AMG Développement
 */

define('_SRC_ROOT', dirname(dirname(dirname(__FILE__))) . '/src');

require_once(_SRC_ROOT . '/Set.php');
require_once(_SRC_ROOT . '/Set/Array.php');
require_once(_SRC_ROOT . '/Set/Exception.php');

class Set_ArrayTest extends PHPUnit_Framework_TestCase
{
	private $_instance = null;

	public function setUp()
	{
		$this->_instance = new Set_Array();
	}

	public function testInstance()
	{
		$this->assertTrue($this->_instance instanceof Set_Array);
		$this->assertTrue($this->_instance instanceof Set);
	}

	public function testEmpty()
	{
		$this->assertTrue($this->_instance->isEmpty());
	}
	
	public function testAdd()
	{
		$this->_instance->add(2);
		$this->assertFalse($this->_instance->isEmpty());
		$this->assertEquals(1, $this->_instance->getSize());

		$this->_instance->add(3);
		$this->assertFalse($this->_instance->isEmpty());
		$this->assertEquals(2, $this->_instance->getSize());

		$this->_instance->add(3);
		$this->assertFalse($this->_instance->isEmpty());
		$this->assertEquals(2, $this->_instance->getSize());
	}

	public function testRemove()
	{
		// Add 2, then 3:
		$this->_instance->add(2)->add(3);
		$this->assertFalse($this->_instance->isEmpty());
		$this->assertEquals(2, $this->_instance->getSize());
		
		// Remove 3, so far, everything's fine:
		$this->_instance->remove(3);
		$this->assertFalse($this->_instance->isEmpty());
		$this->assertEquals(1, $this->_instance->getSize());
		
		try {
			// Removing 100 (not in the set), should throw an exception:
			$this->_instance->remove(100);
			$this->assertFalse(true);
		} catch(Set_Exception $exception) {
			$this->assertTrue(true);
		}
	}


}
