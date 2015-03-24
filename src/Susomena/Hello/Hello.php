<?php
/**
 * 
 * Author: Jesús Mena
 * Email: suso.mena@gmail.com
 * Date: 27/02/15
 * 
 */

namespace Susomena\Hello;


class Hello {
	
	/**
	 * @return string
	 */
	public function world()
	{
		return "Hello, world!";
	}

	/**
	 * @return string
	 */
	public function __call($method)
	{
		return "Hello, {$method}";	
	}
}