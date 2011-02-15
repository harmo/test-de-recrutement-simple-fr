<?php

/**
 * File: Set.php
 * 
 * @author Nicolas Dubois <ndubois@amg-dev.fr>
 * @version SVN: $Id$
 * @copyright © 2011 GPdis - AMG Développement
 */

abstract class Set 
{
	/**
	 * Adds an element in the set
	 * @param int $element the element to add
	 * @return Set
	 */
	abstract public function add($element);
	
	/**
	 * Removes an element off the set
	 * @param int $element the element to remove
	 * @return Set
	 * @throws Set_Exception if element doesn't exist.
	 */
	abstract public function remove($element);
	
	/**
	 * Returns set's cardinality
	 * @return int 
	 */
	abstract public function getSize();
	
	/**
	 * Returns if the set is empty or not.
	 * @return true if it's empty, false otherwise
	 */
	public function isEmpty() 
	{
		return $this->getSize() === 0;
	}

}
