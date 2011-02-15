<?php

/**
 * File: Array.php
 * 
 * @author Nicolas Dubois <ndubois@amg-dev.fr>
 * @version SVN: $Id$
 * @copyright © 2011 GPdis - AMG Développement
 */

require_once(dirname(dirname(__FILE__)) . '/Set.php');

class Set_Array extends Set
{
	private $_container;

	public function __construct()
	{
		$this->_container = array();
	}
	
	public function add($element)
	{
		if(!array_key_exists($element, $this->_container)) {
			$this->_container[$element] = '*Whatever*';
		}

		return $this;
	}

	public function remove($element)
	{
		if(!array_key_exists($element, $this->_container)) {
			require_once('Exception.php');
			
			throw new Set_Exception(sprintf('Can\'t find element %d in set.', $element));
		}
		
		unset($this->_container[$element]);
		
		return $this;
	}
	
	public function getSize()
	{
		return count($this->_container);
	}
	
}
