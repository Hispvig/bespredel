<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
		$data = array(
					  'name' => 'Васька', 
					  'age' => 25
		);
		$this->response->body(View::factory('welcome', $data));	
	}
		
	public function action_test()
	{
		$this->response->body('test!');
	}
} // End Welcome
