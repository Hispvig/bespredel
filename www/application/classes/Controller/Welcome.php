<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Template {
 
    public function action_index()
    {
        $content = View::factory('welcome')
              ->bind('age', $age);
        $age = 'больше 18';
        $content->name = 'Васька';
        $this->template->content = $content;
    }
 
}