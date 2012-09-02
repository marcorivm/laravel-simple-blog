<?php

class Base_Controller extends Controller {

	protected $view_opts = array();
    
	
	public function __construct() 
	{
		parent::__construct();
	}
	/**
	 * Catch-all method for requests that can't be matched.
	 *
	 * @param  string    $method
	 * @param  array     $parameters
	 * @return Response
	 */
	public function __call($method, $parameters)
	{
		return Response::error('404');
	}

}